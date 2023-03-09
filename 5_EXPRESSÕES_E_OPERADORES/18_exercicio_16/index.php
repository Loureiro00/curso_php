<?php

/*
    Insira o valor 5 em uma váriavel, e o valor 3 em outra
    teste os operadores de : igualdade,diferença, identico e não identico
    ==,!=, ===, !==
*/


$a = 5;
$b = 3;

// igualdade 

if($a == $b){
    echo $a. "  é igual a : " . $b . "<br>";
}

// diferença 

if($a != $b){
    echo $a. " é diferente de   : " . $b ."<br>";
}

// identico a 
if($a === $b){
    echo $a. " é identico  a : " . $b . "<br>";
}
// ñ identico
if($a !== $b){
    echo $a. " não  é identico  a : " . $b . "<br>";
}

