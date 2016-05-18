<?php
require_once('autoload.php');

use padroes\criacao\factory\AbstractDatabaseConnection;

$properties = array(
    'adapter' => 'Oracle',
    'username' => 'userx',
    'password' => 'passwx',
    'dbname' => 'dbx',
    'host' => 'localhost',
    'port' => '42'
    );

$connection = AbstractDatabaseConnection::factory($properties);

echo get_class($connection);
