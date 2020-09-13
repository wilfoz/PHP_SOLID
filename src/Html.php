<?php

namespace Wilerfoz\Solid;

class Html {
    public function __call(string $name, array $arguments) {
        $class = '\Wilerfoz\Solid\Tag\\'. ucfirst($name);
        return call_user_func_array([new $class, 'render'], $arguments);
    }
}