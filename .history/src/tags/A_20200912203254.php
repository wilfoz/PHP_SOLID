<?php

namespace Wilerfoz\Solid;

class A {
    public function render(string $href, string $ancora) {
        return '<a href="'.$href.'">'.$ancora.'</a>';
    }
}