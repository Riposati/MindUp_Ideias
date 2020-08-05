    <?php   
          require('../classes/Caminho.class.php');
          $caminho = new Caminho();
          include($caminho->getCaminhoHeader());
          include($caminho->getCaminhoTopo());
          include($caminho->getCaminhoAbrirSessao());
       ?>

    <div id="localizaoSite">
        <div id="localizaoReduzido">
            <span class="fontDouradaTahoma" id="topo">Você está em:</span><span class="">Dúvidas</span>
        </div>
    </div>
    <br>
    <h2>Clique sobre a dúvida para ver a resposta</h2><br>

    <span>PERGUNTAS / RESPOSTAS</span><br><br>

      <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
              href="#collapseOne">
              Como usar o Mind Up Ideias?
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            <strong>Você ao acessar a primeira vez o Mind Up verá na página inicial algumas ideias
            já desenvolvidas por empresas ou que já foram cadastradas no sistema. Terá as opções de logar-se, de 
            cadastrar-se, ou ver algumas ideias já cadastradas por outros usuários. Após se cadastrar
            você verá opções exclusivas que possibilitarão cadastrar ideias e buscar por investidores,interessados,sócios,etc.
            Logo apos, você, poderá demonstrar interesse na ideia de outro usuário e será iniciada
            a negociação entre autor e interessado.
          </strong>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
              href="#collapseTwo">
              Como investir/demostrar interesse em alguma ideia ?
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <strong>Primeiro, você deve possuir uma conta em nosso sistema, depois estar logado, feito isso vá até seu painel de ideias
            e clique/toque na opção investir em alguma ideia, feito isso você informa qual ID do projeto que lhe interessa, só isso, 
            viu como é fácil?</strong>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
              href="#collapseThree">
               Sobre o que se trata o sistema  ?
            </a>

          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
           <strong>Um projeto que foi concebido apartir do estudante de analise e 
                  desenvolvimento de sistemas Gustavo Riposati, 
                  que é apaixonado por desenvolvimento de software e por
                  coisas inovadoras que em um dia qualquer teve vontade
                  de criar um sistema para que usuários cadastrassem suas
                  ideias e as divulgasse para buscar interessados, 
                  investidores, sócios, etc.
            </strong>
          </div>
        </div>

        <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
              href="#collapseFour">
               Minha Ideia estará segura ?
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
          <div class="panel-body">
            <strong>Sim. Sua ideia estará segura desde que ela seja patenteada, registrada, o Mind Up Ideias não se responsabiliza por roubos de ideias entre usuários,
            por esse motivo ao cadastrar suas ideias existe uma opção lembrando você que é mais seguro cadastrar projetos com patente, porém você pode cadastrar também projetos sem patente, 
            caso concorde com isso.
          </strong>
          </div>
        </div>

      </div>

          <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
              href="#collapseFive">
               É preciso pagar ?
            </a>

          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
          <div class="panel-body">
            <strong>Para usar o sistema não, porém, para cadastrar ideias e elas serem mostradas no sistema para outros usuários sim,
            é preciso pagar 30 reais que é a taxa para que as ideias sejam exibidas no sistema.
          </strong>
          </div>
        </div>

      </div>
    </div>
  </div>

    <br>
    
    <a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

    <?php 
      include($caminho->getCaminhoRodape());
    ?>