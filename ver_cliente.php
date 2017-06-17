<?php
include_once ('header.php');
$i = $_GET['id'];

$cliente = new FFRJ\Cliente\Types\ClienteFisicaType();

$serviceDb = new FFRJ\DB\ServiceDB($conexao);
$serviceDb->persist($cliente);

$resultado = $serviceDb->find($i);



if($resultado['tipo_cliente'] == 'Fisica'){
    ?>

        <div class="container">
            <h1 class="page-header">Detalhe do Cliente - <?= $resultado['nome']?></h1>
            <div class="form-group">
                    <label for="email">Nome</label>
                    <input type="text" class="form-control" id="nome" value="<?= $resultado['nome']?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">CPF:</label>
                    <input type="text" class="form-control" id="cpf" value="<?= $resultado['cpf_cnpj']?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Idade:</label>
                    <input type="text" class="form-control" id="idade" value="<?= $resultado['idade']?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" value="<?= $resultado['endereco']?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Endereço de Cobrança:</label>
                    <input type="text" class="form-control" id="endereco" value="<?= $resultado['endereco_cobranca']?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Sexo:</label>
                    <input type="text" class="form-control" id="sexo" value="<?= $resultado['sexo']?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Tipo:</label>
                    <input type="text" class="form-control" id="endereco" value="<?= $resultado['tipo_cliente']?>" readonly>
            </div>
            <div class="form-group">
                    <label for="pwd">Estrelas:</label>
                    <input type="text" class="form-control" id="entrela" value="<?= $resultado['estrela']?>" readonly>
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="index.php" role="button">Voltar a Lista</a>
            </div>
        </div>

<?php
}else if($resultado['tipo_cliente'] == 'Juridica'){
    ?>

    <div class="container">
        <h1 class="page-header">Detalhe do Cliente - <?= $resultado['nome']?></h1>
        <div class="form-group">
                <label for="email">Razação Social</label>
                <input type="text" class="form-control" id="nome" value="<?= $resultado['nome']?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">CNPJ:</label>
                <input type="text" class="form-control" id="cpf" value="<?= $resultado['cpf_cnpj']?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Endereço:</label>
                <input type="text" class="form-control" id="idade" value="<?= $resultado['endereco']?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Endereço de Cobrança:</label>
                <input type="text" class="form-control" id="idade" value="<?= $resultado['endereco_cobranca']?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Tipo:</label>
                <input type="text" class="form-control" id="endereco" value="<?= $resultado['tipo_cliente']?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Estrelas:</label>
                <input type="text" class="form-control" id="entrela" value="<?= $resultado['estrela']?>" readonly>
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