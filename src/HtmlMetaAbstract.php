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

use Naucon\HtmlBuilder\Exception\HtmlElementException;

/**
 * Abstract Html Meta Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
abstract class HtmlMetaAbstract extends HtmlElementAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'meta';


    /**
     * @return      string                  html element attribute name
     */
    public function getName()
    {
        return $this->getAttribute('name');
    }

    /**
     * @param       string      $name       html element attribute name
     * @return      HtmlMetaAbstract
     */
    public function setName($name)
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return      string                  html element attribute content
     */
    public function getContent()
    {
        return $this->getAttribute('content');
    }

    /**
     * @param       string      $content    html element attribute content
     * @return      HtmlMetaAbstract
     */
    public function setContent($content)
    {
        $this->setAttribute('content', $content);
        return $this;
    }

    /**
     * add html element content
     *
     * @param       string      $content    html element content
     * @throws      HtmlElementException
     */
    public function addContent($content = null)
    {
        throw new HtmlElementException('meta content can not be added', E_NOTICE);
    }
}