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

use Naucon\HtmlBuilder\HtmlElement;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlElementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('div');
        $this->assertEquals('<div />', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';

        $htmlElementObject = new HtmlElement('div', $content);
        $this->assertEquals('<div>' . $content . '</div>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('div');
        $htmlElementObject->setAttribute('id', 'testId');
        $this->assertEquals('<div id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('div');
        $htmlElementObject->setAttribute('class', 'testClass');
        $this->assertEquals('<div class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return array
     */
    public function xssProvider()
    {
        return array(
            array('"xss', "&#34;xss", "&#34;xss"),
            array('\'xss', "&#39;xss", "&#39;xss"),
            array('<xss', "", ""),
            array('>xss', ">xss", ">xss"),
            array('&xss', "&#38;xss", "&#38;xss"),
            array('/xss', "/xss", "/xss"),
            array(' xss', " xss", " xss"),
            array('<fo>xss</fo>', "xss", "xss"),
            array('\\', "\\", "\\"),
            array('/', "/", "/"),
            array('-', "-", "-"),
            array('.,;:', ".,;:", ".,;:"),
            array('ÁÉÍÓÚÝáéíóúýÂÊÎÔÛâêîôûÀÈÌÒÙàèìòùÄËÏÖÜäëïöüÿÃãÕõÅåÑñÇç@°ºªß', "ÁÉÍÓÚÝáéíóúýÂÊÎÔÛâêîôûÀÈÌÒÙàèìòùÄËÏÖÜäëïöüÿÃãÕõÅåÑñÇç@°ºªß", "ÁÉÍÓÚÝáéíóúýÂÊÎÔÛâêîôûÀÈÌÒÙàèìòùÄËÏÖÜäëïöüÿÃãÕõÅåÑñÇç@°ºªß"),
        );
    }

    /**
     * @dataProvider xssProvider
     */
    public function testAttributeXss($injection, $escapedAttribute, $escapedContent)
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('input');
        $htmlElementObject->setAttribute('value', $injection);
        $this->assertEquals('<input value="' . $escapedAttribute . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @dataProvider xssProvider
     */
    public function testContentXss($injection, $escapedAttribute, $escapedContent)
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlElement('textarea');
        $htmlElementObject->setContent($injection);
        $this->assertEquals('<textarea>' . $escapedContent .'</textarea>', $htmlBuilder->render($htmlElementObject));
    }
}
