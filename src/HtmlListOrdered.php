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
 * Html Ordered List Class
 *
 * @abstract
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlListOrdered extends HtmlListAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'ol';

    /**
     * @return      string                  html element attribute type - type of list e.g. 1, A, a, I, i
     */
    public function getType()
    {
        return $this->getAttribute('type');
    }

    /**
     * @param       string      $type       html element attribute type - type of list e.g. 1, A, a, I, i
     * @return      HtmlListOrdered
     */
    public function setType($type)
    {
        $this->setAttribute('type', $type);
        return $this;
    }

    /**
     * @return      string                  html element attribute start - start value of ordered list
     */
    public function getStart()
    {
        return $this->getAttribute('start');
    }

    /**
     * @param       string      $start      html element attribute start - start value of ordered list
     * @return      HtmlListOrdered
     */
    public function setStart($start)
    {
        $this->setAttribute('start', $start);
        return $this;
    }

    /**
     * @return      bool                  html element attribute reversed - descending list order e.g. 9,8,7,... (since HTML5)
     */
    public function isReversed()
    {
        if ($this->getAttribute('reversed') == 'reversed') {
            return true;
        }
        return false;
    }

    /**
     * @param       bool    $reversed       html element attribute reversed - descending list order e.g. 9,8,7,... (since HTML5)
     * @return      HtmlListOrdered
     */
    public function setReversed($reversed)
    {
        if ((bool)$reversed) {
            $this->setAttribute('reversed', 'reversed');
        }
        return $this;
    }
}