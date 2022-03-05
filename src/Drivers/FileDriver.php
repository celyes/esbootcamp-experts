<?php

require_once "Cacheable.php";

class FileDriver implements Cacheable
{
    
    protected $file = [];

    public function set($key, $value)
    {
        $this->file[$key] = $value;
    }

    public function get($key)
    {
        return $this->file[$key];
    }
}