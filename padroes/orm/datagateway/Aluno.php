<?php

namespace padroes\orm\datagateway;

/**
 *
 */
class Aluno 
{
    /**
     *
     */
    private $matricula;
    
    /**
     * 
     */
    private $nome;
    
    /**
     * 
     */
    function getMatricula() 
    {
        return $this->matricula;
    }

    /**
     * 
     */
    function setMatricula($matricula) 
    {
        $this->matricula = $matricula;
    }
    
    /**
     * 
     */
    function getNome() 
    {
        return $this->nome;
    }

    /**
     * 
     */
    function setNome($nome) 
    {
        $this->nome = $nome;
    }
}