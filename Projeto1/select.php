<?php
include "connect.php";

$sql = mysqli_query($link, "select * from login;");

while($vetor = mysqli_fetch_array($sql))
{
    $id = $vetor['id'];
    $nome = $vetor['nome'];
    $email = $vetor['email'];
    $senha = $vetor['senha'];

    echo "Id : $id<br>";
    echo "Nome : $nome<br>";
    echo "Email : $email<br>";
    echo "Senha : $senha<hr>";
}