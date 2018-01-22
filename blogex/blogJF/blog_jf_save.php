<?php

$titulo = $_GET['titulo'];
$conteudo = $_GET['conteudo'];

$blog = [
    "titulo" => $titulo,
    "conteudo" => $conteudo,
];

header("Content-Type: application/json");
echo json_encode($blog);

file_put_contents("InfoBlogJF.txt", json_encode($blog));


//$titulo = file_get_contents("TituloJF.txt");
//$conteudo = file_get_contents("ConteudoJF.txt");
//
//
//    echo "Título: $titulo <br>";
//    echo "Conteúdo: $conteudo ";