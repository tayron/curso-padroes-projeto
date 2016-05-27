<?php

namespace padroes\basicos\money;

/**
 * 
 */
interface ICambio
{
    /**
     * 
     */
    public function obterTaxa($de, $para);
}