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
 * Html Input Hidden Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlInputHidden extends HtmlInputAbstract
{
    /**
     * Constructor
     *
     * @param       string      $name       input name
     * @param       string      $value      input value
     */
    public function __construct($name, $value = null)
    {
        $this->setType('hidden');

        $this->setName($name);
        $this->setValue($value);
    }
}