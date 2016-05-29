<?php

namespace padroes\orm\activerecord;

use \padroes\orm\datagateway\Aluno;
use \padroes\orm\datamapper\AlunoDataMapper;

/**
 *
 */
class AlunoModel extends Aluno
{
    /**
     *
     */
    private $dataMapperAluno = null;
    
    /**
     * 
     */
    public function setDataMapperAluno(AlunoDataMapper $dataMapperAluno)
    {
        $this->dataMapperAluno = $dataMapperAluno;
    }
    
    /**
     * 
     */
    public function save()
    {
       $aluno = $this->dataMapperAluno->find($this->getMatricula());
       
       if($aluno === null){
           $this->dataMapperAluno->insert($this);
       }else{
           $this->dataMapperAluno->update($this);
       }
    }
    
    /**
     * 
     */
    public function remove()
    {
        $this->dataMapperAluno->delete($this);
        $this->setMatricula(null);
        $this->setNome(null);
    }
}
