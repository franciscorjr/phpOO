<div class="container">
    <h1 class="page-header">Lista de Clientes</h1>
    <div class="table-responsive">
        <table width="100%" class="table table-striped table-bordered" id="example" cellspacing="0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Ações</th>
            </tr>
            </tfoot>
            <tbody>
            <?php
            for ($i=0; $i<=count($dados)-1; $i++){
                $cliente = new Clientes($dados[$i][nome],$dados[$i][cpf],$dados[$i][idade],$dados[$i][endereco],$dados[$i][sexo]);
                echo
                "<tr>
                    <th>".$i."</th>
                    <td>".$cliente->nome."</td>
                    <td>".$cliente->idade."</td>
                    <td>".$cliente->sexo."</td>
                    <td><a class=\"btn btn-default\" href=\"ver_cliente.php?id=".$i."\" role=\"button\">Ver Detalhes</a></td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
