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
 * Filter Class
 * converts special characters into html entities
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlFilterHtmlEntity implements HtmlFilterInterface
{
    /**
     * filter
     *
     * @param     mixed     $value      unfiltered value
     * @return    mixed                 filtered value
     */
    public function filter($value)
    {
        if (is_string($value)) {
            $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }
        return $value;
    }
}