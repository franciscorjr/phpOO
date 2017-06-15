<?php
require_once("ProcessoTrait.php");
require_once("ContaAbstract.php");
require_once("ContaTypeType.php");
require_once("ContaPremiunTypeType.php");

$conta = new ContaPremiunType();

$conta->depositar(200);
$conta->sacar(30);
echo $conta->getSaldo();