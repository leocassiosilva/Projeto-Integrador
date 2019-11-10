<?php 
session_start(); 
include("database/conexao.php");
/*COnexão banco de dados*/
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome'])); 
$email = mysqli_real_escape_string($conexao, trim($_POST['email'])); 
//$email = mysqli_real_escape_string($conexao, trim($_POST['email'])); 
$matricula = mysqli_real_escape_string($conexao, trim($_POST['matricula'])); 
//A parte do md5 é de criptografia da senha 
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));  


$sql = "select count(*) as total from usuario where usuario = '$email'"; 
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result); 

/* Verifica se o usuario já está cadastrado no banco de dados*/
if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true; 
    header('Location: view/cadastro.php'); 
    exit; 
}

$sql = "INSERT INTO usuario (nome, email, matricula,  senha, data_cadastro) VALUES ('$nome', '$email', '$matricula', '$senha', NOW()) ";
if($conexao->query($sql) == TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close(); 
header('Location: view/cadastro.php');
exit; 
?>