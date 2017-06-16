<?php

namespace FFRJ\Cliente;

abstract class ClienteAbstract
{
    protected $tipo;
    protected $endereco;
    protected $enderecoCobranca;
    protected $estrelas;

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEstrelas()
    {
        return $this->estrelas;
    }

    public function setEstrelas($estrelas)
    {
        return $this->estrelas = $estrelas;

    }



}