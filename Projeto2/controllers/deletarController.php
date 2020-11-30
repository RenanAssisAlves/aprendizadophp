<?php
include_once "connect.php";

$iddeletar = addslashes(['id']);

mysqli_query($link, "delete from cliente where id = '$iddeletar'");

