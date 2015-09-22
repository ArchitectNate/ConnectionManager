<?php
use TPE\ConnectionManager\ConnectionManager;

if(!function_exists("db")) {
    function db($instance_name='default', $connection = null){
        return ConnectionManager::getInstance($instance_name, $connection);
    }
} else {
    throw new Exception("Connection Manager: a method named 'db' already exists, cannot create 'db' wrapper.");
}