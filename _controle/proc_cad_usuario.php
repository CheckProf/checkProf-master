<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");
$nome 				= $_POST["nome"];
$email 				= $_POST["email"];
$usuario 			= $_POST["usuario"];
$senha 				= $_POST["senha"];
$nivel_de_acesso 	= $_POST["nivel_de_acesso"];


if(mysqli_num_rows(mysqli_query($conectar, "SELECT * FROM usuarios WHERE email = '$email'")) != 0){
	echo "<script>alert('E-mail já cadastrado.'); history.back();</script>"; 
}else if(mysqli_num_rows(mysqli_query($conectar, "SELECT * FROM usuarios WHERE usuario = '$usuario'")) != 0){
	echo "<script>alert('Usuário já existe.'); history.back();</script>"; 
}else{
	$query = mysqli_query($conectar, "INSERT INTO usuarios (nome, email, usuario, senha, nivel_acesso_id, created) VALUES ('$nome', '$email', '$usuario', '$senha', '$nivel_de_acesso', NOW())");

	echo $query;

	if ($query){
		header("Location:  ../_visao/administrativo.php?link=2&cad=success");
	}else{
		header("Location:  ../_visao/administrativo.php?link=2&cad=fail");
	}

}

?>
