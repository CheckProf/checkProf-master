<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysqli_query($conectar, "SELECT * FROM professor WHERE id = '$id' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<h1>Visualizar Usuário</h1>
	</div>
	
	<div class="row">
		<div class="pull-right">
			<a href='administrativo.php?link=6&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
							
			<a href='administrativo.php?link=9&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
			
			<a href='../_controle/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">


			<div class=" col-sm-3 col-md-2">
				<b>Id:</b>
			</div>
			<div class=" col-sm-9 col-md-10">
				<?php echo $resultado['id']; ?>
			</div>
			
			<div class="col-sm-3 col-md-2">
				<b>Nome:</b>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $resultado['nome']; ?>
			</div>
			
			<div class="col-sm-3 col-md-2">
				<b>Matricula:</b>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $resultado['matricula']; ?>
			</div>
			
			<div class="col-sm-3 col-md-2">
				<b>Data de Nascimento:</b>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $resultado['data_nat']; ?>
			</div>
			
			<div class="col-sm-3 col-md-2">
				<b>Sexo</b>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $resultado['sexo']; ?>
			</div>

			<div class="col-sm-3 col-md-2">
				<b>Fone:</b>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $resultado['fone']; ?>
			</div>
			
			<div class="col-sm-3 col-md-2">
				<b>Email</b>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $resultado['email']; ?>
			</div>
			<div class="col-sm-3 col-md-2">
				<b>Graduacao</b>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $resultado['graduacao']; ?>
			</div>
		</div>
	</div>
</div> <!-- /container -->

