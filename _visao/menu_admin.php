<!-- Inicio navbar -->


<nav class="navbar navbar-default navbar-fixed-top ">
  
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="administrativo.php">CheckProf</a>
	</div>
<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            
    	<ul id="navbar" class="nav navbar-nav">
	 	<li class="dropdown" <?php if($_SESSION['usuarioNivelAcesso']==2){ echo 'style = "display: none;"';} ?> >
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="administrativo.php?link=2">Listar</a></li>
			<li><a href="administrativo.php?link=3">Cadastrar</a></li>                  
		  </ul>
		</li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Professor <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="administrativo.php?link=6">Listar</a></li>
			<li><a href="administrativo.php?link=7">Cadastrar</a></li>
		  </ul>
		</li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recurso <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="administrativo.php?link=10">Listar</a></li>
			<li><a href="administrativo.php?link=11">Cadastrar</a></li> 
		  </ul>
		</li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Horário <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="administrativo.php?link=14">Listar</a></li>
			<li><a href="administrativo.php?link=15">Cadastrar</a></li> 
		  </ul>
		</li>
		
	</ul>

		<ul class="nav navbar-nav navbar-right">
              <li class="dropdown nav-item ">
            <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['usuarioNome']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="dropdown-item">
                    <a href="javascript:;"><i class="fa fa-fw fa-user"></i> Perfil </a>
                </li>
                	<li class="divider"></li>
                <li class="dropdown-item">
                    <a href="sair.php"><i class="fa fa-fw fa-power-off"></i> Sair </a>
                </li>
            </ul>
        </li>
            </ul>
    </div>

	 
</nav>

<!-- Fim navbar -->