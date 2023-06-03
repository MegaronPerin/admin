<?php

$conn = mysqli_connect(CC_HOST, CC_USUARIO, CC_SENHA,CC_CONEXAO);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

?>