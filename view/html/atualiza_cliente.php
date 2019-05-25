<?php
    include_once __DIR__ . '/../../api/objects/Cliente.php';
    include_once __DIR__ . '/../../api/config/Conexao.php';

    $tabela = 'Clientes';
    $bd = new Conexao();
    $conexao = $bd->getConnection();
    $cliente = new Cliente();

    $id = $_GET['id'];

    $sql = "SELECT id, nome, telefone, email, rua, numero, complemento, cidade, estado, rg, cpf, cep"
        . " from {$tabela} where id = {$id}";
    
    $stmt = mysqli_query($conexao, $sql);

    if($stmt->num_rows > 0){
        while($linha = mysqli_fetch_array($stmt)){
            extract($linha);
            $cliEncontrado = array(
                    "id" => $id,
                    "nome" =>$nome,
                    "email" =>$email,	
                    "telefone" =>$telefone,
                    "rua" => $rua,
                    "numero" => $numero,
                    "complemento" => $complemento,
                    "cidade" => $cidade,
                    "estado" => $estado,
                    "rg" => $rg,
                    "cpf" => $cpf,
                    "cep" => $cep,
            );
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Atualizar dados do Clientes</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/cover.css" rel="stylesheet">    
    <!-- Custom styles for this template -->
    <link href="../css/form-validation.css" rel="stylesheet">
</head>

<body class="">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Atualizar dados do Clientes</h2>
        </div>

        <div class="row">
            <div class="col-md-8 order-md-1">
               <h4 class="mb-3">Dados do Cliente</h4>
                                
                <form class='needs-validation' action='../../api/clients/update.php' method='POST'>
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="inNome" id="inNome" value="<?php echo $cliEncontrado['nome']; ?>" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="inId" value="<?php echo $cliEncontrado['id']; ?>">
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="inEmail" id="email" value="<?php echo $cliEncontrado['email']; ?>" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" data-js="telefone" class="form-control" name="inTelefone" value="<?php echo $cliEncontrado['telefone']; ?>"  id="telefone">
                    </div>

                    <div class="mb-3">
                        <label for="cep">CEP</label>
                        <input type="text" data-js="cep" class="form-control" value="<?php echo $cliEncontrado['cep']; ?>" name="inCep" id="cep">
                    </div>

                    <div class="mb-3">
                        <label for="rg">RG</label>
                        <input type="text" data-js="rg" class="form-control" value="<?php echo $cliEncontrado['rg']; ?>" name="inRg" id="rg">
                    </div>

                    <div class="mb-3">
                        <label for="cpf">CPF</label>
                        <input type="text" data-js="cpf" class="form-control" name="inCpf" value="<?php echo $cliEncontrado['cpf']; ?>" id="cpf">
                    </div>

                    <h5 class="mb-3">Endereço</h5>
                    <div class="mb-3">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" name="inRua" id="rua" value="<?php echo $cliEncontrado['rua']; ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="numeroRua">Número</label>
                        <input type="number" class="form-control" name="inNumero" id="numeroRua" value="<?php echo $cliEncontrado['numero']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" name="inComplemento" value="<?php echo $cliEncontrado['complemento']; ?>" id="complemento">
                    </div>

                    <div class="mb-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="inCidade" id="cidade" value="<?php echo $cliEncontrado['cidade']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="inEstado" id="estado" value="<?php echo $cliEncontrado['estado']; ?>">
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Atualizar Cliente</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2019 Cadastro de Clientes</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacidade</a></li>
                <li class="list-inline-item"><a href="#">Termos de Uso</a></li>
                <li class="list-inline-item"><a href="#">Suporte</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="../js/form-validation.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>