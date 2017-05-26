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
 * Html Button Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlButton extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'button';


    /**
     * Constructor
     *
     * @param       string      $type       html element attribute type e.g. button, submit, reset
     * @param       string      $name       html element attribute name
     * @param       string      $value      html element attribute value
     * @param       string      $content    html element content
     */
    public function __construct($type = null, $name = null, $value = null, $content = null)
    {
        $this->setType($type);
        $this->setName($name);
        $this->setValue($value);

        $this->setContent($content);
    }


    /**
     * @return      string                  html element attribute type e.g. button, submit, reset
     */
    public function getType()
    {
        return $this->getAttribute('type');
    }

    /**
     * @param       string      $type       html element attribute type
     * @return      HtmlButton
     */
    public function setType($type)
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
     * @return      HtmlButton
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
     * @return      HtmlButton
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
     * @param       int     $tabIndex       html element attribute tabindex
     * @return      HtmlButton
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
     * @param       bool    $disabled       html element attribute disabled
     * @return      HtmlButton
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
     * @return      string                  html element attribute onblur
     */
    public function getOnBlur()
    {
        return $this->getAttribute('onblur');
    }

    /**
     * @param       string      $event      html element attribute onblur
     * @return      HtmlButton
     */
    public function setOnBlur($event)
    {
        $this->setAttribute('onblur', $event);
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
     * @return      HtmlButton
     */
    public function setOnFocus($event)
    {
        $this->setAttribute('onfocus', $event);
        return $this;
    }
}