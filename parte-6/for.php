<?php


/*
 * mostra a lista de numeros de 0 até 49,
 * azul = par
 * vermelho = impar
*/

for ($i = 0; $i < 50; $i++) {
    if ($i % 2 == 0) {
        $cor = 'blue';
    } else {
        $cor = 'red';
    }
    echo "<div style='color: $cor'> $i </div>";
}


