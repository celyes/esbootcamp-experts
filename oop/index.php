<?php 
require_once "src/Cache.php";
require_once "src/Drivers/FileDriver.php";
require_once "src/Drivers/MemcachedDriver.php";
require_once "src/Drivers/RedisDriver.php";

$cache = new Cache(new FileDriver());

$cache->set("key", "value");
$cache->set("key2", "value2");
$cache->set("key3", "value3");
echo $cache->get("key");
