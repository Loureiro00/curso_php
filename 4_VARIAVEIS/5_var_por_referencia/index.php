<?php

    $x = 17;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo "atribuição após o ref";
    echo '<br>';
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome  = "Matheus";

    $nome2 =& $nome;
    
    echo $nome;
    echo '<br>';
    echo $nome2;
    echo "<br>";
  
    $nome2= "Pedro";
     
    echo $nome;
    echo '<br>';
    echo $nome2;
    echo "<br>";
  