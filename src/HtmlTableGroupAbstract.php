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
 * Abstract Html Table Group Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlTableGroupAbstract extends HtmlTableRowAbstract
{
    /**
     * add table row
     *
     * @return      HtmlTableRow
     */
    public function addRow()
    {
        $tableRow = new HtmlTableRow();
        $this->addChildElement($tableRow);
        return $tableRow;
    }
}