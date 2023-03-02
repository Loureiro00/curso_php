<?php

$arr = ['nome' => 'Aquiles', 'patas' => 4,'cor' => 'Preto'];

echo $arr['nome'];
echo '<br>';
print_r($arr);
echo'<br>';
echo 'Patas : '; echo $arr['patas'];

echo "<br>";
echo "<br>";

echo 'Dados do cachorro : ';
echo '<br>';
echo 'Nome :  '; echo $arr['nome'];
echo '<br>';
echo 'Patas : '; echo $arr['patas'];
echo '<br>';
echo 'Cor : '; echo $arr['cor'];

echo '<br>';
echo '<br>';

$arrAssoc = ['chave' => 'valor', 'bool' => true ];

echo '<br>';
print_r($arrAssoc);