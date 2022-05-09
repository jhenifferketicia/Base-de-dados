<?php

include_once("conexao.php");

$nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING); 
$email= filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING); 
$telefone= filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING); 

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";
//echo "Telefone: $telefone <br>";

$result_usuario = "INSERT INTO usuários(nome, email, telefone, created) VALUES('$nome', '$email','$telefone' NOW() )";
$resultado_usuario = mysqli_query($conn, $result_usuario);


?>
