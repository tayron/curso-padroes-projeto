<?php
require_once('autoload.php');

use padroes\orm\datagateway\ManipuladorDeAlunos;

$manipuladorDeAlunos = new ManipuladorDeAlunos();
$manipuladorDeAlunos->criarAlunosAleatoriamente();