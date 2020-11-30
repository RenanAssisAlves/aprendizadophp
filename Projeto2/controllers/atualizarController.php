<?php

include_once "connect.php";
$cad = $_GET['cad'];

if($cad == 0)
{
    echo "Cadastrando";
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $enderecoid = $_GET['idendereco'];
    $numero = $_GET['numero'];

    mysqli_query($link, "update cliente set nome = '$nome', email = '$email', senha = '$senha' where cliente_id = '$id'");
    header('location:../atualizar.php');
}
