<?php

namespace padroes\comportamentais\observer;

use SplObserver;

/**
 *
 */
class Bombeiro implements SplObserver
{
    /**
     * 
     */
    public function update(\SplSubject $subject) 
    {
        $this->irAteOLocal($subject);
        $this->erguerEscadaMagirus($subject);
        $this->abrirHidrante($subject);
        
        while($subject->getTemperatura() > 39){
            $this->jogarAgua($subject);
        }
    }
    
    /**
     *
     */
    private function irAteOLocal(\SplSubject $subject)
    {
        
    }

    /**
     * 
     */
    private function erguerEscadaMagirus(\SplSubject $subject)
    {
        
    }
    
    /**
     * 
     */
    private function abrirHidrante(\SplSubject $subject)
    {
        
    }
    
    /**
     * 
     */
    private function jogarAgua(\SplSubject $subject)
    {
        echo htmlentities('Jogando água...', null, 'UTF-8');
        echo 'Temperatura = ' . $subject->getTemperatura() . 'º... <br />';
        $subject->resfriar();        
    }
}
