<?php  
// CONSTANTES DE CONEXÃO
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'sistema_login');

// conectar: neste servidor, com este usuario, esta senha, neste banco de dados
$connect = mysqli_connect(SERVER, USER, PASSWORD, DB);

?>