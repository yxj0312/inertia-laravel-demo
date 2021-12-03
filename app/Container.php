<?php

namespace App;

class Container 
{
    protected array $bindings = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    public function get($key)
    {
        return $this->bindings[$key];
    }
}