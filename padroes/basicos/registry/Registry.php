<?php

namespace padroes\basicos\registry;

/**
 *
 */
class Registry 
{
    /**
     * 
     */
    private static $instance = null;
    
    /**
     * 
     */
    private $registry = array();
    
    /**
     * 
     */
    private function __construct() 
    {
        
    }
    
    /**
     * 
     */
    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new Registry();
        }
        
        return self::$instance;
    }
    
    /**
     * 
     */
    public function set($key, $value)
    {
        self::$instance->registry[$key] = $value;
    }
    
    /**
     * 
     */
    public function get($key)
    {
        return self::$instance->registry[$key];
    }    
}