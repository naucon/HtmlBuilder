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
 * Html Meta Keywords Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlMetaKeywords extends HtmlMetaAbstract
{
    /**
     * Constructor
     *
     * @param       string      $content        meta content
     */
    public function __construct($content)
    {
        $this->setName('keywords');
        $this->setContent($content);
    }

    /**
     * @param       mixed       $content        html element attribute content
     * @return      HtmlMetaKeywords
     */
    public function setContent($content)
    {
        if (is_array($content)) {
            $metaContent = implode(', ', $content);
        } else {
            $metaContent = $content;
        }
        $this->setAttribute('content', $metaContent);
        return $this;
    }
}