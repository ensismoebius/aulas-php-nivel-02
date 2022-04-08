<?php

namespace Src\Controller;

/**
 *
 * @author ensismoebius
 *        
 */
class Admin {

	public function inicio($data) {
		// use twig here
		echo "<h1>Administrativo</h1>";
		var_dump ( $data );
	}
}

