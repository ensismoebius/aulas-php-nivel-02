<?php

class Produto
{

    private $cod;

    private $nome;

    /**
     *
     * @return mixed
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @param mixed $cod
     */
    public function setCod($cod)
    {
        $this->cod = $cod;
    }

    /**
     *
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}