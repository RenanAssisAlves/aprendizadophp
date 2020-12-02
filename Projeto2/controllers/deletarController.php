<?php
include_once "connect.php";

$deletar = addslashes($_POST['deletar']);
$iddeletar = addslashes($_POST['id']);

if ($deletar == 0)
    {
        mysqli_query($link, "delete from cliente where cliente_id = '$iddeletar'");

        header("Refresh");
    }

else if($deletar == 1)
{
mysqli_query($link, "delete from endereco where endereco_id = '$iddeletar'");

header("Refresh");
}
