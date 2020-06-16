<?php declare(strict_types=1);
namespace Alura;

require_once "autoload.php";



$correntistas_e_compras = [
    "Giovani",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12",
];
echo "<pre>";
var_dump($correntistas_e_compras);
ArrayUtils::remover("Luis", $correntistas_e_compras);
var_dump($correntistas_e_compras);