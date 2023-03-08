<?php

echo 5/2;
echo "<br>";

if(is_float(5/2)){

    echo "é float <br>";
}

echo 2 . 3 ;
echo "<br>";

if(is_string(2 . 3)){
    echo "É string <br> ";
}


$nome = "Pedro Henrique";
$sobrenome = "Loureiro";

$nomeCompleto = $nome.  "  "  . $sobrenome;

echo $nomeCompleto;
echo"<br>";