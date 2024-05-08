<?php
require "Src/Lib/vendor/autoload.php";

// Cria o roteador
$roteador = new CoffeeCode\Router\Router(URL);

// Informa o diretorio onde os controladores se encontram
$roteador->namespace("Etec\Aula\Controller");

// Grupo raiz
$roteador->group(null);

// Rota principal
$roteador->get("/", "Principal:paginaPrincipal");

// Rota sobre
$roteador->get("/sobre","Principal:sobre");

$roteador->dispatch();
