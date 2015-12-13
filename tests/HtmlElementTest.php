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

use Naucon\HtmlBuilder\HtmlElement;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlElementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('div');
        $this->assertEquals('<div />', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';

        $htmlElementObject = new HtmlElement('div', $content);
        $this->assertEquals('<div>' . $content . '</div>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('div');
        $htmlElementObject->setAttribute('id', 'testId');
        $this->assertEquals('<div id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('div');
        $htmlElementObject->setAttribute('class', 'testClass');
        $this->assertEquals('<div class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
