<?php

require 'utils.php';

$result = [
    'error' => 'Token Inválido'
];

if (validateToken($_REQUEST['token'])) {
    $result = [
        "rows" => [
            [ "nome" => "Fulano", "cidade" => "Rio", "estado" => "RJ"],
            [ "nome" => "Beltrano", "cidade" => "BH", "estado" => "MG"],
        ]
    ];
}

echo json_encode($result);
