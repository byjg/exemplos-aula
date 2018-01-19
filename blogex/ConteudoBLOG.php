<?php
file_put_contents("TituloJF.txt", $_GET['titulo']);
file_put_contents("ConteudoJF.txt",$_GET['conteudo']);

$titulo = file_get_contents("TituloJF.txt");
$conteudo = file_get_contents("ConteudoJF.txt");


    echo "Título: $titulo <br>";
    echo "Conteúdo: $conteudo ";
