<?php

namespace Wilerfoz\Solid;

class Img {
    public function render(string $src) {
        return '<img src="'.$src.'">';
    }
}