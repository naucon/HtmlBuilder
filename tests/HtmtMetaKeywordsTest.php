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

use Naucon\HtmlBuilder\HtmlMetaKeywords;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlMetaKeywordsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'bar, foo';

        $htmlElementObject = new HtmlMetaKeywords($content);
        $this->assertEquals('<meta name="keywords" content="' . $content . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testInitWithArray()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = array('bar', 'foo');
        $metaContent = 'bar, foo';

        $htmlElementObject = new HtmlMetaKeywords($content);
        $this->assertEquals('<meta name="keywords" content="' . $metaContent . '" />', $htmlBuilder->render($htmlElementObject));
    }
}
