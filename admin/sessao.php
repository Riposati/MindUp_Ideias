<?php 

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$con = mysqli_connect("localhost", "root", "" , "mindup") or die ("Sem conexão com o servidor");
$result = mysqli_query($con,"SELECT * FROM administrador WHERE nome = '$usuario' AND SENHA= '$senha'");

if(mysqli_num_rows($result) > 0)
{
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	header('location:site.php');
}
else{
	
	unset ($_SESSION['usuario']);
	unset ($_SESSION['senha']);
	header('location:admin.php');
	
	}

?>

