<?php 
    include_once __DIR__ . '/../config/Conexao.php';
    include_once __DIR__ . '/objects/Cliente.php';

    $tabela = 'Clientes';
    $bd = new Conexao();
    $conexao = $bd->getConnection();
    $cliente = new Cliente();
    $id = $_GET["inId"];


    $sql = "SELECT NOME, TELEFONE, EMAIL, RUA, NUMERO, COMPLEMENTO, CIDADE, ESTADO, RG, CPF, CEP "
    . " FROM {$tabela} WHERE ID = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    if($stmt->num_rows > 0){
        $results = array();
        $results['registros'] = array();

        while($linha = mysqli_fetch_array($stmt)){
			extract($linha);
			$cliEncontrado = array(
					"id" => $idCliente,
					"nome" =>$nomeCliente,
					"email" =>$emailCliente,	
					"telefone" =>$telefoneCliente,
					"senha" =>$senhaCliente
			);
			array_push($clientes["registros"], $cliEncontrado);
		}
		echo json_encode($clientes);
	} else {
		echo json_encode(
				array("mensagem" => "Nenhum Cliente Encontrado!")
			);
    }



?>