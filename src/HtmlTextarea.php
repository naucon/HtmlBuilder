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
 * Html Textarea Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlTextarea extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'textarea';


    /**
     * Constructor
     *
     * @param       string      $name       textarea attribute name
     * @param       string      $content    textarea content
     */
    public function __construct($name, $content)
    {
        $this->setName($name);
        $this->setContent($content);
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
     * @return      HtmlTextarea
     */
    public function setName($name)
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return      int                     html element attribute cols
     */
    public function getCols()
    {
        return $this->getAttribute('cols');
    }

    /**
     * @param       int         $cols       html element attribute cols
     * @return      HtmlTextarea
     */
    public function setCols($cols)
    {
        $this->setAttribute('cols', $cols);
        return $this;
    }

    /**
     * @return      int                     html element attribute rows
     */
    public function getRows()
    {
        return $this->getAttribute('rows');
    }

    /**
     * @param       int         $rows       html element attribute rows
     * @return      HtmlTextarea
     */
    public function setRows($rows)
    {
        $this->setAttribute('rows', $rows);
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
     * @param       bool    $autocomplete       html element attribute autocomplete
     * @return      HtmlTextarea
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
     * @param       int         $tabIndex   html element attribute tabindex
     * @return      HtmlTextarea
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
     * @return      HtmlTextarea
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
     * @return      int                     html element attribute readonly
     */
    public function getReadonly()
    {
        if ($this->getAttribute('readonly') == 'readonly') {
            return true;
        }
        return false;
    }

    /**
     * @param       int         $readonly   html element attribute readonly
     * @return      HtmlTextarea
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
     * @return      HtmlTextarea
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
     * @return      HtmlTextarea
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
     * @return      HtmlTextarea
     */
    public function setOnFocus($event)
    {
        $this->setAttribute('onfocus', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onselect
     */
    public function getOnSelect()
    {
        return $this->getAttribute('onselect');
    }

    /**
     * @param       string      $event      html element attribute onselect
     * @return      HtmlTextarea
     */
    public function setOnSelect($event)
    {
        $this->setAttribute('onselect', $event);
        return $this;
    }
}