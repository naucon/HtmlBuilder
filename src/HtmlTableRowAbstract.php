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
 * Abtract Html Table Row Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlTableRowAbstract extends HtmlElementUniversalAbstract
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
     * @return      HtmlTableRowAbstract
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
     * @return      bool                    html element attribute valign (top, middle, bottom, baseline)
     */
    public function getValign()
    {
        return $this->getAttribute('valign');
    }

    /**
     * @param       bool        $align      html element attribute valign (top, middle, bottom, baseline)
     * @return      HtmlTableRowAbstract
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
}