<?php

namespace Src\Controller;

/**
 * Description of Principal
 *
 * @author ensismoebius
 */
class Principal {

    private \Twig\Environment $ambiente;
    private \Twig\Loader\FilesystemLoader $carregador;

    public function __construct() {
        // Logica da pagina
        // Integraçao com o Twig
        // Entre outros
        // Abre o diretorio onde se encontram o templates
        $this->carregador = new \Twig\Loader\FilesystemLoader("./Src/View");

        // Combina os dados com o template
        $this->ambiente = new \Twig\Environment($this->carregador);
    }

    public function index($dados) {
        echo "Página principal";
    }
}