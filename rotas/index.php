<?php
require_once './src/Lib/vendor/autoload.php';

// Criar um roteador
$roteador = new CoffeeCode\Router\Router(URL_BASE);

// Informar onde ficam os controladores
$roteador->namespace("Src\Controller");

// Sem rota: Aponta para o /
$roteador->group(null);
$roteador->get("/{teste}", "Main:inicio");
$roteador->get("/", "Main:inicio");

$roteador->group("blog");
// dinamic routes must come first
$roteador->get("/{filter}/{pageNumber}", "Main:blog");
$roteador->get("/{filter}", "Main:blog");
$roteador->get("/", "Main:blog");

$roteador->group("contato");
// dinamic routes must come first
$roteador->get("/{filter}/{pageNumber}", "Main:contato");
$roteador->get("/{filter}", "Main:contato");
$roteador->get("/", "Main:contato");

$roteador->group("admin");
$roteador->get("/", "Admin:inicio");


// Group for errors
$roteador->group("error");
$roteador->get("/{errorCode}", function ($data) {
    echo "<h1>Erro {$data["errorCode"]}</h1>";
    var_dump($data);
});

$roteador->dispatch();

if (!is_null($roteador->error())) {
// var_dump($roteador->error());
    $roteador->redirect("/error/{$roteador->error()}");
}