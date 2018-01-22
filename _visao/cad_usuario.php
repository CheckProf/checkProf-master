<script src="../_complementos/js/validator.js"></script>

<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=2'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form data-toggle="validator" class="form-horizontal" method="POST" action="../_controle/proc_cad_usuario.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome<sup style="color:red">*</sup></label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  required name="nome" placeholder="Nome Completo">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">E-mail<sup style="color:red">*</sup></label>
			<div class="col-sm-10">
			  <input type="email" class="form-control"  required name="email" placeholder="E-mail">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Usuário<sup style="color:red">*</sup></label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  required name="usuario" placeholder="Usuário">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		   	<div class="form-group">
				<label class="control-label col-sm-2" for="senha">Senha<sup style="color:red">*</sup></label>
				<div class="col-sm-10">
					<input type="password" name="senha" id="senha" class="form-control " placeholder="Digite sua Senha" data-minlength="6" tabindex="6" required>
					<div class="help-block with-errors"></div>
				</div>
				
			</div>
		
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Confirmação da Senha<sup style="color:red">*</sup></label>
				<div class="col-sm-10">
					<input type="password" name="confirm_senha" id="confirm_senha" class="form-control " placeholder="Cofirme sua senha" data-match="#senha" data-match-error="As senhas estão diferentes" tabindex="6" required>
				</div>
				<div class="help-block with-errors"></div>
			</div>
				  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Nivel de Acesso<sup style="color:red">*</sup></label>
			<div class="col-sm-10">
			  <select class="form-control"  required name="nivel_de_acesso">
				  <option value="1">Administrativo</option>
				  <option value="2">Usuário</option>
				</select>
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

