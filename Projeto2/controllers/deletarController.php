<?php
include_once "connect.php";

$iddeletar = addslashes($_POST['id']);

mysqli_query($link, "delete from cliente where cliente_id = '$iddeletar'");

header('location:../deletar.php');