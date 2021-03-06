<?php 
	    require('../classes/Caminho.class.php');
	    require('../modelo/AvaliacaoDAO.class.php');
	    require("../classes/Ideia.class.php");

		    $caminho = new Caminho();
		    include($caminho->getCaminhoHeader());
		   	include($caminho->getCaminhoTopo());
		    include($caminho->getCaminhoAbrirSessao());
		    $conexao = Conexao::getInstance();
	    ?>

	    <div id="localizaoSite">
			<div id="localizaoReduzido">
			  <span id="topo" class="fontDouradaTahoma">Você está em:</span><span class=""> &nbsp;Detalhes Ideia saúde</span>
			</div>
		</div>
		<br><br>
		<script src="../js/jRateAvaliacaoIdeia.js"></script>

	    <?php

	    	if(isset($_GET['idIdeia'])){

				$idIdeia = $_GET['idIdeia'];

				$avaliacaoDAO = new AvaliacaoDAO();

				$resultado = $avaliacaoDAO->getCamposIdeia($idIdeia);

				if($resultado!=NULL){ // se a ideia existir entra aqui

					$a = $resultado->fetch(); // guarda em um array

					$conexao = $avaliacaoDAO->getConexao();

					$objeto_ideia = new Ideia($idIdeia,$a,$conexao);

					$objeto_ideia->getDetalhesIdeias($idIdeia,$a,$conexao);

					
		        	if ((isset($_SESSION['email']) == true) and (isset($_SESSION['senha']) == true)) { /// tá logado mostra aqui 

			        	$email = $_SESSION['email'];

			        	$podeAvaliar = $avaliacaoDAO->getPermissaoParaAvaliar($conexao,$email,$idIdeia);

			        	if($podeAvaliar){

				        		//echo "DONO da ideia abriu a sessão e está olhando sua ideia!";

				        	$flag=0;
				        	$flag2=0;

				        	$resultado = $avaliacaoDAO->getIdLogado($email);

				        	$idUsuario = $resultado->fetch(); // aqui pegou o id do usuario que abriu a sessao

				        	$resultado = $avaliacaoDAO->getIdUsuarioTabelaAvaliacao();
				        	$resultado2 = $avaliacaoDAO->getIdIdeiaTabelaAvaliacao();

				        	$c = array(''); // array que recebe os ids dos usuarios da tabela avaliação
				        	$d = array(''); // array que recebe os ids das ideias da tabela avaliação
				        	$i=0;

				        	$d[0][0] = "";
				        	$c[0][0] = "";

				        	while($a = $resultado->fetch()){

				        		$c[$i] = $a;
				        		$i++;
				        		
				        	}

				        	$i=0;
				        	while($b = $resultado2->fetch()){

				        		$d[$i] = $b;
				        		$i++;
				        		
				        	}

				        	for($i=0;$i<count($d);$i++){

				        		if((strcmp($idIdeia, $d[$i][0])==0) && (strcmp($idUsuario[0], $c[$i][0])==0)){
				        			$flag=1;
				        			$flag2=1;
				        			break;
				        		}

				        	}
				        	if($flag==0 && $flag2==0){ // caso não exista nem id do user nem da ideia iguais na mesma posição entra aqui 
				        								// é porque este usuário não avaliou ainda esta ideia
								echo "<br><br><h3 class='detalhesIdeia'>É uma boa ideia ? Avalie por favor</h3>
								<div class='rectangle' id='jRate'> 
										<form action='../controles/salvaAvaliacaoIdeia.php' method='post'>
											<div id='demo-onchange-value'>1</div>
											<input type='submit' class='bt_avaliacoes_ideias' value='Avaliar' onClick='pegaValorDiv();'> 
											<input type='hidden' id='id' name='id' value='$idIdeia'>
											<input type='hidden' id='idUsuario' name='idUsuario' value='$idUsuario[0]'>
					 						<input type='hidden' name='valorDaDiv' id= 'valorDaDiv'> 				
					 				 	</form>
									</div>
								</div><br>

								<script>
									$('#jRate').jRate({
										shape: 'BULB',
										width: 35,
										height: 35,
										rating: 1,
										onChange: function(rating) {	
											$('#demo-onchange-value').text(rating);
										},
									//readOnly: true
								});

								function pegaValorDiv(){
										var caminho = document.getElementById('demo-onchange-value').innerHTML; 
										//aqui eu pego o valor da div 'teste' e coloco na variavel
										document.getElementById('valorDaDiv').value = caminho; 
										//aqui eu envio o conteudo da var para o campo 'valorDaDiv'
										//alert(caminho); 
									}
								</script>
								";
								}else{

				        			echo "<br><br><h1>Ideia já avaliada por você</h1>";
				        		}

						}else{

							// caso a ideia que a pessoa esteja olhando seja dela , ela não poderá avaliar a mesma!
							//echo "<br><br><h1>Você não pode avaliar a própria ideia</h1>";
						}
					}
				}
			}
		?>

		<br><br>

		<hr><br>

		<a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

		<?php 
		    include($caminho->getCaminhoRodape());
		?>