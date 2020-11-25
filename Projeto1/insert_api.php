<?php
include "connect.php";

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

mysqli_query($link, "insert into login(nome, email, senha) 
values('$nome','$email','$senha')");

header('location:form_insert.php');