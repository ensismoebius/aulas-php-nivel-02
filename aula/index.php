<?php

require "Src/Lib/vendor/autoload.php";

// Cria o roteador
$roteador = new CoffeeCode\Router\Router(URL);

// Informa o diretorio onde os controladores se encontram
$roteador->namespace("Etec\Aula\Controller");

////////////////////////////////////////////////////
// Grupo raiz: Igual ao que está na constante URL //
////////////////////////////////////////////////////
$roteador->group(null);

// Rotas dinâmicas vem antes das estáticas
$roteador->get("/{nome}", "Principal:paginaPrincipal");

// Rota stática para a página principal
$roteador->get("/", "Principal:paginaPrincipal");

// Rota sobre
$roteador->get("/sobre", "Principal:sobre");

// Rota postagens
$roteador->get("/postagens", "Principal:postagens");

//////////////////////////////////////
// Grupo admin: constante URL/admin //
//////////////////////////////////////
$roteador->group("admin");

// Rota para o formulário de adição de postagem
$roteador->get("/adicionarPostagem", "Admin:adicionarPostagem");

// Rota para a função que salva a postagem
// Note que não é mais "get" e sim "post"
$roteador->post("/salvarPostagem", "Admin:salvarPostagem");


$roteador->dispatch();
