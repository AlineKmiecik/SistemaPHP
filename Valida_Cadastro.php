<?php 
	if (empty($_POST['Email']) || empty($_POST['Senha']) || empty($_POST['Nome']) ) {
		header('location:index.php?msg=empty_fields');
	}else{
		$Email = $_POST['Email'];
		$Senha = $_POST['Senha'];
		$Nome = $_POST['Nome'];

		include 'connection.php';

		$sql = "SELECT id, Senha, Email, Nome 
		FROM usuarios WHERE Email = '$Email'";

		$result = mysqli_query($connect, $sql);

		if(mysqli_affected_rows($connect)){
			header('location:cadastrar_usuario.php?msg=usuario_ja_cadastrado');

		}else{
			$sql = "INSERT INTO usuarios(Nome, Email, Senha) VALUES('$Nome', '$Email', '$Senha')";
			$result = mysqli_query($connect, $sql);

			if(mysqli_affected_rows($connect)>0){
				header('location:login.php?msg=cadastro_bem_sucedido');
			}else{
				header('location:cadastrar_usuario.php?msg=erro_no_cadastro');
			}	
		}
	}
 ?>