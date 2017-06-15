<?php

namespace SON\Conta;
use SON\Conta\Util\ProcessoTrait;

abstract class ContaAbstract
{
    use ProcessoTrait;
    protected $saldo;


    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($valor){
        $this->iniciaProcesso();
        $this->saldo += $this->calculoDeposito($valor);
        $this->fianlizaProcesso();
        return true;
    }

    public function sacar($valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    abstract protected function calculoDeposito($valor);
}