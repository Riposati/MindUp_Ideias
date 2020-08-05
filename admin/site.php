
<?php  

session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['usuario']);
	unset($_SESSION['senha']);
	header('location:admin.php');
	}

$logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>

<head>

  <style>

  	 /* estilo tabela responsiva */

	  /* Table Base */

	  table {
	    max-width: 100%;
	    background-color: transparent;
	    border-collapse: collapse;
	    border-spacing: 0;
	    font-family: arial;
	  }

	  .table {
	    border-bottom: #999999 solid 1px;
	    width: 100%;
	    margin-bottom: 20px;
	  }

	  .table th,
	  .table td {
	    border-right: #999999 solid 1px;
	    font-size: 12px;
	    padding: 8px;
	    line-height: 20px;
	    text-align:center;
	    vertical-align: middle;
	  }

	  .table td:last-child {
	     border-right: 0;
	  }

	  .table thead th {
	    font-weight: normal;
	    background-color: #1F1F14;
	    color: #fff;
	    font-size: 15px;
	  }

	  .table tbody > tr:nth-child(odd) > td,
	  .table tbody > tr:nth-child(odd) > th {
	    background-color: #f8f8f8;
	  }


	/* Small Sizes */
	@media (max-width: 767px) { 
	  
	  /* Responsive Table */
	  .table-responsive {
	    display: block;
	    position: relative;
	    width: 100%;
	  }

	  .table-responsive thead,
	  .table-responsive tbody,
	  .table-responsive th,
	  .table-responsive td,
	  .table-responsive tr {
	    display: block;
	  }
	  .table-responsive td,
	  .table-responsive th {
	    height: 35px;
	  }

	  .table-responsive thead {
	    float: left;
	  }

	  .table-responsive tbody {
	    width: auto;
	    position: relative;
	    overflow-x: auto;
	    -webkit-overflow-scrolling: touch;
	    white-space: nowrap;
	  }

	  .table-responsive tbody tr {
	    display: inline-block;
	  }

	  
	  .table td:last-child {
	     border-right: #999999 solid 1px;
	  }


	}


  </style>

  <title>Mind Up Ideias Administração</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-1.10.1.js"></script>
  
  
<?php
echo "
            <script>
            function changeContentBt2() {
			
			alert(document.getElementById('pagar').value);
			}
			
            </script>
        ";  
?>
</head>

<body>
<div class="container">
    <div class="row">
	<div class="col-md-3">
        <div class="jumbotron">
          <img src="mind.jpg" class="img-responsive img-rounded">
		  <?php 
			echo" Bem vindo $logado";
			?> <a href="logout.php">Logout</a><br></h2>
        </div>
      </div>
	
		<div class="col-md-9" >


	  <div class="jumbotron" id="resposta">
	  	<h2>Painel do Administrador do sistema</h2>
	  </div>
	  </div>
		
      <div class="col-md-9" >
	  <div class="jumbotron" id="dados">
	  <table class="table table-responsive">
		<thead>
			<th>ID-Ideia</th>
			<th>ID-User</th>
			<th>Ideia</th>
			<th>Data</th>
			<th>Categoria</th>
			<th>Frase</th>
			<th>Valor</th>
			<th>Paga</th>
		</thead>
		<tbody>
		
<?php

	require ("conecta.php");
	mysqli_set_charset($conexao,'utf8');
	$sql1 = mysqli_query($conexao,"SELECT * FROM ideiasusuarios");

	$i=0;
	
	while($row = mysqli_fetch_array($sql1)){

		$idideia = $row["idideia"];
		$idusuario = $row["idusuario"];
		$ideia = $row["ideia"];
		$arrumaData = explode("-",$row[3]);
		$dataParaBancoMysql = $arrumaData[2].'/'.$arrumaData[1].'/'.$arrumaData[0];
		$categoria = $row["categoria"];
		$fraseDaIdeia = $row["fraseDaIdeia"];
		$valor = $row["valor"];
		$ideia_paga = $row["ideia_paga"];
		$ideia_patenteada = $row["ideia_patenteada"];
		$ideia_em_busca_investimentos = $row["ideia_em_busca_investimentos"];
		$ideia_em_busca_investimentos_e_socios = $row["ideia_em_busca_investimentos_e_socios"];
		$ideia_em_busca_de_mao_de_obra = $row["ideia_em_busca_de_mao_de_obra"];
		$video_da_ideia = $row["video_da_ideia"];
		$imagem = $row["imagem"];

		echo "<div class=`jumbotron`>";
		echo "<tr><td><center>" .$idideia . "</center></td>";
		echo "<td><center>" . $idusuario . "</center></td>";
		echo "<td><center>" . $ideia . "</center></td>";
		echo "<td><center>" . $dataParaBancoMysql . "</center></td>";
		echo "<td><center>" . $categoria . "</center></td>";
		echo "<td><center>" . $fraseDaIdeia . "</center></td>";
		echo "<td><center>" . $valor . "</center></td>";

		if($ideia_paga == true){
			echo "<td><center><button class='btn btn-success' type='button'>Sim</button></center></td>";
		}else{
			$i++; // aqui pra dinamiza o id
			echo "<td><center><button name='pagar' class='btn btn-danger' id='pagar$i' onclick='alterar()' type='button' value='".$idideia."'>Nao</button></center></td>";
	
			// o script tem que estar dentro do php pra chamar os id's dinamicos senão repete o id e não pode

			echo" 
			<script type='text/javascript'>
   
				   $(document).ready(function(){
					
					$('#pagar$i').click(function(){ // repare aqui !!!
						
						var url = 'alterar.php';
						
						var data = $('#pagar$i').attr('value');
						//alert(data);
						$.post(url,{data}, function(data) {
				        	$('#resposta').html('Ideia Alterada com Sucesso' + data); // Só pra verificar retorno
							location.reload();
				    	});
						
					});
						
				});
			</script>";
	}

	echo "</tr>";
	echo "</div>";
	}


?>
	</tbody>
	</table>
		  </div>
		 
		  
		  </div>
		</div>
	</div>

	</body>
	</html>
