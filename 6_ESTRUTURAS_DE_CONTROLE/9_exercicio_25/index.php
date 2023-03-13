<?php 
/*
   Crie variaveis com numeros e outras com string;
   Faça um if checando se é um numero
   Caso for, atriubua a multiplicação deste numero por 2 em outr varaiavel
   e crie outro if, que checa se o novo numeor é maior que 100;
   se sim, imprima uma mensagem; 
   */

   $a = 10; $b = 50; $c = " Ola";
   

   if (is_int($b)){
     
     echo " A variável  é  um tipo inteiro  <br>";
     
        if ($b*2 >=100  ){
        
            echo " O valor é maior  ou igual que cem  <br>";
        } else {
            echo " O valor é menor que cem";
           }

   } else {
    echo " A variável   não é inteiro ";
   }