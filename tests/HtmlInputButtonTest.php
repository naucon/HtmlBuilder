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

use Naucon\HtmlBuilder\HtmlInputButton;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlInputButtonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $value = 'bar';

        $htmlElementObject = new HtmlInputButton($value);
        $this->assertEquals('<input type="button" value="' . $value . '" />', $htmlBuilder->render($htmlElementObject));

        $value = 'bar';
        $name = 'foo';

        $htmlElementObject = new HtmlInputButton($value, $name);
        $this->assertEquals('<input type="button" name="' . $name . '" value="' . $value . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $value = 'bar';

        $htmlElementObject = new HtmlInputButton($value);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<input type="button" value="' . $value . '" id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $value = 'bar';

        $htmlElementObject = new HtmlInputButton($value);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<input type="button" value="' . $value . '" class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
