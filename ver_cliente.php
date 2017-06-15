<?php
include_once ('header.php');
$i = $_GET['id'];
if($dados[$i][tipo_cliente] == 'Fisica'){
    $cliente = new ClienteFisicaType();
    $cliente
        ->setNome($dados[$i][nome])
        ->setCpf($dados[$i][cpf])
        ->setEndereco($dados[$i][endereco])
        ->setTipo($dados[$i][tipo_cliente])
        ->setEndereco($dados[$i][endereco])
        ->defineEnderecoCobranca($dados[$i][endereco_cobranca])
        ->setIdade($dados[$i][idade])
        ->setSexo($dados[$i][sexo])
        ->classificaImportancia();?>

        <div class="container">
            <h1 class="page-header">Detalhe do Cliente - <?= $cliente->getNome()?></h1>
            <div class="form-group">
                    <label for="email">Nome</label>
                    <input type="text" class="form-control" id="nome" value="<?= $cliente->getNome()?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">CPF:</label>
                    <input type="text" class="form-control" id="cpf" value="<?= $cliente->getCpf()?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Idade:</label>
                    <input type="text" class="form-control" id="idade" value="<?= $cliente->getIdade()?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" value="<?= $cliente->getEndereco()?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Endereço de Cobrança:</label>
                    <input type="text" class="form-control" id="endereco" value="<?= $cliente->getEnderecoCobranca()?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Sexo:</label>
                    <input type="text" class="form-control" id="sexo" value="<?= $cliente->getSexo()?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Estrelas:</label>
                    <input type="text" class="form-control" id="entrela" value="<?= $cliente->getEstrelas()?>" readonly>
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="index.php" role="button">Voltar a Lista</a>
            </div>
        </div>

<?php
}else if($dados[$i][tipo_cliente] == 'Juridica'){
    $cliente = new ClienteJuridicaType();

    $cliente
        ->setRazaoSocial($dados[$i][razao_social])
        ->setCnpj($dados[$i][cnpj])
        ->setEndereco($dados[$i][endereco])
        ->setEnderecoCobranca($dados[$i][endereco_cobranca])
        ->setTipo($dados[$i][tipo_cliente])
        ->classificaImportancia();?>

    <div class="container">
        <h1 class="page-header">Detalhe do Cliente - <?= $cliente->getRazaoSocial()?></h1>
        <div class="form-group">
                <label for="email">Razação Social</label>
                <input type="text" class="form-control" id="nome" value="<?= $cliente->getRazaoSocial()?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">CNPJ:</label>
                <input type="text" class="form-control" id="cpf" value="<?= $cliente->getCnpj()?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Endereço:</label>
                <input type="text" class="form-control" id="idade" value="<?= $cliente->getEndereco()?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Endereço de Cobrança:</label>
                <input type="text" class="form-control" id="idade" value="<?= $cliente->getEnderecoCobranca()?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Tipo:</label>
                <input type="text" class="form-control" id="endereco" value="<?= $cliente->getTipo()?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Estrelas:</label>
                <input type="text" class="form-control" id="entrela" value="<?= $cliente->getEstrelas()?>" readonly>
        </div>
        <div class="form-group">
            <a class="btn btn-primary" href="index.php" role="button">Voltar a Lista</a>
        </div>
    </div>
<?php
}
?>

<?php
include_once ('footer.php');
?>