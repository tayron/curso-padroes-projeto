<?php
require_once('autoload.php');

use padroes\web\templateview\View;

$view = new View();
$view->setPath(__DIR__);
$view->matricula = '9201837465';
$view->nome = 'Rolando Lero';
$view->render('pagina01');