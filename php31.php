<?php

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['usuario'] === 'admin' && $_REQUEST['senha'] === 'pwd') {
    $result = [
        'authenticated' => 'meutokenjg'
    ];
}

echo json_encode($result);
