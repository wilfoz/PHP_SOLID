<?php

namespace Wilerfoz\Solid\Tag;

class Img {
    public function render(string $src) {
        return '<img src="'.$src.'">';
    }
}