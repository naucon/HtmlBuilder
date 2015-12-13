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

use Naucon\HtmlBuilder\HtmlListItem;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlListItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = null;

        $htmlElementObject = new HtmlListItem($content);
        $this->assertEquals('<li />', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';

        $htmlElementObject = new HtmlListItem($content);
        $this->assertEquals('<li>' . $content . '</li>', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlListItem($content, $value);
        $this->assertEquals('<li value="' . $value . '">' . $content . '</li>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlListItem($content, $value);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<li value="' . $value . '" id="testId">' . $content . '</li>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'foo';
        $value = 'bar';

        $htmlElementObject = new HtmlListItem($content, $value);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<li value="' . $value . '" class="testClass">' . $content . '</li>', $htmlBuilder->render($htmlElementObject));
    }
}
