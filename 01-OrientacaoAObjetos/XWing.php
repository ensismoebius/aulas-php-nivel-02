<?php
class XWing implements NormaXWing {
	public function addPiloto2(XHumano $x) {
		echo $x->getNome () . " no comando!!";
	}
	public function addPiloto1(XHumano $x) {
		echo $x->getNome () . " no comando!!";
	}
	public function controleAsa1() {
		echo "Controlei 1 !";
	}
	public function controleAsa2() {
		echo "Controlei 2 !";
	}
	public function controleAsa3() {
		echo "Controlei 3 !";
	}
	public function controleAsa4() {
		echo "Controlei 4 !";
	}
}