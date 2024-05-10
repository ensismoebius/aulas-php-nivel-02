<?php

// Define o namespace ao qual a classe pertence

namespace Etec\Aula\Controller;

/**
 * Classe que concentra códigos em comum para os controladores
 */
abstract class BaseController
{
    /**
     * Guarda o objeto responsável por juntar os dados
     * fornecidos com template
     *
     * @var \Twig\Environment
     */
    protected static \Twig\Environment $twig;


    /**
     * Vamos usar banco de dados nessa página
     * precisamos instanciar esse classe que
     * seu professor dedicado criou
     *
     * @var \Etec\Aula\BancoDeDados
     */
    protected static \Etec\Aula\Lib\BancoDeDados $bd;

    public function __construct()
    {
        // Instancia o objeto que vai carregar os templates
        $loader = new \Twig\Loader\FilesystemLoader("Src/View");

        // Instancia o objeto responsável por juntar os dados
        // fornecidos com template
        self::$twig = new \Twig\Environment($loader);

        // Criando o objeto do banco de dados
        self::$bd = new \Etec\Aula\Lib\BancoDeDados();

        // Adiciona a extensão para carregar imagens, scripts e css.
        // Foi seu lindo professor que criou essa extensão
        // para facilitar a vida de seus aluninhes
        self::$twig->addExtension(
            new \Etec\Aula\Lib\AssetExtension(
                URL . "Src/View/images",
                URL . "Src/View/js",
                URL . "Src/View/css"
            )
        );

        // Adiciona a extensão para criar links.
        // Foi seu lindo professor que criou essa extensão
        // para facilitar a vida de seus aluninhes
        self::$twig->addExtension(
            new \Etec\Aula\Lib\LinkExtension(URL)
        );
    }
}
