<?php
include "connect.php";

$id = "8";

mysqli_query($link, "delete from login where id = '$id'");