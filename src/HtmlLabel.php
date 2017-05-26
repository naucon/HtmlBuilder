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
 * Html Label Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlLabel extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'label';


    /**
     * Constructor
     *
     * @param       string      $content    label content
     * @param       string      $for        label attribute for
     */
    public function __construct($content, $for = null)
    {
        $this->setContent($content);
        $this->setFor($for);
    }


    /**
     * @return      string                  html element attribute for
     */
    public function getFor()
    {
        return $this->getAttribute('for');
    }

    /**
     * @param       string      $for        html element attribute for
     * @return      HtmlLabel
     */
    public function setFor($for)
    {
        $this->setAttribute('for', $for);
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
     * @return      HtmlLabel
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
     * @return      HtmlLabel
     */
    public function setOnFocus($event)
    {
        $this->setAttribute('onfocus', $event);
        return $this;
    }
}