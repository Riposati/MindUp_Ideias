   <?php   
        require('../classes/Caminho.class.php');

        $caminho = new Caminho();

        include($caminho->getCaminhoHeader());
        include($caminho->getCaminhoTopo());

        if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) { /// tá logado mostra aqui 
     ?>

    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.maskedinput.js"></script>
    <script src="../js/valida_email_e_campos_cadastro.js"></script>

    <body>
        <div id="localizaoSite">
            <div id="localizaoReduzido">
                <span class="fontDouradaTahoma" id="topo">Você está em:</span><span class=""> &nbsp;Cadastro</span>
            </div>
        </div>

            <h2 class='fontTitulo20Preta'>Cadastre-se no Mind Up e mude o mundo!</h2><br>
            <span><strong>Campos com <span style='color:red;'>*</span> são obrigatórios</span></strong><br><br>

            <div class="container">
              <table class="table table-condensed">
                <form enctype="multipart/form-data" id='formularioCadastro' method='POST' onsubmit="return validaCampos()" action='../controles/efetuaCadastro.php'>
                <tbody>
                  <tr>
                    <td>Imagem do perfil</td>
                    <td><input type="file" class="form-control" id="imagem" name="imagem"/></td>
                  </tr>
                  <tr>
                    <td>Nome Completo *:</td>
                    <td><input type='text' class="form-control" id='nome' name='nome' maxlength='50'/><p id="nome_vazio"></p></td>
                  </tr>
                  <tr>
                    <td>Nascimento *:</td>
                    <td><input type='text' class="form-control" id='datanascimento' name='datanascimento'/><p id="data_vazio"></p></td>
                  </tr>

                  <tr>
                    <td>Tefelone Celular *:</td>
                    <td><input type='text' class="form-control" id='celular' name='celular'/><p id="celular_vazio"></p></td>
                  </tr>

                  <tr>
                    <td>Telefone Fixo :</td>
                    <td><input type='text' class="form-control" id='telfixo' name='telfixo' /></td>
                  </tr>

                  <tr>
                    <td>Email (seu usuário) *:</td>
                    <td><input type='text' class="form-control" id='email' name='email'/><p id="email_vazio"></p></td>
                  </tr>

                  <tr>
                    <td>Confirma Email *:</td>
                    <td><input type='text' class="form-control" id='confirmaemail' name='confirmaemail'  /><p id="confirma_email_vazio"></p></td>
                  </tr>

                  <tr>
                    <td>Senha *:</td>
                    <td><input type='password' class="form-control" id='senha' name='senha' maxlength='50'/><p id="senha_vazia"></p></td>
                  </tr>

                  <tr>
                    <td>Confirma Senha *:</td>
                    <td ><input type='password' class="form-control" id='confirmasenha' name='confirmasenha' maxlength='50'/><p id="confirma_senha_vazia"></p></td>
                  </tr>

                  <tr>
                    <td><input type='submit' class="form-control" id='botaocadastra' name='botaocadastra' value='Cadastrar'/></td>
                  </tr>
                </tbody>
                </form>
              </table>
            </div>
            <br>
    </body>

    <a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

    <?php 
        }else{ /// pra não mostrar essa página se a sessão estiver aberta / usuário logado

            echo '<meta http-equiv="refresh" content="0;URL=../view/index.php" />';
        }

         include($caminho->getCaminhoRodape());
     ?>