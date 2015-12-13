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

use Naucon\HtmlBuilder\HtmlInputCheckbox;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlInputCheckboxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlInputCheckbox($name, $value);
        $this->assertEquals('<input type="checkbox" name="' . $name . '" value="' . $value . '" />', $htmlBuilder->render($htmlElementObject));

        $name = 'foo';
        $value = 'bar';
        $checked = true;

        $htmlElementObject = new HtmlInputCheckbox($name, $value, $checked);
        $this->assertEquals('<input type="checkbox" name="' . $name . '" value="' . $value . '" checked="checked" />', $htmlBuilder->render($htmlElementObject));

        $name = 'foo';
        $value = 'bar';
        $checked = false;

        $htmlElementObject = new HtmlInputCheckbox($name, $value, $checked);
        $this->assertEquals('<input type="checkbox" name="' . $name . '" value="' . $value . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlInputCheckbox($name, $value);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<input type="checkbox" name="' . $name . '" value="' . $value . '" id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $name = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlInputCheckbox($name, $value);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<input type="checkbox" name="' . $name . '" value="' . $value . '" class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
