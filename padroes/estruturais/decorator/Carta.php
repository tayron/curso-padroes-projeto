<?php

namespace padroes\estruturais\decorator;

/**
 *
 */
class Carta 
{
    /**
     * 
     */
    private $decorators = array();
    
    /**
     * 
     */
    public function addDecorator(ICarta $decorator)
    {
        $this->decorators[] = $decorator;
    }
    
    /**
     * 
     */
    public function montar()
    {
        foreach($this->decorators as $decorator){
            $decorator->montar();
        }
    }
}
