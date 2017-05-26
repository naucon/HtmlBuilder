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

use Naucon\Utility\Map;
use Naucon\Utility\Collection;

/**
 * Html Element Abstract Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlElementAbstract implements HtmlElementInterface
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = null;

    /**
     * @access      protected
     * @var         Map                     html element attributes with key-value-pairs
     */
    protected $attributeMap = null;

    /**
     * @access      protected
     * @var         Collection              child element collection
     */
    protected $childElementCollection = null;

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
     * @return      string                  html element tag
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @access      protected
     * @return      Map
     */
    protected function getAttributeMap()
    {
        if (is_null($this->attributeMap)) {
            $this->attributeMap = new Map();
        }
        return $this->attributeMap;
    }

    /**
     * @return      array                   html element attributes with key-value-pairs
     */
    public function getAttributes()
    {
        return $this->getAttributeMap()->getAll();
    }

    /**
     * @return      bool                    html element has attributes
     */
    public function hasAttributes()
    {
        if ($this->getAttributeMap()->count() > 0) {
            return true;
        }
        return false;
    }

    /**
     * @param       array   $attributes     html element attributes with key-value-pairs
     * @return      HtmlElementAbstract
     */
    public function setAttributes(array $attributes)
    {
        $this->getAttributeMap()->setAll($attributes);
        return $this;
    }

    /**
     * @param       string      $key        html element attribute key
     * @return      string                  html element attribute value
     */
    public function getAttribute($key)
    {
        return $this->getAttributeMap()->get($key);
    }

    /**
     * @param       string      $key        html element attribute key
     * @return      bool                    html element has attribute for given key
     */
    public function hasAttribute($key)
    {
        return $this->getAttributeMap()->hasKey($key);
    }

    /**
     * set attribute to html element
     *
     * @param       string      $key        html element attribute key
     * @param       string      $value      html element attribute value
     * @return      HtmlElementAbstract
     */
    public function setAttribute($key, $value = null)
    {
        if (is_null($value)) {
            $this->getAttributeMap()->remove($key);
        } else {
            $this->getAttributeMap()->set($key, $value);
        }
        return $this;
    }

    /**
     * remove attribute of html element
     *
     * @param       string      $key        html element attribute key
     * @return      HtmlElementAbstract
     */
    public function removeAttribute($key)
    {
        $this->getAttributeMap()->remove($key);
        return $this;
    }

    /**
     * append attribute to html element
     *
     * @param       string      $key        html element attribute key
     * @param       string      $value      html element attribute value
     * @param       string      $seperater  html element attribute seperater
     * @return      HtmlElementAbstract
     */
    public function appendAttribute($key, $value = null, $seperater = null)
    {
        if (!is_null($value)) {
            if ($this->getAttributeMap()->hasKey($key)) {
                if (strlen($seperater) > 0) {
                    $values = array();
                    $values[] = $this->getAttributeMap()->get($key);
                    $values[] = $value;
                    $newValue = implode($seperater, $values);
                } else {
                    $newValue = $this->getAttributeMap()->get($key) . $value;
                }
            } else {
                $newValue = $value;
            }
            $this->getAttributeMap()->set($key, $newValue);
        }
        return $this;
    }


    /**
     * @return      Collection
     */
    public function getChildElementCollection()
    {
        if (is_null($this->childElementCollection)) {
            $this->childElementCollection = new Collection();
        }
        return $this->childElementCollection;
    }

    /**
     * @return      array                   html child elements
     */
    public function getChildElements()
    {
        $this->getChildElementCollection()->toArray();
    }

    /**
     * @return      bool                    true = html element has child elements
     */
    public function hasChildElements()
    {
        if ($this->getChildElementCollection()->count() > 0) {
            return true;
        }
        return false;
    }

    /**
     * @param       array       $elements   html child elements
     * @return      HtmlElementAbstract
     */
    public function setChildElements(array $elements)
    {
        $this->getChildElementCollection()->clear();
        $this->getChildElementCollection()->addAll($elements);
        return $this;
    }

    /**
     * add html element as child element
     *
     * @param       HtmlElementInterface        $element
     * @return      HtmlElementAbstract
     */
    public function addChildElement(HtmlElementInterface $element)
    {
        $this->getChildElementCollection()->add($element);
        return $this;
    }

    /**
     * set html element content, replace all child elements
     *
     * @param       string      $content        html element content
     * @return      HtmlElementAbstract
     */
    public function setContent($content)
    {
        if (!is_null($content)) {
            if ($content instanceof HtmlElementInterface) {
                $htmlElementObject = $content;
            } else {
                $htmlElementObject = new HtmlElementContent($content);
            }
            $this->getChildElementCollection()->clear();
            $this->getChildElementCollection()->add($htmlElementObject);
        }
        return $this;
    }

    /**
     * add html element content
     *
     * @param       string      $content        html element content
     * @return      HtmlElementAbstract
     */
    public function addContent($content = null)
    {
        if (!is_null($content)) {
            $htmlElementObject = new HtmlElementContent($content);
            $this->getChildElementCollection()->add($htmlElementObject);
        }
        return $this;
    }

    /**
     * @return      string                  html output
     */
    public function __toString()
    {
        $htmlBuilder = new HtmlBuilder();
        return $htmlBuilder->render($this);
    }
}