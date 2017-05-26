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
 * Html Title Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlTitle extends HtmlElementAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'title';


    /**
     * Constructor
     *
     * @param       string      $content    title content
     */
    public function __construct($content)
    {
        $this->setContent($content);
    }
}