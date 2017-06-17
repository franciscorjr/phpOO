<div class="container">
    <h1 class="page-header">Lista de Clientes</h1>
    <div class="table-responsive">
        <table width="100%" class="table table-striped table-bordered" id="example" cellspacing="0">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome/Razão Social</th>
                <th>CPF/CNPJ</th>
                <th>Endereço</th>
                <th>Tipo</th>
                <th>Estrelas</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Nome/Razão Social</th>
                <th>CPF/CNPJ</th>
                <th>Endereço</th>
                <th>Tipo</th>
                <th>Estrelas</th>
                <th>Ações</th>
            </tr>
            </tfoot>
            <tbody>
            <?php

            $cliente = new FFRJ\Cliente\Types\ClienteFisicaType();

            $serviceDb = new FFRJ\DB\ServiceDB($conexao);
            $serviceDb->persist($cliente);

            foreach ($serviceDb->listar('id desc') as $data) {
                //echo $data['nome']."</br>";


                if ($data['tipo_cliente'] == 'Fisica') {

                    echo
                        "<tr>
                    <th>" . $data['id'] . "</th>
                    <td>" . $data['nome'] . "</td>
                    <td>" . $data['cpf_cnpj'] . "</td>
                    <td>" . $data['endereco'] . "</td>
                    <td>" . $data['tipo_cliente'] . "</td>
                    <td>" . $data['estrela'] . "</td>
                    <td><a class=\"btn btn-default\" href=\"ver_cliente.php?id=" . $data['id'] . "\" role=\"button\">Ver Detalhes</a></td>
                </tr>";
                }

                if($data['tipo_cliente'] == 'Juridica'){

                    echo
                        "<tr>
                        <th>" . $data['id'] . "</th>
                    <td>" . $data['nome'] . "</td>
                    <td>" . $data['cpf_cnpj'] . "</td>
                    <td>" . $data['endereco'] . "</td>
                    <td>" . $data['tipo_cliente'] . "</td>
                    <td>" . $data['estrela'] . "</td>
                        <td><a class=\"btn btn-default\" href=\"ver_cliente.php?id=".$data['id']."\" role=\"button\">Ver Detalhes</a></td>
                        </tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
