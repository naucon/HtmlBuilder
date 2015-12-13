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

use Naucon\HtmlBuilder\HtmlHeadline;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlHeadlineTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'My Headline';

        $htmlElementObject = new HtmlHeadline($content, 1);
        $this->assertEquals('<h1>' . $content . '</h1>', $htmlBuilder->render($htmlElementObject));

        $htmlElementObject = new HtmlHeadline($content, 2);
        $this->assertEquals('<h2>' . $content . '</h2>', $htmlBuilder->render($htmlElementObject));

        $htmlElementObject = new HtmlHeadline($content, 6);
        $this->assertEquals('<h6>' . $content . '</h6>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetLevel()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'My Headline';

        $htmlElementObject = new HtmlHeadline($content, 1);
        $this->assertEquals('<h1>' . $content . '</h1>', $htmlBuilder->render($htmlElementObject));

        $htmlElementObject->setLevel(2);
        $this->assertEquals('<h2>' . $content . '</h2>', $htmlBuilder->render($htmlElementObject));

        $htmlElementObject->setLevel(6);
        $this->assertEquals('<h6>' . $content . '</h6>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'My Headline';

        $htmlElementObject = new HtmlHeadline($content, 1);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<h1 id="testId">' . $content . '</h1>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'My Headline';

        $htmlElementObject = new HtmlHeadline($content, 1);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<h1 class="testClass">' . $content . '</h1>', $htmlBuilder->render($htmlElementObject));
    }
}
