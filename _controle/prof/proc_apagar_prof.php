<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_GET["id"];

$query = "DELETE FROM professor WHERE id=$id";
$resultado = mysqli_query($conectar, $query);


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
					alert(\"Usuário apagado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				header('Location: ../../_visao/administrativo.php?link=6'); 
				echo "			
				<script type=\"text/javascript\">
					alert(\"Usuário não foi apagado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>