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

use Naucon\HtmlBuilder\HtmlInputReset;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlInputResetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $value = 'bar';

        $htmlElementObject = new HtmlInputReset($value);
        $this->assertEquals('<input type="reset" value="' . $value . '" />', $htmlBuilder->render($htmlElementObject));

        $value = 'bar';
        $name = 'foo';

        $htmlElementObject = new HtmlInputReset($value, $name);
        $this->assertEquals('<input type="reset" name="' . $name . '" value="' . $value . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $value = 'bar';

        $htmlElementObject = new HtmlInputReset($value);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<input type="reset" value="' . $value . '" id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $value = 'bar';

        $htmlElementObject = new HtmlInputReset($value);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<input type="reset" value="' . $value . '" class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
