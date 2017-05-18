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

use Naucon\HtmlBuilder\HtmlSelect;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlSelectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';

        $htmlElementObject = new HtmlSelect($name);
        $this->assertEquals('<select name="' . $name . '"></select>', $htmlBuilder->render($htmlElementObject));

        $name = 'foo';
        $multiple = true;

        $htmlElementObject = new HtmlSelect($name, $multiple);
        $this->assertEquals('<select name="' . $name . '" multiple="multiple"></select>', $htmlBuilder->render($htmlElementObject));

        $name = 'foo';
        $multiple = false;

        $htmlElementObject = new HtmlSelect($name, $multiple);
        $this->assertEquals('<select name="' . $name . '"></select>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testAddOption()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';

        $htmlElementObject = new HtmlSelect($name);

        $content = 'Ms.';
        $value = 'MS';
        $selected = false;
        $htmlElementObject->addOption($content, $value, $selected);

        $content = 'Mr.';
        $value = 'MR';
        $selected = true;
        $htmlElementObject->addOption($content, $value, $selected);

        $content = null;
        $htmlElementObject->addOption($content);

        $expected = '<select name="' . $name . '">';
        $expected .= '<option value="MS">Ms.</option>';
        $expected .= '<option value="MR" selected="selected">Mr.</option>';
        $expected .= '<option />';
        $expected .= '</select>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';

        $htmlElementObject = new HtmlSelect($name);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<select name="' . $name . '" id="testId"></select>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';

        $htmlElementObject = new HtmlSelect($name);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<select name="' . $name . '" class="testClass"></select>', $htmlBuilder->render($htmlElementObject));
    }
}
