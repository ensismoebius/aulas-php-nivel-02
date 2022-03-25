<?php

namespace Src\Controller;

/**
 * @author ensismoebius
 */
class Main {

	/**
	 */
	public function __construct() {
	}

	public function inicio(array $data) {
		// use twig here
		echo "<h1>Pagina inicial</h1>";
		var_dump ( $data );
	}

	public function contato(array $data) {
		// use twig here
		echo "<h1>Contato</h1>";
		var_dump ( $data );
	}

	public function blog(array $data) {
		// use twig here
		echo "<h1>Blog</h1>";
		var_dump ( $data );
	}
}

