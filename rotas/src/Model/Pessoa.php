<?php
namespace Src\Model;

/**
 *
 * @author ensismoebius
 *        
 */
class Pessoa
{
    private string $nome;
    private string $sobrenome;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setNome(string $nome) : Pessoa
    {
        $this->nome = $nome;
        return $this;
    }

    public function setSobrenome(string $sobrenome) : Pessoa
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }

}