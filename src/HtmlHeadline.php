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
 * Html Headline Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlHeadline extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'h';

    /**
     * @access      protected
     * @var         int                     headline level 1-6
     */
    protected $level = 1;


    /**
     * Constructor
     *
     * @param       string      $content    headline content
     * @param       int         $level      headline level 1-6
     */
    public function __construct($content, $level = 1)
    {
        $this->setLevel($level);
        $this->addContent($content);
    }


    /**
     * @return      int                     headline level 1-6
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param       int         $level      headline level 1-6
     * @return      HtmlHeadline
     */
    public function setLevel($level)
    {
        $this->level = ((int)$level > 0 ? ((int)$level > 6 ? 6 : (int)$level) : 1);
        return $this;
    }

    /**
     * @return      string                  html element tag
     */
    public function getTag()
    {
        return $this->tag . $this->getLevel();
    }
}