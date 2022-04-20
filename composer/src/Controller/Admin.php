<?php

namespace Src\Controller;

/**
 * Description of Admin
 *
 * @author ensismoebius
 */
class Admin
{

    private \Twig\Environment $ambiente;
    private \Twig\Loader\FilesystemLoader $carregador;

    public function __construct()
    {
        // Logica da pagina
        // Integraçao com o Twig
        // Entre outros
        // Abre o diretorio onde se encontram o templates
        $this->carregador = new \Twig\Loader\FilesystemLoader("./src/View");

        // Combina os dados com o template
        $this->ambiente = new \Twig\Environment($this->carregador);
    }

    public function resetarSenha(array $dados)
    {
        $dados["titulo"] = "Pagina de redefiniçao de senhas";
        $dados["url"] = URL . "/resetarSenha";

        // Exibe a pagina construida
        echo $this->ambiente->render("Admin:resetarsenha.html", $dados);
    }

    public function salvaSenha(array $dados)
    {
        if (trim($dados["login"]) == "") {
            $dados["alerta"] = "Login nao informado, por favor informe-o";
            $this->resetarSenha($dados);
            return;
        }

        if ($dados["senha"] == $dados["resenha"] || empty($dados["senha"]) || empty($dados["resenha"])) {
            $dados["alerta"] = "A nova senha deve ser diferente da atual e nao nula.";
            $this->resetarSenha($dados);
            return;
        }

        $db = new \Src\Lib\BancoDeDados();
        $db->abrirConexao(DB_URL, DB_LOGIN, DB_SENHA);

        $sql = "select login, senha from Pessoa"
                . " where login = '{$dados['login']}' "
                . "and senha = '{$dados['senha']}'";

        $db->executaSql($sql);

        $res = $db->lerResultado(\Src\Model\Pessoa::class);

        if (count($res) > 0) {
            $sql = "update Pessoa set senha = '{$dados['resenha']}' "
                    . " where login = '{$dados['login']}' "
                    . "and senha = '{$dados['senha']}'";

            if ($db->executaSql($sql)) {
                $dados["alerta"] = "Alteraçao de senha feita com sucesso!";
            }
        } else {
            $dados["alerta"] = "Nao existe login ou senha correspondentes";
        }
        
        $db->fecharConexao();
        $this->resetarSenha($dados);
    }

}
