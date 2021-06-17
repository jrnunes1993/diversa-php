<?php

// var_dump($_POST);
// die;

if ($_POST) {
    $valorA = $_POST['txtValorA'];
    $valorB = $_POST['txtValorB'];
    $operacao = $_POST['operacao'];

    if ($operacao == '+') {
        $total = $valorA + $valorB;
    } else if ($operacao == '-') {
        $total = $valorA - $valorB;
    } else if ($operacao == 'x') {
        $total = $valorA * $valorB;
    } else if ($operacao == '/') {
        $total = $valorA / $valorB;
    }

    echo "$valorA $operacao $valorB = $total";
}
?>