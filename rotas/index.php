<?php

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

$roteador->group("admin");
$roteador->get("/", "Admin:inicio");

$roteador->group("contato");
// dinamic routes must come first
$roteador->get("/{uga}/{mei}", "Main:contato");
$roteador->get("/", "Main:contato");

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