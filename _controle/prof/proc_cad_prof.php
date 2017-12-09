<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");

$nome 				= $_POST["nome"];
$matricula			= $_POST["matricula"];
$data_nat 			= $_POST["data_nat"];
$sexo 				= $_POST["sexo"];
$fone 				= $_POST["fone"];
$email 				= $_POST["email"];
$graduacao 			= $_POST["graduacao"];


echo "'$nome', '$matricula', '$data_nat', '$sexo', '$fone', '$email', '$graduacao'";

	
if(mysqli_num_rows(mysqli_query($conectar, "SELECT * FROM usuarios WHERE email = '$email'")) != 0){
	echo "<script>alert('E-mail já cadastrado.'); history.back();</script>";
}else{
	
	$query = mysqli_query($conectar, "INSERT INTO professor (nome, matricula, data_nat, sexo, fone, email, graduacao) VALUES ('$nome', '$matricula', $data_nat, '$sexo', '$fone', '$email', '$graduacao')");

	echo $query;
	header("Location:  ../../_visao/administrativo.php?link=6");

}
	

?>
