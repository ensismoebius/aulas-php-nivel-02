<?php

namespace model;

class Loja {
	private $cod;
	private $arrProdutos;
	private $cnpj;
	private $nome;
	private $descricao;

	/**
	 * @return mixed
	 */
	public function getCod() {
		return $this->cod;
	}

	/**
	 * @return mixed
	 */
	public function getArrProdutos() {
		return $this->arrProdutos;
	}

	/**
	 * @return mixed
	 */
	public function getCnpj() {
		return $this->cnpj;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @return mixed
	 */
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * @param mixed $cod
	 */
	public function setCod($cod) {
		$this->cod = $cod;
	}

	/**
	 * @param mixed $arrProdutos
	 */
	public function setArrProdutos($arrProdutos) {
		$this->arrProdutos = $arrProdutos;
	}

	/**
	 * @param mixed $cnpj
	 */
	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;
	}

	/**
	 * @param mixed $nome
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 * @param mixed $descricao
	 */
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
}