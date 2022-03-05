<?php

interface Cacheable
{
    public function set($key, $value);
    public function get($key);
}