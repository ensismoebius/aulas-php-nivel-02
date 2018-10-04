<?php

namespace controller;

require_once '../lib/BancoDeDados.php';
require_once '../model/Loja.php';
require_once '../model/TipoDeProduto.php';
require_once '../model/TipoDeUnidade.php';
require_once '../model/Produto.php';
require_once '../lib/vendor/autoload.php';

use model\Loja;
use model\TipoDeProduto;
use model\TipoDeUnidade;
use model\Produto;

class CadProd {

	/**
	 * @var \BancoDeDados
	 */
	private $bd;

	function __construct() {
		$this->bd = new \BancoDeDados ();
		$this->bd->abrirConexao ();

		// Responsável por carregar os arquivos de template
		$carregador = new \Twig_Loader_Filesystem ( "../view" );

		// Combina o template com os dados recebidos
		// e os exibe
		$twig = new \Twig_Environment ( $carregador );

		if ($this->foiEnviado ()) {
			$this->salvaProduto ();
		}

		// Dados que quero exibir
		// (tem que ser um array)
		$dados = array ();
		$dados ["lojas"] = $this->consultaLojas ();
		$dados ["tipos"] = $this->consultaTiposDeProduto ();
		$dados ["unidades"] = $this->consultaTiposDeUnidade ();
		$dados ["produtos"] = $this->consultaProdutos ();

		echo $twig->render ( "CadProd.html", $dados );

		$this->bd->fecharConexao ();
	}

	private function salvaProduto() {
		$sql = "insert into Produto (
cod_tipoProduto,
preco, 
validade,
qtdeEmEstoque,
nome,
tipoDeUnidade,
cod_Loja
)values(
'{$_POST["tipo"]}',
'{$_POST["preco"]}',
'{$_POST["validade"]}',
'{$_POST["estoque"]}',
'{$_POST["nome"]}',
'{$_POST["tipoUnidade"]}',
'{$_POST["codLoja"]}')";

		$this->bd->executarSQL ( $sql );
	}

	private function foiEnviado() {
		return isset ( $_POST ["codLoja"] ) && isset ( $_POST ["nome"] ) && isset ( $_POST ["preco"] ) && isset ( $_POST ["estoque"] ) && isset ( $_POST ["tipo"] ) && isset ( $_POST ["tipoUnidade"] ) && isset ( $_POST ["validade"] );
	}

	private function consultaLojas(): array {
		$lojas = array ();

		$this->bd->executarSQL ( "select cod, nome from Loja" );

		$res = $this->bd->lerResultados ();

		foreach ( $res as $linha ) {
			$l1 = new Loja ();
			$l1->setNome ( $linha ["nome"] );
			$l1->setCod ( $linha ["cod"] );

			$lojas [] = $l1;
		}

		return $lojas;
	}

	private function consultaTiposDeProduto(): array {
		$tiposDeProdutos = array ();

		$this->bd->executarSQL ( "select cod, nome from TipoProduto" );

		$res = $this->bd->lerResultados ();

		foreach ( $res as $linha ) {
			$tp1 = new TipoDeProduto ();
			$tp1->setNome ( $linha ["nome"] );
			$tp1->setCod ( $linha ["cod"] );

			$tiposDeProdutos [] = $tp1;
		}

		return $tiposDeProdutos;
	}

	private function consultaTiposDeUnidade(): array {
		$tiposDeUnidade = array ();

		$this->bd->executarSQL ( "select cod, nome from TipoDeUnidade" );

		$res = $this->bd->lerResultados ();

		foreach ( $res as $linha ) {
			$tu1 = new TipoDeUnidade ();
			$tu1->setNome ( $linha ["nome"] );
			$tu1->setCod ( $linha ["cod"] );

			$tiposDeUnidade [] = $tu1;
		}

		return $tiposDeUnidade;
	}

	private function consultaProdutos(): array {
		$produtos = array ();

		$this->bd->executarSQL ( "select * from Produto" );

		$res = $this->bd->lerResultados ();

		foreach ( $res as $linha ) {
			$p = new Produto ();
			$p->setCod ( $linha ["cod"] );
			$p->setNome ( $linha ["nome"] );
			$p->setCodLoja ( $linha ["cod_Loja"] );
			$p->setPreco ( $linha ["preco"] );
			$p->setQtdeEmEstoque ( $linha ["qtdeEmEstoque"] );
			$p->setTipo ( $linha ["cod_tipoProduto"] );
			$p->setTipoDeUnidade ( $linha ["tipoDeUnidade"] );
			$p->setValidade ( $linha ["validade"] );

			$produtos [] = $p;
		}
		return $produtos;
	}
}

new CadProd ();