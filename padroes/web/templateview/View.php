<?php

namespace padroes\web\templateview;

/**
 * 
 */
class View 
{
    /**
     * 
     */
    private $attributes = array();
    
    /**
     * 
     */    
    private $path = null;

    /**
     * 
     */    
    public function setPath($path) 
    {
        $this->path = $path;
    }

    /**
     * 
     */    
    public function __get($name) 
    {
        return $this->attributes[$name];
    }

    /**
     * 
     */    
    public function __set($name, $value) 
    {
        $this->attributes[$name] = $value;
    }

    /**
     * 
     */    
    public function render($file)
    {
        require_once $this->path . DIRECTORY_SEPARATOR . $file . '.php';
    }
}