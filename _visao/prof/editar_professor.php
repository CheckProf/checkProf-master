<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysqli_query($conectar, "SELECT * FROM professor WHERE id = '$id' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Professor</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=6&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
			<a href='../_controle/prof/proc_apagar_prof.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger' onClick="return confirm('Deseja realmente exluir o professor?')">Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form data-toggle="validator" class="form-horizontal" method="POST" action="../_controle/prof/proc_edit_prof.php">
	  

		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  required name="nome" placeholder="Nome Completo" 
			  value="<?php echo $resultado['nome']; ?>">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Matricula</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  required name="matricula" placeholder="Matricula"
				value="<?php echo $resultado['matricula']; ?>">
				<div class="help-block with-errors"></div>
			</div>
		  </div>
		  
  		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label required">Sexo</label>
			<div class="col-sm-10">
			  <select class="form-control"  required name="sexo">
				  <option value="Masculino">Masculino</option>
				  <option value="Feminino">Feminino</option>
				  <option value="Outro">Outro</option>
				</select>
				<div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label required">Data de Nascimento</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control"  required name="data_nat" placeholder="Data de Nascimento" value="<?php echo $resultado['data_nat']; ?>">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		 

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label required">Fone</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  required name="fone" placeholder="Fone"

				value="<?php echo $resultado['fone']; ?>"
			  >
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label required">E-mail</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="E-mail"

				value="<?php echo $resultado['email']; ?>"
			  >
			  <div class="help-block with-errors"></div>
			</div>
		  </div>


		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label required">Graduação</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="graduacao" required  placeholder="Graduação"

				value="<?php echo $resultado['graduacao']; ?>"
			  >
			  <div class="help-block with-errors"></div>
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

