-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jul-2015 às 05:56
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mindup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `nome` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`nome`, `senha`) VALUES
('guriposa@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `idUsuario` bigint(20) NOT NULL,
  `idIdeia` bigint(20) NOT NULL,
  PRIMARY KEY (`idUsuario`,`idIdeia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`idUsuario`, `idIdeia`) VALUES
(37, 312),
(37, 313),
(45, 282),
(45, 294),
(45, 296),
(45, 303),
(45, 312),
(47, 303),
(47, 313),
(47, 314);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_ideias`
--

CREATE TABLE IF NOT EXISTS `fotos_ideias` (
  `idfoto` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) NOT NULL,
  `id_ideia` bigint(20) NOT NULL,
  `foto` varchar(300) NOT NULL,
  PRIMARY KEY (`idfoto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

--
-- Extraindo dados da tabela `fotos_ideias`
--

INSERT INTO `fotos_ideias` (`idfoto`, `id_usuario`, `id_ideia`, `foto`) VALUES
(114, 37, 281, '11009933_771244299639702_3026230748842093823_n.png'),
(115, 37, 281, 'massa.jpg'),
(116, 37, 281, 'maxresdefault.jpg'),
(117, 37, 281, 'mind.jpg'),
(118, 37, 282, 'nego_2.png'),
(119, 37, 282, 'nego_3.png'),
(120, 37, 282, 'nego_4.png'),
(121, 37, 282, 'midiarank.png'),
(122, 37, 284, 'nui.jpg'),
(123, 37, 284, 'cifrao.png'),
(124, 37, 284, 'massa.jpg'),
(125, 37, 284, '11088343_771244262973039_5738235481779446927_n.png'),
(126, 37, 287, 'Ideias_comput.png'),
(127, 37, 287, 'index_do_mind_windows_8.png'),
(128, 37, 287, 'ini_mind_up_ideias.png'),
(129, 37, 287, 'mind.jpg'),
(130, 37, 288, 'Ideias_comput.png'),
(131, 37, 288, 'index_do_mind_windows_8.png'),
(132, 37, 288, 'ini_mind_up_ideias.png'),
(133, 37, 288, 'mind.jpg'),
(134, 37, 289, '11088343_771244262973039_5738235481779446927_n.png'),
(135, 37, 289, 'cifrao.png'),
(136, 37, 289, 'innova_ideias.jpg'),
(137, 37, 289, 'como-criar-um-mapa-mental.jpg'),
(138, 45, 290, 'Java_training.png'),
(139, 37, 304, 'download.jpg'),
(140, 37, 304, 'images.jpg'),
(141, 37, 304, 'web_shutterstock_24312778.jpg'),
(142, 37, 304, 'web_shutterstock_24312778.jpg'),
(143, 37, 305, 'Doutorado-Mestrado1.png'),
(144, 37, 305, 'educacao.jpg'),
(145, 37, 305, 'secretaria-educacao-municipio-forquilha.jpg'),
(146, 37, 305, 'jpg_20101210180020_24.jpg'),
(147, 45, 307, 'bloodborne-ps4-concept-art-4.jpg'),
(148, 45, 308, 'bloodborne-ps4-concept-art-4.jpg'),
(149, 45, 308, 'img1_2.png'),
(150, 45, 308, 'img2_1.png'),
(151, 45, 309, 'campos.jpg'),
(152, 45, 309, 'bloodborne-ps4-concept-art-4.jpg'),
(153, 45, 309, 'img2_1.png'),
(154, 45, 309, 'img1_2.png'),
(155, 47, 312, 'bloodborne-ps4-concept-art-4.jpg'),
(156, 47, 312, 'campos.jpg'),
(157, 47, 312, 'img1_2.png'),
(158, 47, 312, 'img2_1.png'),
(159, 45, 313, '418407.jpg'),
(160, 45, 313, 'The-Witcher-3.png'),
(161, 45, 313, 'the-witcher-3.jpg'),
(162, 45, 313, 'The-Witcher-3-Wild-Hunt2.jpg'),
(163, 37, 314, 'Cloud1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ideiasusuarios`
--

CREATE TABLE IF NOT EXISTS `ideiasusuarios` (
  `idideia` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idusuario` bigint(20) NOT NULL,
  `ideia` longtext NOT NULL,
  `data` date NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `fraseDaIdeia` varchar(100) NOT NULL,
  `avaliacao` decimal(10,2) NOT NULL,
  `valor` varchar(80) NOT NULL,
  `ideia_paga` tinyint(1) NOT NULL,
  `ideia_patenteada` tinyint(1) NOT NULL,
  `ideia_em_busca_investimentos` tinyint(1) NOT NULL,
  `ideia_em_busca_investimentos_e_socios` tinyint(1) NOT NULL,
  `ideia_em_busca_de_mao_de_obra` tinyint(1) NOT NULL,
  `video_da_ideia` varchar(1000) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  PRIMARY KEY (`idideia`),
  UNIQUE KEY `idideia` (`idideia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=319 ;

--
-- Extraindo dados da tabela `ideiasusuarios`
--

INSERT INTO `ideiasusuarios` (`idideia`, `idusuario`, `ideia`, `data`, `categoria`, `fraseDaIdeia`, `avaliacao`, `valor`, `ideia_paga`, `ideia_patenteada`, `ideia_em_busca_investimentos`, `ideia_em_busca_investimentos_e_socios`, `ideia_em_busca_de_mao_de_obra`, `video_da_ideia`, `imagem`) VALUES
(289, 37, 'Tenho um projeto sobre armaduras de combate, como o do filme do homem de ferro, bem bacana e tenho o projeto de engenharia já desenvolvido e estou buscando negócios para estar tocando em diante esse projeto. Preciso desenvolver e não tenho fundos para tal estou interessado em parceiros para concretizar tal sonho tecnológico.', '2015-06-20', 'indústria', 'Armaduras do homem de ferro', '9.00', '0', 1, 1, 0, 0, 1, 'https://www.youtube.com/watch?v=s7MHXDEdjS0', '9cbd4bc663c0753a8401d682d321886f.png'),
(302, 37, 'Método automatizado para resolução de problemas industriais, tenho um projeto que visa diminuir os riscos nas fábricas e automatizar o processo de implantação das malhas industriais, dentre outros problemas , atualmente vemos que ocorrem muitos acidentes nas fábricas e meu método tenta diminuir ou acabar com tais incidentes. Quero negociar com amigos e parceiros esse projeto', '2015-06-25', 'indústria', 'Método automatizado para resolução de problemas industriais', '8.88', '5000', 1, 1, 0, 0, 0, 'sem vídeo cadastrado', '40f90e098461fba7083d8f4c6bad5e57.jpg'),
(303, 37, 'ideia de teste sobre ciências ', '2015-06-25', 'ciências', 'ciências divertidas', '11.60', '0,00', 1, 1, 0, 0, 0, 'sem vídeo cadastrado', '3aac8de25f9f5f24e7d5d346e768ed58.jpg'),
(304, 37, 'ideia de saúde', '2015-06-25', 'saúde', 'saúde mais e indispensavel', '7.00', '0,00', 1, 1, 0, 0, 0, 'sem vídeo cadastrado', '16484d08d04d7f392b07fda0f01f0c67.png'),
(305, 37, 'Tenho um projeto que visa atender a educação de forma a mostrar a importancia dela para os estudantes e motiva-los a sempre estudarem e se dedicarem na vida para que tenham um futuro mais brilhante , com um projeto apoiado pelo MEC estamos lidando com alguns problemas relacionados a burocracia mas queremos estar trazendo essa ideia para a maior quantidade possível de escolas e posteriormente universidades apoiando nossa ideia de inovação na educação.', '2015-06-25', 'educação', 'Educandus', '8.55', '10000', 1, 1, 1, 1, 1, 'https://www.youtube.com/watch?v=b2mBfIM7Gk0', '122122754422a28e096ca315f49fc24a.jpg'),
(312, 47, 'tenho uma ideia de um jogo muito massa ', '2015-06-25', 'outros', 'Jogo Bloodborne', '18.10', '200000', 1, 1, 0, 0, 0, 'sem vídeo cadastrado', 'a8abbdc54cd8c7c8d471fe773246dfc5.png'),
(313, 45, 'Jogo muito bom chamado the witcher 3 wild hunt', '2015-06-25', 'outros', 'The Witcher Wild Hund', '24.60', '500000', 1, 1, 1, 1, 1, 'https://www.youtube.com/watch?v=c0i88t0Kacs', '94bfe2826e2a55df78f9d7e13d615e5a.jpg'),
(314, 37, 'Computação em nuvem', '2015-06-25', 'computação', 'Computação em nuvem', '4.60', '50000', 1, 1, 0, 0, 0, 'https://www.youtube.com/watch?v=FDFejm-ovtI', '4265153866110dc5357dcbbd5f15d688.jpg'),
(317, 47, 'uma lampada q nao gasta energia', '2015-06-26', 'indústria', 'lampada economica', '0.00', '5000', 1, 1, 1, 1, 1, 'sem vídeo cadastrado', ''),
(318, 37, 'Filme do homem de ferro massa demais tenho uma ideia para criar esse novo filme e gostaria de apoio aqui Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo. Disponibilizamos uma série de materiais para te auxiliar!Produza o seu projeto com carinho e no tempo certo. Planejar uma boa campanha é fator decisivo para o sucesso do seu financiamento coletivo.', '2015-07-02', 'outros', 'Homem de ferro', '0.00', '10000', 1, 1, 0, 0, 0, 'https://www.youtube.com/watch?v=Sp3yO7jVzn4', '690f231dfe13319e4411fd83262da6c8.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ideias_de_amigos`
--

CREATE TABLE IF NOT EXISTS `ideias_de_amigos` (
  `id_divulgacao` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_ideia` bigint(20) NOT NULL,
  `id_amigo` bigint(20) NOT NULL,
  `id_autor_ideia` bigint(20) NOT NULL,
  PRIMARY KEY (`id_divulgacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `ideias_de_amigos`
--

INSERT INTO `ideias_de_amigos` (`id_divulgacao`, `id_ideia`, `id_amigo`, `id_autor_ideia`) VALUES
(1, 289, 45, 37),
(2, 313, 37, 45);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas_e_respostas_interessados`
--

CREATE TABLE IF NOT EXISTS `perguntas_e_respostas_interessados` (
  `id_pergunta` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_ideia` bigint(20) NOT NULL,
  `id_interessado` bigint(20) NOT NULL,
  `id_dono_da_ideia` bigint(20) NOT NULL,
  `pergunta` varchar(5000) NOT NULL,
  `resposta` varchar(5000) NOT NULL,
  `data_pergunta` date NOT NULL,
  `data_resposta` date NOT NULL,
  PRIMARY KEY (`id_pergunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perguntas_e_respostas_interessados`
--

INSERT INTO `perguntas_e_respostas_interessados` (`id_pergunta`, `id_ideia`, `id_interessado`, `id_dono_da_ideia`, `pergunta`, `resposta`, `data_pergunta`, `data_resposta`) VALUES
(1, 289, 45, 37, 'teste aqui!', '', '2015-06-23', '0000-00-00'),
(2, 289, 47, 37, 'negociacao', 'obrigado', '2015-06-25', '2015-06-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatoscontasremovidas`
--

CREATE TABLE IF NOT EXISTS `relatoscontasremovidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relato` varchar(50000) NOT NULL,
  `nomeusuariorelatou` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `relatoscontasremovidas`
--

INSERT INTO `relatoscontasremovidas` (`id`, `relato`, `nomeusuariorelatou`, `celular`) VALUES
(1, '', 'teste de cadastro', '(11) 1111-1111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestoes`
--

CREATE TABLE IF NOT EXISTS `sugestoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sugestao` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefoneCelular` varchar(150) NOT NULL,
  `telefoneFixo` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `confirmaemail` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `confirmasenha` varchar(200) NOT NULL,
  `investimento` decimal(10,2) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `dataNascimento`, `telefoneCelular`, `telefoneFixo`, `email`, `confirmaemail`, `senha`, `confirmasenha`, `investimento`, `imagem`) VALUES
(37, 'Gustavo Marques', '1992-03-16', '(34) 9659-9328', '(34) 3313-1178', 'guriposa@gmail.com', 'guriposa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '0.00', '47629c65373bd5bc285fce6bf438ac0a.png'),
(45, 'Fabiana', '0000-00-00', '(11) 1111-1111', '(34) 3313-3822', 'fabiana@gmail.com', 'fabiana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '0.00', 'b6a0d3054645f5a523bd4f2ce907a198.jpg'),
(47, 'Gabriel Riposati', '2010-04-04', '(99) 9999-9999', '', 'gabriel@gmail.com', 'gabriel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '0.00', 'e503467d0fb17232c0356be401cbb5e0.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariosinteressados`
--

CREATE TABLE IF NOT EXISTS `usuariosinteressados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idideia` int(11) NOT NULL,
  `ideia` longtext NOT NULL,
  `fraseideia` varchar(50000) NOT NULL,
  `idusuariointeressado` int(11) NOT NULL,
  `nomeusuariointeressado` varchar(2000) NOT NULL,
  `idusuarioautordaideia` int(11) NOT NULL,
  `nomeusuarioautordaideia` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuariosinteressados`
--

INSERT INTO `usuariosinteressados` (`id`, `idideia`, `ideia`, `fraseideia`, `idusuariointeressado`, `nomeusuariointeressado`, `idusuarioautordaideia`, `nomeusuarioautordaideia`) VALUES
(1, 289, 'Tenho um projeto sobre armaduras de combate, como o do filme do homem de ferro, bem bacana e tenho o projeto de engenharia já desenvolvido e estou buscando negócios para estar tocando em diante esse projeto. Preciso desenvolver e não tenho fundos para tal estou interessado em parceiros para concretizar tal sonho tecnológico.', 'uma ideia bacana sobre armaduras do homem de ferro', 45, 'Fabiana', 37, 'Gustavo Marques'),
(2, 289, 'Tenho um projeto sobre armaduras de combate, como o do filme do homem de ferro, bem bacana e tenho o projeto de engenharia já desenvolvido e estou buscando negócios para estar tocando em diante esse projeto. Preciso desenvolver e não tenho fundos para tal estou interessado em parceiros para concretizar tal sonho tecnológico.', 'Armaduras do homem de ferro', 47, 'Gabriel Riposati', 37, 'Gustavo Marques'),
(3, 313, 'Jogo muito bom chamado the witcher 3 wild hunt', 'The Witcher Wild Hund', 37, 'Gustavo Marques', 45, 'Fabiana');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
