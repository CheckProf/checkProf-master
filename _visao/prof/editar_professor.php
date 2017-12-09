<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysqli_query($conectar, "SELECT * FROM professor WHERE id = '$id' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=6&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
			<a href='../_controle/prof/proc_apagar_prof.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="../_controle/prof/proc_edit_prof.php">
	  

		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome" placeholder="Nome Completo" 
			  value="<?php echo $resultado['nome']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Matricula</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="matricula" placeholder="Matricula"
				value="<?php echo $resultado['matricula']; ?>"
			  >
			</div>
		  </div>
		  
  		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Sexo</label>
			<div class="col-sm-10">
			  <select class="form-control" name="sexo">
				  <option value="Masculino">Masculino</option>
				  <option value="Feminino">Feminino</option>
				  <option value="Outro">Outro</option>
				</select>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Data de Nascimento</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="data_nat" placeholder="Data de Nascimento"
				
				value="<?php echo $resultado['data_nat']; ?>"
			   >


			</div>
		  </div>
		 

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Fone</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="fone" placeholder="Fone"

				value="<?php echo $resultado['fone']; ?>"
			  >
			</div>
		  </div>
		  
		
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="E-mail"

				value="<?php echo $resultado['email']; ?>"
			  >
			</div>
		  </div>


		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Graduação</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="graduacao" placeholder="Graduação"

				value="<?php echo $resultado['graduacao']; ?>"
			  >
			</div>
		  </div>



		  <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

