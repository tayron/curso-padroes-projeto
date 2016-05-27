<?php

namespace padroes\basicos\money;

use padroes\basicos\money\Moeda;

/**
 *
 */
class FabricaDeMoeda
{
    /**
     *
     */
    public static function obterMoeda(Moeda $moeda)
    {
        $locale = $moeda->getLocale();

        if ($locale == 'pt_BR') {
            $moeda->setMoeda('BRL');
            $moeda->setNome('Real brasileiro');
            $moeda->setSimbolo('R$');
            $moeda->setSeparadorDaParteInteira(',');
            $moeda->setPrecisao(2);
        }

        if ($locale == 'en_US') {
            $moeda->setMoeda('USD');
            $moeda->setNome('US Dollar');
            $moeda->setSimbolo('$');
            $moeda->setSeparadorDaParteInteira('.');
            $moeda->setPrecisao(2);
        }

        if ($locale == 'de_DE') {
            $moeda->setMoeda('EUR');
            $moeda->setNome('Euro');
            $moeda->setSimbolo('€');
            $moeda->setSeparadorDaParteInteira(',');
            $moeda->setPrecisao(2);
        }
    }
}