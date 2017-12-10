<?php

require 'utils.php';

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['usuario'] === 'admin' && $_REQUEST['senha'] === 'pwd') {
    $result = [
        'authenticated' => generateToken()
    ];
}

echo json_encode($result);
