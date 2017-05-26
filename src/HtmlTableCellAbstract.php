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
 * Abtract Html Table Cell Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlTableCellAbstract extends HtmlElementUniversalAbstract
{
    /**
     * @return      bool                    html element attribute align (left, center, right)
     */
    public function getAlign()
    {
        return $this->getAttribute('align');
    }

    /**
     * @param       bool        $align      html element attribute align (left, center, right, justify, char)
     * @return      HtmlTableCellAbstract
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
            case 'justify':
                $this->setAttribute('align', 'justify');
                break;
            case 'char':
                $this->setAttribute('align', 'char');
                break;
            case null:
            default:
                $this->setAttribute('align', null);
                break;
        }
        return $this;
    }

    /**
     * @return      string                  html element attribute colspan (number of column cells to span)
     */
    public function getColSpan()
    {
        return $this->getAttribute('colspan');
    }

    /**
     * @param       string      $cells      html element attribute colspan (number of column cells to span)
     * @return      HtmlTableCellAbstract
     */
    public function setColSpan($cells)
    {
        $this->setAttribute('colspan', (int)$cells);
        return $this;
    }

    /**
     * @return      string                  html element attribute rowspan (number of row cells to span)
     */
    public function getRowSpan()
    {
        return $this->getAttribute('rowspan');
    }

    /**
     * @param       string      $cells      html element attribute rowspan (number of row cells to span)
     * @return      HtmlTableCellAbstract
     */
    public function setRowSpan($cells)
    {
        $this->setAttribute('rowspan', (int)$cells);
        return $this;
    }

    /**
     * @return      bool                    html element attribute valign (top, middle, bottom, baseline)
     */
    public function getValign()
    {
        return $this->getAttribute('valign');
    }

    /**
     * @param       bool        $align      html element attribute valign (top, middle, bottom, baseline)
     * @return      HtmlTableCellAbstract
     */
    public function setValign($align)
    {
        switch ($align)
        {
            case 'top':
                $this->setAttribute('valign', 'top');
                break;
            case 'middle':
                $this->setAttribute('valign', 'middle');
                break;
            case 'bottom':
                $this->setAttribute('valign', 'bottom');
                break;
            case 'baseline':
                $this->setAttribute('valign', 'baseline');
                break;
            case null:
            default:
                $this->setAttribute('valign', null);
                break;
        }
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
     * @return      HtmlTableCellAbstract
     */
    public function setWidth($width)
    {
        $this->setAttribute('width', $width);
        return $this;
    }

    /**
     * @return      string                  html element attribute height in pixel or percent
     */
    public function getHeight()
    {
        return $this->getAttribute('height');
    }

    /**
     * @param       string      $height     html element attribute height in pixel or percent
     * @return      HtmlTableCellAbstract
     */
    public function setHeight($height)
    {
        $this->setAttribute('height', $height);
        return $this;
    }
}