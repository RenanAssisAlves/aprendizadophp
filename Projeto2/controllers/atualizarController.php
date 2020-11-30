<?php

include_once "connect.php";
$cad = $_GET['cad'];

if($cad == 0)
{
    $idcliente = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $enderecoid = $_POST['idendereco'];
    $numero = $_POST['numero'];

    mysqli_query($link, "update cliente set nome = '$nome', email = '$email', senha = '$senha' where cliente_id = '$idcliente'");
    header('location:../atualizar.php');
}

if($cad ==1)
{
$idendereco = $_POST['id'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

mysqli_query($link, "update endereco set rua='$rua', bairro='$bairro', cep='$cep' where endereco_id = '$idendereco'");
    header('location:../atualizar.php');
}
