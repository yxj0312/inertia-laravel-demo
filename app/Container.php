<?php

namespace App;

use Closure;

class Container 
{
    protected array $bindings = [];
    protected array $singletons = [];

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
        $concrete =  $this->bindings[$key]['concrete'];

        if ($this->bindings[$key]['shared'] && isset($this->singletons[$key])) {
            return $this->singletons[$key];
        }

        if ($concrete instanceof Closure) {
            $concrete = $concrete();

            if ($this->bindings[$key]['shared']) {
                $this->singletons[$key] = $concrete;
            }
            return $concrete;
        }

        return $concrete;
    }
}