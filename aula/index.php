<?php

// Carrega as bibliotecas do php automaticamente
require './Src/lib/vendor/autoload.php';

// Cria o roteador
$roteador = new CoffeeCode\Router\Router(URL);

// Informa o diretorio onde os controladores se encontram
$roteador->namespace("Src\Controller");

// Rota principal
$roteador->group(null);
// Rota dinamica vem primeiro
$roteador->get("/{nome}", "Principal:index");
// Rota estatica
$roteador->get("/", "Principal:index");

// Rota principal
$roteador->group("clientes");
// Rota dinamica vem primeiro
$roteador->get("/{nome}", "Principal:mostraClientes");
// Rota estatica
$roteador->get("/", "Principal:mostraClientes");

$roteador->dispatch();

switch ($roteador->error()) {
    case 404:
        echo "Página não encontrada";
        break;
    case 501:
        echo "Erro de código";
        break;
}
