<?php

$result = [
    'error' => 'Não Autenticado'
];

if ($_REQUEST['token'] === 'meutoken') {
    $result = [
        'validado' => 'autenticado'
    ];

}

$extrair = file_get_contents("$titulo.txt");
header("Content-Type: application/json");

echo $extrair;