<?php

namespace padroes\basicos\gateway;

use padroes\basicos\gateway\FolhaDePagamento;
use padroes\basicos\gateway\ContasAPagar;

/**
 * 
 */
class Custos 
{
    /**
     * 
     */
    public function getCustos($mes) 
    {
        $folhaDePagamento = new FolhaDePagamento();
        $contasAPagar = new ContasAPagar();

        $custoTotal = $folhaDePagamento->getVencimentosPagos($mes) + $contasAPagar->contasPagas($mes);

        return $custoTotal;
    }

}
