<?php
require_once('autoload.php');

use padroes\basicos\registry\ClasseA;
use padroes\basicos\registry\ClasseB;

$classeA = new ClasseA();
$classeB = new ClasseB();

$classeA->relateOQueFez();
$classeB->relateOQueFez();