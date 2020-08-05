	
	 <?php   
        require('../classes/Caminho.class.php');

        $caminho = new Caminho();

        include($caminho->getCaminhoHeader());
        include($caminho->getCaminhoTopo());
        include($caminho->getCaminhoAbrirSessao());
     ?>
		<div id="localizaoSite">
	    	<div id="localizaoReduzido">
	        	<span id="topo" class="fontDouradaTahoma">Você está em:</span><span class=""> &nbsp;Sobre</span>
	    	</div>
		</div>
		
		<br>
		<h2 class='fontTitulo20Preta'>O que é o Mind Up Ideias ?</h2>
		<br>

        <div class="panel panel-default">
          <div class="panel-body">
           <div id='explicaSobre'>  
            <p>
                <span class="span_paragrafo">O</span> que buscamos é proporcionar ao usuário uma experiencia fácil e ao mesmo tempo útil, um sistema que possibilita a divulgação das ideias cadastradas
                e que tem a intenção de ser um canal entre pessoas que possuem ideias e pessoas que querem investir em algo novo, legal e que pode mudar a vida para melhor. Muitas vezes o usuário
                quer ser sócio em um projeto ou quer divulgar suas ideias em busca de investimentos ou está em busca de pessoas interessadas para seus projetos. O Mind é o lugar certo para você.
            </p>
        </div>
          </div>
        </div>

        <a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

	<?php 
         include($caminho->getCaminhoRodape());
    ?>