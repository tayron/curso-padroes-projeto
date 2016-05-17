<?php

namespace padroes\criacao\factory;

/**
 *
 */
class AbstractDatabaseConnection implements IDatabaseConnection
{
    /**
     * 
     */
    public function __construct($username = null, $password = null, $dbname = null, $host = null, $port = null) 
    {
        if($username && $password && $dbname){
            $this->connect($username, $password, $dbname, $host);
        }
    }
    
    /**
     * 
     */
    public function connect($username, $password, $dbname, $host, $port = null)
    {
        
    }
    
    /**
     * 
     */
    public function insert($model)
    {
        
    }
    
    /**
     * 
     */
    public function update($model)
    {
        
    }
    
    /**
     * 
     */
    public function delete($model)
    {
        
    }    
    
    /**
     * 
     */
    public function select($criteria)
    {
        return null;
    }    
}