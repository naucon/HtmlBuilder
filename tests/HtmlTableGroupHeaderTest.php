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

use Naucon\HtmlBuilder\HtmlTableGroupHeader;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTableGroupHeaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupHeader();
        $this->assertEquals('<thead />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddRow()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupHeader();
        $htmlElementObject->addRow();

        $expected = '<thead><tr /></thead>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAlign()
    {
        $htmlBuilder = new HtmlBuilder();

        $align = 'left';

        $htmlElementObject = new HtmlTableGroupHeader();
        $htmlElementObject->setAlign($align);

        $this->assertEquals($align, $htmlElementObject->getAlign());

        $expected = '<thead align="' . $align . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testValign()
    {
        $htmlBuilder = new HtmlBuilder();

        $valign = 'top';

        $htmlElementObject = new HtmlTableGroupHeader();
        $htmlElementObject->setValign($valign);

        $this->assertEquals($valign, $htmlElementObject->getValign());

        $expected = '<thead valign="' . $valign . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupHeader();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<thead id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupHeader();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<thead class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
