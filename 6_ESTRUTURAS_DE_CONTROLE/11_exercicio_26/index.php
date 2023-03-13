<?php
/*
     Crie uma variavel que recebe uma velocidade de um carro;
     Depois crie uma estrutura if que verifica essa velocidade;
     Se a velocidade for menor que 40, imprima que o motorista está na 
     velocidade correta
     Se igual A 40, Imprima uma mensagem para tomar cuidado:
     Se for maior de 40, imprima uma mensagem de multa;

*/


    $vel = 80;
    $velMax= 40;
    If ($vel < $velMax){
        echo " Motorista está na velociade correta <br>";
    } else if ($vel == $velMax ){
        echo " Tome cuidado, velocidade está alta <br>";
    } else {
        echo " Multatado ! <br>";
    }