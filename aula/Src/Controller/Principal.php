<?php

// Define o namespace ao qual a classe pertence

namespace Etec\Aula\Controller;

/**
 * Aqui na classe principal agrupamos todas as páginas
 * principais: index, sobre, contato, etc.
 */
class Principal
{
    /**
     * Guarda o objeto responsável por juntar os dados
     * fornecidos com template
     *
     * @var \Twig\Environment
     */
    private static \Twig\Environment $twig;


    /**
     * Vamos usar banco de dados nessa página
     * precisamos instanciar esse classe que
     * seu professor dedicado criou
     *
     * @var \Etec\Aula\BancoDeDados
     */
    private static \Etec\Aula\Lib\BancoDeDados $bd;

    /**
     * Método construtor
     */
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
                URL . "/Src/View/images",
                URL . "/Src/View/js",
                URL . "/Src/View/css"
            )
        );
    }

    /**
     * Exibe a página principal
     *
     * @param array $dadosRecebidos Dados recebidos da url ou de um formulário
     * @return void
     */
    public function paginaPrincipal(array $dadosRecebidos): void
    {
        // Define o título padrão da pagina
        // usando uma constante do Config.php
        $dadosRecebidos["titulo"] = DEFAULT_TITLE;

        // Exemplo de dado recebido via GET
        // Olhe a rota dinâmica no arquivo index.php
        // ela coloca em dadosRecebidos["nome"]
        // um nome caso seja acessada

        // Gera o texto da página que será
        // enviado para navegador
        echo self::$twig->render("main_principal.html", $dadosRecebidos);
    }

    /**
     * Exibe a página "sobre nós"
     *
     * @param array $dadosRecebidos
     * @return void
     */
    public function sobre(array $dadosRecebidos): void
    {
        // Define o título padrão da pagina
        // usando uma constante do Config.php
        $dadosRecebidos["titulo"] = "Sobre nós";

        // Gera o texto da página que será
        // enviado para navegador
        echo self::$twig->render("main_sobre.html", $dadosRecebidos);
    }


    public function postagens(array $dadosRecebidos): void
    {
        // Cria o comando sql
        $sql = "select * from postagem";

        // Abre a conexão
        self::$bd->abrirConexao(BD_ENDERECO, BD_USUARIE, BD_SENHA);

        // Executa o sql
        $sucesso = self::$bd->executaSql($sql, $dadosRecebidos);

        // Gera a mensagem de status
        if ($sucesso) {
            $resultado["postagens"] = self::$bd->lerResultado(\Etec\Aula\Model\Postagem::class);
        }

        self::$bd->fecharConexao();

        // Define o título padrão da pagina
        // usando uma constante do Config.php
        $resultado["titulo"] = "Lista de postagens";

        // Gera o texto da página que será
        // enviado para navegador
        echo self::$twig->render("main_postagens.html", $resultado);
    }
    /**
     * Página de erro
     *
     * @param array $dadosRecebidos
     * @return void
     */
    public function erro(array $dadosRecebidos): void
    {
        // Define o título padrão da pagina
        // usando uma constante do Config.php
        $dadosRecebidos["titulo"] = "Erro";

        // Gera o texto da página que será
        // enviado para navegador
        echo self::$twig->render("main_erro.html", $dadosRecebidos);
    }


}
