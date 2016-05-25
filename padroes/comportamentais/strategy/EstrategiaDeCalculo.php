<?php

namespace padroes\comportamentais\strategy;

/**
 *
 */
class EstrategiaDeCalculo implements ImpostoInterface
{
    /**
     * 
     */
    public function calcular($renda)
    {
        $calculador = new ImpostoClasseA();
        
        if($this->estaEntre($renda, 0, 1000)){
            $calculador = new ImpostoClasseD();
        }
        
        if($this->estaEntre($renda, 1001, 2000)){
            $calculador = new ImpostoClasseC();
        }
        
        if($this->estaEntre($renda, 2001, 3000)){
            $calculador = new ImpostoClasseB();
        }
        
        return $calculador->calcular($renda);
    }
    
    /**
     * 
     */
    private function estaEntre($valor, $valor1, $valor2)
    {
        return ($valor >= $valor1 && $valor <= $valor2);
    }
}
