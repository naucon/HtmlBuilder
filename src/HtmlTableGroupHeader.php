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
 * Html Table Group Header Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlTableGroupHeader extends HtmlTableGroupAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'thead';


    /**
     * Constructor
     */
    public function __construct()
    {
    }
}