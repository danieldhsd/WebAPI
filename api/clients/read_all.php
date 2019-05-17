<?php 
    include_once __DIR__ . '/../config/Conexao.php';
    include_once __DIR__ . '/objects/Cliente.php';

    $tabela = 'Clientes';
    $bd = new Conexao();
    $conexao = $bd->getConnection();
    $cliente = new Cliente();

    $sql = "SELECT NOME, TELEFONE, EMAIL, RUA, NUMERO, COMPLEMENTO, CIDADE, ESTADO, RG, CPF, CEP "
    . " FROM {$tabela}";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    
    if($stmt->num_rows > 0){
        $results = array();
        $results['registros'] = array();

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
                    "estado" => $estado;
                    "rg" => $rg,
                    "cpf" => $cpf,
                    "cep" => $cep;

					
			);
			array_push($results["registros"], $cliEncontrado);
		}
		echo json_encode($results);
	} else {
		echo json_encode(
				array("mensagem" => "Nenhum Cliente Encontrado!")
			);
    }



?>