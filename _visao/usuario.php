<?php
session_start();
include_once("../_controle/seguranca.php");
echo "Bem vindo usuário ".$_SESSION['usuarioNome'];
?>
<br />
<a href="sair.php">Sair</a>