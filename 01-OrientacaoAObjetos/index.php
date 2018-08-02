<?php
require_once 'Humano.php';

$h1 = new Humano ();
$h1->setNome ( "Creusa" );

$h = new Humano ();
$h->setNome ( "José" );
$h->chorar ();

$h->alimentarSe ( $h1->produzirLeite () );

