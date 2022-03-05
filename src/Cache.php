<?php


class Cache 
{

    protected $driver;

    public function __construct(Cacheable $driver)
    {
        $this->driver = $driver;
    }

    public function set($key, $value)
    {
        return $this->driver->set($key, $value);
    }

    public function get($key)
    {
        return $this->driver->get($key);
    }
}