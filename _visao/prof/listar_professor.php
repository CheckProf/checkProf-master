
<?php
	
	$resultado=mysqli_query($conectar, "SELECT * FROM professor ORDER BY 'id'");
	$linhas=mysqli_num_rows($resultado);
?>

<link href=".../_complementos/css/font-awesome.min.css" rel="stylesheet">

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
		<h1>Lista de Professor</h1>
  	</div>
	<div class="row espaco">
       <div id="custom-search-input">
            <form class="input-group col-md-12" action="#" method="post" enctype="multipart/form-data">
                    <input type="text" name = "palavra-busca" class="search-query form-control" placeholder="Search" />
	                <span class="input-group-btn">
	                    <button class="btn btn-danger" type="submit">
	                        <span class="glyphicon glyphicon-search"></span>
	                    </button>
	                </span>
            </form>
        </div>
	</div>
	<div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=7"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
			
		</div>
	</div>

  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th width=4%>ID</th>
			<th width=20%>Nome</th>
			<th width=15%>Matricula</th>
			<th width=15%>Telefone</th>
			<th width=26%>Email</th>
			<th width=20%></th>
		  </tr>
		</thead>
		<tbody>
			
<?PHP

	if(empty($_GET['pg'])){}
	else{ 
		$pg =$_GET['pg'];
		if(!is_numeric($pg)){
			
			echo '<script language= "JavaScript">
							location.href="administrativo.php?link=6";
				</script>';
		}
	}

	if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

	if(isset($_POST['palavra-busca'])){
		$quantidade = 10000;
	}else{
		$quantidade = 10;
	}

	$inicio = ($pg*$quantidade) - $quantidade;

	if(isset($_POST['palavra-busca'])){
		$busca = addslashes($_POST['palavra-busca']);
		$select = "SELECT * from professor WHERE nome LIKE '%$busca%'  LIMIT $inicio, $quantidade";	
	}else{
		$select = "SELECT * from professor LIMIT $inicio, $quantidade";
	}

	$contagem =$inicio + 1;
			
			try{
				$resultado=mysqli_query($conectar, $select);
				$linhas=mysqli_num_rows($resultado);

				if($linhas>0){
					while($linhas = mysqli_fetch_array($resultado)){
						echo "<tr>";
							echo "<td>".$linhas['id']."</td>";
							echo "<td>".$linhas['nome']."</td>";
							echo "<td>".$linhas['matricula']."</td>";
							echo "<td>".$linhas['fone']."</td>";
							echo "<td>".$linhas['email']."</td>";
							?>
							<td> 
							<a href='administrativo.php?link=8&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
							
							<a href='administrativo.php?link=9&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
							
							<a href='../_controle/prof/proc_apagar_prof.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger' onClick="return confirm('Deseja realmente exluir o professor?')">Apagar</button></a>
							
							<?php
						echo "</tr>";
					}				
				}else{
					echo '<div class="alert alert-danger">
	                      <button type="button" class="close" data-dismiss="alert">×</button>
	                      <strong>Aviso!</strong> Não há professores cadastrados em nosso banco de dados.
	                </div>';
				}
				
			}catch(PDOException $e){
				echo $e;
			}
	?> 


		</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->

<style>
/* paginacao */

.paginas{width:100%;padding:10px 0;text-align:center;background:#fff;height:auto;margin:10px auto;}
.paginas a{width:auto;padding:4px 10px;background:#eee;color:#333;margin:0px 2.5px; }
.paginas a:hover{text-decoration:none;background:#00BA8B; color:#fff;}

<?php
	if(isset($_GET['pg'])){
		$num_pg = $_GET['pg'];	
	}else{$num_pg = 1;}
?>

.paginas a.ativo<?php echo $num_pg;?>{background:#00BA8B; color:#fff;}

</style>

<?php
if(isset($_POST['palavra-busca'])){
	$busca = addslashes($_POST['palavra-busca']);
	$sql = "SELECT * from professor WHERE nome LIKE '%$busca%'";	
}else{
	$sql = "SELECT * from professor";
}
	
	try{
		
		$resultado=mysqli_query($conectar, $sql);
		$linhas=mysqli_num_rows($resultado);

		}catch(PDOException $e){
			echo $e;
		}
		
		if($linhas <=$quantidade){}
		else{
			$paginas = ceil($linhas/$quantidade);
			if($pg > $paginas){
				echo '<script language= "JavaScript">
					location.href="administrativo.php?link=6";
					</script>';}
			$links = 5;	
			
			if(isset($i)){}
			else{$i = '1';}

?>

<div class="paginas">

	<a href="administrativo.php?link=6&pg=1">Primeira Página</a>
    
    <?php
		if(isset($_GET['pg'])){
			$num_pg = $_GET['pg'];	
		}
		
		for($i = $pg-$links; $i <= $pg-1; $i++){
			if($i<=0){}
			else{ 
	?>
     
    <a href="administrativo.php?link=6&pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
         
<?php  }} ?>
    
    <a href="administrativo.php?link=6&pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>

<?php
	for($i = $pg+1; $i <= $pg+$links; $i++){
		if($i>$paginas){}
		else{
?>
			
	<a href="administrativo.php?link=6&pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>		
		
<?php
		}
	}
?>

<a href="administrativo.php?link=6&pg=<?php echo $paginas;?>">Última página</a>		

 
</div><!-- paginas -->





<?php
		}
?>

<!-- fim botoes paginacao -->            

<br><br>
