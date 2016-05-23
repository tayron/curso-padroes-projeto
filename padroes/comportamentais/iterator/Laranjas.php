<?php

namespace padroes\comportamentais\iterator;

use padroes\comportamentais\iterator\Laranja;

/**
 *
 */
class Laranjas implements \Iterator 
{    
    /**
     * 
     */
    private $laranjas = array();
    
    /**
     * 
     */
    private $key = 0;
    
    /**
     * 
     */
    public function add(Laranja $laranja)
    {
        $this->laranjas[] = $laranja;
    }
    
    /**
     * 
     */
    public function remove($key)
    {
        unset($this->laranjas[$key]);
    }
    
    /**
     * 
     */
    public function current() 
    {
        return $this->laranjas[$this->key];
    }

    /**
     * 
     */
    public function key() 
    {
        return $this->key;
    }

    /**
     * 
     */
    public function next() 
    {
       $this->key++; 
    }

    /**
     * 
     */
    public function rewind() 
    {
        $this->key = 0;
    }

    /**
     * 
     */
    public function valid() 
    {
        return (isset($this->laranjas[$this->key]));
    }

}
