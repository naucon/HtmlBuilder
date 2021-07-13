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

use Naucon\HtmlBuilder\HtmlImage;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlImageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlImage($src);
        $this->assertEquals('<img src="' . $src . '" />', $htmlBuilder->render($htmlElementObject));

        $src = 'foo.png';
        $alt = 'foo';

        $htmlElementObject = new HtmlImage($src, $alt);
        $this->assertEquals('<img src="' . $src . '" alt="' . $alt . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetWidth()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';
        $width = 100;

        $htmlElementObject = new HtmlImage($src);
        $htmlElementObject->setWidth(100);
        $this->assertEquals('<img src="' . $src . '" width="' . $width . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetHeight()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';
        $height = 100;

        $htmlElementObject = new HtmlImage($src);
        $htmlElementObject->setHeight(100);
        $this->assertEquals('<img src="' . $src . '" height="' . $height . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlImage($src);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<img src="' . $src . '" id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlImage($src);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<img src="' . $src . '" class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }

    public function testSetLoading()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlImage($src);
        $htmlElementObject->setLoading('eager');
        $this->assertEquals('<img src="' . $src . '" loading="eager" />', $htmlBuilder->render($htmlElementObject));
    }

    public function testSetLoadingWithWrongValue()
    {
        $htmlBuilder = new HtmlBuilder();

        $src = 'foo.png';

        $htmlElementObject = new HtmlImage($src);
        $htmlElementObject->setLoading('xyz');
        $this->assertEquals('<img src="' . $src . ' />', $htmlBuilder->render($htmlElementObject));
    }
}
