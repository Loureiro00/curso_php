<?php

$teste = "asd";

echo "$teste global 1 <br>";

if (5>2){
    $teste = "dsa";

    echo "$teste if  <br>";
}

echo "$teste global 2 <br>";

function funcao(){

    $teste = "xsxs";
    echo "$teste local <br>";
}

funcao(); 
function testandoGLobal(){
   
    global $teste;
   
    $teste = 2;
   
    echo "$teste global funcao <br>";
}
testandoGLobal();

echo "$teste global 3 <br>";