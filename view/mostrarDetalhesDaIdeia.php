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
			  <span id="topo" class="fontDouradaTahoma">Você está em:</span><span class=""> &nbsp;Detalhes</span>
			</div>
		</div>
		<br><br>

	    <?php

	    	if(isset($_GET['idIdeia'])){
				$idIdeia = $_GET['idIdeia'];

				$avaliacaoDAO = new AvaliacaoDAO();

				$resultado = $avaliacaoDAO->getCamposIdeia($idIdeia);

				$resultado = $conexao->query("select * from ideiasusuarios where idideia = $idIdeia and ideia_paga=1");

				$a = $resultado->fetch();

				if($resultado->rowCount()> 0){

					$conexao = $avaliacaoDAO->getConexao();

					$objeto_ideia = new Ideia($idIdeia,$a,$conexao);

					$objeto_ideia->getDetalhesIdeias($idIdeia,$a,$conexao);
				}else{

					echo "<a href='../view/pagarideias.php'><h2>Primeiramente pague sua ideia clicando aqui</h2></a>";
				}
			}
		?>

		<br><br>

		<hr><br>

		<a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

		<?php 
		    include($caminho->getCaminhoRodape());
		?>