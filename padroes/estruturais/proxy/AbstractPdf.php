<?php

namespace padroes\estruturais\proxy;

/**
 *
 */
abstract class AbstractPdf 
{
    /**
     *
     */
    protected $pages = array();
    
    /**
     * 
     */
    public function addPage(Page $page)
    {
        $this->pages[] = $page;
    }
    
    /**
     * 
     */
    public function setContentPage($number, $content)
    {
        $this->pages[$number]->setContent($content);
    }
    
    /**
     * 
     */
    public function createIndex()
    {
        
    }
    
    /**
     * 
     */
    abstract function generate();
}