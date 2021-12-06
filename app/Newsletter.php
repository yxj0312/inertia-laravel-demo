<?php

namespace App;

use Closure;

class Newsletter
{
    protected array $bindings = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    public function get($key)
    {
        $concrete = $this->bindings[$key];
        if ($concrete instanceof Closure) {
            return $concrete();
        }
        return $concrete;
    }
}