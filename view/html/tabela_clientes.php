<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/cover.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Clientes Cadastrados</h2>
            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="">Nome</th>
                    <th class="">Email</th>
                    <th class="">Telefone</th>
                    <th class="">Cidade</th>
                    <th class="">Deletar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    include_once __DIR__ . '/../../api/clients/read_all.php';

                    $clientes_json = read_all();

                    $clientes = json_decode($clientes_json, true);
                    $resultado = array();
                    $resultado['registros'] = array();
                    
                    for($i = 0; $i < count($clientes["registros"]); $i++){
                        echo "<tr>";
                        echo "<td class='text text-center'><a href='atualiza_cliente.php?id=". $clientes["registros"][$i]["id"] ."'>" . $clientes["registros"][$i]["nome"] . "</a></td>";
                        echo "<td class='text text-center'>" . $clientes["registros"][$i]["email"] . "</td>";
                        echo "<td class='text text-center'>" . $clientes["registros"][$i]["telefone"] . "</td>";
                        echo "<td class='text text-center'>" . $clientes["registros"][$i]["cidade"] . "</td>";
                        echo "<td class='text text-center'><a href='../../api/clients/delete.php?id=". $clientes["registros"][$i]["id"] ."'><i class='fas fa-trash'></i></a></td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
            <a href="Formulario_Cliente.html" class="btn btn-primary" role="button">Cadastrar Novo Cliente</a>
            <a href="../../dist/index.html" target='blank' class="btn btn-primary" role="button">Ver documentação da API</a>
        </div>
        
    </div>
</body>
</html>