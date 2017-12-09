<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_POST["id"];
$nome 				= $_POST["nome"];
$matricula			= $_POST["matricula"];
$data_nat 			= $_POST["data_nat"];
$sexo 				= $_POST["sexo"];
$fone 				= $_POST["fone"];
$email 				= $_POST["email"];
$graduacao 			= $_POST["graduacao"];
 


$query = mysqli_query($conectar, "UPDATE professor set nome ='$nome', matricula = '$matricula', data_nat = $data_nat, sexo = '$sexo', fone = '$fone', email= '$email', graduacao = '$graduacao', modified = NOW() WHERE id='$id'");


echo "'$nome', '$matricula', $data_nat, '$sexo', '$fone', '$email', '$graduacao'";
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysqli_affected_rows($conectar) != 0 ){	

			header('Location: ../../_visao/administrativo.php?link=6'); 

			echo "
				<script type=\"text/javascript\">
					alert(\"Usuário editado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	

		 		header('Location: ../../_visao/administrativo.php?link=6'); 
				echo "

				<script type=\"text/javascript\">
					alert(\"Usuário não foi editado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>