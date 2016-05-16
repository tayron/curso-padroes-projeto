<?php
require_once('autoload.php');

use padroes\criacao\singleton\ContextoDeSeguranca;

$cds1 = ContextoDeSeguranca::getInstance();
$cds2 = ContextoDeSeguranca::getInstance();

if($cds1 == $cds2){
    echo '$cds1 tem o mesmo objeto de $cds2';
}else{
    echo '$cds1 não tem o mesmo objeto de $cds2';
}