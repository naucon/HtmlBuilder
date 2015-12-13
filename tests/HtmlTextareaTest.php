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

use Naucon\HtmlBuilder\HtmlTextarea;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTextareaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';
        $content = 'bar';

        $htmlElementObject = new HtmlTextarea($name, $content);
        $this->assertEquals('<textarea name="' . $name . '">' . $content . '</textarea>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';
        $content = 'bar';

        $htmlElementObject = new HtmlTextarea($name, $content);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<textarea name="' . $name . '" id="testId">' . $content . '</textarea>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';
        $content = 'bar';

        $htmlElementObject = new HtmlTextarea($name, $content);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<textarea name="' . $name . '" class="testClass">' . $content . '</textarea>', $htmlBuilder->render($htmlElementObject));
    }
}
