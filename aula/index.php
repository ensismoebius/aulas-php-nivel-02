<?php
require_once './Src/Lib/vendor/autoload.php';

$roteador = new CoffeeCode\Router\Router(URL);

$roteador->namespace("Etec\Aula\Controller");

$roteador->group(null);
$roteador->get("/", "Principal:paginaInicial");
$roteador->get("/sobre", "Principal:sobre");

$roteador->dispatch();


if (!is_null($roteador->error())) {
    $roteador->redirect("/error/{$roteador->error()}");
}