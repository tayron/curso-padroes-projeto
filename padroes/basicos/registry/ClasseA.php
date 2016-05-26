<?php

namespace padroes\basicos\registry;

use padroes\basicos\registry\Registry;

/**
 *
 */
class ClasseA 
{
    /**
     * 
     */
    public function relateOQueFez()
    {
        $data = new \DateTime();
        $data->setDate(2014, 2, 29);
        
        Registry::getInstance()->set('data', $data);
        
        echo 'Eu, objeto A, guardei uma data, que é ' 
            .   $data->format('d/m/Y') . '<br />';
    }
}