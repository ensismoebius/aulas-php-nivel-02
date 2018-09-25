<?php
namespace model;
class Produto
{
    private $cod;

    private $tipo;

    private $preco;

    private $validade;

    private $qtdeEmEstoque;
    
    private $nome;
    
    private $tipoDeUnidade;

    private $codLoja;

	public function getTipoDeUnidade() {
		return $this->tipoDeUnidade;
	}

	public function getCodLoja() {
		return $this->codLoja;
	}

	public function setTipoDeUnidade($tipoDeUnidade) {
		$this->tipoDeUnidade = $tipoDeUnidade;
	}

	public function setCodLoja($codLoja) {
		$this->codLoja = $codLoja;
	}

	/**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

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
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     *
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     *
     * @return mixed
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     *
     * @return mixed
     */
    public function getQtdeEmEstoque()
    {
        return $this->qtdeEmEstoque;
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
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     *
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     *
     * @param mixed $validade
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;
    }

    /**
     *
     * @param mixed $qtdeEmEstoque
     */
    public function setQtdeEmEstoque($qtdeEmEstoque)
    {
        $this->qtdeEmEstoque = $qtdeEmEstoque;
    }
}