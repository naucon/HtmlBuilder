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

use Naucon\HtmlBuilder\HtmlListOrdered;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlListOrderedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListOrdered();
        $this->assertEquals('<ol />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddItem()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListOrdered();

        $content = 'foo';
        $htmlElementObject->addItem($content);

        $content = 'Bar';
        $value = 'bar';
        $htmlElementObject->addItem($content, $value);

        $content = null;
        $htmlElementObject->addItem($content);

        $expected  = '<ol>';
        $expected .= '<li>foo</li>';
        $expected .= '<li value="bar">Bar</li>';
        $expected .= '<li />';
        $expected .= '</ol>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetType()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListOrdered();
        $htmlElementObject->setType(1);
        $this->assertEquals('<ol type="1" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetStart()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListOrdered();
        $htmlElementObject->setStart('2');
        $this->assertEquals('<ol start="2" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetReversed()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListOrdered();
        $htmlElementObject->setReversed(true);
        $this->assertEquals('<ol reversed="reversed" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListOrdered();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<ol id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListOrdered();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<ol class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
