<?php

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['valida'] === 'meutoken') {
    $result = [
        'nome' => 'TESTE',
        'cidade' => 'Rio de Janeiro',
        'estado' => 'RJ'
    ];
}

echo json_encode($result);
