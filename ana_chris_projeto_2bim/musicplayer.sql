-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Out-2020 às 19:03
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `musicplayer`
--
CREATE DATABASE IF NOT EXISTS `musicplayer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `musicplayer`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banda`
--

CREATE TABLE IF NOT EXISTS `banda` (
  `id_banda` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cod_genero` int(11) NOT NULL,
  PRIMARY KEY (`id_banda`),
  KEY `cod_genero` (`cod_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE IF NOT EXISTS `musica` (
  `id_musica` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cod_banda` int(11) NOT NULL,
  `youtube` text NOT NULL,
  PRIMARY KEY (`id_musica`),
  UNIQUE KEY `cod_banda` (`cod_banda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica_playlist`
--

CREATE TABLE IF NOT EXISTS `musica_playlist` (
  `id_musica_playlist` int(11) NOT NULL,
  `cod_musica` int(11) NOT NULL,
  `cod_playlist` int(11) NOT NULL,
  PRIMARY KEY (`id_musica_playlist`),
  UNIQUE KEY `cod_musica` (`cod_musica`),
  UNIQUE KEY `cod_playlist` (`cod_playlist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `id_playlist` int(11) NOT NULL,
  `nome` int(100) NOT NULL,
  PRIMARY KEY (`id_playlist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `banda`
--
ALTER TABLE `banda`
  ADD CONSTRAINT `banda_ibfk_1` FOREIGN KEY (`cod_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `musica_ibfk_1` FOREIGN KEY (`cod_banda`) REFERENCES `banda` (`id_banda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musica_playlist`
--
ALTER TABLE `musica_playlist`
  ADD CONSTRAINT `musica_playlist_ibfk_1` FOREIGN KEY (`cod_musica`) REFERENCES `musica` (`id_musica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`id_playlist`) REFERENCES `musica_playlist` (`cod_playlist`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
