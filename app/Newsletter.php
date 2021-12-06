<?php

namespace App;

class Newsletter
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