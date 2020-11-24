<?php
include "connect.php";

$nome = "CCM Teste";
$senha = 'teste123';
mysqli_query($link, "update login set nome = '$nome', senha = '$senha' where id = 9");