<link rel="stylesheet" href="../../view/css/bootstrap.min.css">
<link rel="stylesheet" href="../../view/css/cover.css">

<div class="container text-center">
<?php
    include_once __DIR__ . '/../config/Conexao.php';
    include_once __DIR__ . '/../objects/Cliente.php';

    $tabela = 'Clientes';
    $bd = new Conexao();
    $conexao = $bd->getConnection();
    $cliente = new Cliente();

    $cliente->setNome($_POST["inNome"]);
    $cliente->setTelefone($_POST["inTelefone"]);
    $cliente->setEmail($_POST["inEmail"]);
    $cliente->setRua($_POST["inRua"]);
    $cliente->setNumero($_POST["inNumero"]);
    $cliente->setComplemento($_POST["inComplemento"]);
    $cliente->setCidade($_POST["inCidade"]);
    $cliente->setEstado($_POST["inEstado"]);
    $cliente->setRg($_POST["inRg"]);
    $cliente->setCpf($_POST["inCpf"]);
    $cliente->setCep($_POST["inCep"]);

    $sql = "INSERT INTO {$tabela} "  
    . " (nome, email, telefone, rua, numero, complemento, cidade, estado, cep, rg, cpf) "
    . " values ('{$cliente->getNome()}', '{$cliente->getEmail()}', '{$cliente->getTelefone()}',
    '{$cliente->getRua()}', {$cliente->getNumero()}, '{$cliente->getComplemento()}', '{$cliente->getCidade()}', 
    '{$cliente->getEstado()}', '{$cliente->getCep()}', '{$cliente->getRg()}', '{$cliente->getCpf()}') ";
    
    if (mysqli_query($conexao, $sql)) {
        echo "<h2>Novo cliente cadastrado!!</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
    }
    echo "<br></br>";
    echo "<a href='../../view/html/Formulario_Cliente.html' class='btn btn-primary' role='button'>Cadastrar novo Cliente</a>";
    echo "<br></br>";
    echo "<a href='../../view/html/tabela_clientes.php' class='btn btn-primary' role='button'>Ver Clientes Cadastrados</a>";
    mysqli_close($conexao);
?>
</div>