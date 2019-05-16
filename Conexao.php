<?php
class Conexao{
	private $servidor = "localhost";
	private $banco = "clientes";
	private $usuario = "root";
	private $senha = "password";
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