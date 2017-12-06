<?php

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['token'] === 'meutoken') {
    $result = [
        'ok' => 'liberado'
    ];
}

echo json_encode($result);
