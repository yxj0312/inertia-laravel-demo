<?php

namespace App;

class Container 
{
    protected array $bindings = [];

    

    public function bind($key, $concrete, $shared = false)
    {
        $this->bindings[$key] = [
            'concrete' => $concrete,
            'shared' => $shared
        ];
    }

    public function singleton($key, $concrete)
    {
        $this->bind($key, $concrete, true);
    }

    public function get($key)
    {
        return $this->bindings[$key];
    }
}