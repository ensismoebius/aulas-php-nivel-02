<?php
require_once 'lib/vendor/autoload.php';
require_once 'Produto.php';

$p1 = new Produto ();
$p1->setCod ( 1 );
$p1->setNome ( "Uva" );

$p2 = new Produto ();
$p2->setCod ( 2 );
$p2->setNome ( "Maçâ" );

$p3 = new Produto ();
$p3->setCod ( 3 );
$p3->setNome ( "Pera" );

$p4 = new Produto ();
$p4->setCod ( 4 );
$p4->setNome ( "Salada Mista" );

$arrProds = array (
		$p1,
		$p2,
		$p3,
		$p4 
);

$loader = new Twig_Loader_Filesystem ( "./view" );
$twig = new Twig_Environment ( $loader );
echo $twig->render ( 'products.html', array (
		'products' => $arrProds 
) );
