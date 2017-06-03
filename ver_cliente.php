<?php
include_once ('header.php');
$i = $_GET['id'];
$cliente = new Clientes($dados[$i][nome],$dados[$i][cpf],$dados[$i][idade],$dados[$i][endereco],$dados[$i][sexo]);

?>



    <div class="container">
        <h1 class="page-header">Detalhe do Cliente - <?= $cliente->nome?></h1>
        <div class="form-group">
                <label for="email">Nome</label>
                <input type="text" class="form-control" id="nome" value="<?= $cliente->nome?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">CPF:</label>
                <input type="text" class="form-control" id="cpf" value="<?= $cliente->cpf?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Idade:</label>
                <input type="text" class="form-control" id="idade" value="<?= $cliente->idade?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Endereço:</label>
                <input type="text" class="form-control" id="endereco" value="<?= $cliente->endereco?>" readonly>
        </div>
        <div class="form-group">
                <label for="pwd">Sexo:</label>
                <input type="text" class="form-control" id="sexo" value="<?= $cliente->sexo?>" readonly>
        </div>
        <div class="form-group">
                <a class="btn btn-primary" href="index.php" role="button">Voltar a Lista</a>
        </div>

    </div>

<?php
include_once ('footer.php');
?>