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

use Naucon\HtmlBuilder\HtmlTable;
use Naucon\HtmlBuilder\HtmlTableGroupHeader;
use Naucon\HtmlBuilder\HtmlTableRow;
use Naucon\HtmlBuilder\HtmlTableHeader;
use Naucon\HtmlBuilder\HtmlTableBody;
use Naucon\HtmlBuilder\HtmlTableFooter;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $this->assertEquals('<table />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddRow()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->addRow();

        $expected = '<table><tr /></table>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddHeader()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->addHeader();

        $expected = '<table><thead /></table>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddFooter()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->addFooter();

        $expected = '<table><tfoot /></table>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddBody()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->addBody();

        $expected = '<table><tbody /></table>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddGroup()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->addGroup(new HtmlTableGroupHeader());

        $expected = '<table><thead /></table>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAlign()
    {
        $htmlBuilder = new HtmlBuilder();

        $align = 'left';

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->setAlign($align);

        $this->assertEquals($align, $htmlElementObject->getAlign());

        $expected = '<table align="' . $align . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testBorder()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->setBorder(false);

        $this->assertEquals(0, $htmlElementObject->getBorder());

        $expected = '<table border="0" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testCellPadding()
    {
        $htmlBuilder = new HtmlBuilder();

        $padding = 50;

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->setCellPadding($padding);

        $this->assertEquals($padding, $htmlElementObject->getCellPadding());

        $expected = '<table cellpadding="' . $padding . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testCellSpacing()
    {
        $htmlBuilder = new HtmlBuilder();

        $spacing = 50;

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->setCellSpacing($spacing);

        $this->assertEquals($spacing, $htmlElementObject->getCellSpacing());

        $expected = '<table cellspacing="' . $spacing . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testWidth()
    {
        $htmlBuilder = new HtmlBuilder();

        $width = '100px';

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->setWidth($width);

        $this->assertEquals($width, $htmlElementObject->getWidth());

        $expected = '<table width="' . $width . '" />';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<table id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<table class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testWholeTable()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlTable();
        $htmlTableHeader = $htmlElementObject->addHeader();
        $htmlTableRow = $htmlTableHeader->addRow();
        $htmlTableRow->addHeader('fruit')
            ->addHeader('quantity');

        $htmlTableBody = $htmlElementObject->addBody();
        $htmlTableRow = $htmlTableBody->addRow();
        $htmlTableRow->addData('apple')
            ->addData('3');

        $htmlTableRow = $htmlTableBody->addRow();
        $htmlTableRow->addData('banana')
            ->addData('4');

        $htmlTableRow = $htmlTableBody->addRow();
        $htmlTableRow->addData('orange')
            ->addData('2');

        $htmlTableFooter = $htmlElementObject->addFooter();
        $htmlTableRow = $htmlTableFooter->addRow();
        $htmlTableRow->addData('total')
            ->addData('9');

        $expected = '<table>';
        $expected.= '<thead><tr><th>fruit</th><th>quantity</th></tr></thead>';
        $expected.= '<tbody><tr><td>apple</td><td>3</td></tr><tr><td>banana</td><td>4</td></tr><tr><td>orange</td><td>2</td></tr></tbody>';
        $expected.= '<tfoot><tr><td>total</td><td>9</td></tr></tfoot>';
        $expected.= '</table>';


        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }
}
