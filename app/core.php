<?php
namespace App;

/**
 * Class to keep all instances
 */
Class Core
{
    protected static $instances = array();

    public static function __callStatic($name, $arguments)
    {
        if (array_key_exists($name, self::$instances)) {
            return self::$instances[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Property not defined called by __callStatic(): ' . $name .
            ' from ' . $trace[0]['file'] .
            ' at line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }
 
    
    public function getAll()
    {
        return self::$instances;
    }

    public static function set($instance_key, $instance_object)
    {
        if(!array_key_exists($instance_key, self::$instances))
        {
            self::$instances[$instance_key] = $instance_object;
        }

        return self::$instances[$instance_key];
    }

    public static function get($instance_key)
    {
        if(!array_key_exists($instance_key, self::$instances))
        {
            return false;
        }
        return self::$instances[$instance_key];
    }
}