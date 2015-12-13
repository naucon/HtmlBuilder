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

use Naucon\HtmlBuilder\HtmlFieldset;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlFieldsetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlFieldset();
        $this->assertEquals('<fieldset />', $htmlBuilder->render($htmlElementObject));

        $legend = 'foo';

        $htmlElementObject = new HtmlFieldset($legend);
        $this->assertEquals('<fieldset><legend>' . $legend . '</legend></fieldset>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlFieldset();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<fieldset id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlFieldset();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<fieldset class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
