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

use Naucon\HtmlBuilder\HtmlMetaRobots;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlMetaRobotsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'index,follow';

        $htmlElementObject = new HtmlMetaRobots();
        $this->assertEquals('<meta name="robots" content="' . $content . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testInitWithNoFollow()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'index,nofollow';

        $htmlElementObject = new HtmlMetaRobots(true, false);
        $this->assertEquals('<meta name="robots" content="' . $content . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testInitWithNoIndex()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'noindex,follow';

        $htmlElementObject = new HtmlMetaRobots(false);
        $this->assertEquals('<meta name="robots" content="' . $content . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testInitWithNoIndexAndNoFollow()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'noindex,nofollow';

        $htmlElementObject = new HtmlMetaRobots(false, false);
        $this->assertEquals('<meta name="robots" content="' . $content . '" />', $htmlBuilder->render($htmlElementObject));
    }
}
