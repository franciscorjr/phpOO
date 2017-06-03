<?php


class Clientes
{
    public $nome;
    public $cpf;
    public $idade;
    public $endereco;
    public $sexo;

    public function __construct($nome, $cpf, $idade, $endereco, $sexo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->sexo = $sexo;
    }
}