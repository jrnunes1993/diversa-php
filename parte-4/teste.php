<?php

minhaFuncao('a', 'b');

$total = dividir(10, 2);
echo $total;

function minhaFuncao($parametro1, $parametro2) {
    echo "$parametro1 - $parametro2 <br>";
}

function dividir($dividendo, $divisor) {
    return $dividendo / $divisor;
}

?>