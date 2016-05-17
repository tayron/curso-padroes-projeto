<?php

namespace padroes\criacao\singleton;

/**
 * 
 */
class JogadorDeXadrez 
{
    /**
     *
     */
    private static $jogadores = array(null, null);
    
    /**
     * 
     */
    private function __construct() 
    {
        
    }
    
    /**
     * 
     */
    public static function __callStatic($method, array $arguments) 
    {
        $prefix = 'getJogador';
        
        if(substr($method, 0, strlen($prefix)) == $prefix){
            $key = (int) str_replace($prefix, null, $method);
            
            $numInstancias = $key - 1;            
            
            if($key > count(self::$jogadores)){
                throw new \Exception('Não se pode criar mais que 2 instâncias de jogadores');
            }
            
            if(self::$jogadores[$numInstancias] == null){
                self::$jogadores[$numInstancias] = new static();
            }
        
            return self::$jogadores[$numInstancias];
        }
    }
    
    /**
     * Prevent cloning.
     *
     * @throws \RuntimeException
     */
   final public function __clone()
   {
       throw new \RuntimeException('Não é permitido clonar um jogador para a classe ' . get_class($this));
   }    
}


