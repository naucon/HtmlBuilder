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

use Naucon\HtmlBuilder\HtmlForm;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlFormTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $method = 'get';

        $htmlElementObject = new HtmlForm($method);
        $this->assertEquals('<form method="' . $method . '" />', $htmlBuilder->render($htmlElementObject));

        $method = 'post';
        $action = '/action';

        $htmlElementObject = new HtmlForm($method, $action);
        $this->assertEquals('<form method="' . $method . '" action="' . $action . '" />', $htmlBuilder->render($htmlElementObject));

        $method = 'post';
        $action = '/action';
        $enctype = 'multipart/form-data';

        $htmlElementObject = new HtmlForm($method, $action, $enctype);
        $this->assertEquals('<form method="' . $method . '" action="' . $action . '" enctype="' . $enctype . '" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $method = 'post';
        $action = '/action';

        $htmlElementObject = new HtmlForm($method, $action);
        $htmlElementObject->setId('testId');
        $this->assertEquals('<form method="' . $method . '" action="' . $action . '" id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $method = 'post';
        $action = '/action';

        $htmlElementObject = new HtmlForm($method, $action);
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<form method="' . $method . '" action="' . $action . '" class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
