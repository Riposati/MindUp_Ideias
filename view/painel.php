    <?php   
        require('../classes/Caminho.class.php');

        $caminho = new Caminho();
        include($caminho->getCaminhoHeader());
        include($caminho->getCaminhoTopo());
        $conexao = Conexao::getInstance();
     ?>

    <!-- é necessário pro fancy funcionar -->
    <script type="text/javascript" src="../js/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../js/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script type="text/javascript" src="../js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="../js/scriptFancyBox.js"></script>

    <?php

        if ((!isset($_SESSION['email']) == true) and ( !isset($_SESSION['senha']) == true)) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
           
            echo '<meta http-equiv="refresh" content="0;URL=../view/login.php" />';
        } else {

                $logado = $_SESSION['email'];

                $resultado = $conexao->query("select * from usuario where email = '$logado'");

                $nome = $resultado->fetch();

                $_SESSION['time'] = time();

               echo"<div class='div_logout'>
                        <br>
                        <a href='../controles/logout.php' class='logado'>Sair</a><br><br>
                    </div>
                ";

                ?>

            <div id="localizaoSite">
                <div id="localizaoReduzido">
                    <span class="fontDouradaTahoma">Você está em:</span><span class=""> &nbsp;Painel de ideias</span>
                </div>
            </div>
            
            <?php

            /*  Isso vai para o controlador para tirar a lógica da visão   */
                $v = $nome[1];
                $cont = 0;
                $prim = '';

                while ($cont < strlen($v) && $v{$cont} != ' ') { /// pra pegar so o primeiro nome do User
                    $prim{$cont} = $v{$cont};
                    $cont++;
                }

            $stringArrayF = "";

            foreach ($prim as $stringArray) {
                    $stringArrayF = $stringArrayF . $stringArray;
                }

            if (isset($nome)) { // informações user

                echo"<div id='areaPainelTotal'>";
                echo "<div class='conteudoInternas' id='topo'>";
                echo "
                <br><br><div id='informacoesUsuario'>
                <a id='imagem' name='imagem' href='editarImagem.php'><img src='../fotosUsuarios/" . $nome[10] . "' id='previsualizar' title='clique para atualizar'></a>
                    <div class='infoPainel'>
                                <strong>Usuário :</strong> $stringArrayF<br><br> <!-- Só o primeiro nome do User -->
                                <strong>Telefone celular :</strong> $nome[3] <br><br>
                                <strong>Telefone Fixo : </strong>$nome[4] <br><br>
                                <strong>Email : </strong>$nome[5] <br><br>
                    
                           </div>
                    <div>
                        <div id='box-newsletter'>
                            <a href='enviaSugestao.php' class='fancybox fancybox.iframe'><h5 id='sugestoes'>Não encontrou o que buscava ou 
                            algo deu problema ? 
                            Sugestões e Bug reports</h5></a>
                            <script>parent.$.fancybox.close();</script>
                        </div>
                    </div>
            </div>

                ";
             }
        }

        ?>

                <div class="div_painel_menu">
                  <ul>  
                    <li class='menu_painel'><a href='inserirIdeia.php'><img src="../imagens/inserirideia.png"></a></li>
                    <li class='menu_painel'><a href='mostrarideiainseridas.php'><img src="../imagens/mostrarideias.png"></a></li>
                    <li class='menu_painel'><a href='mostraideiasparaatualizar.php'><img src="../imagens/atualizarideia.png"></a></li>
                  </ul>
                </div>

                <div class="div_painel_menu">
                    <ul>  
                        <li class='menu_painel'><a href='mostraDeletarIdeia.php'><img src="../imagens/deletarideia.png"></a></li>
                        <li class='menu_painel'><a href='MostrarIdeiasQueMeInteressam.php'><img src="../imagens/ideiasInvestidas.png"></a></li>
                        <li class='menu_painel'><a href='MostrarIdeiasComInteressados.php'><img src="../imagens/minhasideiasinvestidas.png"></a></li>
                    </ul>
                </div>

                <div class="div_painel_menu">
                    <ul> 
                        <li class='menu_painel'><a href='registro_ideias.php'><img src="../imagens/explicacao_duvidas_sobre_registro_ideias.png"></a></li>                        
                        <li class='menu_painel'><a href='pagarideias.php'><img src="../imagens/pagar_ideias.png"></a></li>
                        <li class='menu_painel'><a href='MostrarUsuarioscadastrados.php'><img src="../imagens/visualizarOutroPerfil.png"></a></li>
                    </ul>
                </div>

                <div class="div_painel_menu">
                    <ul>
                        <!--<li class='menu_painel'><a href='../view/investirIdeia.php' class='fancybox fancybox.iframe'>
                        <script>parent.$.fancybox.close();</script>
                        <img src="../imagens/investir.png">
                        </a></li>
                        <li class='menu_painel'><a href='divulgar_ideia_amigo.php' class='fancybox fancybox.iframe'>
                        <script>parent.$.fancybox.close();</script><img src="../imagens/sugerir_ideias_amigos.png"></a></li>-->                                                
                        <li class='menu_painel'><a href='editarPerfil.php'><img src="../imagens/editarperfil.png"></a></li>
                        <li class='menu_painel'><a href='mostraDeletarConta.php'><img src="../imagens/deletar_perfil.png"></a></li>
                    </ul>
                </div>

                <!--<div class="div_painel_menu_solo">
                    <ul>                        
                    </ul>
                </div>
                -->
            </div>
                <br>
            </div>
    <br>
    <a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

    <?php 
         include($caminho->getCaminhoRodape());
     ?>