<link href="../imagens/logo_empresa.ico" rel="icon" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="../css/bootstrap-theme.min.css" rel="stylesheet">

<body>
    <header>
        <?php
        session_start();
        if ((!isset($_SESSION['email']) == true) and ( !isset($_SESSION['senha']) == true)) { /// não tá logado mostra aqui 
     
            echo '
    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div style="background-color:#2B3535;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" rel="home" href="index.php" id="logoSite"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a id="opcao_1_topo" href="index.php">Início</a></li>
            <li><a id="opcao_2_topo" href="duvidas.php">Dúvidas</a></li>
            <li><a id="opcao_3_topo" href="contato.php">Fale Conosco</a></li>
            <li><a id="opcao_4_topo" href="sobre.php">Sobre</a></li>
            
            <li class="dropdown">
              <a id="opcao_7_topo" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias de projetos<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="ciencias.php">Ciências</a></li>
                <li><a href="computacao.php">Computação</a></li>
                <li><a href="industria.php">Indústria</a></li>
                <li><a href="saude.php">Saúde</a></li>
                <li><a href="educacao.php">Educação</a></li>
                <li><a href="outros.php">Outros</a></li>
                <!--<li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>
            <li><a id="opcao_5_topo" href="cadastro.php">Cadastrar</a></li>
            <li><a id="opcao_6_topo" href="login.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
          </div>
                '
            ;

        } else { /// está logado entra aqui
            echo '

                     <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div style="background-color:#2B3535;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" rel="home" href="index.php" id="logoSite"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a id="opcao_1_topo" href="index.php">Início</a></li>
            <li><a id="opcao_2_topo" href="duvidas.php">Dúvidas</a></li>
            <li><a id="opcao_3_topo" href="contato.php">Fale Conosco</a></li>
            <li><a id="opcao_4_topo" href="sobre.php">Sobre</a></li>
            
            <li class="dropdown">
              <a id="opcao_7_topo" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias de projetos<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="ciencias.php">Ciências</a></li>
                <li><a href="computacao.php">Computação</a></li>
                <li><a href="industria.php">Indústria</a></li>
                <li><a href="saude.php">Saúde</a></li>
                <li><a href="educacao.php">Educação</a></li>
                <li><a href="outros.php">Outros</a></li>
                <!--<li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
                '
            ;
        }
        ?>

</div>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
</header>
