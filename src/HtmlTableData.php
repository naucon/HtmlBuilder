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
 * Html Table Data Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlTableData extends HtmlTableCellAbstract
{
    /**
     * @access      protected
     * @var         string                      html element tag
     */
    protected $tag = 'td';

    /**
     * Constructor
     *
     * @param       string      $content        table data content
     */
    public function __construct($content)
    {
        $this->setContent($content);
    }
}