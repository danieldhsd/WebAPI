<?php

include_once "Conexao.php";
include_once "Cliente.php";

$cliente = new Cliente();

$cliente->nome = $_GET["inNome"];
$cliente->email = $_GET["inEmail"];
$cliente->telefone = $_GET["inTelefone"];
$cliente->rua = $_GET["inRua"];
$cliente->numero = $_GET["inNumero"];
$cliente->complemento = $_GET["inComplemento"];
$cliente->cidade = $_GET["inCidade"];
$cliente->estado = $_GET["inEstado"];
$cliente->cep = $_GET["inCep"];
$cliente->rg = $_GET["inRg"];
$cliente->cpf = $_GET["inCpf"];

$cliente->insert($cliente);

?>