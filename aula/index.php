<?php
/*
require_once ('Pessoa.php');
/*
$pessoa1 = new Pessoa("Júnior", 27);
$pessoa2 = new Pessoa("Rebeca", 25);
echo $pessoa1->correr(50);
require_once ('Produto.php');
require_once ('Tenis.php');
/*
$produto1 = new Tenis();
if($produto1 instanceof Tenis){
    echo "É um tipo de ténis";
}else{
    echo "Não é um tipo de ténis";
}*/
/*
$produto = new AdidasTenis();
$produto->getCor();
$produto->getTamanho();
$produto1 = new Produto();
$produto1
        ->setNome('Lumia 950 XL')
        ->setDescricao('Smartphone da Microsoft')
        ->setEstoque(30)
        ->setValor(200)
;
echo $produto1->getNome();
echo $produto1->getDescricao();*/

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conta = new SON\Conta\Types\ContaPremiunType();


$bancoSantander = new SON\Banco\Santander();
$bancoSantander->setConta($conta);
$bancoSantander->setNome('Santander Exemplo');
$bancoSantander->getConta()->depositar(10);
echo $bancoSantander->getConta()->getSaldo();

