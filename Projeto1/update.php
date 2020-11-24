<?php
include "connect.php";

$nome = "CCM testando";

mysqli_query($link, "update login set nome = '$nome' where id = 8");