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
            array('ÁÉÍÓÚÝáéíóúýÂÊÎÔÛâêîôûÀÈÌÒÙàèìòùÄËÏÖÜäëïöüÿÃãÕõÅåÑñÇç@°ºªß', "&#195;&#129;&#195;&#137;&#195;&#141;&#195;&#147;&#195;&#154;&#195;&#157;&#195;&#161;&#195;&#169;&#195;&#173;&#195;&#179;&#195;&#186;&#195;&#189;&#195;&#130;&#195;&#138;&#195;&#142;&#195;&#148;&#195;&#155;&#195;&#162;&#195;&#170;&#195;&#174;&#195;&#180;&#195;&#187;&#195;&#128;&#195;&#136;&#195;&#140;&#195;&#146;&#195;&#153;&#195;&#160;&#195;&#168;&#195;&#172;&#195;&#178;&#195;&#185;&#195;&#132;&#195;&#139;&#195;&#143;&#195;&#150;&#195;&#156;&#195;&#164;&#195;&#171;&#195;&#175;&#195;&#182;&#195;&#188;&#195;&#191;&#195;&#131;&#195;&#163;&#195;&#149;&#195;&#181;&#195;&#133;&#195;&#165;&#195;&#145;&#195;&#177;&#195;&#135;&#195;&#167;@&#194;&#176;&#194;&#186;&#194;&#170;&#195;&#159;", "ÁÉÍÓÚÝáéíóúýÂÊÎÔÛâêîôûÀÈÌÒÙàèìòùÄËÏÖÜäëïöüÿÃãÕõÅåÑñÇç@°ºªß"),
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
