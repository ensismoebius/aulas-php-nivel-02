<?php

namespace model;

class Entrega {
	private $codCliente;
	private $arrProdutos;
	private $data;
	private $logradouro;
	private $numeroDaCasa;
	private $cep;
	private $complemento;
	private $cidade;
	private $estado;
	private $pais;

	/**
	 * @return mixed
	 */
	public function getCodCliente() {
		return $this->codCliente;
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
	public function getData() {
		return $this->data;
	}

	/**
	 * @return mixed
	 */
	public function getLogradouro() {
		return $this->logradouro;
	}

	/**
	 * @return mixed
	 */
	public function getNumeroDaCasa() {
		return $this->numeroDaCasa;
	}

	/**
	 * @return mixed
	 */
	public function getCep() {
		return $this->cep;
	}

	/**
	 * @return mixed
	 */
	public function getComplemento() {
		return $this->complemento;
	}

	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}

	/**
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}

	/**
	 * @return mixed
	 */
	public function getPais() {
		return $this->pais;
	}

	/**
	 * @param mixed $codCliente
	 */
	public function setCodCliente($codCliente) {
		$this->codCliente = $codCliente;
	}

	/**
	 * @param mixed $arrProdutos
	 */
	public function setArrProdutos($arrProdutos) {
		$this->arrProdutos = $arrProdutos;
	}

	/**
	 * @param mixed $data
	 */
	public function setData($data) {
		$this->data = $data;
	}

	/**
	 * @param mixed $logradouro
	 */
	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}

	/**
	 * @param mixed $numeroDaCasa
	 */
	public function setNumeroDaCasa($numeroDaCasa) {
		$this->numeroDaCasa = $numeroDaCasa;
	}

	/**
	 * @param mixed $cep
	 */
	public function setCep($cep) {
		$this->cep = $cep;
	}

	/**
	 * @param mixed $complemento
	 */
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}

	/**
	 * @param mixed $cidade
	 */
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	/**
	 * @param mixed $estado
	 */
	public function setEstado($estado) {
		$this->estado = $estado;
	}

	/**
	 * @param mixed $pais
	 */
	public function setPais($pais) {
		$this->pais = $pais;
	}
}