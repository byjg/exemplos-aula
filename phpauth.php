<?php
$logins = [
    "usuario" => "Joao",
    "senha" => "batatinha"
];

if ($_REQUEST['id'] === "Joao")  {
    echo json_encode('Login');
} else {
    echo json_encode(["error" => "Not found"]);
}