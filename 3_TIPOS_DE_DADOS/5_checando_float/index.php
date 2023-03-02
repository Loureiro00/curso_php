<?php

$a = "teste";
$b = 12.8;

if (is_float($a)){
    echo "é float1 ! <br>";
}

if (is_float($b)){
    echo "É float2 ! <br>";
}

if (is_float(656562.652)){
    echo" É float 3! <br>";
}

if (is_float("teste")){
    echo" É float 4! <br>";
}
?>