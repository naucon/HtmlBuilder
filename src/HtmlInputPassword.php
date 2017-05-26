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
 * Html Input Password Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlInputPassword extends HtmlInputText
{
    /**
     * Constructor
     *
     * @param       string      $name       input name
     * @param       string      $value      input value
     */
    public function __construct($name, $value)
    {
        parent::__construct($name, $value);

        $this->setType('password');
    }
}