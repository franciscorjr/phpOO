<?php

namespace FFRJ\Cliente;


abstract class ClienteAbstract
{
    protected $id;
    protected $tipo;
    protected $endereco;
    protected $enderecoCobranca;
    protected $estrelas;
    protected $table = "clientes";

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

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