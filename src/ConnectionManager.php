<?php
    class DatabaseManager {
 
        private static $_instances = array();
 
        public static function getInstance($instance_name, $connection_info = array()) {
            if($connection_info) {
                list($db_host, $db_user, $db_pass, $db_name) = $connection_info;
                self::$_instances[$instance_name] = new MySQLi($db_host, $db_user, $db_pass, $db_name);
            }
            return self::$_instances[$instance_name];
        }
    }
 
    function db($instance_name='default', $connection_info = array()){
        return DatabaseManager::getInstance($instance_name, $connection_info);
    }
?>