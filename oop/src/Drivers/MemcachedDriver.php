<?php 

class MemcachedDriver implements Cacheable
{
    
    protected $memcached = [];

    public function set($key, $value)
    {
        $this->memcached[$key] = $value;
    }

    public function get($key)
    {
        return $this->memcached[$key];
    }
}