	<link rel="stylesheet" href="../css/site.css" />

	<?php
		  session_start();
		  if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { 
	        unset($_SESSION['email']); 
	        unset($_SESSION['senha']); 
	        header('refresh:0; url=../view/login.php' );  
	       
	    } else{

	    	require_once('../modelo/conexao.php');
		  	$conexao = Conexao::getInstance();

	    	$email = $_SESSION['email'];
	    	$res = $conexao->query("select id,nome from usuario where email = '$email'");

	    	$a = $res->fetch();

			echo "
				<img src='../imagens/logo_empresa.png'><br><br>	
				<form action='../controles/cadastraInteresse.php' onsubmit='return valida();' method='POST'>

				<div>
					<table border='0'>
					<th>Informe o Id da ideia</th>
					<tr><td><input  class='form-control' type='text' id='id' name='id' ></td></tr>
					<tr><td><input type='hidden' id='idusuario' name='idusuario' value='$a[0]'></td></tr>
					<tr><td><input type='hidden' id='nomeusuario' name='nomeusuario' value='$a[1]'></td></tr>
					<tr><td>
						<input type='submit' value='Me interessa' id='bt_interesse'>
					</td></tr>
					</table>
				</div>
				</form>
			";

		}	

	?>
