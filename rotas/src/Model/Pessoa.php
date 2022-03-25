<?php

namespace Src\Model;

/**
 *
 * @author ensismoebius
 *        
 */
class Pessoa {

	private string $nome;

	private string $sobrenome;

	/**
	 *
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getSobrenome() {
		return $this->sobrenome;
	}

	/**
	 *
	 * @param mixed $nome
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 *
	 * @param mixed $sobrenome
	 */
	public function setSobrenome($sobrenome) {
		$this->sobrenome = $sobrenome;
	}
}

