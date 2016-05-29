<?php

namespace padroes\orm\datagateway;

use padroes\orm\datagateway\Aluno;
use padroes\orm\datagateway\Alunos;

/**
 *
 */
class ManipuladorDeAlunos 
{
    /**
     * 
     */
    public static function criarAlunosAleatoriamente()
    {
        $alunos = new Alunos();
        
        for($i = 1; $i <= 10; $i++ ){
            
            $aluno = new Aluno();
            $aluno->setMatricula($i * 1000);
            $aluno->setNome('aluno' . ($i * 1000));
            
            $alunos->append($aluno);
        }
        
        foreach($alunos as $aluno){
            echo $aluno->getNome() . '<br />';
        }
    }
}
