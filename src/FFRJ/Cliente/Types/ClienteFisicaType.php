<?php

namespace FFRJ\Cliente\Types;
use FFRJ\Cliente\ClienteAbstract;
use FFRJ\Cliente\Interfaces\InterfaceCliente;


class ClienteFisicaType extends ClienteAbstract implements InterfaceCliente
{

    protected $nome;
    protected $cpf;
    protected $idade;
    protected $sexo;


    public function classificaImportancia()
    {
        $this->setEstrelas(3);
        return $this->getEstrelas();
    }

    public function defineEnderecoCobranca($enderecoCobranca)
    {
        return $this->setEnderecoCobranca($enderecoCobranca);

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }


}