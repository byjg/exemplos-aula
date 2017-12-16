<?php
require 'C:/Users/Rafael/PhpstormProjects/exemplos-aula/php/utils.php';

$result = [
    'error' => 'Token Inválido'
];

if (validateToken($_REQUEST['token'])) {
    $result = [

    ];
}

echo json_encode($result);
