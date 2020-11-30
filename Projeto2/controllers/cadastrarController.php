<?php
include "connect.php";

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);
$rua = addslashes($_POST['rua']);
$numero = addslashes($_POST['numero']);
$bairro = addslashes($_POST['bairro']);
$cidade = addslashes($_POST['cidade']);
$cep = addslashes($_POST['cep']);

mysqli_query($link, "insert into cidade(nome)
values('$cidade')");

$result = mysqli_query($link,"select cidade_id from cidade where cidade.nome = '$nome')");
//$row=$result->fetch_object();

$idcidade = 2;

mysqli_query($link, "insert into endereco(rua, bairro, cidade_id, cep)
 values('$rua', '$bairro', '$idcidade', '$cep')");

$idendereco = mysqli_insert_id();
mysqli_query($link, "insert into cliente(nome, email, senha, entrega_endereco_id, entrega_numero) 
values('$nome','$email','$senha', '$idendereco', '$numero')");
header('location:../cadastrar.php');