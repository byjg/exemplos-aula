<?php

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['usuario'] === 'admin' && $_REQUEST['senha'] === 'pwd') {
    $result = [
        'authenticated' => 'meutoken',
    ];
}

echo json_encode($result);