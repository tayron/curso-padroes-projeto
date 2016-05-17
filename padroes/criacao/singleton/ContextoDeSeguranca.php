<?php

namespace padroes\criacao\singleton;

/**
 *
 */
class ContextoDeSeguranca 
{
    /**
     *
     */
    private static $contextoDeSseguranca = null;
    
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
        if(self::$contextoDeSseguranca == null){
            self::$contextoDeSseguranca = new ContextoDeSeguranca();
        }
        
        return self::$contextoDeSseguranca;
    }
    
}
