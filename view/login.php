    <?php   
        require('../classes/Caminho.class.php');

        $caminho = new Caminho();

        include($caminho->getCaminhoHeader());
        include($caminho->getCaminhoTopo());

        /* TO DO -
         ESQUECEU SUA SENHA ? 
         E ENVIAR UM EMAIL PRO O 
         USUÁRIO REDEFINIR SUA SENHA
        */

         if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) { /// tá logado mostra aqui 
     ?>



    <div id="localizaoSite">
        <div id="localizaoReduzido">
            <span class="fontDouradaTahoma">Você está em:</span><span class=""> &nbsp;Login</span>
        </div>
    </div>

        <div class="tituloMaior">
            <h2 class="fontTitulo20Preta">Identifique-se</h2>
            <span>Tenha acesso a opçoes exclusivas.</span>
        </div>
           <div class="page-header">
            <h2 class="fontTitulo20Preta marginTopTitulo">Já Cadastrou?</h2>
            <form method="post" action="../controles/ope.php" id="formlogin" name="formlogin" > 
                <div class="areaInput">
                    <span class="fontTahomaRegularCinza14">Email: </span>
                    <input type="text" name="login" id="identificacaoEmail" />
                </div>
                <div class='areaInput'>
                    <div class="fontTahomaRegularCinza14">Senha: 
                        <input type="password" name="senha" id="indentificacaoSenha" />
                        <button class="bordaRedonda" type="submit">OK</button> 
                    </div>
                </div>
            </form>

            <br><a href="#"><h4>Esqueceu a senha?</h4></a>
        </div>

    <br>

    <?php
        }else{

             echo '<meta http-equiv="refresh" content="0;URL=../view/index.php" />';
        } 
         include($caminho->getCaminhoRodape());
     ?>