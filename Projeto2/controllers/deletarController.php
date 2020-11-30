<?php
include_once "connect.php";

$iddeletar = $_POST['id'];

mysqli_query($link, "delete from cliente where id = '$iddeletar'");

