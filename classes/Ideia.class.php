<?php 
	
	class Ideia {

		private $idUsuarioDonoDaIdeia;
		private $ideia;
		private $dataDaIdeia;
		private $categoriaIdeia;
		private $fraseIdeia;		
		private $valorIdeia; 
		private $ideia_patenteada;
		private $ideia_paga;
		private $ideia_em_busca_investimentos; 
		private $ideia_em_busca_investimentos_e_socios;
		private $ideia_em_busca_de_mao_obra;
		private $video_da_ideia; 
		private $imagem_da_ideia;
		private $img1,$img2,$img3,$linkPri,$linkSeg,$linkTer;

		public function __construct(){}

		public function setIdUsuaio($idUsuarioDonoDaIdeia){

			$this->idUsuarioDonoDaIdeia = $idUsuarioDonoDaIdeia;
		}

		public function getIdUsuario(){

			return $this->idUsuarioDonoDaIdeia;
		}

		public function setIdeia($ideia){

			$this->ideia = $ideia;
		}

		public function getIdeia(){

			return $this->ideia;
		}

		public function setDataIdeia($data){

			$this->dataDaIdeia = $data;
		}

		public function getDataIdeia(){

			return $this->dataDaIdeia;
		}

		public function setCategoria($categoriaIdeia){

			$this->categoriaIdeia = $categoriaIdeia;
		}

		public function getCategoria(){

			return $this->categoriaIdeia;
		}

		public function setFraseIdeia($fraseIdeia){

			$this->fraseIdeia = $fraseIdeia;
		}

		public function getFraseIdeia(){

			return $this->fraseIdeia;
		}
		

		public function setValorIdeia($valorIdeia){

			$this->valorIdeia = $valorIdeia;
		}

		public function getValorIdeia(){

			return $this->valorIdeia;
		}

		/* apartir daqui estou mexendo */

		public function setIdeiaPatenteada($ideia_patenteada){

			$this->ideia_patenteada = $ideia_patenteada;
		}

		public function isIdeiaPatenteada(){

			return $this->ideia_patenteada;
		}

		public function isIdeiaPaga(){

			return $this->ideia_paga;
		}

		public function setIdeiaBuscaInvestimentos($ideia_em_busca_investimentos){

			$this->ideia_em_busca_investimentos = $ideia_em_busca_investimentos;
		}

		public function isIdeiaEmBuscaDeInvestimentos(){

			return $this->ideia_em_busca_investimentos;
		}

		public function setIdeiaBuscaInvestimentosESocios($ideia_em_busca_investimentos_e_socios){

			$this->ideia_em_busca_investimentos_e_socios = $ideia_em_busca_investimentos_e_socios;
		}

		public function isIdeiaEmBuscaDeInvestimentosESocios(){

			return $this->ideia_em_busca_investimentos_e_socios;
		}


		public function setIdeiaBuscaMaoObra($ideia_em_busca_de_mao_obra){

			$this->ideia_em_busca_de_mao_obra = $ideia_em_busca_de_mao_obra;
		}

		public function isIdeiaEmBuscaMaoObra(){

			return $this->ideia_em_busca_de_mao_obra;
		}

		public function setVideo($video_da_ideia){

			$this->video_da_ideia = $video_da_ideia;
		}

		public function getVideo(){

			return $this->video_da_ideia;
		}

		public function setImagemProjeto($imagem_da_ideia){

			$this->imagem_da_ideia = $imagem_da_ideia;
		}

		public function getImagemProjeto(){

			return $this->imagem_da_ideia;
		}
		

		public function getDetalhesIdeias($idIdeia,$a,$conexao){ /// depois extrair 
				// pra um método esse script ai do vídeo

				echo "<h1>$a[5]</h1><br>";
				$string = $a[13]; /// pra pegar o vídeo e incorporar no sys

				$flagVideo = strpos($string,"www.youtube.com/watch?v=");

				if($flagVideo){

					$string = str_replace("/watch?v=", "/embed/", $string);

				}else{

					$string = "sem vídeo cadastrado";
				}

				$i=0;

				if(strcmp($a[14],"")==0){

					echo "<h3 class='detalhesIdeia'>Imagem do projeto</h3><div class='smallRectangle'>Sem Imagem cadastrada</div><br>";

				}else
				echo "<h3 class='detalhesIdeia'>Imagem do projeto</h3><div><img id='foto_projeto' src='../fotosIdeias/$a[14]'></div><br>";

				if(strcmp($string,"sem vídeo cadastrado")!=0)
					echo "<h3 class='detalhesIdeia'>Video desse projeto</h3><div class='embed-responsive embed-responsive-16by9' id='div_video_ideia'><iframe class='embed-responsive-item' src=$string frameborder='0' allowfullscreen></iframe></div><br><br>";

				else{
					echo "<h3 class='detalhesIdeia'>Video do projeto</h3><div class='smallRectangle'>Sem video cadastrado</div><br>";
				}

				$arrumaData = explode("-",$a[3]);
				$dataParaBancoMysql = $arrumaData[2].'/'.$arrumaData[1].'/'.$arrumaData[0];
				echo "<h3 class='detalhesIdeia'>Data de inserção</h3><div class='smallRectangle'>$dataParaBancoMysql</div><br>";
				echo "<h3 class='detalhesIdeia'>id</h3><div class='smallRectangle'>$a[0]</div><br>";
				echo "<h3 class='detalhesIdeia'>Ideia</h3><div class='rectangle' style='overflow: auto;'>$a[2]</div><br>";
				echo "<h3 class='detalhesIdeia'>Categoria</h3><div class='smallRectangle'>$a[4]</div><br>";
				echo "<h3 class='detalhesIdeia'>Valor pedido nesta ideia</h3><div class='smallRectangle'>R$ $a[7]</div><br>";

				if($a[9]==0){

					$a[9] = "Não";
				}

				if($a[10]==0){

					$a[10] = "Não";
				}

				if($a[11]==0){

					$a[11] = "Não";
				}

				if($a[12]==0){

					$a[12] = "Não";
				}

				if($a[9]==1){

					$a[9] = "Sim";
				}

				if($a[10]==1){

					$a[10] = "Sim";
				}

				if($a[11]==1){

					$a[11] = "Sim";
				}

				if($a[12]==1){

					$a[12] = "Sim";
				}

				echo "<h3 class='detalhesIdeia'>Este projeto é patenteado</h3><div class='smallRectangle'>$a[9]</div><br>";
				echo "<h3 class='detalhesIdeia'>Busco investimentos</h3><div class='smallRectangle'>$a[10]</div><br>";
				echo "<h3 class='detalhesIdeia'>Busco investimentos e sócios</h3><div class='smallRectangle'>$a[11]</div><br>";
				echo "<h3 class='detalhesIdeia'>Busco mão de obra</h3><div class='smallRectangle'>$a[12]</div><br>";

				echo "<h3 class='detalhesIdeia'>Imagens dessa ideia</h3>";

				$resultado = $conexao->query("select foto from fotos_ideias where id_ideia=$idIdeia limit 4");
			    $valor_linhas_retornadas = $resultado->rowCount();

				if($valor_linhas_retornadas > 0){
					while($a = $resultado->fetch()){

						echo "<img class='fotos_ideias_tamanho_bom' src='../fotosIdeias/$a[0]'>";
						echo"<br>";
						$i++;
					}
				}else{

					echo "<h2>ideia sem fotos cadastradas!</h2>";
				}
		}

		public function arrumaFoto(){
			$nome_atual = $this->getImagemProjeto();
		    $pasta = "../fotosIdeias/";

		    /* formatos de imagem permitidos */
		    $permitidos = array(".jpg", ".jpeg", ".gif", ".png", ".bmp");

		    if (isset($_POST)) {
		        $nome_imagem = $_FILES['picture']['name'];
		        $tamanho_imagem = $_FILES['picture']['size'];
		        /* pega a extensão do arquivo */
		        $ext = strtolower(strrchr($nome_imagem, "."));
		        /* verifica se a extensão está entre as extensões permitidas */
		        if (in_array($ext, $permitidos)) {
		            /* converte o tamanho para KB */
		            $tamanho = round($tamanho_imagem / (1024 * 1024));
		            if ($tamanho < 1024 * 1024) {
		                //se imagem for até 1MB envia 
		                $nome_atual = md5(uniqid(time())) . $ext;
		                //nome que dará a imagem 
		                $tmp = $_FILES['picture']['tmp_name'];
		                //caminho temporário da imagem /* se enviar a foto, insere o nome da foto no banco de dados */ 
		                if (move_uploaded_file($tmp, $pasta . $nome_atual)) {
		                    //mysqli_query($conexao,"INSERT INTO usuario (imagem) VALUES (".$nome_atual.")"); 
		                    //echo "<img src='fotos/".$nome_atual."' id='previsualizar'>"; 
		                    //imprime a foto na tela 
                		}
            		}
		        }
		    }
		  	//echo $nome_atual; aqui tá certo ! 
		    return $nome_atual;

		}

		public function projetosDestaque($conexao){

				$res = $conexao->query("SELECT idideia,categoria,imagem FROM ideiasusuarios order by avaliacao desc limit 3;");

                $i=0;
                $this->img1 = "";
                $this->img2 = "";
                $this->img3 ="";
                $this->linkPri="";
                $this->linkSeg="";
                $this->linkTer="";

                while($a = $res->fetch()){

                    $idIdeia = $a[0];
                    $categoria = $a[1];

                    if(strcmp($categoria,"ciências")==0){

                      $categoria = "ciencias";
                    }

                    if(strcmp($categoria,"saúde")==0){

                      $categoria = "saude";
                    }

                    if(strcmp($categoria,"educação")==0){

                      $categoria = "educacao";
                    }

                    if(strcmp($categoria,"indústria")==0){

                      $categoria = "industria";
                    }

                    if(strcmp($categoria,"computação")==0){

                      $categoria = "computacao";
                    }

                    if(strcmp($a[2],"")==0 && $i==0){

                      $this->img1 = "../fotosideias/sem_foto.png";
                      $this->linkPri = "<a href='detalhesIdeia" . $categoria . ".php?".  "idIdeia=$idIdeia'>";
                    }
                    if(strcmp($a[2],"")==0 && $i==1){

                        $this->img2 = "../fotosideias/sem_foto.png";
                        $this->linkSeg = "<a href='detalhesIdeia" . $categoria . ".php?".  "idIdeia=$idIdeia'>";

                    }if(strcmp($a[2],"")==0 && $i==2){

                        $this->img3 = "../fotosideias/sem_foto.png";
                        $this->linkTer = "<a href='detalhesIdeia" . $categoria . ".php?".  "idIdeia=$idIdeia'>";
                        
                    }else{

                      if(strcmp($this->img1,"")==0 && $i==0){

                          $this->img1 = "../fotosideias/$a[2]";
                          $this->linkPri = "<a href='detalhesIdeia" . $categoria . ".php?".  "idIdeia=$idIdeia'>";
                      }

                      if(strcmp($this->img2,"")==0 && $i==1){

                          $this->img2 = "../fotosideias/$a[2]";
                          $this->linkSeg = "<a href='detalhesIdeia" . $categoria . ".php?".  "idIdeia=$idIdeia'>";
                      }

                      if(strcmp($this->img3,"")==0 && $i==2){

                          $this->img3 = "../fotosideias/$a[2]";
                          $this->linkTer = "<a href='detalhesIdeia" . $categoria . ".php?".  "idIdeia=$idIdeia'>";
                      }
                    }

                    $i++;
            }
		}

		public function getImg1(){

			return $this->img1;
		}

		public function getImg2(){

			return $this->img2;
		}

		public function getImg3(){

			return $this->img3;
		}

		public function getLinkPri(){

			return $this->linkPri;
		}

		public function getLinkSeg(){

			return $this->linkSeg;
		}

		public function getLinkTer(){

			return $this->linkTer;
		}

	}

?>