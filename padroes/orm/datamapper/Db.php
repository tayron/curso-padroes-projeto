<?php

namespace padroes\orm\datamapper;

use PDO;

/**
 * 
 */
class Db extends PDO 
{

    /**
     * 
     */
    public static function getInstance(array $config) 
    {
        $dsn = $config['dsn'];
        $username = $config['username'];
        $passwd = $config['passwd'];
        return new Db($dsn, $username, $passwd, null);
    }
}