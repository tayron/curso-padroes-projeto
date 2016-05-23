<?php

namespace padroes\comportamentais\iterator;

use padroes\comportamentais\iterator\Laranja;

/**
 *
 */
class Espremedor 
{
    /**
     * 
     */
    public static function espremer()
    {
        $laranjas = array();
        
        for($i = 0; $i < 5; $i++){
            $laranjas[$i] = new Laranja();
        }
        
        $count = count($laranjas);
        
        for($i = 0; $i < 5; $i++){
            $laranjas[$i]->espremer();
        }
    }    
}
