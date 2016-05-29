<?php
require_once('autoload.php');

use padroes\orm\datamapper\AlunoDataMapper;
use padroes\orm\activerecord\AlunoModel;
use padroes\orm\datamapper\Db;


$config = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . 'db.ini');

$db = Db::getInstance($config);

$alunoMapper = new AlunoDataMapper($db);

$alunoModel = new AlunoModel();
$alunoModel->setDataMapperAluno($alunoMapper);

$alunoModel->setMatricula(2);
$alunoModel->setNome('Bolinha');
$alunoModel->save();

echo "Registro inserido.";