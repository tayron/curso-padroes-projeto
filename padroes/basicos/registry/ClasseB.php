<?php

namespace padroes\basicos\registry;

use padroes\basicos\registry\Registry;

/**
 * 
 */
class ClasseB 
{

    /**
     * 
     */
    public function relateOQueFez() 
    {
        $data = Registry::getInstance()->get('data');

        echo 'Eu, objeto B, recuperei uma data, que é ' . $data->format('d/m/Y');
    }
}