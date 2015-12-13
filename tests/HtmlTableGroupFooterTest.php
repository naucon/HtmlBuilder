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

use Naucon\HtmlBuilder\HtmlTableGroupFooter;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTableGroupFooterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupFooter();
        $this->assertEquals('<tfoot />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddRow()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupFooter();
        $htmlElementObject->addRow();

        $expected = '<tfoot><tr /></tfoot>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAlign()
    {
        $htmlBuilder = new HtmlBuilder();

        $align = 'left';

        $htmlElementObject = new HtmlTableGroupFooter();
        $htmlElementObject->setAlign($align);

        $this->assertEquals($align, $htmlElementObject->getAlign());

        $expected = '<tfoot align="' . $align . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testValign()
    {
        $htmlBuilder = new HtmlBuilder();

        $valign = 'top';

        $htmlElementObject = new HtmlTableGroupFooter();
        $htmlElementObject->setValign($valign);

        $this->assertEquals($valign, $htmlElementObject->getValign());

        $expected = '<tfoot valign="' . $valign . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupFooter();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<tfoot id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupFooter();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<tfoot class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
