<?php

// Define o namespace ao qual a classe pertence

namespace Etec\Aula\Controller;

/**
 * Aqui na classe principal agrupamos todas as páginas
 * principais: index, sobre, contato, etc.
 */
class Admin extends BaseController
{
    /**
     * Exibe formulário de criação de postagem
     *
     * @param array $dadosRecebidos Dados recebidos da url ou de um formulário
     * @return void
     */
    public function adicionarPostagem(array $dadosRecebidos): void
    {
        // Guarda os dados que vão pro template
        $dadosDoTemplate = array();

        self::$bd->abrirConexao(BD_ENDERECO, BD_USUARIE, BD_SENHA);

        //Verifica se alguma operação foi chamada
        if(isset($dadosRecebidos["operacao"])) {

            // Carrega a postagem a ser editada
            if($dadosRecebidos["operacao"] == "edita") {

                $sql = "select * from postagem where cod = :codigo";
                unset($dadosRecebidos["operacao"]); // Tem que tirar a operação pro sql funcionar
                self::$bd->executaSql($sql, $dadosRecebidos);

                // Guarda a postagem a ser editada
                $dadosDoTemplate["postagem"] = self::$bd->lerResultado(\Etec\Aula\Model\Postagem::class)[0];

                // Apaga a postagem
            } elseif($dadosRecebidos["operacao"] == "apaga") {
                $sql = "delete from postagem where cod = :codigo";
                unset($dadosRecebidos["operacao"]);  // Tem que tirar a operação pro sql funcionar
                self::$bd->executaSql($sql, $dadosRecebidos);
            }
        }

        // Depois de fazer todas as operações carrega todas as postagens
        $sql = "select * from postagem";
        self::$bd->executaSql($sql, []);
        $dadosDoTemplate["postagens"] = self::$bd->lerResultado(\Etec\Aula\Model\Postagem::class);

        // Fecha a conexão com o banco
        self::$bd->fecharConexao();

        // Define o título da pagina
        $dadosDoTemplate["titulo"] = "Crie sua postagem";

        // Gera o texto da página que será enviado para navegador
        echo self::$twig->render("admin_adicionarPostagem.html", $dadosDoTemplate);
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
        $sql = "";
        if($dadosRecebidos["txtCodigo"] == "") {
            unset($dadosRecebidos["txtCodigo"]);  // Tem que tirar o txtCodigo pro sql funcionar
            $sql = "insert into postagem (titulo, texto) values (:txtTitulo, :txtTexto)";
            $resultado["titulo"] = "Inserção de postagem";
        } else {
            $sql = "update postagem set titulo = :txtTitulo, texto = :txtTexto where cod = :txtCodigo";
            $resultado["titulo"] = "Atualização de postagem";
        }

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

        // Gera o texto da página que será
        // enviado para navegador
        echo self::$twig->render("admin_salvarPostagem.html", $resultado);
    }
}
