<?php

// Define o namespace ao qual a classe pertence

namespace Etec\Aula\Controller;

/**
 * Aqui na classe principal agrupamos todas as páginas
 * principais: index, sobre, contato, etc.
 */
class Admin
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
     * Exibe formulário de criação de postagem
     *
     * @param array $dadosRecebidos Dados recebidos da url ou de um formulário
     * @return void
     */
    public function adicionarPostagem(array $dadosRecebidos): void
    {
        // Define o título da pagina
        $dadosRecebidos["titulo"] = "Crie sua postagem";

        // Gera o texto da página que será enviado para navegador
        echo self::$twig->render("admin_adicionarPostagem.html", $dadosRecebidos);
    }

    /**
     * Exibe a página de resultado para a criação de postagem
     * Aqui os dados enviados via POST
     * Chegam em dadosRecebidos porquê
     * a rota assim disse que deveria ser.
     *
     * @param array $dadosRecebidos
     * @return void
     */
    public function salvarPostagem(array $dadosRecebidos): void
    {
        // Outro metodo criado pelo seu professor
        // que ficou a madrugada acordado fazendo
        // esse código esperando que seus alunos
        // reconheçam seu esforço e entreguem um
        // Tcc incrivel. A próposito esse método
        // limpa as strings enviadas pelo formulário
        \Etec\Aula\Lib\Sanitizer::sanitizeAll($dadosRecebidos);

        // Cria o comando sql
        $sql = "insert into postagem (titulo, texto) values (:txtTitulo, :txtTexto)";

        // Abre a conexão
        self::$bd->abrirConexao(BD_ENDERECO, BD_USUARIE, BD_SENHA);

        // Executa o sql
        $sucesso = self::$bd->executaSql($sql, $dadosRecebidos);

        // Gera a mensagem de status
        if ($sucesso) {
            $resultado["status"] = "Postagem salva com sucesso";
        } else {
            $resultado["status"] = "Falha ao salvar postagem";
        }

        self::$bd->fecharConexao();

        // Define o título padrão da pagina
        // usando uma constante do Config.php
        $resultado["titulo"] = "Sobre nós";

        // Gera o texto da página que será
        // enviado para navegador
        echo self::$twig->render("admin_salvarPostagem.html", $resultado);
    }
}
