<?php

namespace padroes\comportamentais\observer;

use SplSubject;

/**
 *
 */
class Predio implements SplSubject
{
    /**
     *
     */
    private $observers = array();
    
    /**
     *
     */
    private $temperatura = 0;
    
    /**
     * 
     */
    public function getTemperatura()
    {
        return $this->temperatura;
    }
    
    /**
     * 
     */
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;
        
        if($this->temperatura > 30){
            $this->notify();
        }
    }
    
    /**
     * 
     */
    public function resfriar()
    {
        $this->temperatura--;
    }
    
    /**
     * 
     */
    public function attach(\SplObserver $observer) 
    {
        $this->observers[] = $observer;
    }

    /**
     * 
     */
    public function detach(\SplObserver $observer) 
    {
        $key = array_search($observer, $this->observers);
        if($key !== false){
            unset($this->observers[$key]);
        }
    }

    /**
     * 
     */
    public function notify() 
    {
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
}