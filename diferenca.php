<?php declare(strict_types=1);
namespace Alura;

require_once "autoload.php";
echo "<pre>";


$correntistas = [
    "Giovani",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael",
];

$correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
];


$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

var_dump($correntistasPagantes);
