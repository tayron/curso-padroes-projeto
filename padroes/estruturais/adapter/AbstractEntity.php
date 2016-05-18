<?php

namespace padroes\estruturais\adapter;

/**
 *
 */
class AbstractEntity 
{
    /**
     * 
     */
    const RELATIONAL = 'relational';
    
    /**
     * 
     */
    const DOCUMENT = 'document';
    
    /**
     * 
     */
    private $storageStructure;
    
    /**
     * 
     */
    public function getStorageStructure()
    {
        return $this->storageStructure;
    }
    
    /**
     * 
     */
    public function setStorageStructure($storageStructure)
    {
        $this->storageStructure = $storageStructure;
    }
}
