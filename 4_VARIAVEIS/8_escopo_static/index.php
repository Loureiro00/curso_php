<?php

function teste (){ // chama o msm valor 

    $a = 0;
    $a++;

    echo "$a <br>";

}

teste();

teste();

teste();
function testeStatic (){// valor mantido e acrescenta em chamadas de funções 

     static $a = 0;
    $a++;

    echo "$a <br>";

}
testeStatic();

testeStatic();

testeStatic();
