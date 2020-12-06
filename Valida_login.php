<?php 


	if(empty($_POST['Email']) || empty($_POST['Senha'])){

		header('location:index.php?msg=empty_fields');
	}
	else
	{
		$Email = $_POST['Email'];
		$Senha = $_POST['Senha'];

		include 'connection.php';

		$sql = "SELECT id, Senha, Email, Nome 
		FROM usuarios 
		WHERE Email = '$Email' 
		AND Senha = '$Senha'";

		$result = mysqli_query($connect, $sql);

		if(mysqli_affected_rows($connect))
		{
			$row = mysqli_fetch_assoc($result);
			// iniciar sessão
			session_start();
			// registrar variáveis de sessão
			$_SESSION['id_usuario']  = $row['id'];
			$_SESSION['Nome'] = $row['Nome'];
			$_SESSION['Senha'] = $row['Senha'];
			$_SESSION['Email'] 	  = $row['Email'];
			// redirecionar para página restrita

			header('location:paginaInicial.php?msg=login_sucesso');
			


		}else{
			
			header('location:login.php?msg=error_login');
			
		}
	}
 ?>