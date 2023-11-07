<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta("157","Sayra Goncales","239,00");
$cliente = new Cliente("0010","Sayra Goncales","3468516",$conta);


echo "---------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirCodigo();