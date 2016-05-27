<?php

namespace padroes\basicos\money;

use padroes\basicos\money\Moeda;
use padroes\basicos\money\ServicoDeCambio;

/**
 *
 */
class Cambista 
{
    /**
     * 
     */
    public static function cambiar()
    {
        $real = new Moeda('pt_BR');
        $dolar = new Moeda('en_US');
        
        $real->setValor(5.60);
        $dolar->setValor(2.40);
        
        $real->adicionarServicoDeCambio(new ServicoDeCambio());
        
        try{            
            $valorReal = $real->getSimbolo() . ' ' . $real;
            $valorDolar = $real->getSimbolo() . ' ' . $dolar;
            $resultadoReal = $real->getSimbolo() . ' ' . $real->somar($dolar);
            
            echo 'A soma de ' . $valorReal . ' com ' . $valorDolar . ' é igual a ' . $resultadoReal;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
