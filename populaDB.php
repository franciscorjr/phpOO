<?php
require_once "conexaoDB.php";
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

require_once ('dados.php');

echo "#### Executando Fixture ####";

$conn = conexaoDB();

echo "### Removendo tabela ###";
$conn->query("DROP TABLE IF EXISTS clientes;");
echo " - OK\n";

echo "### Criando tabela ###";
$conn->query("CREATE TABLE clientes (
      id    INT NOT NULL AUTO_INCREMENT,
      nome  varchar(45)  NULL,
      cpf_cnpj   VARCHAR (15),
      idade INTEGER (3),
      endereco VARCHAR (255),
      endereco_cobranca VARCHAR (255),
      sexo VARCHAR (12),
      tipo_cliente VARCHAR (12),
      estrela VARCHAR (1),
      PRIMARY KEY (id));");
echo " - OK\n";

echo "### Inserindo dados ####";
for ($i=0; $i<=count($dados)-1; $i++) {

    if ($dados[$i]['tipo_cliente'] == 'Fisica') {

        $cliente = new FFRJ\Cliente\Types\ClienteFisicaType();

        $cliente
            ->setNome($dados[$i]['nome'])
            ->setCpf($dados[$i]['cpf'])
            ->setIdade($dados[$i]['idade'])
            ->setEndereco($dados[$i]['endereco'])
            ->setEnderecoCobranca($dados[$i]['endereco_cobranca'])
            ->setTipo($dados[$i]['tipo_cliente'])
            ->setSexo($dados[$i]['sexo'])
            ->classificaImportancia();

        $nome         = $cliente->getNome();
        $cpf          = $cliente->getCpf();
        $idade        = $cliente->getIdade();
        $endereco     = $cliente->getEndereco();
        $endereco_cob = $cliente->getEnderecoCobranca();
        $sexo         = $cliente->getSexo();
        $tipo         = $cliente->getTipo();
        $estrela      = $cliente->getEstrelas();

        $smt = $conn->prepare("INSERT INTO clientes (nome,cpf_cnpj,idade,endereco,endereco_cobranca,sexo,tipo_cliente,estrela)
        VALUE (:nome,:cpf,:idade,:endereco,:endereco_cobranca,:sexo,:tipo_cliente,:estrela)");
        $smt->bindParam(":nome", $nome);
        $smt->bindParam(":cpf", $cpf);
        $smt->bindParam(":idade", $idade);
        $smt->bindParam(":endereco", $endereco);
        $smt->bindParam(":endereco_cobranca", $endereco_cob);
        $smt->bindParam(":sexo", $sexo);
        $smt->bindParam(":tipo_cliente", $tipo);
        $smt->bindParam(":estrela", $estrela);
        $smt->execute();

    }else if ($dados[$i]['tipo_cliente'] == 'Juridica'){

        $cliente = new FFRJ\Cliente\Types\ClienteJuridicaType();

        $cliente
            ->setRazaoSocial($dados[$i]['razao_social'])
            ->setCnpj($dados[$i]['cnpj'])
            ->setEndereco($dados[$i]['endereco'])
            ->setEnderecoCobranca($dados[$i]['endereco_cobranca'])
            ->setTipo($dados[$i]['tipo_cliente'])
            ->classificaImportancia();

        $nome         = $cliente->getRazaoSocial();
        $cnpj         = $cliente->getCnpj();
        $endereco     = $cliente->getEndereco();
        $endereco_cob = $cliente->getEnderecoCobranca();
        $tipo         = $cliente->getTipo();
        $estrela      = $cliente->getEstrelas();

        $smt = $conn->prepare("INSERT INTO clientes (nome,cpf_cnpj,endereco,endereco_cobranca,tipo_cliente,estrela)
        VALUE (:nome,:cnpj,:endereco,:endereco_cobranca,:tipo_cliente,:estrela)");
        $smt->bindParam(":nome", $nome);
        $smt->bindParam(":cnpj", $cnpj);
        $smt->bindParam(":endereco", $endereco);
        $smt->bindParam(":endereco_cobranca", $endereco_cob);
        $smt->bindParam(":tipo_cliente", $tipo);
        $smt->bindParam(":estrela", $estrela);
        $smt->execute();
    }
}

echo " - OK\n";

echo "### Concluido ####";
