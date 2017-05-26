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
 * Html Element Universal Abstract Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlElementUniversalAbstract extends HtmlElementAbstract
{
    /**
     * @return      string                  html element attribute id
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }

    /**
     * @param       string      $id         html element attribute id
     * @return      HtmlElementUniversalAbstract
     */
    public function setId($id)
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    /**
     * @return      string                  html element attribute class
     */
    public function getClass()
    {
        return $this->getAttribute('class');
    }

    /**
     * @param       string      $class      html element attribute class
     * @return      HtmlElementUniversalAbstract
     */
    public function setClass($class)
    {
        $this->setAttribute('class', $class);
        return $this;
    }

    /**
     * @return      string                  html element attribute style
     */
    public function getStyle()
    {
        return $this->getAttribute('style');
    }

    /**
     * @param       string      $style      html element attribute style
     * @return      HtmlElementUniversalAbstract
     */
    public function setStyle($style)
    {
        $this->setAttribute('style', $style);
        return $this;
    }

    /**
     * @return      string                  html element attribute title
     */
    public function getTitle()
    {
        return $this->getAttribute('title');
    }

    /**
     * @param       string      $title      html element attribute title
     * @return      HtmlElementUniversalAbstract
     */
    public function setTitle($title)
    {
        $this->setAttribute('title', $title);
        return $this;
    }

    /**
     * @return      string                  html element attribute onclick
     */
    public function getOnClick()
    {
        return $this->getAttribute('onclick');
    }

    /**
     * @param       string      $event      html element attribute onclick
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnClick($event)
    {
        $this->setAttribute('onclick', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute ondblclick
     */
    public function getOnDoubleClick()
    {
        return $this->getAttribute('ondblclick');
    }

    /**
     * @param       string      $event      html element attribute ondblclick
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnDoubleClick($event)
    {
        $this->setAttribute('ondblclick', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onmousedown
     */
    public function getOnMouseDown()
    {
        return $this->getAttribute('onmousedown');
    }

    /**
     * @param       string      $event      html element attribute onmousedown
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnMouseDown($event)
    {
        $this->setAttribute('onmousedown', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onmouseup
     */
    public function getOnMouseUp()
    {
        return $this->getAttribute('onmouseup');
    }

    /**
     * @param       string      $event      html element attribute onmouseup
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnMouseUp($event)
    {
        $this->setAttribute('onmouseup', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onmouseover
     */
    public function getOnMouseOver()
    {
        return $this->getAttribute('onmouseover');
    }

    /**
     * @param       string      $event      html element attribute onmouseover
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnMouseOver($event)
    {
        $this->setAttribute('onmouseover', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onmousemove
     */
    public function getOnMouseMove()
    {
        return $this->getAttribute('onmousemove');
    }

    /**
     * @param       string      $event      html element attribute onmousemove
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnMouseMove($event)
    {
        $this->setAttribute('onmousemove', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onmouseout
     */
    public function getOnMouseOut()
    {
        return $this->getAttribute('onmouseout');
    }

    /**
     * @param       string      $event      html element attribute onmouseout
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnMouseOut($event)
    {
        $this->setAttribute('onmouseout', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onkeypress
     */
    public function getOnKeyPress()
    {
        return $this->getAttribute('onkeypress');
    }

    /**
     * @param       string      $event      html element attribute onkeypress
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnKeyPress($event)
    {
        $this->setAttribute('onkeypress', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onkeydown
     */
    public function getOnKeyDown()
    {
        return $this->getAttribute('onkeydown');
    }

    /**
     * @param       string      $event      html element attribute onkeydown
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnKeyDown($event)
    {
        $this->setAttribute('onkeydown', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onkeyup
     */
    public function getOnKeyUp()
    {
        return $this->getAttribute('onkeyup');
    }

    /**
     * @param       string      $event      html element attribute onkeyup
     * @return      HtmlElementUniversalAbstract
     */
    public function setOnKeyUp($event)
    {
        $this->setAttribute('onkeyup', $event);
        return $this;
    }
}