<?php
require_once ('Pessoa.php');
/*
$pessoa1 = new Pessoa("Júnior", 27);


$pessoa2 = new Pessoa("Rebeca", 25);
*/

//echo $pessoa1->correr(50);

require_once ('Produto.php');
require_once ('Tenis.php');
/*
$produto1 = new Tenis();

if($produto1 instanceof Tenis){
    echo "É um tipo de ténis";
}else{
    echo "Não é um tipo de ténis";
}*/

$produto = new AdidasTenis();
$produto->getCor();
$produto->getTamanho();