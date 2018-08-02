<?php
require_once 'Alimento.php';
class Humano {
	private $nome;
	private $altura;
	
	public function produzirLeite() {
		$leite = new Alimento ();
		$leite->setCalorias ( 1000 );
		return $leite;
	}
	public function alimentarSe(Alimento $a) {
		$centimetros = $a->getCalorias () / 10000;
		
		if ($this->altura > 180)
			return;
		
		$this->altura += $centimetros;
	}
	public function chorar() {
		echo "Buáááááá";
	}
	public function getNome() {
		return $this->nome;
	}
	public function getAltura() {
		return $this->altura;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	/**
	 * Atribui a altura em centimetros
	 *
	 * @param integer $altura
	 * @return boolean
	 */
	public function setAltura(int $altura): bool {
		if ($altura < 100) {
			return false;
		}
		
		if ($altura > 300) {
			return false;
		}
		
		$this->altura = $altura;
		return true;
	}
}