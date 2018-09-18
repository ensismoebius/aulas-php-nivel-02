<?php
namespace model;

class Carrinho
{
    private $cod;

    private $arrVendas;

    private $codCliente;

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
    public function getArrVendas()
    {
        return $this->arrVendas;
    }

    /**
     *
     * @return mixed
     */
    public function getCodCliente()
    {
        return $this->codCliente;
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
     * @param mixed $arrVendas
     */
    public function setArrVendas($arrVendas)
    {
        $this->arrVendas = $arrVendas;
    }

    /**
     *
     * @param mixed $codCliente
     */
    public function setCodCliente($codCliente)
    {
        $this->codCliente = $codCliente;
    }
}