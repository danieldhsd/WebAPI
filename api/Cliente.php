<?php
class Cliente {

	private $id;
	private $nome;
	private $email;
	private $telefone;
    private $rua;
    private $numero;
    private $complemento;
    private $cidade;
    private $estado;
    private $cep;
    private $rg;
    private $cpf;

	public function __construct($bd) {
		$this->conexao = $bd;
	}

	function getAll() {
		$consulta = 'select * from ' . $this->tabela;
		$stmt = $this->conexao->query($consulta);
		return $stmt;
	}

	function getById($id){
		$consulta = 'select * from ' . $this->tabela . ' where id = ' . $id;
		$stmt = $this->conexao->query($consulta);
		return $stmt;
    }
    
    function insert($cliente){
        $consulta = 'insert into {$this->tabela} (nome, email, telefone, rua, numero, 
        complemento, cidade, estado, cep, rg, cpf) values ("{$cliente->nome}", "{$cliente->email}", 
            "{$cliente->telefone}", "{$cliente->rua}",
            "{$cliente->numero}", "{$cliente->complemento}", "{$cliente->cidade}", "{$cliente->estado}",
            "{$cliente->cep}", "{$cliente->rg}", "{$cliente->cpf}")';
        
        if ($this->conexao->query($consulta) === TRUE) {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    function delete($id){
        $consulta = 'delete from {$this->tabela} where id = {$id}';
        if ($this->conexao->query($consulta) === TRUE) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }

    function update($cliente){
        $consulta = 'update {$this->tabela} set nome = {$cliente->nome}, email = {$cliente->email}, 
        telefone = {$cliente->telefone}, rua = {$cliente->rua}, numero = {$cliente->numero}, 
        complemento = {$cliente->complemento}, cidade = {$cliente->cidade}, estado = {$cliente->estado}, 
        cep = {$cliente->cep}, rg = {$cliente->rg}, cpf = {$cliente->cpf} where id = {$cliente->id}';
        
        if ($this->conexao->query($consulta) === TRUE) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }
}