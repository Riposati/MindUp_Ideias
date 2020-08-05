    <?php
            require('../classes/Caminho.class.php');

            $caminho = new Caminho();

            include($caminho->getCaminhoHeader());
            include($caminho->getCaminhoTopo());
            include($caminho->getCaminhoAbrirSessao());

            // TODO ao subir pro servidor arrumar envio de emails
    ?>
    <div id="localizaoSite">
        <div id="localizaoReduzido">
            <span class="fontDouradaTahoma" id='topo'>Você está em:</span><span class=""> &nbsp;Fale conosco</span>
        </div>
    </div>
    <br><br>
    <div class="panel panel-default">
  <div class="panel-body">
    <h2 class='fontTitulo20Preta'>Fale com nossa equipe, será um prazer ajuda-lo</h2>

    <h3 class='fontTitulo20Preta'>Campos com * são obrigatórios</h3>

  <img src="../imagens/enviar_email.png">
          <form role="form">
            <div class="form-group" id="tamanho_campos_nome_contato">
              <label for="nome">Nome*:</label>
              <input type="text" class="form-control" id="nome">
            </div>

            <div class="form-group" id="tamanho_campos_email_contato">
              <label for="email">Email*:</label>
              <input type="text" class="form-control" id="email">
            </div>

           <div class="form-group" id="tamanho_campos_telefone_contato">
              <label for="telefone">Telefone*:</label>
              <input type="text" class="form-control" id="">
            </div>

            <div class="form-group" id="tamanho_campos_assunto_contato">
              <label for="assunto">Assunto*:</label>
              <input type="text" class="form-control" id="assunto">
            </div>

            <div class="form-group" id="tamanho_campos_mensagem_contato">
              <label for="comment">Mensagem*:</label>
              <textarea class="form-control" rows="5" id="mensagem"></textarea>
            </div>
            <input type='submit' id='contato_bt' name='contato_bt' value='Enviar'/></td>
          </form>
    </div>
  </div>
                
    <a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>
    
    <?php 
         include($caminho->getCaminhoRodape());
    ?>
