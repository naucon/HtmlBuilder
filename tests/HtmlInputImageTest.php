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

use Naucon\HtmlBuilder\HtmlInputImage;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlInputImageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlInputImage($src);
        $this->assertEquals('<input type="image" src="' . $src . '" />', $htmlBuilder->render($htmlElementObject));

        $src = 'foo.png';
        $alt = 'foo';

        $htmlElementObject = new HtmlInputImage($src, $alt);
        $this->assertEquals('<input type="image" src="' . $src . '" alt="' . $alt . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlInputImage($src);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<input type="image" src="' . $src . '" id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlInputImage($src);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<input type="image" src="' . $src . '" class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
