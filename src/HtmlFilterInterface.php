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
 * Html Filter Interface
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
interface HtmlFilterInterface
{
	/**
	 * filter
	 *
	 * @abstract
	 * @param     mixed		$value	unfiltered value
	 * @return    mixed             filtered value
	 */
	public function filter($value);
}