<?php
session_start();
include_once("../_controle/seguranca.php");
include_once("../_controle/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa">
    <link rel="icon" href=""> <!-- Se quiser colocar um icone --> 

    <title>Administrativo</title>
    <link href="../_complementos/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_complementos/css/bootstra-p-theme.mim.css" rel="stylesheet">
     <link href="../_complementos/css/theme.css" rel="stylesheet">
     <script src="../_complementos/js/jquery.min.js"></script>
    <script src="../_complementos/js/ie-emulation-modes-warning.js"></script>
    <script src="../_complementos/js/validator.js"></script>
  </head>

  <body role="document">
	<?php
		include_once("menu_admin.php");
		
		if (isset($_GET['link'])) {   
				            
			$link = $_GET["link"];
			
			$pag[1] = "bem_vindo.php";

			$pag[2] = "listar_usuario.php";
			$pag[3] = "cad_usuario.php";
			$pag[4] = "editar_usuario.php";
			$pag[5] = "visual_usuario.php";

			$pag[6] = "prof/listar_professor.php"; // 2
			$pag[7] = "prof/cad_professor.php"; // 3
			$pag[8] = "prof/visual_professor.php"; // 5
			$pag[9] = "prof/editar_professor.php"; // 4

			$pag[10] = "listar_recurso.php";
			$pag[11] = "cad_recurso.php";
			$pag[12] = "visual_recurso.php";
			$pag[13] = "editar_recurso.php";
			$pag[14] = "listar_horario.php";
			$pag[15] = "cad_horario.php";
			$pag[16] = "visual_horario.php";
			$pag[17] = "editar_horario.php";
		
			if(file_exists($pag[$link])){
				include $pag[$link];
			}else{
				include "bem_vindo.php";
			}
		}else{
			include "bem_vindo.php";
		}
		
		include_once("footer.php");
	?>
    
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="../_complementos/js/bootstrap.min.js"></script>
    <script src="../_complementos/js/docs.min.js"></script>
	<script src="../_complementos/js/ckeditor/ckeditor.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../_complementos/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
