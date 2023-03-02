<?php

class Pessoa {
    function falar(){
        echo 'Fala fela da puta ';
    }

}

$Pedro = new Pessoa();

$Pedro ->nome = "Pedro";
echo $Pedro->nome;



echo '<br>';

$Pedro ->falar();