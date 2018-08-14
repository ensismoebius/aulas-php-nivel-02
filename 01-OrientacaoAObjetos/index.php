<?php
require_once 'Humano.php';

$creusa = new Humano ();
$creusa->setNome ( "Creusa" );

$jose = new Humano ();
$jose->setNome ( "José" );
$jose->chorar ();

$jose->alimentarSe ( $creusa->produzirLeite () );

for($i = 0; $i < 2000; $i ++) {
	$jose->alimentarSe ( $creusa->produzirLeite () );
}

$marie = new Humano ();
$marie->setNome ( "Marie de Pardieu" );

$mustafa = new Humano ();
$mustafa->setNome ( "Mustafa" );

$jose->apaixonarSe ( $marie );
$jose->apaixonarSe ( $mustafa );

unset ( $mustafa );
$mustafa->morrer ();

$marie->chorar ();
$jose->chorar ();

// 20 anos depois...

$fundacaoMustafa = new Fundacao ();
$fundacaoMustafa->matricular ( new XHumano () );

$joselina = new XHumano ();
$joselina->setNome ( "Joselina Vaz" );

$fundacaoMustafa->matricular ( $joselina );

$xwing = new XWing ();

$hangar = new Hangar ();

$hangar->atracar ( $xwing );















