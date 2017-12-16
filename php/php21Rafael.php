r<?php
$cadastro = [
    "nome" => "ADMIN",
    "cidade" => "PWD"
];
$loginConfere = null;
$senhaConfere = null;

if ($_REQUEST['login'] === "ADMIN") {
    $loginConfere = 1;
}
if ($_REQUEST['senha'] === "PWD") {
    $senhaConfere = 1;
}