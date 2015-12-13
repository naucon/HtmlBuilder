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

use Naucon\HtmlBuilder\HtmlSelectOption;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlSelectOptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = null;

        $htmlElementObject = new HtmlSelectOption($content);
        $this->assertEquals('<option />', $htmlBuilder->render($htmlElementObject));

        $content = 'Ms.';
        $value = 'MS';
        $selected = false;

        $htmlElementObject = new HtmlSelectOption($content, $value, $selected);
        $this->assertEquals('<option value="' . $value . '">' . $content . '</option>', $htmlBuilder->render($htmlElementObject));

        $content = 'Mr.';
        $value = 'MR';
        $selected = true;

        $htmlElementObject = new HtmlSelectOption($content, $value, $selected);
        $this->assertEquals('<option value="' . $value . '" selected="selected">' . $content . '</option>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'Ms.';
        $value = 'MS';
        $selected = false;

        $htmlElementObject = new HtmlSelectOption($content, $value, $selected);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<option value="' . $value . '" id="testId">' . $content . '</option>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'Ms.';
        $value = 'MS';
        $selected = false;

        $htmlElementObject = new HtmlSelectOption($content, $value, $selected);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<option value="' . $value . '" class="testClass">' . $content . '</option>', $htmlBuilder->render($htmlElementObject));
    }
}
