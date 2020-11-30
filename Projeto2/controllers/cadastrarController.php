<?php
include "connect.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];


echo($nome.\n.$email.\n.$senha.\n.$rua.\n.$numero.\n.$bairro.\n.$cidade.\n.$cep);
mysqli_query($link, "insert into cidade(nome)
values('$cidade')");

$idcidade = mysqli_query($link,"select cidade_id from cidade where cidade.nome = '$nome')");

mysqli_query($link, "insert into endereco(rua, bairro, cidade_id, cep)
 values('$rua', '$bairro', '$idcidade', '$cep'");

$idendereco = mysqli_insert_id();
mysqli_query($link, "insert into cliente(nome, email, senha, entrega_endereco_id, entrega_numero) 
values('$nome','$email','$senha', '$idendereco', '$numero')");
