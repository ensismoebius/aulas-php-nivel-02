<?php
require_once __DIR__ . '/src/Lib/vendor/autoload.php';

// Criar um roteador
$roteador = new CoffeeCode\Router\Router(URL_BASE);

// Informar onde ficam os controladores
$roteador->namespace("Src\Controller");

// Sem rota: Aponta para o /
$roteador->group(null);
$roteador->get("/{teste}", "Main:inicio");
$roteador->get("/", "Main:inicio");

$roteador->group("blog");
$roteador->get("/", "Main:blog");



$roteador->dispatch();






