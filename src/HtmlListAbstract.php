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
 * Abstract Html List Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlListAbstract extends HtmlElementUniversalAbstract
{
    /**
     * add select option
     *
     * @param       string      $content    list item content
     * @param       string      $value      list item attribute value
     * @return      HtmlListAbstract
     */
    public function addItem($content, $value = null)
    {
        $this->addChildElement(new HtmlListItem($content, $value));
        return $this;
    }
}