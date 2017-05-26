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
class HtmlSelect extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'select';


    /**
     * Constructor
     *
     * @param       string      $name       select attribute name
     * @param       bool        $multiple   select attribute multiple
     */
    public function __construct($name, $multiple = false)
    {
        $this->setName($name);
        $this->setMultiple($multiple);
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
     * @return      HtmlSelect
     */
    public function setName($name)
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return      bool                    html element attribute multiple
     */
    public function getMultiple()
    {
        if ($this->getAttribute('multiple') == 'multiple') {
            return true;
        }
        return false;
    }

    /**
     * @param       bool        $multiple   html element attribute multiple
     * @return      HtmlSelect
     */
    public function setMultiple($multiple)
    {
        if ($multiple) {
            $this->setAttribute('multiple', 'multiple');
        } else {
            $this->setAttribute('multiple', null);
        }
        return $this;
    }

    /**
     * @return      bool                    html element attribute autocomplete
     */
    public function getAutoComplete()
    {
        switch ($this->getAttribute('autocomplete')) {
            case null:
            case 'on':
                return true;
            default:
            case 'off':
                return false;
        }
    }

    /**
     * @param       bool    $autocomplete   html element attribute autocomplete
     * @return      HtmlSelect
     */
    public function setAutoComplete($autocomplete = true)
    {
        if (is_null($autocomplete)) {
            $this->setAttribute('autocomplete', null);
        } elseif ($autocomplete) {
            $this->setAttribute('autocomplete', 'on');
        } else {
            $this->setAttribute('autocomplete', 'off');
        }
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
     * @return      HtmlSelect
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
     * @return      HtmlSelect
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
     * @return      HtmlSelect
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
     * @return      HtmlSelect
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
     * @return      HtmlSelect
     */
    public function setOnFocus($event)
    {
        $this->setAttribute('onfocus', $event);
        return $this;
    }

    /**
     * add select option
     *
     * @param       string      $content    select option content
     * @param       string      $value      select option attribute value
     * @param       bool        $selected   select option attribute selected
     * @return      HtmlSelect
     */
    public function addOption($content, $value = null, $selected = false)
    {
        $this->addChildElement(new HtmlSelectOption($content, $value, $selected));
        return $this;
    }
}