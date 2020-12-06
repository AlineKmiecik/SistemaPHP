<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Cadastrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
</head>
<body>
	<?php include 'menu.php'; ?>
	<form action="Valida_Cadastro.php" method="POST">
		<div class="form-group">
			<label for="Nome">Nome</label><br>
			<input class="form-control" type="text" name="Nome" id="Nome" placeholder="Nome completo"><br>
		</div>
		<div class="form-group">
			<label for="Email">Email</label><br>
			<input class="form-control" type="Email" name="Email" id="Email" ><br>
		</div>
		<div class="form-group">
			<label for="Senha">Senha</label><br>
			<input class="form-control" type="text" name="Senha" id="Senha">
		</div>
		
		<button type="submit"  class="btn btn-primary" >Cadastrar</button>
	</form>

</body>
</html>