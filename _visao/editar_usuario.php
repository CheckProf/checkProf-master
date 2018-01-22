<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
			<?php 
				if ($_SESSION['usuarioId'] == $resultado['id']) {
					
			?>
					<a href='#'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
			<?php 	} else {  ?>
			 
					<a href='../_controle/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger' onClick="return confirm('Deseja realmente exluir o usuário?')">Apagar</button></a>
			<?php
				
			}

			?>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form data-toggle="validator" class="form-horizontal" method="POST" action="../_controle/proc_edit_usuario.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  required name="nome" placeholder="Nome Completo" value="<?php echo $resultado['nome']; ?>">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control"  required name="email" placeholder="E-mail" value="<?php echo $resultado['email']; ?>">
			  <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  required name="usuario" placeholder="Usuário" value="<?php echo $resultado['usuario']; ?>">
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
			<label for="inputPassword3" class="col-sm-2  control-label">Nivel de Acesso</label>
			<div class="col-sm-10">
			  <select class="form-control"  required name="nivel_de_acesso">
					<option>Selecione</option>
					<option value="1"
					<?php
						if( $resultado['nivel_acesso_id'] == 1){
							echo 'selected';
						}
					?>
					>Administrativo</option>
					<option value="2"
					<?php
						if( $resultado['nivel_acesso_id'] == 2){
							echo 'selected';
						}
					?>
					>Usuário</option>
				</select>
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

