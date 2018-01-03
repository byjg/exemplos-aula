<?php
require 'C:/Users/Rafael/PhpstormProjects/exemplos-aula/php/utils.php';

if (file_exists('BlogRafaelTexto.txt')) {
    echo $conteudo = file_get_contents('BlogRafaelTexto.txt');
    echo json_encode($conteudo);
} else {
    echo "Nao";
}







