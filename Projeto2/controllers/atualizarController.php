<?php

include_once "connect.php";
$cad = $_GET['cad'];

if($cad == 0)
{
    $idcliente = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $enderecoid = addslashes($_POST['idendereco']);
    $numero = addslashes($_POST['numero']);

    mysqli_query($link, "update cliente set nome = '$nome', email = '$email', senha = '$senha' where cliente_id = '$idcliente'");
    header('location:../atualizar.php');
}

if($cad ==1)
{
$idendereco = addslashes($_POST['id']);
$rua = addslashes($_POST['rua']);
$bairro = addslashes($_POST['bairro']);
$cep = addslashes($_POST['cep']);

mysqli_query($link, "update endereco set rua='$rua', bairro= '$bairro', cep='$cep' where endereco_id = '$idendereco'");
    header('location:../atualizar.php');
}
