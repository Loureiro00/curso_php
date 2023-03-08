<?php

/*
    * Crie um arquivo PHP;
    * Teste a expressão "5" * 12;
    * Utilize a função gettype() com o resultado como parametro para checar o
    tipo resultante da operação;
*/

$fu = "5"*12;

echo $fu .  "<br>";


echo gettype($fu) . "<br>";
echo gettype([]) . "<br>";
echo gettype(12.2) . "<br>";
echo gettype("teste") . "<br>";