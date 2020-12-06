<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
</head>
<body>
	<?php include 'menu.php'; ?>

	<h2>Login</h2>
	<h4>Informe seus dados para acessar a página restrita</h4>

	<form action="valida_login.php" method="post">

		<div class="form-group">

	      <label for="Email">Email:</label>
	      <input type="Email" class="form-control" id="Email" aria-describedby="emailHelp" name="Email">
	      <small id="emailHelp" class="form-text text-muted" >Jamais compartilharemos seus dados.</small>

	    </div>
	    <div class="form-group">

	      <label for="Senha">Senha</label>
	      <input type="password" class="form-control" id="Senha" placeholder="Senha" name="Senha" >

	    </div>

	    <button type="submit" class="btn btn-primary">Entrar</button>
	    <input type="button" class="btn btn-primary" onclick="location.href='http://cursophp.com/cadastrar_usuario.php';" value="Cadastrar" />

	</form>

</body>
</html>