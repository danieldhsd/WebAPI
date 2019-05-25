<?php 
    include_once __DIR__ . '/../config/Conexao.php';
    include_once __DIR__ . '/../objects/Cliente.php';

    function read_all(){
        $tabela = 'Clientes';
        $bd = new Conexao();
        $conexao = $bd->getConnection();
        $cliente = new Cliente();

        $sql = "SELECT id, nome, telefone, email, rua, numero, complemento, cidade, estado, rg, cpf, cep"
        . " from {$tabela}";

        $stmt = mysqli_query($conexao, $sql);

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
                        "estado" => $estado,
                        "rg" => $rg,
                        "cpf" => $cpf,
                        "cep" => $cep,
                );
                array_push($results["registros"], $cliEncontrado);
            }
            return json_encode($results);
        } else {
            return json_encode(
                array("mensagem" => "Nenhum Cliente Encontrado!")
            );
        }
    }
?>