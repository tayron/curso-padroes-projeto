<?php
require_once('autoload.php');

use padroes\comportamentais\observer\Bombeiro;
use padroes\comportamentais\observer\Predio;

$predio = new Predio();
$predio->attach(new Bombeiro());

$predio->setTemperatura(80);