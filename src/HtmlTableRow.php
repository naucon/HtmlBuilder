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
 * Html Table Row Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlTableRow extends HtmlTableRowAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'tr';


    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * add table cell
     *
     * @param       HtmlTableCellAbstract       $tableCell
     * @return      HtmlTableRow
     */
    public function addCell(HtmlTableCellAbstract $tableCell)
    {
        $this->addChildElement($tableCell);
        return $this;
    }

    /**
     * add table data cell
     *
     * @param       string      $content
     * @return      HtmlTableRow
     */
    public function addData($content)
    {
        $this->addChildElement(new HtmlTableData($content));
        return $this;
    }

    /**
     * add table header cell
     *
     * @param       string      $content
     * @return      HtmlTableRow
     */
    public function addHeader($content)
    {
        $this->addChildElement(new HtmlTableHeader($content));
        return $this;
    }
}