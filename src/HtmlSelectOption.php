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
 * Html Select Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlSelectOption extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'option';


    /**
     * Constructor
     *
     * @param       string      $content    select option content
     * @param       string      $value      select option attribute value
     * @param       bool        $selected   select option attribute selected
     */
    public function __construct($content, $value = null, $selected = false)
    {
        $this->setContent($content);
        $this->setValue($value);
        $this->setSelected($selected);
    }


    /**
     * @return      string                  html element attribute value
     */
    public function getValue()
    {
        return $this->getAttribute('value');
    }

    /**
     * @param       string      $value      html element attribute value
     * @return      HtmlSelectOption
     */
    public function setValue($value)
    {
        $this->setAttribute('value', $value);
        return $this;
    }

    /**
     * @return      bool                    html element attribute selected
     */
    public function isSelected()
    {
        if ($this->getAttribute('selected') == 'selected') {
            return true;
        }
        return false;
    }

    /**
     * @param       bool        $selected   html element attribute selected
     * @return      HtmlSelectOption
     */
    public function setSelected($selected)
    {
        if ($selected) {
            $this->setAttribute('selected', 'selected');
        } else {
            $this->setAttribute('selected', null);
        }
        return $this;
    }


    /**
     * @return      bool                    html element attribute disabled
     */
    public function getDisabled()
    {
        if ($this->getAttribute('disabled') == 'disabled') {
            return true;
        }
        return false;
    }

    /**
     * @param       bool        $disabled   html element attribute disabled
     * @return      HtmlSelectOption
     */
    public function setDisabled($disabled)
    {
        if ($disabled) {
            $this->setAttribute('disabled', 'disabled');
        } else {
            $this->setAttribute('disabled', null);
        }
        return $this;
    }
}