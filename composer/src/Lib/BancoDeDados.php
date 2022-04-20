<?php

namespace Src\Lib;

/**
 * Description of BancoDeDados
 *
 * @author ensismoebius
 */
class BancoDeDados
{

    private \PDO $conexao;
    private \PDOStatement $resultado;

    public function abrirConexao(string $url, string $login, string $senha): bool
    {
        try {
            $configuracao = array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"
            );

            $this->conexao = new \PDO($url, $login, $senha, $configuracao);
            return true;
        } catch (\Exception $ex) {
            echo "Falha ao conectar no banco de dados " . $ex->getMessage();
            exit(0);
        }

        return false;
    }

    public function fecharConexao(): bool
    {
        unset($this->conexao);
        return true;
    }

    public function executaSql(string $sql): bool
    {
        try {
            $this->conexao->beginTransaction();
            $this->resultado = $this->conexao->prepare($sql);
            $this->resultado->execute();
            $this->conexao->commit();
            return true;
        } catch (\Exception $ex) {
            echo "Falha ao executar o sql: " . $ex->getMessage();
            $this->conexao->rollBack();
            return false;
        }
    }

    public function lerResultado(string $classe)
    {
        return $this->resultado->fetchAll(\PDO::FETCH_CLASS, $classe);
    }

}
