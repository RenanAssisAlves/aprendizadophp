<?php
include "connect.php";

$nome = 'nome';
$email = 'email';
$senha = 'senha';

mysqli_query($link, "insert into login(nome, email, senha) 
values('$nome','$email','$senha')");

header('location:form_insert.php');