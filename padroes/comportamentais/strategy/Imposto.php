<?php

namespace padroes\comportamentais\strategy;

use padroes\comportamentais\strategy\EstrategiaDeCalculo;

/**
 *
 */
class Imposto implements ImpostoInterface
{
    /**
     * 
     */
    public function calcular($renda)
    {
        $estrategia = new EstrategiaDeCalculo();
        return $estrategia->calcular($renda);
    }
}
