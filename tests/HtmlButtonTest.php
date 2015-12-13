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

use Naucon\HtmlBuilder\HtmlButton;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlButtonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlButton();
        $this->assertEquals('<button />', $htmlBuilder->render($htmlElementObject));

        $type = 'submit';
        $name = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlButton($type, $name, $value);
        $this->assertEquals('<button type="' . $type . '" name="' . $name . '" value="' . $value . '" />', $htmlBuilder->render($htmlElementObject));

        $type = 'submit';
        $name = 'foo';
        $value = 'bar';
        $content = 'Send';

        $htmlElementObject = new HtmlButton($type, $name, $value, $content);
        $this->assertEquals('<button type="' . $type . '" name="' . $name . '" value="' . $value . '">' . $content . '</button>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $type = 'submit';
        $name = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlButton($type, $name, $value);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<button type="' . $type . '" name="' . $name . '" value="' . $value . '" id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $type = 'submit';
        $name = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlButton($type, $name, $value);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<button type="' . $type . '" name="' . $name . '" value="' . $value . '" class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
