<?php

namespace controller;

require_once '../lib/BancoDeDados.php';
require_once '../model/Loja.php';
require_once '../lib/vendor/autoload.php';

use model\Loja;

class CadProd {

	function __construct() {

		// Responsável por carregar os arquivos de template
		$carregador = new \Twig_Loader_Filesystem ( "../view" );

		// Combina o template com os dados recebidos
		// e os exibe
		$twig = new \Twig_Environment ( $carregador );

		// Dados que quero exibir
		// (tem que ser um array)
		$dados = array ();
		$dados ["lojas"] = $this->consultaLojas();

		echo $twig->render ( "CadProd.html", $dados );
	}

	private function consultaLojas(): array {
		$lojas = array ();

		$bd = new \BancoDeDados ();
		$bd->abrirConexao ();
		$bd->executarSQL ( "select cod, nome from Loja" );

		$res = $bd->lerResultados ();

		foreach ( $res as $linha ) {
			$l1 = new Loja ();
			$l1->setNome ( $linha ["nome"] );
			$l1->setCod ( $linha ["cod"] );

			$lojas [] = $l1;
		}

		$bd->fecharConexao();
		return $lojas;
	}
}

new CadProd ();