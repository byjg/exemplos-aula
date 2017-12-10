# Exercicio: Criar Blog

## localhost:8080/ver.html?pagina=titulo+post

Titulo (obtido pelo servidor)

Texto (obtdo pelo servidor)

Link para editar essa página

**Requisitos**:
 - Requisição a pagina GET ver.php?pagina=titulo+post
 - json: { title: "aaaa", text: "aaaa", author: "aaa" }
 - se a pagina nao existir mostrar um erro
 - Ao clicar no link para editar a pagina ir para editar.html


## localhost:8080/editar.html?pagina=titulo+post

**Requisitos**:
 - Ver se está logado, senão pedir login (pode utilizar o token da aula 3)
 - Requisição a pagina GET ver.php?pagina=titulo+post
 - json: { title: "aaaa", text: "aaaa", author: "aaa" }
 - Tera um textarea para editar o conteudo
 - Ao salvar chamar a save.php com o JSON atualizado
 - A save.php terá que validar o token


## Informações / Dicas

### file_get_contents('nome.txt')

Significa que a "pagina" deverá ser salva com o nome do argumento recebido

```php
<?php
$conteudo = file_get_contents(__DIR__ . '/pagina.txt');
```

### file_put_contents('nome.txt', $conteudo)

Vai salvar o conteudo no arquivo 'nome.txt'

```php
<?php
file_put_contents(__DIR__ . '/pagina.txt', $conteudo);
```

### file_exists('nome.txt)

Retorna true se o arquivo existe ou false se ele não existe.

```php
<?php
if (file_exists('nome.txt')) {
    echo "OK";
} else {
    echo "Nao";
}
```

### Ler parametros GET no JavaScript

[ver](https://pt.stackoverflow.com/questions/65696/como-capturar-par%C3%A2metros-passados-pela-url-usando-javascript)

