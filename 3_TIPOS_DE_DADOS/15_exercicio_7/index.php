<?php

$pessoa = [
    'nome'  => 'Pedro Henrique Loureiro',
    'idade' => '12',
    'Cor do olhos ' => 'Ambar',
    'Profissão' => 'Programador Web',
    'Graduação ' => 'Analise e desenvolvimento de Sístemas'
];

echo '<br>';

//desafio

if($pessoa['idade']  >= 18){

    echo 'acesso liberado';
}
else{
    echo ' Acesso negado, menor de idade ';
}

