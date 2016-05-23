<?php

namespace padroes\estruturais\decorator;

/**
 * 
 */
class Escritor 
{
    /**
     * 
     */
    public static function redigir()
    {
        $carta = new Carta();
        $carta->addDecorator(new DataDaCarta());
        $carta->addDecorator(new Saudacao());
        $carta->addDecorator(new PostScriptum());
        $carta->montar();
    }
}
