<?php

namespace Wilerfoz\Solid;

class Html {
    public function img(string $src) {
        return '<img src="'.$src.'">';
    }

    public function img(string $href, string $ancora) {
        return '<a href="'.$href.'">'.$ancora.'</a>';
    }
}