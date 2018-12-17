<?php

require_once "../vendor/autoload.php";

use App\CarroPopular;
use App\CarroSedan;
use App\FabricaFiat;
use App\Palio;
use App\Siena;

$fabrica = new FabricaFiat();
$sedan = $fabrica->criarCarroSedan();
$popular = $fabrica->criarCarroPopular();
$sedan->exibirInfoSedan();
$popular->exibirInfoPopular();
