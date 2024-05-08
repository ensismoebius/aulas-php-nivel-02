<?php

// Define o namespace
namespace Etec\Aula\Controller;

class Principal
{

    public function paginaPrincipal($dadosRecebidos)
    {
        $loader = new \Twig\Loader\FilesystemLoader ( "Src/View" );
        $twig = new \Twig\Environment ( $loader );

        $dadosRecebidos["nome"] = "Fernando";
        $dadosRecebidos["titulo"] = "Perfil";

        echo $twig->render ( "principal.html", $dadosRecebidos );
    }

    public function sobre($dadosRecebidos)
    {
        echo "<p>Sobre nós</p>";
    }
}
