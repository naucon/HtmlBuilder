<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\HtmlBuilder\Tests;

use Naucon\HtmlBuilder\HtmlMetaDescription;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlMetaDescriptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'Max Mustermann';

        $htmlElementObject = new HtmlMetaDescription($content);
        $this->assertEquals('<meta name="description" content="' . $content . '" />', $htmlBuilder->render($htmlElementObject));
    }
}
