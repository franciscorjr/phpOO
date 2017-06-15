<?php


class ClienteJuridicaType extends Cliente implements InterfaceCliente
{
    protected $cnpj;
    protected $razaoSocial;

    public function classificaImportancia()
    {
        $this->setEstrelas(5);
        return $this->getEstrelas();
    }

    public function defineEnderecoCobranca($enderecoCobranca)
    {
        return $this->setEnderecoCobranca($enderecoCobranca);

    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

}