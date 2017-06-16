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

            for ($i=0; $i<=count($dados)-1; $i++){

                if($dados[$i][tipo_cliente] == 'Fisica'){
                    $cliente = new FFRJ\Cliente\Types\ClienteFisicaType();
                    $cliente
                        ->setNome($dados[$i][nome])
                        ->setCpf($dados[$i][cpf])
                        ->setEndereco($dados[$i][endereco])
                        ->setTipo($dados[$i][tipo_cliente])
                        ->classificaImportancia();
                    echo
                        "<tr>
                    <th>".$i."</th>
                    <td>".$cliente->getNome()."</td>
                    <td>".$cliente->getCpf()."</td>
                    <td>".$cliente->getEndereco()."</td>
                    <td>".$cliente->getTipo()."</td>
                    <td>".$cliente->getEstrelas()."</td>
                    <td><a class=\"btn btn-default\" href=\"ver_cliente.php?id=".$i."\" role=\"button\">Ver Detalhes</a></td>
                </tr>";
                }
                if($dados[$i][tipo_cliente] == 'Juridica'){
                    $cliente = new FFRJ\Cliente\Types\ClienteJuridicaType();

                    $cliente
                        ->setRazaoSocial($dados[$i][razao_social])
                        ->setCnpj($dados[$i][cnpj])
                        ->setEndereco($dados[$i][endereco])
                        ->setTipo($dados[$i][tipo_cliente])
                        ->classificaImportancia();
                    echo
                        "<tr>
                    <th>".$i."</th>
                    <td>".$cliente->getRazaoSocial()."</td>
                     
                    <td>".$cliente->getCnpj()."</td>
                    <td>".$cliente->getEndereco()."</td>
                    <td>".$cliente->getTipo()."</td>
                    <td>".$cliente->getEstrelas()."</td>
                    <td><a class=\"btn btn-default\" href=\"ver_cliente.php?id=".$i."\" role=\"button\">Ver Detalhes</a></td>
                    </tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
