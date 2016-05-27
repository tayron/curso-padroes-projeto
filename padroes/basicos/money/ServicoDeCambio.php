<?php

namespace padroes\basicos\money;

use padroes\basicos\money\ICambio;

/**
 * 
 */
class ServicoDeCambio implements ICambio 
{
    /**
     * 
     */
    public function obterTaxa($de, $para)
    {
        if ($de == 'BRL') {
            if ($para == 'USD')
                return 0.5;
            if ($para == 'EUR')
                return 0.25;
        }
        
        if ($de == 'USD') {
            if ($para == 'BRL')
                return 2;
            if ($para == 'EUR')
                return 0.5;
        }
        
        if ($de == 'EUR') {
            if ($para == 'BRL')
                return 3;
            if ($para == 'USD')
                return 2;
        }
        
        return 0;
    }

}
