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

use Naucon\Utility\Collection;

/**
 * Html Element Interface
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
interface HtmlElementInterface
{
    /**
     * @return      string              html element tag
     */
    public function getTag();

    /**
     * @return      array               html element attributes with key-value-pairs
     */
    public function getAttributes();

    /**
     * @return      bool                html element has attributes
     */
    public function hasAttributes();

    /**
     * @param       array       $attributes     html element attributes with key-value-pairs
     * @return      HtmlElementInterface
     */
    public function setAttributes(array $attributes);

    /**
     * @param       string      $key    html element attribute key
     * @return      string              html element attribute value
     */
    public function getAttribute($key);

    /**
     * @param       string      $key    html element attribute key
     * @return      bool                html element has attribute for given key
     */
    public function hasAttribute($key);

    /**
     * set attribute to html element
     *
     * @param       string      $key    html element attribute key
     * @param       string      $value  html element attribute value
     * @return      HtmlElementInterface
     */
    public function setAttribute($key, $value = null);

    /**
     * append attribute to html element
     *
     * @param       string      $key        html element attribute key
     * @param       string      $value      html element attribute value
     * @param       string      $seperater  html element attribute seperater
     * @return      HtmlElementInterface
     */
    public function appendAttribute($key, $value = null, $seperater = null);

    /**
     * @return      array               html child elements
     */
    public function getChildElements();

    /**
     * @return      bool                true = html element has child elements
     */
    public function hasChildElements();

    /**
     * @return      Collection
     */
    public function getChildElementCollection();

    /**
     * @param       array       $elements       html child elements
     * @return      HtmlElementInterface
     */
    public function setChildElements(array $elements);

    /**
     * add html element as child element
     *
     * @param       HtmlElementInterface        $element
     * @return      HtmlElementInterface
     */
    public function addChildElement(HtmlElementInterface $element);

    /**
     * set html element content, replace all child elements
     *
     * @param       string      $content        html element content
     * @return      HtmlElementInterface
     */
    public function setContent($content);

    /**
     * add html element content
     *
     * @param       string      $content        html element content
     * @return      HtmlElementInterface
     */
    public function addContent($content);
}