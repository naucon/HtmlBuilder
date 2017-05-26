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
 * Html Unordered List Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlListUnordered extends HtmlListAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'ul';
}