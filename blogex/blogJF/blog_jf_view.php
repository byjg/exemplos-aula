<?php

$result = [
    'error' => 'Não Autenticado'
];

if ($_REQUEST['token'] === 'meutoken') {
    $result = [
        'validado' => 'autenticado'
    ];

}

$extrair = file_get_contents("InfoBlogJF.txt");
header("Content-Type: application/json");

echo $extrair;