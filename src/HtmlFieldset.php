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

use Naucon\HtmlBuilder\HtmlElementUniversalAbstract;
use Naucon\HtmlBuilder\HtmlFieldsetLegend;

/**
 * Html Fieldset Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlFieldset extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'fieldset';


    /**
     * Constructor
     *
     * @param       string                  fieldset legend
     */
    public function __construct($legend=null)
    {
        $this->setLegend($legend);
    }


    /**
     * set fieldset legend
     *
     * @param       string                  fieldset legend content
     * @return      HtmlFieldset
     */
    public function setLegend($legend)
    {
        if (!is_null($legend)) {
            $this->addChildElement(new HtmlFieldsetLegend($legend));
        }
        return $this;
    }
}