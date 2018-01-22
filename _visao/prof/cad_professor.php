
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Professor</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=6'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12"> 
	  <form data-toggle="validator" class="form-horizontal" method="POST" action="../_controle/prof/proc_cad_prof.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label " required>Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome"  required placeholder="Nome Completo">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label " required>Matricula</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="matricula"  required placeholder="Matricula">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
  		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label  " required>Sexo</label>
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
			<label for="inputPassword3" class="col-sm-2 control-label  " required>Data de Nascimento</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="data_nat" required  placeholder="Data de Nascimento">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		 

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label " required>Fone</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="fone"  required placeholder="Fone">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label " required>E-mail</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" required placeholder="E-mail">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>


		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label " required>Graduação</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="graduacao" required placeholder="Graduação">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

