<?php

namespace Src\Model;

/**
 *
 * @author ensismoebius
 *        
 */
class Pessoa
{

    private int $cod;
    private string $nome;
    private string $sobrenome;
    private string $login;
    private string $senha;

    public function getCod(): int
    {
        return $this->cod;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setCod(int $cod): Pessoa
    {
        $this->cod = $cod;
        return $this;
    }

    public function setNome(string $nome): Pessoa
    {
        $this->nome = $nome;
        return $this;
    }

    public function setSobrenome(string $sobrenome): Pessoa
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function setLogin(string $login): Pessoa
    {
        $this->login = $login;
        return $this;
    }

    public function setSenha(string $senha): Pessoa
    {
        $this->senha = $senha;
        return $this;
    }

}
