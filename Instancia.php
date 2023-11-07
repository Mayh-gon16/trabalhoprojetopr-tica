<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta(157,"Sayra Gonçales",239,00);
$cliente = new Cliente(0010,"Sayra Gonçales","3468516",$conta);


echo "---------------------".PHP_EOL;
var_dump($cliente->exibirConta()->retornarNumero());
