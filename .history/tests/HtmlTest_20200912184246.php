<?php

namespace Wilerfoz\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testExemplo()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }
}