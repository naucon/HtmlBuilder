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
 * Html Builder Interface
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
interface HtmlBuilderInterface
{
    /**
     * @return      string              html output
     */
    public function render();

    /**
     * @return      string              html output
     */
    public function renderContent();

    /**
     * @return      string              html output
     */
    public function renderStartTag();

    /**
     * @return      string              html output
     */
    public function renderEndTag();
}