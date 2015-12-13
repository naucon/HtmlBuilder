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

use Naucon\HtmlBuilder\HtmlTitle;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlTitleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $content = 'My page title';

        $htmlBuilder = new HtmlBuilder();
        $htmlElementObject = new HtmlTitle($content);
        $this->assertEquals('<title>' . $content . '</title>', $htmlBuilder->render($htmlElementObject));
    }
}
