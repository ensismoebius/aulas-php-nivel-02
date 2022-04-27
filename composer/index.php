<?php

require_once './Src/Lib/vendor/autoload.php';

// Cria o roteador
$roteador = new CoffeeCode\Router\Router(URL);

// Informa o diretorio onde os controladores se encontram
$roteador->namespace("Src\Controller");

/*
 *  Rota principal
 */
$roteador->group(null);
// Rota dinamica vem primeiro
$roteador->get("/{nome}", "Main:index");
// Rota estatica
$roteador->get("/", "Main:index");

/*
 * Rota para o Blog
 * http://localhost/tuto/blog/
 */
$roteador->group("blog");
// Rota dinamica vem primeiro
$roteador->get("/{topico}/{pagina}", "Main:blog");
// Rota estatica
$roteador->get("/", "Main:blog");

/*
 * Rota para o Adm
 * http://localhost/tuto/resetarSenha/
 */
$roteador->group("resetarSenha");
// Rota dinamica vem primeiro
$roteador->get("/{login}/{senha}", "Admin:resetarSenha");
// Rota estatica
$roteador->post("/", "Admin:salvaSenha");
$roteador->get("/", "Admin:resetarSenha");

$roteador->dispatch();