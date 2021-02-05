<?php
session_start();

require("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
#$query_ = "SELECT * FROM cadastro WHERE email_cadastro ='$email' AND senha_cadastro = '$senha'";
$query_ = "SELECT nome FROM usuarios WHERE email ='$email' AND senha = '$senha'";
$result = $conn->query($query_);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['email_cadastro'] . "|" . $row['senha_cadastro'] . "|";
 $_SESSION['authenticated'] = 'YES';
    $_SESSION['usuario'] = $row['nome'] ;
    header('Location:index.php');
  }
} else {
$_SESSION['authenticated'] = 'NO';
  header('Location:login.php?login=erro1');
  echo "Não autenticado";

}

$conn->close();

?>