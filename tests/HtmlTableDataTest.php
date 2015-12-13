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

use Naucon\HtmlBuilder\HtmlTableData;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTableDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableData($content);
        $this->assertEquals('<td>' . $content . '</td>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAlign()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $align = 'left';

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setAlign($align);

        $this->assertEquals($align, $htmlElementObject->getAlign());

        $expected = '<td align="' . $align . '">' . $content . '</td>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testValign()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $valign = 'top';

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setValign($valign);

        $this->assertEquals($valign, $htmlElementObject->getValign());

        $expected = '<td valign="' . $valign . '">' . $content . '</td>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testColSpan()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $colspan = 3;

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setColSpan($colspan);

        $this->assertEquals($colspan, $htmlElementObject->getColSpan());

        $expected = '<td colspan="' . $colspan . '">' . $content . '</td>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testRowSpan()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $rowspan = 3;

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setRowSpan($rowspan);

        $this->assertEquals($rowspan, $htmlElementObject->getRowSpan());

        $expected = '<td rowspan="' . $rowspan . '">' . $content . '</td>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testWidth()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $width = '100px';

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setWidth($width);

        $this->assertEquals($width, $htmlElementObject->getWidth());

        $expected = '<td width="' . $width . '">' . $content . '</td>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testHeight()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $height = '100px';

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setHeight($height);

        $this->assertEquals($height, $htmlElementObject->getHeight());

        $expected = '<td height="' . $height . '">' . $content . '</td>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<td id="testId">' . $content . '</td>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableData($content);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<td class="testClass">' . $content . '</td>', $htmlBuilder->render($htmlElementObject));
    }
}
