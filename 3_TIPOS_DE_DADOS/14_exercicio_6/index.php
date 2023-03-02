<?php

/*  Crie um arquivo PHP;
    Crie um array com características de um carro;
    Imprima duas características;
*/


$carro = [
'Modelo'=>'Honda fit', 
'anof' => 2000, 
'motor' => 1.4
];

echo " Dados do carro, confira tabela a baixo : ";
echo"<br>";

echo '<br>';

echo 'nome do modelo : '; print_r($carro['Modelo']);
echo '<br>';

echo 'Ano de fabricação : '; print_r($carro['anof']);
echo '<br>';


echo 'Potencia do motor  : '; print_r($carro['motor']);