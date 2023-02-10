-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jan-2023 às 21:48
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp2music`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_de_nasc` date NOT NULL,
  `cod_artista` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`nome`, `email`, `data_de_nasc`, `cod_artista`) VALUES
('Gilberto Gil', 'gilbertoart@gmail.com', '1976-07-06', 1),
('Carmem Miranda', 'karmemmiranda@gmail.com', '1930-05-04', 2),
('Cristhian Astag', 'astagcris@gmail.com', '1988-03-02', 3),
('Caetano Veloso', 'caetanoveloso@gmail.com', '1942-08-07', 4),
('Roberto Carlos', 'robertocarlos@gmail.com', '1941-04-19', 5),
('Renato Russo', 'renatorusso@gmail.com', '1960-03-27', 6),
('Tom Jobim', 'tomjobimrj@gmail.com', '1927-01-25', 7),
('Area21', 'area21@gmail.com', '2020-03-21', 8),
('Manuel Gomes', 'manuelgomes@gmail.com', '1937-02-11', 9),
('BLACKPINK', 'kimjennie@gmail.com', '1996-01-16', 10),
('EXO', 'exo@gmail.com', '1992-01-02', 11),
('BTS', 'bts@gmail.com', '2001-01-01', 12),
('Tim Maia', 'tim@gmail.com', '2004-05-05', 13),
('Tomorrow by Together', 'txt@gmail.com', '2019-12-05', 23),
('Pablo Vittar', 'vittar@gmail.com', '2001-01-01', 15),
('Gloria Groove', 'gloria@gmail.com', '2004-07-02', 16),
('The Beatles', 'bet@gmail.com', '1999-12-05', 17),
('Def', 'def@gmail.com', '1999-12-13', 22),
('Michael Jackson', 'michael@gmail.com', '1999-05-08', 19),
('Girl`s Generation', 'girls@gmail.com', '2000-04-04', 20),
('Everglow', 'ever@gmail.com', '2000-08-05', 21),
('Taylor swift', 'swifttaylor@gmail.com', '1989-12-13', 24),
('PÃ©ricles', 'tim@gmail.com', '1969-06-22', 25),
('PÃ©ricles', 'tim@gmail.com', '1969-06-22', 26),
('Dj Kathy Maravilha', 'normalemail@gmail.com', '1999-02-05', 30),
('PÃ©ricles', 'tim@gmail.com', '1969-06-22', 29),
('Vitroles', 'vitroles@gmail.com', '2111-09-09', 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE `musica` (
  `nome_mus` varchar(100) NOT NULL,
  `genero_mus` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `cod_artista` int(11) NOT NULL,
  `cod_mus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`nome_mus`, `genero_mus`, `link`, `cod_artista`, `cod_mus`) VALUES
('Dynamite', 'KPOP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gdZLi9oWNZg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 12, 17),
('Garota de ipanema', 'Samba', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WuenyQ4NCQE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 4),
('Butter', 'KPOP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WMweEpGlu_U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 12, 18),
('Caneta Azul', 'Diverso', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2P_esm8cNgU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 9, 7),
('PINK VENOM', 'kpop', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gQlMMD8auMs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 10, 8),
('SHT DONW', 'kpop', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/POe9SOEKotk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 10, 9),
('KILL THIS LOVE', 'kpop', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2S24-y0Ij3Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 10, 10),
('ëšœë‘ëšœë‘ (DDU-DU DDU-DU)', 'KPOP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/IHNzOHi8sJs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 10, 11),
('Love', 'KPOP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pSudEWBAYRE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 19),
('o que Ã© que a baiana tem', 'Mpb', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ojo3I59Gn6c\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 16),
('Te beijar', 'Diversos', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XVNjVLnqFq0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 8, 33),
('Love Shot', 'KPOP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pSudEWBAYRE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 11, 20),
('The Eve', 'KPOP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/b6ycw7p9-bE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 11, 21),
('Me dÃª motivo', 'MPB', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PDQrcz4KUKs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 13, 24),
('Gostava tanto de vocÃª', 'MPB', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cxSzri346W0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 13, 28),
('Triste com Teee', 'Funk', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_K7WVDfOEYY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 15, 30),
('Amor de que', 'Pop', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4zJ4i6Az2Ck\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 15, 29),
('Eu vou deixar de ser besta', 'Diverso', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/oxxJRZIZthg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 9, 31),
('Rock with you', 'Disco', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5X-Mrc2l1d0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 19, 32),
('Te beijar', 'Diversos', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XVNjVLnqFq0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 22, 34),
('letÃ­cia', 'mpb', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fLL4kMz265Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 35),
('thriller', 'Pop', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sOnqjkJTMaA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 19, 36),
('0X1=LOVESONG', 'KPOP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/d5bbqKYu51w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 23, 37),
('Donâ€™t Blame Me', 'Pop', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kRJKB291Z1g\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 24, 38),
('Blank Space', 'POP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/e-ORhEE9VVg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 24, 39),
('Sadomasoquista', 'funk', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/CCBRNtL7Hfs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 30, 40),
('nome qualquer', 'Diverso', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EciqSGqvVrg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 25, 41),
('nomemusicaramdom', 'randow', 'linkrandowsnm', 16, 42),
('nomemusicaramdom', 'randow', 'linkrandowsnm', 16, 43),
('radomomm', 'rasmdad', 'dasdad', 17, 44),
('dasdsfsad', 'asdasdas', 'fsadfsadasd', 22, 45),
('sdadasda', 'dasdasda', 'dasdada', 22, 46),
('sdadasda', 'dasdasda', 'dasdada', 22, 47),
('sdadasda', 'dasdasda', 'dasdada', 22, 48),
('sdadasda', 'dasdasda', 'dasdada', 22, 49),
('sdasdasd', 'dsadsad', 'dasdsadasf', 15, 50),
('sdasdasd', 'dsadsad', 'dasdsadasf', 15, 51),
('asdvfbgnhmh', 'dsfghnmj', 'sdfghjklk', 16, 52),
('asdvfbgnhmh', 'dsfghnmj', 'sdfghjklk', 16, 53),
('asdvfbgnhmh', 'dsfghnmj', 'sdfghjklk', 16, 54),
('Gatinha comunista', 'Diverso', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_1zv-qYkEZU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 31, 55),
('Gatinha Comunistaaaaaaa', 'diverso', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_1zv-qYkEZU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 31, 56);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mus_usu`
--

CREATE TABLE `mus_usu` (
  `id_mus_usu` int(11) NOT NULL,
  `cod_mus` int(11) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mus_usu`
--

INSERT INTO `mus_usu` (`id_mus_usu`, `cod_mus`, `cod_usuario`) VALUES
(1, 9, 22),
(9, 4, 22),
(3, 10, 23),
(4, 11, 23),
(6, 8, 22),
(7, 18, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlist`
--

CREATE TABLE `playlist` (
  `nome_playlist` varchar(100) NOT NULL,
  `cod_playlist` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `playlist`
--

INSERT INTO `playlist` (`nome_playlist`, `cod_playlist`, `cod_usuario`) VALUES
('primeira playlist', 1, 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_de_nasc` date NOT NULL,
  `senha` varchar(100) NOT NULL,
  `adm` varchar(3) DEFAULT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `data_de_nasc`, `senha`, `adm`, `cod_usuario`) VALUES
('normalnome', 'normalemail@gmail.com', '1098-02-03', 'normalsenha', 'sim', 1),
('LeÃ£o', 'leao@gmail.com', '2200-03-02', 'LeÃ£o', '', 28),
('LeÃ£o', 'leao@gmail.com', '2200-03-02', 'LeÃ£o', '', 29),
('nome', 'nome@gmail.com', '2004-07-09', 'nome', '', 26),
('garhor', 'garhor@gmail.com', '2003-02-01', 'garhor', 'sim', 7),
('nome', 'nome@gmail.com', '2004-07-09', 'nome', '', 27),
('ola', 'ola@gmail.com', '1111-01-01', 'olasenha', '', 42),
('Vector', 'vector@gmail.com', '2003-09-09', 'Vector', 'sim', 24),
('antonia', 'antonia@gmail.com', '2004-08-09', 'antonia', '', 23),
('pessoacomum2', 'pessoacomum2@gmail.com', '2993-02-01', 'pessoacomum2', NULL, 15),
('a2 boa', 'a2@gmail.com', '1234-12-12', 'a2senha', 'sim', 22),
('Jimin', 'jimingostoso123@gmail.com', '2000-07-02', 'jim', '', 30),
('Malaquias', 'malaquias123@gmail.com', '2003-03-06', '', '', 31),
('Vivi', 'vivilindinha@gmeil.com', '1975-08-02', '12345', '', 32),
('Francisco', 'fc@cp2.g12.br', '1968-05-05', 'cp2', '', 33),
('Francisco', 'fc@cp2.g12.br', '1968-05-05', 'cp2', '', 34),
('anna', 'jazzghost@gmail.com', '2022-12-15', 'marianinhaplay', '', 35),
('Felipe', 'asd@gmail.com', '2004-11-04', '1234', '', 36),
('marcelle', 'marcelle@com', '0000-00-00', 'marcelle', '', 37),
('marcelle', 'marcelle@com', '0000-00-00', 'marcelle', '', 38),
('geovanna ', 'marcelle@com', '2004-04-08', '1234', '', 39),
('ANA LUISA', 'GRTRTR@GMAIL.COM', '1982-12-04', '1234', '', 40),
('Alessandro', 'alessando.ramos@gmail.com', '2010-03-08', 'Vasco', '', 41),
('baris', 'baris@gmail.com', '2003-09-08', 'barissenha', '', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`cod_artista`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`cod_mus`);

--
-- Indexes for table `mus_usu`
--
ALTER TABLE `mus_usu`
  ADD PRIMARY KEY (`id_mus_usu`),
  ADD KEY `cod_usuario` (`cod_usuario`),
  ADD KEY `cod_mus` (`cod_mus`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`cod_playlist`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artista`
--
ALTER TABLE `artista`
  MODIFY `cod_artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `musica`
--
ALTER TABLE `musica`
  MODIFY `cod_mus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `mus_usu`
--
ALTER TABLE `mus_usu`
  MODIFY `id_mus_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `cod_playlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
