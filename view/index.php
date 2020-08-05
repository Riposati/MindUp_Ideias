    <?php   
        require('../classes/Caminho.class.php');
        require('../classes/Ideia.class.php');

        $caminho = new Caminho();

        include($caminho->getCaminhoHeader());
        include($caminho->getCaminhoTopo());
        include($caminho->getCaminhoAbrirSessao());

        $conexao = Conexao::getInstance();
        $ideia = new Ideia();
        $ideia->projetosDestaque($conexao);
     ?>

    <div id="localizaoSite">
        <div id="localizaoReduzido">
            <span class="fontDouradaTahoma">Você está em:</span>
            <span id="topo">Início</span>
        </div>
    </div>
      <h1><strong style='color:#FF6600'>Projetos em Destaque - Clique e conheça</strong></h1>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">

            <?php         
              echo $ideia->getLinkPri() . "
                <img src='" . $ideia->getImg1() . "' class='formata_imagem_mais_tops' alt='First slide'>
                " . "</a>";
            ?>
            <!--<div class="carousel-caption">
              <h3>Graham Bell</h3>
            </div>-->
          </div>
          <div class="item">
            <?php 
              echo $ideia->getLinkSeg() . "
                <img src='" . $ideia->getImg2() . "' class='formata_imagem_mais_tops' alt='First slide'>
              " . "</a>";
            ?>
            <!--<div class="carousel-caption">
              <h3>Thomas Edison</h3>
            </div>-->
          </div>
          <div class="item">
            <?php 
              
                echo $ideia->getLinkTer() . "
                <img src='" . $ideia->getImg3() . "' class='formata_imagem_mais_tops' alt='First slide'>
              " . "</a>";

            ?>
            <!--<div class="carousel-caption">
              <h3>Nikola Tesla</h3>
            </div>-->
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <br><br>
    </div> <!-- /container -->
        
        <!-- explicação sobre o que é o sistema  -->

        <div class="page-header">
        <h1>Sobre o que se trata o sistema?</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default" style='min-height:230px;'>
            <div class="panel-heading">
              <h3 class="panel-title">1° - Você entra pela primeira vez no site, e agora?</h3>
            </div>
            <div class="panel-body">
                <img src="../imagens/primeira_vez_no_site.png"><br><br>
                <strong>O Mind Up Ideias oferece a você um serviço para
                negociar seus projetos.</strong>
            </div>
          </div>
          <div class="panel panel-primary" style='min-height:230px;'>
            <div class="panel-heading">
              <h3 class="panel-title">2° - Sim tenho ideias, entrei no site, e depois?</h3>
            </div>
            <div class="panel-body">
              <img src="../imagens/cadastro.png"><br><br>
              <strong>Para ter acesso as opções do sistema é 
              necessário que você crie sua conta.</strong>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success" style='min-height:230px;'>
            <div class="panel-heading">
              <h3 class="panel-title">3° - Certo me cadastrei e estou logado e agora ?</h3>
            </div>
            <div class="panel-body">
              <img src="../imagens/chave.png"><br><br>
              <strong>Agora você tem acesso ao seu painel de ideias, onde você
                tem opções exclusivas para controlar seus projetos.</strong>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">4° - Cadastrei um projeto e agora?</h3>
            </div>
            <div class="panel-body">
              <img src="../imagens/money.png"><br><br>
              <strong>Quando você cadastra seus projetos é só aguardar por interessados e 
                negociar tudo com eles.</strong>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-warning" style='min-height:230px;'>
            <div class="panel-heading">
              <h3 class="panel-title">5° - Ver perfil de outros usuários</h3>
            </div>
            <div class="panel-body">
              <img src="../imagens/rede_negocios.png"><br><br>
              <strong>O sistema possui uma opção no painel do usuário, que possibilita 
              ver o perfil de outros usuários.</strong>
            </div>
          </div>
          <div class="panel panel-danger" style='min-height:230px;'>
            <div class="panel-heading">
              <h3 class="panel-title">6° - Como outros usuários verão meus projetos?</h3>
            </div>
            <div class="panel-body">
               <img src="../imagens/outros_usuarios.png"><br><br>
              <strong>Por categorias,
               os outros usuários poderão ver os detalhes do projeto e demostrar interesse nele.</strong>
            </div>
          </div>
        </div>
      </div>

      <br>

      <a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

     <?php 
         include($caminho->getCaminhoRodape());
     ?>