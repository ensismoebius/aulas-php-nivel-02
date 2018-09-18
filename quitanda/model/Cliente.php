<?php

namespace model;

class Cliente {
	private $cod;
	private $login;
	private $senha;
	private $nome;
	private $email;
	private $telefone;
	private $cpf;
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
	public function getLogin() {
		return $this->login;
	}

	/**
	 * @return mixed
	 */
	public function getSenha() {
		return $this->senha;
	}

	/**
	 * @param mixed $login
	 */
	public function setLogin($login) {
		$this->login = $login;
	}

	/**
	 * @param mixed $senha
	 */
	public function setSenha($senha) {
		$this->senha = $senha;
	}

	/**
	 * @return mixed
	 */
	public function getCod() {
		return $this->cod;
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
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}

	/**
	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
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
	 * @param mixed $cod
	 */
	public function setCod($cod) {
		$this->cod = $cod;
	}

	/**
	 * @param mixed $nome
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @param mixed $telefone
	 */
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	/**
	 * @param mixed $cpf
	 */
	public function setCpf($cpf) {
		$this->cpf = $cpf;
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




