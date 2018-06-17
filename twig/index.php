<?php
require_once 'lib/vendor/autoload.php';
function qualOTemplate(): string {
	if (isset ( $_GET ["casa"] )) {
		return "casa.html";
	}
	
	if (isset ( $_GET ["novas"] )) {
		return "new.html";
	}
	
	if (isset ( $_GET ["sobre"] )) {
		return "sobre.html";
	}
	
	return "casa.html";
}

$loader = new Twig_Loader_Filesystem ( "./view" );
$twig = new Twig_Environment ( $loader );

$dados = array (
		'titulo' => $arrProds,
		'login' => 'uga' 
);

echo $twig->render ( qualOTemplate (), $dados );




