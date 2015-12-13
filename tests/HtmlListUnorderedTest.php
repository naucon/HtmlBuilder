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

use Naucon\HtmlBuilder\HtmlListUnordered;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlListUnorderedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListUnordered();
        $this->assertEquals('<ul />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddItem()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListUnordered();

        $content = 'foo';
        $htmlElementObject->addItem($content);

        $content = 'Bar';
        $value = 'bar';
        $htmlElementObject->addItem($content, $value);

        $content = null;
        $htmlElementObject->addItem($content);

        $expected  = '<ul>';
        $expected .= '<li>foo</li>';
        $expected .= '<li value="bar">Bar</li>';
        $expected .= '<li />';
        $expected .= '</ul>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListUnordered();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<ul id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlListUnordered();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<ul class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
