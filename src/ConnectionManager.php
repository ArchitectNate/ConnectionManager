<?php
namespace TPE\ConnectionManager;

class ConnectionManager {

    private static $instances = array();

    public static function getInstance($instance_name='default', $connection) {
        if($connection) {
            self::$instances[$instance_name] = $connection;
        }

        if(array_key_exists($instance_name, self::$instances))
        {
            return self::$instances[$instance_name];
        }

        return null;
    }
}

?>
