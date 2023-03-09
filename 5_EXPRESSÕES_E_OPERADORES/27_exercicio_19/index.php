<?php

/*
    Converta os seguintes dados para int com o operador de cast;
    "testando"
     12.9
     true
     [1,2,3]
     e veja os resultados

*/


$a  = (int)"testando";
if(is_int($a)){

    echo $a . "<br>";
}

$b = (int) 12.9;
if(is_int($b)){

    echo $b . "<br>";
}



$c = (int) "true";

if(is_int($c)){

    echo $c . "<br>";
}

$d = (int) [1,2,3];

if(is_int($d)){

    echo $d . "<br>";
}

$t = (bool) 23;
if(is_int($t)){

    echo " A variavel  é  do tipo int oi <br> ";
}