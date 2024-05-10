<?php

namespace Etec\Aula\Lib;

/**
 * Classe de conexão com bancos de dados mysql e mariadb
 *
 * @author André Furlan <ensismoebius@gmail.com>
 */
class BancoDeDados
{
    private \PDO $conexao;
    private \PDOStatement $resultado;

    /**
     * Abre a conexão como banco de dados
     *
     * @param string $url
     * @param string $login
     * @param string $senha
     * @return boolean
     */
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
    }

    /**
     * Fecha a conexão com o banco de dados
     *
     * @return boolean
     */
    public function fecharConexao(): bool
    {
        unset($this->conexao);
        return true;
    }

    /**
     * Executa o SQL
     *
     * @param string $sql
     * @return boolean
     */
    public function executaSql(string $sql, array $params): bool
    {
        try {
            $this->conexao->beginTransaction();
            $this->resultado = $this->conexao->prepare($sql);
            $this->resultado->execute($params);
            $this->conexao->commit();
            return true;
        } catch (\Exception $ex) {
            echo "Falha ao executar o sql: " . $ex->getMessage();
            $this->conexao->rollBack();
            return false;
        }
    }

    /**
     * Retorna os registros (se houverem)
     * em forma de uma lista de objetos
     *
     * @param string $classe    Classe da qual os objetos serão instanciados
     * @return array
     */
    public function lerResultado(string $classe): array
    {
        return $this->resultado->fetchAll(\PDO::FETCH_CLASS, $classe);
    }
}
