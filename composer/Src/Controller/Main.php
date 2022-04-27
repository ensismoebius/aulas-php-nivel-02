<?php

namespace Src\Controller;

/**
 * Description of Main
 *
 * @author ensismoebius
 */
class Main
{
    private \Twig\Environment $ambiente;
    private \Twig\Loader\FilesystemLoader $carregador;

    public function __construct()
    {
        // Logica da pagina
        // Integraçao com o Twig
        // Entre outros
        // Abre o diretorio onde se encontram o templates
        $this->carregador = new \Twig\Loader\FilesystemLoader("./Src/View");

        // Combina os dados com o template
        $this->ambiente = new \Twig\Environment($this->carregador);
    }

    public function index(array $dados)
    {
        $dados["titulo"] = "Pagina inicial";

        // Exibe a pagina construida
        echo $this->ambiente->render("Main:index.html", $dados);
    }

    public function blog(array $dados)
    {
        $dados["titulo"] = "Pagina inicial do Blog";

        // Exibe a pagina construida
        echo $this->ambiente->render("Main:blog.html", $dados);
    }

}
