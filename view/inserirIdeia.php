    <link rel="stylesheet" href="../css/site.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="../js/validarInserirIdeia.js"></script>
    <script src="../js/jquery.maskMoney.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <script>
            function SomenteNumero(e){
                var tecla=(window.event)?event.keyCode:e.which;   
                if((tecla>47 && tecla<58)) return true;
                else{
                    if (tecla==8 || tecla==0) return true;
                else 

                    return false;  
                }
            }
    </script>

    <?php   
        require('../classes/Caminho.class.php');
        
        $caminho = new Caminho();

        include($caminho->getCaminhoTopo());
        include($caminho->getCaminhoConexao());
        include($caminho->getCaminhoParametros());
        include($caminho->getCaminhoAbrirSessao());

        $conexao = Conexao::getInstance();
     ?>

    <?php 
        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { 
            unset($_SESSION['email']); 
            unset($_SESSION['senha']); 
            echo $caminho->getCaminhoFimSessao();
        } else{
        	$email = $_SESSION['email'];
        	$resultado = $conexao->query("select id from usuario where email = '$email'");
        	$a = $resultado->fetch();
        	$id = $a[0];
        }
    ?>

    <div id="localizaoSite">
        <div id="localizaoReduzido">
            <span class="fontDouradaTahoma">Você está em:</span><span id="topo"> &nbsp;Inserir nova ideia</span>
        </div>
    </div>

    <br>
    <div id='cadastraideia'>

        <div id='div_lembrete_pagamento'><h4>Projeto/Serviço para ser exibido tem um custo de R$30,00</h4></div>
        <span><strong>Campos com <span>*</span> são obrigatórios</span></strong><br>

    	<form id='formularioinsere' method='POST' enctype="multipart/form-data" action='../controles/crudinserirideia.php' onsubmit='return validar()'>

    		<table border="0">

                <th colspan='2'>Escolha uma imagem para o projeto</th>
                <tr><td><input type="file" id="picture" name="picture"/></tr></td>

                <th colspan='2'>Valor necessário neste projeto</th>
                <tr><td><input type='text' class="form-control" size='70' maxlength="40" id='real' name='real' onkeypress='return SomenteNumero(event)' value="0,00"></td></tr>

    			<th colspan='2'>Ideia * - <span class='campos_obrigatorios'>Explique bem</span></th>
    			<tr><td colspan='2' ><textarea class="form-control" id='ideia' name='ideia' maxlength="5000" placeholder='Do que se trata a ideia detalhe bem aqui'></textarea><p id="ideia_vazia"></p></td></tr>

                <th colspan='2' id="insercao_frase_ideia">Titulo/frase da ideia * - <span class='campos_obrigatorios'>Frase para ser exibida</span></th>
                <tr><td colspan='2'><input class="form-control" type='text' id='frase' name='frase' size='70' maxlength="100"  placeholder='Frase será mostrada para todos , chame a atenção pra sua ideia aqui'><p id="frase_vazia"></p></td></tr>

    			<th colspan='2'>Categoria*</th>
                <tr><td>
                    <select id='categoriaSelect' name='categoriaSelect'>
                        <option value='vazio'></option>
                        <option value='ciências'>Ciências</option>
                        <option value='computação'>Computação</option>
                        <option value='indústria'>Indústria</option>
                        <option value='saúde'>Saúde</option>
                        <option value='educação'>Educação</option>
                        <option value='outros'>Outros</option>
                    </select>
                    <p id="categoria_vazia"></p>
                </td></tr>

                <th colspan='2'>Projeto patenteado no INPI*</th>
                <tr><td class="campos_radio"><input type="radio" id="registroinpi" name="registroinpi" value="Sim" checked>É patenteado</tr>
                <tr><td class="campos_radio"><input type="radio" id="registroinpi" name="registroinpi" value="Não"><span id="nao_tem_patente">Não é patenteado *Não nos responsabilizamos*</span></td></tr>

                <th colspan='2'>Busco investimentos ou sócios *</th>
                <tr><td class="campos_radio"><input type="radio" name="interesse_somente_em_investimentos" value="Sim">Sim</tr>
                <tr><td class="campos_radio"><input type="radio" name="interesse_somente_em_investimentos" value="Não" checked>Não</td></tr>

                <th colspan='2'>Busco sócios e investimentos *</th>
                <tr><td class="campos_radio"><input type="radio" name="interesse_socios_e_investimentos" value="Sim">Sim</tr>
                <tr><td class="campos_radio"><input type="radio" name="interesse_socios_e_investimentos" value="Não" checked>Não</td></tr>

                <th colspan='2'>Busco mão de obra *</th>
                <tr><td class="campos_radio"><input type="radio" name="interesse_em_mao_de_obra" value="Sim">Sim</tr>
                <tr><td class="campos_radio"><input type="radio" name="interesse_em_mao_de_obra" value="Não" checked>Não</td></tr>

                <th colspan="2">Link de um vídeo sobre seu projeto<br><span class='campos_obrigatorios'>O vídeo deve estar no youtube</span></th>
                <tr><td><input class="form-control" type="text" id='video' name='video' size='70' maxlength="100" placeholder="Exemplo: https://www.youtube.com/watch?v=Ey6b-787bMQ"></td></tr>

                <tr><td><div class='recebeImagens'>

                    <h2 id="header_cadastro_imagen_projeto">Cadastre imagens do projeto</h2><br><br>

                    Imagem 1: <input type="file" id="imagem" name="imagem"/><br><br>

                    Imagem 2: <input type="file" id="imagem2" name="imagem2"/><br><br>

                    Imagem 3 : <input type="file" id="imagem3" name="imagem3"/><br><br>

                    Imagem 4: <input type="file" id="imagem4" name="imagem4"/><br><br>

            </div>
        </tr></td>
    			<?php echo"<input type='hidden' id='id' name='id' value='$id' />" ;?>
    		</table>	
            <input type='submit' value='Criar'>
    	</form>
    </div>
    <a href='#topo' class='topo'>Voltar ao topo</a><br><br><br>

    <?php 
         include($caminho->getCaminhoRodape());
     ?>