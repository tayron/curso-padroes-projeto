<?php

namespace padroes\criacao;

use padroes\criacao\factory\AbstractDatabaseConnection;

/**
 * 
 */
class Application
{
    /**
     * 
     */
    public static function run()
    {
        try{
            $config = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . 'dbconfig.ini');
            $connection = AbstractDatabaseConnection::factory($config);            
        } catch (Exception $ex) {
            echo $e->getTraceAsString();
        }
    }
}
