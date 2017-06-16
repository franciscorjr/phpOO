<?php
namespace FFRJ\Cliente\Interfaces;

interface InterfaceCliente
{
    public function classificaImportancia();
    public function defineEnderecoCobranca($enderecoCobranca);
}