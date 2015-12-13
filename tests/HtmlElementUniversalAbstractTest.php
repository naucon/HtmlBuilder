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

class HtmlElementUniversalAbstractTest extends \PHPUnit_Framework_TestCase
{
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

    /**
     * @return    void
     */
    public function testSetStyle()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setStyle('clear:both;');
        $this->assertEquals('<div style="clear:both;" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetTitle()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setTitle('foo');
        $this->assertEquals('<div title="foo" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnClick()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnClick($jsCode);
        $this->assertEquals('<div onclick="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnDoubleClick()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnDoubleClick($jsCode);
        $this->assertEquals('<div ondblclick="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnMouseDown()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnMouseDown($jsCode);
        $this->assertEquals('<div onmousedown="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnMouseUp()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnMouseUp($jsCode);
        $this->assertEquals('<div onmouseup="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnMouseOver()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnMouseOver($jsCode);
        $this->assertEquals('<div onmouseover="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnMouseMove()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnMouseMove($jsCode);
        $this->assertEquals('<div onmousemove="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnMouseOut()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnMouseOut($jsCode);
        $this->assertEquals('<div onmouseout="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnKeyPress()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnKeyPress($jsCode);
        $this->assertEquals('<div onkeypress="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnKeyDown()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnKeyDown($jsCode);
        $this->assertEquals('<div onkeydown="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetOnKeyUp()
    {
        $htmlBuilder = new HtmlBuilder();

        $jsCode = "alert('hallo');";

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setOnKeyUp($jsCode);
        $this->assertEquals('<div onkeyup="' . $jsCode . '" />', $htmlBuilder->render($htmlElementObject));
    }
}
