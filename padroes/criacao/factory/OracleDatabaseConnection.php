<?php

namespace padroes\criacao\factory;

/**
 * 
 */
class OracleDatabaseConnection extends AbstractDatabaseConnection 
{
    /**
     * 
     */
    public function insert($model)
    {
        parent::insert($model);
    }
    
    /**
     * 
     */
    public function update($model)
    {
        parent::update($model);
    }
    
    /**
     * 
     */
    public function delete($model)
    {
        parent::delete($model);
    }
    
    /**
     * 
     */
    public function select($criteria)
    {
        return parent::select($criteria);
    }    
}
