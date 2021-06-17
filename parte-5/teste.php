<?php
// echo não funciona com arrays


// array de numeros
$lista = [10, 20, 30];
var_dump($lista);
echo '<br>';

// array de strings
$estados = ['RS', 'SC', 'PR'];
var_dump($estados);
echo '<br>';

// array com posições nomeadas
$listaNomeada = [
    'nome'      => 'Tony',
    'Sobrenome' => 'Stark'
];
var_dump($listaNomeada);
echo '<br>';

// array misto
$listaMista = [
    'nome'      => 'Peter Parker',
    'estreia'   => 1962,
    'voa'       => false
];
var_dump($listaMista);
echo '<br>';

// array vazio
$listaVazia = [];
var_dump($listaVazia);

// LENDO VALORES DO ARRAY
echo '<hr>';
// acessando dados por indice
echo $estados[0];

echo '<br>';
// acessando dados por indice nomeado
echo $listaMista['nome'];


// ADICIONANDO VALORES NO ARRAY
echo '<hr>';
// adiciona o valor 80 na posição 2
$lista[2] = 80;
var_dump($lista);
echo '<br>';

// adiciona o valor 99 no final da lista
$lista[] = 99;
var_dump($lista);
echo '<br>';

$listaNomeada['nome'] = 'HULK';
var_dump($listaNomeada);

?>