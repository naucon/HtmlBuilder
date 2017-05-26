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
 * Html List Item Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlListItem extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'li';


    /**
     * Constructor
     *
     * @param       string      $content        list item content
     * @param       string      $value          list item attribute value
     */
    public function __construct($content, $value = null)
    {
        $this->setContent($content);
        $this->setValue($value);
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
     * @return      HtmlListItem
     */
    public function setValue($value)
    {
        $this->setAttribute('value', $value);
        return $this;
    }
}