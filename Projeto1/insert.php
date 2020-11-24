<?php
include "connect.php";

$nome = "Fábio Venâncio";
$email = "fabio@gmail.com";
$senha = "fabio123";

mysqli_query($link, "insert into login(nome, email, senha) 
values('$nome','$email','$senha')");