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
 * Html Anchor Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlAnchor extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'a';


    /**
     * Constructor
     *
     * @param       string      $href           html element attribute href
     * @param       string      $content        html element content
     * @param       string      $target         html element attribute target
     */
    public function __construct($href, $content = null, $target = null)
    {
        $this->setHref($href);
        $this->setContent($content);
        $this->setTarget($target);
    }


    /**
     * @return      string                  html element attribute href
     */
    public function getHref()
    {
        return $this->getAttribute('href');
    }

    /**
     * @param       string      $href       html element attribute href
     * @return      HtmlAnchor
     */
    public function setHref($href)
    {
        $this->setAttribute('href', $href);
        return $this;
    }

    /**
     * @return      string                  html element attribute target
     */
    public function getTarget()
    {
        return $this->getAttribute('target');
    }

    /**
     * @param       string      $target     html element attribute target
     * @return      HtmlAnchor
     */
    public function setTarget($target)
    {
        $this->setAttribute('target', $target);
        return $this;
    }

    /**
     * @return      string                  html element attribute name
     */
    public function getName()
    {
        return $this->getAttribute('name');
    }

    /**
     * @param       string      $name       html element attribute name
     * @return      HtmlAnchor
     */
    public function setName($name)
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return      string                  html element attribute onblur
     */
    public function getOnBlur()
    {
        return $this->getAttribute('onblur');
    }

    /**
     * @param       string      $event      html element attribute onblur
     * @return      HtmlAnchor
     */
    public function setOnBlur($event)
    {
        $this->setAttribute('onblur', $event);
        return $this;
    }

    /**
     * @return      string                  html element attribute onfocus
     */
    public function getOnFocus()
    {
        return $this->getAttribute('onfocus');
    }

    /**
     * @param       string      $event      html element attribute onfocus
     * @return      HtmlAnchor
     */
    public function setOnFocus($event)
    {
        $this->setAttribute('onfocus', $event);
        return $this;
    }
}