<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Login</title>
    <link href="_complementos/css/bootstrap.min.css" rel="stylesheet">
    <link href="_complementos/css/style.css" rel="stylesheet">
        
  </head>

  <body class="bg-primary">
	<?php
		unset($_SESSION['usuarioId'],			
		      $_SESSION['usuarioNome'], 		
		      $_SESSION['usuarioNivelAcesso'], 
		      $_SESSION['usuarioLogin'], 		
		      $_SESSION['usuarioSenha']);
	?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <p class="navbar-brand" href="#">CheckProf</p>
    </nav>

    <div class="row" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">

      <div class="col-12 bg-light" style="padding: 20px; width: 400px">
       
        <form class="form-signin" method="POST" action="_controle/valida_login.php">
        <fieldset>
          <legend>LOGIN</legend>

          <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />  
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >
          </div>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
                  
          </fieldset>


        </form>
          

      </div>

      <h4 class="text-center text-danger">
        <?php
          if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
          }
        ?>
      </h4>

    </div>

    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>