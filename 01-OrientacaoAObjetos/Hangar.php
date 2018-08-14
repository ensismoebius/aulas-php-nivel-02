<?php
class Hangar{
	
	private $arrAvioes;
	
	public function atracar(NormaXWing $aviao){
		$this->arrAvioes[] = $aviao;
	}
	
}