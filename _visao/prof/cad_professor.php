
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=6'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12"> 
	  <form class="form-horizontal" method="POST" action="../_controle/prof/proc_cad_prof.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Matricula</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="matricula" placeholder="Matricula">
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
			  <input type="date" class="form-control" name="data_nat" placeholder="Data de Nascimento">
			</div>
		  </div>
		 

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Fone</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="fone" placeholder="Fone">
			</div>
		  </div>
		  
		
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="E-mail">
			</div>
		  </div>


		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Graduação</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="graduacao" placeholder="Graduação">
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

