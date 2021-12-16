<?php

namespace App;

use Closure;
use Exception;

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
        if (!isset($this->bindings[$key])) {
            // can we do some magic??

            if (class_exists($key)) {
                return new $key();
            } 

            throw new Exception('No binding was registered for ' . $key);
        }

        $binding = $this->bindings[$key];


        if ($binding['shared'] && isset($this->singletons[$key])) {
            return $this->singletons[$key];
        }

        if ($binding['concrete'] instanceof Closure) {
        
            if ($binding['shared']) {
                $this->singletons[$key] = $binding['concrete'];
            }
            return $binding['concrete']();
        }

        return $binding['concrete'];
    }
}