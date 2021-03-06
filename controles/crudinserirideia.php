﻿<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) and ( !isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo '<meta http-equiv="refresh" content="0;URL=login.php" />'; 

    } else {

         function verificaTags($campo){

            $flag=false;

            if ( 
            preg_match("/^[a-zA-Z0-9 !+-çÇáéíóúýÁÉÍÓÚÝàèìòùÀÈÌÒÙãõñäëïöüÿÄËÏÖÜÃÕÑâêîôûÂÊÎÔÛ$?,:.]+$/i", $campo) && 
            !preg_match('[/{}"<>()/;]',$campo) &&
            !preg_match_all("/<a|http:/i", $campo) &&
            !preg_match("/bcc:|cc:|multipart|\[url|Content-Type:/i",$campo)){

                //echo $campo . "<br>";
                $flag = true;
            }

            return $flag;
        }

        require_once('../classes/Ideia.class.php');
        require_once('../modelo/IdeiaDAO.class.php');

        $ideia = new Ideia(); // CUIDADO COM NOMES DE OBJETOS PODE **CONFUNDIR O INTERPRETADOR PHP**

        $ideia->setIdUsuaio($_POST['id']);
        $ideia->setIdeia($_POST['ideia']);
        $today = date("m/d/y");   
        $ideia->setDataIdeia($today);
        $arrumaData = explode("/", $ideia->getDataIdeia());
        $dataParaBancoMysql = $arrumaData[2] . '-' . $arrumaData[0] . '-' . $arrumaData[1];
        $ideia->setCategoria($_POST['categoriaSelect']);
        $ideia->setFraseIdeia($_POST['frase']);
        $ideia->setValorIdeia($_POST['real']);

        /*echo $ideia->getValorIdeia();*/

        /* Mexendo daqui pra baixo */

        $ideia->setIdeiaPatenteada($_POST['registroinpi']);

        if(strcmp($ideia->isIdeiaPatenteada(),"Sim")==0){

            $ideia->setIdeiaPatenteada(1);
        }else{
            $ideia->setIdeiaPatenteada(0);
        }

        $ideia->setIdeiaBuscaInvestimentos($_POST['interesse_somente_em_investimentos']);

        if(strcmp($ideia->isIdeiaEmBuscaDeInvestimentos(),"Sim")==0){

            $ideia->setIdeiaBuscaInvestimentos(1);
        }else{
            $ideia->setIdeiaBuscaInvestimentos(0);
        }

        $ideia->setIdeiaBuscaInvestimentosESocios($_POST['interesse_socios_e_investimentos']);

        if(strcmp($ideia->isIdeiaEmBuscaDeInvestimentosESocios(),"Sim")==0){

            $ideia->setIdeiaBuscaInvestimentosESocios(1);
        }else{
            $ideia->setIdeiaBuscaInvestimentosESocios(0);
        }

        $ideia->setIdeiaBuscaMaoObra($_POST['interesse_em_mao_de_obra']);

        if(strcmp($ideia->isIdeiaEmBuscaMaoObra(),"Sim")==0){

            $ideia->setIdeiaBuscaMaoObra(1);
        }else{
            $ideia->setIdeiaBuscaMaoObra(0);
        }

        $ideia->setVideo($_POST['video']);

        if(strcmp($ideia->getVideo(),"")==0){

            $ideia->setVideo("sem vídeo cadastrado");
        }

        /********************************/

            /*$ideia->setImagemProjeto("semfoto.jpg");
            
            if(isset($_FILES['picture']['name123']) && strcmp($_FILES['picture']['name123'], "")!=0){
                $img = $_FILES['picture']['name123'];
                $ideia->setImagemProjeto($img);
            }

            $nome_atual_ideia = $ideia->arrumaFoto();

            $ideia->setImagemProjeto($nome_atual_ideia);*/

        /********************************/

        $flag1 = verificaTags($ideia->getIdUsuario());
        $flag2 = verificaTags($ideia->getIdeia());
        $flag3 = verificaTags($ideia->getCategoria());
        $flag4 = verificaTags($ideia->getFraseIdeia());
        $flag5 = verificaTags($ideia->getValorIdeia());

        $flag6 = verificaTags($ideia->isIdeiaPatenteada());
        $flag8 = verificaTags($ideia->isIdeiaEmBuscaDeInvestimentos());
        $flag9 = verificaTags($ideia->isIdeiaEmBuscaDeInvestimentosESocios());
        $flag10 = verificaTags($ideia->isIdeiaEmBuscaMaoObra());
        $flag11 = verificaTags($ideia->getVideo());

        if($flag1==true && $flag2==true && $flag3==true
            && $flag4==true && $flag5==true
            && $flag6 && $flag8 && $flag9
            && $flag10 && $flag11){

            $ideiaDAO = new IdeiaDAO();

            $idIdeia = $ideiaDAO->inserir($ideia->getIdUsuario(),$ideia->getIdeia(),$dataParaBancoMysql,$ideia->getCategoria(), $ideia->getFraseIdeia(),
               $ideia->getValorIdeia(),0, 
               $ideia->isIdeiaPatenteada() , 
               $ideia->isIdeiaEmBuscaDeInvestimentos() ,
               $ideia->isIdeiaEmBuscaDeInvestimentosESocios() , $ideia->isIdeiaEmBuscaMaoObra(),
               $ideia->getVideo() , $ideia->getImagemProjeto());

                if(isset($_POST)){ 

                     function salvaFotoBanco($nome_imagem , $tamanho_imagem , $tmp , $idIdeia , $ideia){

                        $conexao = Conexao::getInstance();

                        $pasta = "../fotosIdeias/"; /* formatos de imagem permitidos */
                        $permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp" , ".mp4"); 

                        /* pega a extensão do arquivo */ 
                                $ext = strtolower(strrchr($nome_imagem,".")); 
                                /* verifica se a extensão está entre as extensões permitidas */ 
                                if(in_array($ext,$permitidos)){ /* converte o tamanho para KB */ 
                                    $tamanho = round($tamanho_imagem / (1024 * 1024)); 
                                    if($tamanho < (1024 * 1024)){
                             //se imagem for até 1MB envia 
                                //$nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem 
                                $nome_atual = $nome_imagem;
                                //caminho temporário da imagem /* se enviar a foto, insere o nome da foto no banco de dados */ 
                                if(move_uploaded_file($tmp,$pasta.$nome_atual)){    
                                    $idUsuario = $ideia->getIdUsuario();
                                    $conexao->query("INSERT INTO fotos_ideias (id_usuario,id_ideia,foto) VALUES ($idUsuario,$idIdeia,'$nome_atual')");

                                 }else{ echo "Falha ao enviar"; } 
                                }
                            }

                    }
                    
                    if(isset($_FILES['imagem']['name'])){
                        $nome_imagem = $_FILES['imagem']['name']; 
                        $tamanho_imagem = $_FILES['imagem']['size']; 
                        $tmp = $_FILES['imagem']['tmp_name']; 
                        salvaFotoBanco($nome_imagem , $tamanho_imagem , $tmp , $idIdeia,$ideia);
                    }

                    if(isset($_FILES['imagem2']['name'])){
                        $nome_imagem = $_FILES['imagem2']['name']; 
                        $tamanho_imagem = $_FILES['imagem2']['size']; 
                        $tmp = $_FILES['imagem2']['tmp_name']; 
                        salvaFotoBanco($nome_imagem , $tamanho_imagem , $tmp , $idIdeia,$ideia);
                    }

                    if(isset($_FILES['imagem3']['name'])){
                        $nome_imagem = $_FILES['imagem3']['name']; 
                        $tamanho_imagem = $_FILES['imagem3']['size']; 
                        $tmp = $_FILES['imagem3']['tmp_name']; 
                        salvaFotoBanco($nome_imagem , $tamanho_imagem , $tmp , $idIdeia,$ideia);
                    }

                    if(isset($_FILES['imagem4']['name'])){
                        $nome_imagem = $_FILES['imagem4']['name']; 
                        $tamanho_imagem = $_FILES['imagem4']['size']; 
                        $tmp = $_FILES['imagem4']['tmp_name'];
                        salvaFotoBanco($nome_imagem , $tamanho_imagem , $tmp , $idIdeia,$ideia); 
                    }

                    if(isset($_FILES['picture']['name'])){

                         $conexao = Conexao::getInstance();

                        $nome_imagem = $_FILES['picture']['name']; 
                        $tamanho_imagem = $_FILES['picture']['size']; 
                        $tmp = $_FILES['picture']['tmp_name'];
                        //salvaFotoBanco($nome_imagem , $tamanho_imagem , $tmp , $idIdeia,$ideia); 
                        //$img = $_FILES['picture']['name'];
                        //$ideia->setImagemProjeto($img);

                        $nome_atual_ideia = $ideia->arrumaFoto();

                        //echo $nome_atual_ideia; // aqui tá oks

                        $ideia->setImagemProjeto($nome_atual_ideia);

                        $ideiaDAO->updateImagem($ideia->getImagemProjeto() , $conexao, $ideia->getIdeia());
                    }
             }
                
            echo'<script>alert("Ideia cadastrada com sucesso");</script>';
            echo '<meta http-equiv="refresh" content="0;URL=../view/painel.php" />';

        }else{

            echo'<script>alert("Caracteres invalidos!");</script>';
            echo '<meta http-equiv="refresh" content="0;URL=../view/inserirIdeia.php" />';
        }
    }
?>
