<?php
include "connect.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$teste = mysqli_query($link, "insert into login(nome, email, senha) 
values('$nome','$email','$senha')");

echo($teste);

//header('location:form_insert.php');