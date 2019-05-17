<?php
class Conexao{
	private $servidor = "localhost";
	private $banco = "Clientes";
	private $usuario = "root";
	private $senha = "root";
	public $conn;
	
	public function getConnection(){
		$this->conn = null;
		try{
			$this->conn = new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco); 
		}catch(PDOException $exception){
			echo "Erro de conexão " . $exception->getMessage();
		}
		return $this->conn;
	}
}
?>