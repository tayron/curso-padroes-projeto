<?php

namespace padroes\comportamentais\iterator;

use padroes\comportamentais\iterator\Laranja;

/**
 *
 */
class EspremedorComMenuIterator 
{
    /**
     * 
     */
    public static function espremer()
    {
        $laranjas = new Laranjas();
        
        for($i = 0; $i < 5; $i++){
            $laranjas->add(new Laranja());
        }
        
        foreach($laranjas as $laranja){
            $laranja->espremer();
        }
    }
}
