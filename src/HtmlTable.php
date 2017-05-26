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
 * Html Table Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlTable extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'table';


    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @return      bool                    html element attribute align (left, center, right)
     */
    public function getAlign()
    {
        return $this->getAttribute('align');
    }

    /**
     * @param       bool        $align      html element attribute align (left, center, right)
     * @return      HtmlTable
     */
    public function setAlign($align)
    {
        switch ($align)
        {
            case 'left':
                $this->setAttribute('align', 'left');
                break;
            case 'center':
                $this->setAttribute('align', 'center');
                break;
            case 'right':
                $this->setAttribute('align', 'right');
                break;
            case null:
            default:
            $this->setAttribute('align', null);
                break;
        }
        return $this;
    }

    /**
     * @return      bool                    html element attribute border
     */
    public function getBorder()
    {
        return $this->getAttribute('border');
    }

    /**
     * @param       bool        $border     html element attribute border
     * @return      HtmlTable
     */
    public function setBorder($border)
    {
        if ((bool)$border) {
            $this->setAttribute('border', 1);
        } else {
            $this->setAttribute('border', 0);
        }
        return $this;
    }


    /**
     * @return      int                     html element attribute cellpadding in pixel
     */
    public function getCellPadding()
    {
        return $this->getAttribute('cellpadding');
    }

    /**
     * @param       int     $padding        html element attribute cellpadding in pixel
     * @return      HtmlTable
     */
    public function setCellPadding($padding)
    {
        $this->setAttribute('cellpadding', (int)$padding);
        return $this;
    }

    /**
     * @return      int                     html element attribute cellspacing in pixel
     */
    public function getCellSpacing()
    {
        return $this->getAttribute('cellspacing');
    }

    /**
     * @param       int     $padding        html element attribute cellspacing in pixel
     * @return      HtmlTable
     */
    public function setCellSpacing($padding)
    {
        $this->setAttribute('cellspacing', (int)$padding);
        return $this;
    }

    /**
     * @return      string                  html element attribute width in pixel or percent
     */
    public function getWidth()
    {
        return $this->getAttribute('width');
    }

    /**
     * @param       string      $width      html element attribute width in pixel or percent
     * @return      HtmlTable
     */
    public function setWidth($width)
    {
        $this->setAttribute('width', $width);
        return $this;
    }

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

    /**
     * add table group header
     *
     * @return      HtmlTableGroupHeader
     */
    public function addHeader()
    {
        $tableGroup = new HtmlTableGroupHeader();
        $this->addChildElement($tableGroup);
        return $tableGroup;
    }

    /**
     * add table group footer
     *
     * @return      HtmlTableGroupFooter
     */
    public function addFooter()
    {
        $tableGroup = new HtmlTableGroupFooter();
        $this->addChildElement($tableGroup);
        return $tableGroup;
    }

    /**
     * add table group body
     *
     * @return      HtmlTableGroupBody
     */
    public function addBody()
    {
        $tableGroup = new HtmlTableGroupBody();
        $this->addChildElement($tableGroup);
        return $tableGroup;
    }

    /**
     * add table group
     *
     * @param       HtmlTableGroupAbstract      $tableGroup
     * @return      HtmlTable
     */
    public function addGroup(HtmlTableGroupAbstract $tableGroup)
    {
        $this->addChildElement($tableGroup);
        return $this;
    }
}