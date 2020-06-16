<?php
//----------- iterando comn numeros
// $saldos = [
//     2500,
//     3000,
//     4400,
//     1000,
//     8700,
//     9000
// ];

// foreach ($saldos as $saldo) {
//     echo "<p> O saldo é $saldo";
// }
echo "<pre>";

// sort($saldos);

// //echo "<p> O menor saldo é $saldos[0]";

//-------------- iterando sobre strings

$nomes = "Giovani, João, Maria, Pedro";
$array_nomes = explode(", ", $nomes);
foreach($array_nomes as $nome) {
    echo "<p>Olá $nome</p>";
}

//var_dump($array_nomes);

$nomesJuntos = implode(", ", $array_nomes);
echo $nomesJuntos;