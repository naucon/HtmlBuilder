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

use Naucon\HtmlBuilder\HtmlDiv;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlElementAbstractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testGetTag()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $this->assertEquals('div', $htmlElementObject->getTag());
    }

    /**
     * @return    void
     */
    public function testRender()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setClass('level1');

        $htmlElementChildObject = new HtmlDiv();
        $htmlElementChildObject->setClass('level11');
        $htmlElementObject->addChildElement($htmlElementChildObject);

        $htmlElementChild2Object = new HtmlDiv();
        $htmlElementChild2Object->setClass('level111');
        $htmlElementChildObject->addChildElement($htmlElementChild2Object);

        $expected = '<div class="level1">';
        $expected .= '<div class="level11">';
        $expected .= '<div class="level111" />';
        $expected .= '</div>';
        $expected .= '</div>';

        $this->assertEquals($expected, $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testRenderStartTag()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setClass('level1');

        $htmlElementChildObject = new HtmlDiv();
        $htmlElementChildObject->setClass('level11');
        $htmlElementObject->addChildElement($htmlElementChildObject);

        $htmlElementChild2Object = new HtmlDiv();
        $htmlElementChild2Object->setClass('level111');
        $htmlElementChildObject->addChildElement($htmlElementChild2Object);

        $this->assertEquals('<div class="level1">', $htmlBuilder->renderStartTag($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testRenderEndTag()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlDiv();
        $htmlElementObject->setClass('level1');

        $htmlElementChildObject = new HtmlDiv();
        $htmlElementChildObject->setClass('level11');
        $htmlElementObject->addChildElement($htmlElementChildObject);

        $htmlElementChild2Object = new HtmlDiv();
        $htmlElementChild2Object->setClass('level111');
        $htmlElementChildObject->addChildElement($htmlElementChild2Object);

        $this->assertEquals('</div>', $htmlBuilder->renderEndTag($htmlElementObject));
    }
}
