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
 * Html Input Radio Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlInputRadio extends HtmlInputAbstract
{
    /**
     * Constructor
     *
     * @param       string      $name       input name
     * @param       string      $value      input value
     * @param       bool        $checked    input checked
     */
    public function __construct($name, $value, $checked = false)
    {
        $this->setType('radio');

        $this->setName($name);
        $this->setValue($value);
        $this->setChecked($checked);
    }


    /**
     * @return      bool                    html element attribute checked
     */
    public function isChecked()
    {
        if ($this->getAttribute('checked') == 'checked') {
            return true;
        }
        return false;
    }

    /**
     * @param       bool    $checked        html element attribute checked
     * @return      HtmlInputRadio
     */
    public function setChecked($checked)
    {
        if ($checked) {
            $this->setAttribute('checked', 'checked');
        } else {
            $this->setAttribute('checked', null);
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
     * @return      HtmlInputRadio
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
}