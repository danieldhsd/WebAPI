<link rel="stylesheet" href="../../view/css/bootstrap.min.css">
<link rel="stylesheet" href="../../view/css/cover.css">

<div class="container text-center">

<?php
    include_once __DIR__ . '/../config/Conexao.php';
    include_once __DIR__ . '/../objects/Cliente.php';

    $tabela = 'Clientes';
    $bd = new Conexao();
    $conexao = $bd->getConnection();
    $id = $_GET['id'];
    
    $sql = "DELETE FROM {$tabela}  WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);

    if($stmt->execute() === TRUE){
        echo "<h2>Cliente Apagado com Sucesso</h2>";
        echo "<a href='../../view/html/tabela_clientes.php' class='btn btn-primary' role='button'>Ver Clientes Cadastrados</a>";
        return TRUE;
    }
    else{
        echo "Erro";
        return FALSE;
    }
?>
</div>