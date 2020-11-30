<?php

include_once "connect.php";
$cad = $_GET['cad'];

if($cad == 0)
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $enderecoid = $_POST['idendereco'];
    $numero = $_POST['numero'];

    mysqli_query($link, "update cliente set nome = '$nome', email = '$email', senha = '$senha' where cliente_id = '$id'");
    header('location:../atualizar.php');
}
