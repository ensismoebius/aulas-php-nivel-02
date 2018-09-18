<?php
class Alimento {
	private $calorias;
	public function getCalorias() {
		return $this->calorias;
	}
	public function setCalorias($calorias) {
		$this->calorias = $calorias;
	}
}