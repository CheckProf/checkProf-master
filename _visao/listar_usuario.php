
<?php
	
	$resultado=mysqli_query($conectar, "SELECT * FROM usuarios ORDER BY 'id'");
	$linhas=mysqli_num_rows($resultado);
?>	
<div class="container theme-showcase" role="main">      
	<?php

	    if(isset($_GET['cad'])){
	    		$cad = $_GET['cad'];
	    		
	        if ($cad = 'success'){

	            echo '<div class="alert alert-success">
	                      <button type="button" class="close" data-dismiss="alert">×</button>
	                      <strong>Sucesso!</strong> Cadastro realizado com sucesso.
	                    </div>';
	        } else {
	            echo '<div class="alert alert-danger">
	              <button type="button" class="close" data-dismiss="alert">×</button>
	              <strong>Erro!</strong> Não foi possível realizar o cadastro.
	            </div>';
	        }
	    }
    
    ?>
  <div class="page-header">
	<h1>Lista de Usuários</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=3"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Usuário</th>
			<th>Nivel de Acesso</th>
			 <th>Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php 
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['id']."</td>";
						echo "<td>".$linhas['nome']."</td>";
						echo "<td>".$linhas['email']."</td>";
						echo "<td>".$linhas['usuario']."</td>";
					
						if ($linhas['nivel_acesso_id'] == 1) {
							echo "<td>Administrador</td>";
						} else{
							echo "<td>Usuário Normal</td>";
						}
				
						?>
						<td> 
						<a href='administrativo.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
						
						<a href='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<?php 
							if ($_SESSION['usuarioId'] == $linhas['id']) {
								
						?>
								<a href='#'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
						<?php 	} else {  ?>
						 
								<a href='../_controle/proc_apagar_usuario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger' onClick="return confirm('Deseja realmente exluir o usuário?')">Apagar</button></a>
						<?php
							
						}
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->

