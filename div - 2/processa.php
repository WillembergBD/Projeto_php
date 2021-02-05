<?php
include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_URL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios(email, senha, nome, created) VALUES ('$email', '$senha', '$nome', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    header("Location: login.php");
}else{
    header("Location: login.php");
}

?>