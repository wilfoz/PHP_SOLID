<?php

namespace Wilerfoz\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderizaImagem()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testRenderizaImagem()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');
        $link = $html->a('http://meusite.com/perfil', $img)

        $this->assertEquals('<a href="http://meusite.com/perfil"><img src="images/photo.jpg"></a>', $link);
    }
}
}