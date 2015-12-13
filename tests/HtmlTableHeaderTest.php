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

use Naucon\HtmlBuilder\HtmlTableHeader;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTableHeaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableHeader($content);
        $this->assertEquals('<th>' . $content . '</th>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAlign()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $align = 'left';

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setAlign($align);

        $this->assertEquals($align, $htmlElementObject->getAlign());

        $expected = '<th align="' . $align . '">' . $content . '</th>';

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

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setValign($valign);

        $this->assertEquals($valign, $htmlElementObject->getValign());

        $expected = '<th valign="' . $valign . '">' . $content . '</th>';

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

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setColSpan($colspan);

        $this->assertEquals($colspan, $htmlElementObject->getColSpan());

        $expected = '<th colspan="' . $colspan . '">' . $content . '</th>';

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

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setRowSpan($rowspan);

        $this->assertEquals($rowspan, $htmlElementObject->getRowSpan());

        $expected = '<th rowspan="' . $rowspan . '">' . $content . '</th>';

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

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setWidth($width);

        $this->assertEquals($width, $htmlElementObject->getWidth());

        $expected = '<th width="' . $width . '">' . $content . '</th>';

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

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setHeight($height);

        $this->assertEquals($height, $htmlElementObject->getHeight());

        $expected = '<th height="' . $height . '">' . $content . '</th>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<th id="testId">' . $content . '</th>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';

        $htmlElementObject = new HtmlTableHeader($content);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<th class="testClass">' . $content . '</th>', $htmlBuilder->render($htmlElementObject));
    }
}
