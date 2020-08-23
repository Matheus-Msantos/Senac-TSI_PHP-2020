<?php

$saldo = 34.5; //Operador de atribuição

//Aspas duplas aceitam strings especial
echo "Seu saldo é  $saldo <br>";

/* ASPAS SIMPLES ACITEM APENAS STRINGS PURAS
echo 'Seu saldo é  $saldo';
*/

/*
$saldo = $saldo - 10; 
echo "Agora seu saldo é $saldo <br>";
*/

$saldo -= 10; //Operador de subtração
echo "Agora seu saldo é $saldo <br>";

$saldo = $saldo * 1000; //Operador de multiplicação
echo "Seu saldo subiu para $saldo";

