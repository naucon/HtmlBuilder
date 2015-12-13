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

use Naucon\HtmlBuilder\HtmlTableRow;
use Naucon\HtmlBuilder\HtmlTableData;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTableRowTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableRow();
        $this->assertEquals('<tr />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddCell()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableRow();
        $htmlElementObject->addCell(new HtmlTableData($content));

        $expected = '<tr><td>' . $content . '</td></tr>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddData()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableRow();
        $htmlElementObject->addData($content);

        $expected = '<tr><td>' . $content . '</td></tr>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddHeader()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableRow();
        $htmlElementObject->addHeader($content);

        $expected = '<tr><th>' . $content . '</th></tr>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAlign()
    {
        $htmlBuilder = new HtmlBuilder();

        $align = 'left';

        $htmlElementObject = new HtmlTableRow();
        $htmlElementObject->setAlign($align);

        $this->assertEquals($align, $htmlElementObject->getAlign());

        $expected = '<tr align="' . $align . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testValign()
    {
        $htmlBuilder = new HtmlBuilder();

        $valign = 'top';

        $htmlElementObject = new HtmlTableRow();
        $htmlElementObject->setValign($valign);

        $this->assertEquals($valign, $htmlElementObject->getValign());

        $expected = '<tr valign="' . $valign . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableRow();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<tr id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTableRow();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<tr class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
