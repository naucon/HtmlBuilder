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

use Naucon\HtmlBuilder\HtmlDiv;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlDivTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $this->assertEquals('<div />', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';

        $htmlElementObject = new HtmlDiv($content);
        $this->assertEquals('<div>' . $content . '</div>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<div id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<div class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
