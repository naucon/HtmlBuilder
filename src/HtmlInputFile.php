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
 * Html Input File Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlInputFile extends HtmlInputAbstract
{
    /**
     * Constructor
     *
     * @param       string      $name       input name
     * @param       string      $value      input value
     * @param       string      $accept     input accept
     */
    public function __construct($name, $value, $accept = null)
    {
        $this->setType('file');

        $this->setName($name);
        $this->setValue($value);
        $this->setAccept($accept);
    }


    /**
     * @return      string                  html element attribute accept (mime-type eg. "text/*")
     */
    public function getAccept()
    {
        return $this->getAttribute('accept');
    }

    /**
     * @param       string      $accept     html element attribute accept (mime-type eg. "text/*")
     * @return      HtmlInputFile
     */
    public function setAccept($accept)
    {
        $this->setAttribute('accept', $accept);
        return $this;
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
     * @return      HtmlInputFile
     */
    public function setSize($size)
    {
        $this->setAttribute('size', $size);
        return $this;
    }

    /**
     * @return      int                     html element attribute maxlength (max file size in bytes)
     */
    public function getMaxLength()
    {
        return $this->getAttribute('maxlength');
    }

    /**
     * @param       int         $length     html element attribute maxlength (max file size in bytes)
     * @return      HtmlInputFile
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
     * @return      HtmlInputFile
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