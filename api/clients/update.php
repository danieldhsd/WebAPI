<?php
    include_once __DIR__ . '/../config/Conexao.php';
    include_once __DIR__ . '/objects/Cliente.php';

    $tabela = 'Clientes';
    $bd = new Conexao();
    $conexao = $bd->getConnection();
    $cliente = new Cliente();

    $cliente->setId($_GET['inId']);
    $cliente->setNome($_GET['inNome']);
    $cliente->setTelefone($_GET['inTelefone']);
    $cliente->setEmail($_GET["inEmail"]);
    $cliente->setRua($_GET["inRua"]);
    $cliente->setNumero($_GET["inNumero"]);
    $cliente->setComplemento($_GET["inComplemento"]);
    $cliente->setCidade($_GET["inCidade"]);
    $cliente->setEstado($_GET["inEstado"]);
    $cliente->setRg($_GET["inRg"]);
    $cliente->setCpf($_GET["inCpf"]);
    $cliente->setCep($_GET["inCep"]);

    $sql = "UPDATE {$tabela} "
    . " SET NOME = ?, TELEFONE = ?, EMAIL = ?, RUA = ?, NUMERO = ?, COMPLEMENTO = ?, CIDADE = ?, ESTADO = ?, RG = ?, CPF = ?, CEP = ? "
    . " WHERE ID = ?"; 
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ssssissssssi', $cliente->getNome(), $cliente->getTelefone(), $cliente->getEmail(),
    $cliente->getRua(), $cliente->getNumero(), $cliente->getComplemento(), $cliente->getCidade(), $cliente->getEstado(),
    $cliente->getRg(), $cliente->getCpf(), $cliente->getCep(), $cliente->getId());

    if($stmt->execute() === TRUE){
        return TRUE;
    }
    else{
        return FALSE;
    }



?>