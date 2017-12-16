<?php

require 'C:/Users/Rafael/PhpstormProjects/exemplos-aula/php/utils.php';

$result = [
    'error' => 'Credencias Inválidas'
];

if ($_REQUEST['usuario'] === 'rafael' && $_REQUEST['senha'] === 'teste') {
    $result = [
        'authenticated' => generateToken()
    ];
}

echo json_encode($result);