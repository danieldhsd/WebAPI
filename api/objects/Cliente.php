<?php
    class Cliente{
        private $id;
        private $nome;
        private $telefone;
        private $email;
        private $rua;
        private $numero;
        private $complemento;
        private $cidade;
        private $estado;
        private $rg;
        private $cpf;
        private $cep;

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getRua(){
            return $this->rua;
        }
        public function getNumero(){
            return $this->numero;
        }
        public function getComplemento(){
            return $this->complemento;
        }
        public function getCidade(){
            return $this->cidade;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function getRg(){
            return $this->rg;
        }
        public function getCep(){
            return $this->cep;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setRua($rua){
            $this->rua = $rua;
        }
        public function setNumero($numero){
            $this->numero = $numero;
        }
        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }
        public function setRg($rg){
            $this->rg = $rg;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function setCep($cep){
            $this->cep = $cep;
        }
    }
?>