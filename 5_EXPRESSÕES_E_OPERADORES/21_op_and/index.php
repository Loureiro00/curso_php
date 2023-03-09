<?php

if (5 > 10 && 10 > 5){//false e true
    echo " Entrou no laço 1 <br> ";
}

if (5 < 10 && 10>5){//True  e true 
    echo " Entrou no laço 2 <br> ";
}

if (5 < 10 && 10 < 5){//True  e FALSE 
    echo " Entrou no laço 3 <br> ";
}

if (5 > 10 && 10 < 5){// False e FALSE 
    echo " Entrou no laço 4 <br> ";
}


$a = 10;
$b = 5; 
$c = 12;
$d = 12;

if ($a > $b && $c === $d){
    echo "Entrou no laço 5 <br>";
}
if ($b <= $a && $c >= $d){
    echo "Entrou no laço 6 <br>";
}


if (($b <= $a && $c >= $d) && $a > $b ) {
    echo "Entrou no laço 7 <br>";
}