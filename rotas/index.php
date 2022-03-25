<?php
require_once __DIR__ . '/src/Lib/vendor/autoload.php';

// $roteador = new CoffeeCode\Router\Router("http://localhost/rotas/");
$roteador = new CoffeeCode\Router\Router ( BASE_URL );

// Sets the namespace on which the controllers resides
$roteador->namespace ( "Src\Controller" );

// No grouping: Pages are mapped to url root
$roteador->group ( null );
// $roteador->get("/", function(){
// echo "Teste";
// });
$roteador->get ( "/", "Main:inicio" );
$roteador->get ( "/contato", "Main:contato");

$roteador->group ( "blog" );
// dinamic routes must come first
$roteador->get ( "/{filter}/{pageNumber}", "Main:blog" );
$roteador->get ( "/{filter}", "Main:blog" );
// static route must come last
$roteador->get ( "/", "Main:blog" );

$roteador->group("admin");
$roteador->get("/", "Admin:inicio");


// Group for errors
$roteador->group ( "error" );
$roteador->get ( "/{errorCode}", function ($data) {
	echo "<h1>Erro {$data["errorCode"]}</h1>";
	var_dump ( $data );
} );

$roteador->dispatch ();

if (! is_null ( $roteador->error () )) {
	// var_dump($roteador->error());
	$roteador->redirect ( "/error/{$roteador->error()}" );
}