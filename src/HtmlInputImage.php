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
 * Html Input Image Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlInputImage extends HtmlInputAbstract
{
    /**
     * Constructor
     *
     * @param       string      $src        input src
     * @param       string      $alt        input alt
     */
    public function __construct($src, $alt = null)
    {
        $this->setType('image');

        $this->setSrc($src);
        $this->setAlt($alt);
    }


    /**
     * @return      string                  html element attribute src
     */
    public function getSrc()
    {
        return $this->getAttribute('src');
    }

    /**
     * @param       string      $src        html element attribute src
     * @return      HtmlInputImage
     */
    public function setSrc($src)
    {
        $this->setAttribute('src', $src);
        return $this;
    }

    /**
     * @return      string                  html element attribute alt
     */
    public function getAlt()
    {
        return $this->getAttribute('alt');
    }

    /**
     * @param       string      $alt        html element attribute alt
     * @return      HtmlInputImage
     */
    public function setAlt($alt)
    {
        $this->setAttribute('alt', $alt);
        return $this;
    }

    /**
     * @return      string                  html element attribute width
     */
    public function getWidth()
    {
        return $this->getAttribute('width');
    }

    /**
     * @param       string      $width      html element attribute width
     * @return      HtmlInputImage
     */
    public function setWidth($width)
    {
        if ((int)$width > 0) {
            $this->setAttribute('width', (int)$width);
        } else {
            $this->setAttribute('width', null);
        }
        return $this;
    }

    /**
     * @return      string                  html element attribute height
     */
    public function getHeight()
    {
        return $this->getAttribute('height');
    }

    /**
     * @param       string      $height     html element attribute height
     * @return      HtmlInputImage
     */
    public function setHeight($height)
    {
        if ((int)$height > 0) {
            $this->setAttribute('height', (int)$height);
        } else {
            $this->setAttribute('height', null);
        }
        return $this;
    }
}