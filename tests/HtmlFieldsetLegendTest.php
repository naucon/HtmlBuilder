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

use Naucon\HtmlBuilder\HtmlFieldsetLegend;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlFieldsetLegendTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlFieldsetLegend($content);
        $this->assertEquals('<legend>' . $content . '</legend>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlFieldsetLegend($content);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<legend id="testId">' . $content . '</legend>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlFieldsetLegend($content);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<legend class="testClass">' . $content . '</legend>', $htmlBuilder->render($htmlElementObject));
    }
}
