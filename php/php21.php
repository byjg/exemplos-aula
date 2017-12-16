<?php

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['usuario'] === 'admin' && $_REQUEST['senha'] === 'pwd') {
    $result = [
        'authenticated' => 'meutokemnjg'
    ];
}

echo json_encode($result);
