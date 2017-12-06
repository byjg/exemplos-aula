<?php

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['usuario'] === 'admin' && $_REQUEST['senha'] === 'pwd') {
    $result = [
        'authenticated' => 'meutokenjg',
        'nome' => 'Joao',
        'cidade' => 'Rio de Janeiro',
        'estado' => 'Rio de Janeiro'
    ];
}


echo json_encode($result);
