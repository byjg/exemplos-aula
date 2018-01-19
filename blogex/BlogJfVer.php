<?php

$result = [
    'error' => 'Não Autenticado'
];

if ($_REQUEST['token'] === 'meutoken') {
    $result = [
        'validado' => 'autenticado'
    ];

}



echo json_encode($result);