<?php

namespace controller;

require_once 'lib/BancoDeDados.php';
require_once 'lib/vendor/autoload.php';

use Twig_Environment;
use Twig_Loader_Filesystem;
use model;

class Inicio {
	
	private function formularioEnviado() {
		return isset ( $_POST ["login"] ) && isset ( $_POST ["senha"] );
	}
	
	private function mostrarPaginaDeLogin(bool $msgPositiva){
		// Responsável por carregar os arquivos de template
		$carregador = new Twig_Loader_Filesystem ( "../view" );
		
		// Combina o template com os dados recebidos
		// e os exibe
		$twig = new Twig_Environment ( $carregador );
		
		// Dados que quero exibir
		// (tem que ser um array)
		$dados = array();
		
		if($msgPositiva){
			$dados["mensagem"] = "Informe login e senha";
		}else{
			$dados["mensagem"] = "Login ou senha incorreta";
		}
		
		echo $twig->render ( "inicio.html", $dados );
	}
	
	public function entrarNoSite() {
		if ($this->formularioEnviado ()) {
			$c = new model\Cliente ();
			$c->setLogin ( $_POST ["login"] );
			$c->setSenha ( $_POST ["senha"] );

			if ($this->autenticarCliente ( $c )) {
				header ( "location: Loja.php" );
			}else{
				$this->mostrarPaginaDeLogin(false);
			}
		}else{
			$this->mostrarPaginaDeLogin(true);
		}
	}

	/**
	 * Verifica se o cliente existe no banco de dados
	 * caso ele exista retorna seu código senão
	 * retorna -1
	 * @param model\Cliente $c
	 * @return number
	 *
	 */
	public function autenticarCliente(model\Cliente $c) {
		$bd = new \BancoDeDados ();

		if ($bd->abrirConexao ()) {

			$sql = "Select cod from Cliente where login = '{$c->getLogin()}' and senha='{$c->getSenha()}'";

			$bd->executarSQL ( $sql );

			$resultado = $bd->lerResultados ();

			if (count ( $resultado ) > 0) {
				return $resultado [0] ["cod"];
			}

			return - 1;
		}
	}
}


new Inicio();