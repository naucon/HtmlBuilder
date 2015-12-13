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

use Naucon\HtmlBuilder\HtmlElementAbstract;

/**
 * Html Element Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlElement extends HtmlElementAbstract
{
    /**
     * Constructor
     *
     * @param       string                  html element tag
     * @param       string                  optional html element content
     */
    public function __construct($tag, $content=null)
    {
        $this->tag = $tag;
        $this->setContent($content);
    }
}