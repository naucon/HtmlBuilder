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
 * Html Input Text Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlInputText extends HtmlInputAbstract
{
    /**
     * Constructor
     *
     * @param       string      $name       input name
     * @param       string      $value      input value
     */
    public function __construct($name, $value)
    {
        $this->setType('text');

        $this->setName($name);
        $this->setValue($value);
    }


    /**
     * @return      int                     html element attribute size
     */
    public function getSize()
    {
        return $this->getAttribute('size');
    }

    /**
     * @param       int         $size       html element attribute size
     * @return      HtmlInputText
     */
    public function setSize($size)
    {
        $this->setAttribute('size', $size);
        return $this;
    }

    /**
     * @return      int                     html element attribute maxlength
     */
    public function getMaxLength()
    {
        return $this->getAttribute('maxlength');
    }

    /**
     * @param       int         $length     html element attribute maxlength
     * @return      HtmlInputText
     */
    public function setMaxLength($length)
    {
        $this->setAttribute('maxlength', $length);
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
     * @return      HtmlInputText
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