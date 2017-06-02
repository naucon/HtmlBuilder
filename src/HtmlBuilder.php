<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\HtmlBuilder;

/**
 * Html Builder Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlBuilder
{
    /**
     * @access      protected
     * @var         array                   elements require end tag
     */
    protected $_elementsRequireEndTag = array(
        'select',
    );

    /**
     * @access      protected
     * @var         array                   black list of attributes witch are not filtered
     */
    protected $_nonFilteredAttributes = array('onclick',
        'ondblclick',
        'onmousedown',
        'onmouseup',
        'onmouseover',
        'onmousemove',
        'onmouseout',
        'onkeypress',
        'onkeydown',
        'onkeyup'
    );

    /**
     * @access      protected
     * @param       HtmlElementInterface        $htmlElement
     * @return      string
     */
    protected function renderAttributes(HtmlElementInterface $htmlElement)
    {
        $output = '';
        if ($htmlElement->hasAttributes()) {
            $attributes = array();
            $attributeArr = $htmlElement->getAttributes();
            foreach ($attributeArr as $key => $value) {
                if (in_array($key, $this->_nonFilteredAttributes)) {
                    $attributes[] = $key . '="' . $value . '"';
                } else {
                    $value = filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
                    $attributes[] = $key . '="' . $value . '"';
                }
            }
            $output .= ' ' . implode(' ', $attributes);
        }
        return $output;
    }

    /**
     * @param       HtmlElementInterface        $htmlElement
     * @return      string                  html output
     */
    public function render(HtmlElementInterface $htmlElement)
    {
        $output = '<' . $htmlElement->getTag();
        $output.= $this->renderAttributes($htmlElement);

        if ($htmlElement->hasChildElements()) {
            $output .= '>';
            $output.= $this->renderContent($htmlElement);
            $output.= '</' . $htmlElement->getTag() . '>';
        } elseif (in_array($htmlElement->getTag(), $this->_elementsRequireEndTag)) {
            $output.= '>';
            $output .= '</' . $htmlElement->getTag() . '>';
        } else {
            $output .= ' />';
        }
        return $output;
    }

    /**
     * @param       HtmlElementInterface        $htmlElement
     * @return      string                  html output
     */
    public function renderContent(HtmlElementInterface $htmlElement)
    {
        $output = '';
        if ($htmlElement->hasChildElements()) {
            foreach ($htmlElement->getChildElementCollection() as $childElement) {
                if ($childElement instanceof HtmlElementContent) {
                    $output.= filter_var($childElement->getContent(), FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
                } else {
                    $output.= $this->render($childElement);
                }
            }
        }
        return $output;
    }

    /**
     * @param       HtmlElementInterface        $htmlElement
     * @return      string                  html output
     */
    public function renderStartTag(HtmlElementInterface $htmlElement)
    {
        $output = '<' . $htmlElement->getTag();
        $output.= $this->renderAttributes($htmlElement);
        $output .= '>';
        return $output;
    }

    /**
     * @param       HtmlElementInterface        $htmlElement
     * @return      string                  html output
     */
    public function renderEndTag(HtmlElementInterface $htmlElement)
    {
        $output = '</' . $htmlElement->getTag() . '>';
        return $output;
    }
}