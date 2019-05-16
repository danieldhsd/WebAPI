<?php
    include_once __DIR__ . '/../config/Conexao.php';
    include_once __DIR__ . '/objects/Cliente.php';

    $tabela = 'Clientes';
    $bd = new Conexao();
    $conexao = $bd->getConnection();
    $id = $_GET["inNome"];

    $sql = "DELETE FROM {$tabela}  WHERE ID = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);

    if($stmt->execute() === TRUE){
        return TRUE;
    }
    else{
        return FALSE;
    }







?>