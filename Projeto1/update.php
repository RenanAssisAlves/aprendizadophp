<?php
include "connect.php";

$nome = "CCM Teste";

mysqli_query($link, "update login set nome = '$nome' where id = 3");