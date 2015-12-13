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

use Naucon\HtmlBuilder\HtmlLabel;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlLabelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlLabel($content);
        $this->assertEquals('<label>' . $content . '</label>', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';
        $for = 'bar';

        $htmlElementObject = new HtmlLabel($content, $for);
        $this->assertEquals('<label for="' . $for . '">' . $content . '</label>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlLabel($content);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<label id="testId">' . $content . '</label>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlLabel($content);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<label class="testClass">' . $content . '</label>', $htmlBuilder->render($htmlElementObject));
    }
}
