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
 * Abstract Html Input Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlInputAbstract extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'input';


    /**
     * @return      string                  html element attribute type e.g. text, password, checkbox, radio, submit, reset, file, hidden, image, button
     */
    public function getType()
    {
        return $this->getAttribute('type');
    }

    /**
     * @access      protected
     * @param       string      $type       html element attribute type
     * @return      HtmlInputAbstract
     */
    protected function setType($type)
    {
        $this->setAttribute('type', $type);
        return $this;
    }

    /**
     * @return      string                  html element attribute name
     */
    public function getName()
    {
        return $this->getAttribute('name');
    }

    /**
     * @param       string      $name       html element attribute name
     * @return      HtmlInputAbstract
     */
    public function setName($name)
    {
        $this->setAttribute('name', $name);
        return $this;
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
     * @return      HtmlInputAbstract
     */
    public function setValue($value)
    {
        $this->setAttribute('value', $value);
        return $this;
    }

    /**
     * @return      int                     html element attribute tabindex
     */
    public function getTabIndex()
    {
        return $this->getAttribute('tabindex');
    }

    /**
     * @param       int         $tabIndex   html element attribute tabindex
     * @return      HtmlInputAbstract
     */
    public function setTabIndex($tabIndex)
    {
        $this->setAttribute('tabindex', $tabIndex);
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
     * @return      HtmlInputAbstract
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

    /**
     * @return      bool                    html element attribute readonly
     */
    public function getReadonly()
    {
        if ($this->getAttribute('readonly') == 'readonly') {
            return true;
        }
        return false;
    }

    /**
     * @param       bool        $readonly   html element attribute readonly
     * @return      HtmlInputAbstract
     */
    public function setReadonly($readonly)
    {
        if ($readonly) {
            $this->setAttribute('readonly', 'readonly');
        } else {
            $this->setAttribute('readonly', null);
        }
        return $this;
    }

    /**
     * @return      string                  html element attribute onblur
     */
    public function getOnBlur()
    {
        return $this->getAttribute('onblur');
    }

    /**
     * @param       string      $event      html element attribute onblur
     * @return      HtmlInputAbstract
     */
    public function setOnBlur($event)
    {
        $this->setAttribute('onblur', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onchange
     */
    public function getOnChange()
    {
        return $this->getAttribute('onchange');
    }

    /**
     * @param       string      $event      html element attribute onchange
     * @return      HtmlInputAbstract
     */
    public function setOnChange($event)
    {
        $this->setAttribute('onchange', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onfocus
     */
    public function getOnFocus()
    {
        return $this->getAttribute('onfocus');
    }

    /**
     * @param       string      $event      html element attribute onfocus
     * @return      HtmlInputAbstract
     */
    public function setOnFocus($event)
    {
        $this->setAttribute('onfocus', $event);
        return $this;
    }
}