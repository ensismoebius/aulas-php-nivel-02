<?php
require 'XHumano.php';
class Fundacao {
	private $arrPessoas;
	
	public function matricular(XHumano $x) {
		$this->arrPessoas [] = $x;
	}
}