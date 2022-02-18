<?php
require_once 'lib/vendor/autoload.php';
class Loja {

	public function __construct() {

		// Responsável por carregar os arquivos de template
		$carregador = new \Twig\Loader\FilesystemLoader ( "../view" );

		// Combina o template com os dados recebidos
		// e os exibe
		$twig = new \Twig\Environment ( $carregador );

		// Dados que quero exibir
		// (tem que ser um array)
		$dados = array (
				'mensagem' => "Olá cliente"
		);

		echo $twig->render ( "loja.html", $dados );
	}
}

new Loja ();

