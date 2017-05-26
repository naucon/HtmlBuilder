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
 * Html Form Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlForm extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'form';


    /**
     * Constructor
     *
     * @param       string      $method     html element attribute method
     * @param       string      $action     html element attribute action
     * @param       string      $enctype    html element attribute enctype e.g. "multipart/form-data"
     */
    public function __construct($method = 'post', $action = null, $enctype = null)
    {
        $this->setMethod($method);
        $this->setAction($action);
        $this->setEnctype($enctype);
    }


    /**
     * @return      string                  html element attribute action
     */
    public function getAction()
    {
        return $this->getAttribute('action');
    }

    /**
     * @param       string      $action     html element attribute action
     * @return      HtmlForm
     */
    public function setAction($action)
    {
        $this->setAttribute('action', $action);
        return $this;
    }

    /**
     * @return      string                  html element attribute method eg. get, post
     */
    public function getMethod()
    {
        return $this->getAttribute('method');
    }

    /**
     * @param       string      $method     html element attribute method eg. get, post
     * @return      HtmlForm
     */
    public function setMethod($method)
    {
        $this->setAttribute('method', $method);
        return $this;
    }

    /**
     * @return      string                  html element attribute target
     */
    public function getTarget()
    {
        return $this->getAttribute('target');
    }

    /**
     * @param       string      $target     html element attribute target
     * @return      HtmlForm
     */
    public function setTarget($target)
    {
        $this->setAttribute('target', $target);
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
     * @return      HtmlForm
     */
    public function setName($name)
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return      string                  html element attribute enctype e.g. "multipart/form-data"
     */
    public function getEnctype()
    {
        return $this->getAttribute('enctype');
    }

    /**
     * @param       string      $enctype    html element attribute enctype e.g. "multipart/form-data"
     * @return      HtmlForm
     */
    public function setEnctype($enctype)
    {
        $this->setAttribute('enctype', $enctype);
        return $this;
    }

    /**
     * @return      int                     html element attribute accept
     */
    public function getAccept()
    {
        return $this->getAttribute('accept');
    }

    /**
     * @param       int     $accept         html element attribute accept
     * @return      HtmlForm
     */
    public function setAccept($accept)
    {
        $this->setAttribute('accept', $accept);
        return $this;
    }

    /**
     * @return      string                  html element attribute accept-charset
     */
    public function getAcceptCharset()
    {
        return $this->getAttribute('accept-charset');
    }

    /**
     * @param       string      $charset    html element attribute accept-charset
     * @return      HtmlForm
     */
    public function setAcceptCharset($charset)
    {
        $this->setAttribute('accept-charset', $charset);
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
     * @param       bool        $autocomplete   html element attribute autocomplete
     * @return      HtmlForm
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
     * @return      string                  html element attribute onreset
     */
    public function getOnReset()
    {
        return $this->getAttribute('onreset');
    }

    /**
     * @param       string      $event      html element attribute onreset
     * @return      HtmlForm
     */
    public function setOnReset($event)
    {
        $this->setAttribute('onreset', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onsubmit
     */
    public function getOnSubmit()
    {
        return $this->getAttribute('onsubmit');
    }

    /**
     * @param       string      $event      html element attribute onsubmit
     * @return      HtmlForm
     */
    public function setOnSubmit($event)
    {
        $this->setAttribute('onsubmit', $event);
        return $this;
    }
}