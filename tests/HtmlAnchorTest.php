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

use Naucon\HtmlBuilder\HtmlAnchor;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlAnchorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $href = '/foo';
        $content = 'foo';

        $htmlElementObject = new HtmlAnchor($href, $content);
        $this->assertEquals('<a href="' . $href . '">' . $content . '</a>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $href = '/foo';
        $content = 'foo';

        $htmlElementObject = new HtmlAnchor($href, $content);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<a href="' . $href . '" id="testId">' . $content . '</a>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $href = '/foo';
        $content = 'foo';

        $htmlElementObject = new HtmlAnchor($href, $content);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<a href="' . $href . '" class="testClass">' . $content . '</a>', $htmlBuilder->render($htmlElementObject));
    }
}
