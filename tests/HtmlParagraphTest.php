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

use Naucon\HtmlBuilder\HtmlParagraph;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlParagraphTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlParagraph();
        $this->assertEquals('<p />', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';

        $htmlElementObject = new HtmlParagraph($content);
        $this->assertEquals('<p>' . $content . '</p>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlParagraph();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<p id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlParagraph();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<p class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
