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

use Naucon\HtmlBuilder\HtmlTableGroupBody;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTableGroupBodyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupBody();
        $this->assertEquals('<tbody />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddRow()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupBody();
        $htmlElementObject->addRow();

        $expected = '<tbody><tr /></tbody>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAlign()
    {
        $htmlBuilder = new HtmlBuilder();

        $align = 'left';

        $htmlElementObject = new HtmlTableGroupBody();
        $htmlElementObject->setAlign($align);

        $this->assertEquals($align, $htmlElementObject->getAlign());

        $expected = '<tbody align="' . $align . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testValign()
    {
        $htmlBuilder = new HtmlBuilder();

        $valign = 'top';

        $htmlElementObject = new HtmlTableGroupBody();
        $htmlElementObject->setValign($valign);

        $this->assertEquals($valign, $htmlElementObject->getValign());

        $expected = '<tbody valign="' . $valign . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupBody();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<tbody id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableGroupBody();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<tbody class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
