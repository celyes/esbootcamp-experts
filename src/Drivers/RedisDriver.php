<?php 

require_once "Cacheable.php";

class RedisDriver implements Cacheable
{
    
    protected $redis = [];

    public function set($key, $value)
    {
        $this->redis[$key] = $value;
    }

    public function get($key)
    {
        return $this->redis[$key];
    }
}