<?php

$a = (int) "12";
echo $a . "<br>";
echo $a + 10 . "<br>";

if ($a === 12){
    echo " A é identico a 12  <br>";
}


$b = (float) "3.14843824";

if ($b === 3.14843824){
    echo " B é identico a Pi <br>";
}

$c = (string) 34;

echo $c . "<br>";

if(is_string($c)){
    echo "É string <br> ";
}
