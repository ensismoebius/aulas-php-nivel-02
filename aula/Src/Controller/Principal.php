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

        // Adiciona mais dados aos já existentes
        $dados["titulo"] = "Pagina inicial";
        $dados["imgDir"] = IMAGE_DIR;

        echo $this->ambiente->render('index.html', $dados);
    }

    public function mostraClientes(array $dados) {

        $sql = "select * from Cliente";

        if (isset($dados['nome'])) {
            $sql = $sql = "where like %${$dados['nome']}%";
        }

        $bd = new \Src\lib\BancoDeDados();

        $bd->abrirConexao(\BD_ENDERECO, \BD_USUARIE, \BD_SENHA);

        if ($bd->executaSql($sql)) {
            $dados["clientes"] = $bd->lerResultado(\Src\Model\Cliente::class);
        }else{
            $dados["erro"] = "Falha ao consultar o banco de dados";
        }

        echo $this->ambiente->render('Clientes.html', $dados);
    }
}
