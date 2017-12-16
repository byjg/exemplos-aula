<?php


$teste = [
    "nome" => "Joao",
    "cidade" => "rj"
];


if ($_REQUEST['id'] === "1") {
    echo json_encode($teste);
} else {
    echo json_encode(["error" => "Not found"]);
}
