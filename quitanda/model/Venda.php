<?php
namespace model;

class Venda
{

    private $codDoCliente;

    private $codDaLoja;

    private $arrProdutos;

    private $pago;

    private $data;

    /**
     *
     * @return mixed
     */
    public function getCodDoCliente()
    {
        return $this->codDoCliente;
    }

    /**
     *
     * @return mixed
     */
    public function getCodDaLoja()
    {
        return $this->codDaLoja;
    }

    /**
     *
     * @return mixed
     */
    public function getArrProdutos()
    {
        return $this->arrProdutos;
    }

    /**
     *
     * @return mixed
     */
    public function getPago()
    {
        return $this->pago;
    }

    /**
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *
     * @param mixed $codDoCliente
     */
    public function setCodDoCliente($codDoCliente)
    {
        $this->codDoCliente = $codDoCliente;
    }

    /**
     *
     * @param mixed $codDaLoja
     */
    public function setCodDaLoja($codDaLoja)
    {
        $this->codDaLoja = $codDaLoja;
    }

    /**
     *
     * @param mixed $arrProdutos
     */
    public function setArrProdutos($arrProdutos)
    {
        $this->arrProdutos = $arrProdutos;
    }

    /**
     *
     * @param mixed $pago
     */
    public function setPago($pago)
    {
        $this->pago = $pago;
    }

    /**
     *
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}