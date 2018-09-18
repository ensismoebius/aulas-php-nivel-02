<?php
require_once 'lib/vendor/autoload.php';
class Loja {
	public function __construct() {
		
		// Responsável por carregar os arquivos de template
		$carregador = new Twig_Loader_Filesystem ( "../view" );

		// Combina o template com os dados recebidos
		// e os exibe
		$twig = new Twig_Environment ( $carregador );

		// Dados que quero exibir
		// (tem que ser um array)
		$dados = array (
				'mensagem' => "Olá cliente"
		);

		echo $twig->render ( "loja.html", $dados );
	}
}

new Loja();

