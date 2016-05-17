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

            $adapter = $config['adapter'];
            $username = $config['username'];
            $password = $config['password'];
            $dbname = $config['dbname'];
            $host = $config['host'];
            $port = $config['port'];

            $connection = null;

            if($adapter == 'ORACLE'){
              $connection = new OracleDatabaseConnection($username, $password, $dbname, $host, $port);
            }
            
            if($adapter == 'PGSQL'){
              $connection = new PgsqlDatabaseConnection($username, $password, $dbname, $host, $port);
            }         
            
        } catch (Exception $ex) {
            echo $e->getTraceAsString();
        }
    }
}
