<?php

namespace controller;

require_once 'lib/BancoDeDados.php';

use model;

class Loja {

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