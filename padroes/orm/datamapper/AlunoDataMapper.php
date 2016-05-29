<?php

namespace padroes\orm\datamapper;

use padroes\orm\datagateway\Aluno;
use padroes\orm\datagateway\Alunos;
use padroes\orm\datamapper\Db;

/**
 * 
 */
class AlunoDataMapper 
{

    /**
     * 
     */
    private $db = null;

    /**
     * 
     */    
    public function __construct(Db $db) 
    {
        $this->db = $db;
    }

    /**
     * 
     */    
    public function find($matricula) 
    {
        return $this->fetchAll("matricula = $matricula")->current();
    }

    /**
     * 
     */    
    public function fetchAll($where) 
    {
        $where = empty($where) ? '' : " WHERE $where";
        $sql = 'SELECT * FROM aluno' . $where;
        $rs = $this->db->query($sql);
        $alunos = new Alunos(array());
        foreach ($rs as $row) {
            $aluno = new Aluno();
            $aluno->setMatricula($row['matricula']);
            $aluno->setNome($row['nome']);
            $alunos->append($aluno);
        }
        return $alunos;
    }

    /**
     * 
     */    
    public function insert(Aluno $aluno) 
    {
        $sql = "INSERT INTO aluno(matricula,nome) VALUES ({$aluno->getMatricula()},'{$aluno->getNome()}')";
        return $this->db->exec($sql);
    }

    /**
     * 
     */    
    public function update(Aluno $aluno) 
    {
        $sql = "UPDATE aluno SET nome = '{$aluno->getNome()}' WHERE matricula = {$aluno->getMatricula()}";
        return $this->db->exec($sql);
    }

    /**
     * 
     */    
    public function delete(Aluno $aluno) 
    {
        $sql = "DELETE FROM aluno WHERE matricula = {$aluno->getMatricula()}";
        return $this->db->exec($sql);
    }
}