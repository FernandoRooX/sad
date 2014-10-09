-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 14-Set-2014 às 17:44
-- Versão do servidor: 5.6.11
-- versão do PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_sad`
--
CREATE DATABASE IF NOT EXISTS `bd_sad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_sad`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `nome` varchar(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `curso` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `matricula` int(20) NOT NULL,
  `semestre` varchar(5) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`nome`, `id`, `curso`, `matricula`, `semestre`, `telefone`, `sexo`, `data_nascimento`, `email`) VALUES
('CLEYNALDO CARVALHO DOS SANTOS', 1, 'Sistemas de Banco de Dados', 56565656, '5', '6185137648', 'masculino', '0000-00-00', 'cleynaldocarvalho@gmail.com'),
('CLEYNALDO CARVALHO DOS SANTOS', 2, 'Sistemas de Banco de Dados', 56565656, '5', '6185137648', 'masculino', '0000-00-00', 'cleynaldocarvalho@gmail.com'),
('carlos', 3, 'ProgramaÃ§Ã£o Comercial', 90909, '5', '61-8989-8989', 'masculino', '0000-00-00', 'testes@testes.com.br'),
('carlos', 4, 'ProgramaÃ§Ã£o Comercial', 90909, '5', '61-8989-8989', 'masculino', '0000-00-00', 'testes@testes.com.br'),
('carlos', 5, 'ProgramaÃ§Ã£o Comercial', 90909, '5', '61-8989-8989', 'masculino', '0000-00-00', 'testes@testes.com.br'),
('carlos', 6, 'ProgramaÃ§Ã£o Comercial', 90909, '5', '61-8989-8989', 'masculino', '0000-00-00', 'testes@testes.com.br'),
('Pedro de Oliveira da Silva', 7, 'Java', 2147483647, '5', '00-0000-0000', 'masculino', '2014-09-13', 'testes2@testes.com.br'),
('Pedro de Oliveira da Silva', 8, 'Java', 2147483647, '5', '00-0000-0000', 'masculino', '2014-09-13', 'testes2@testes.com.br'),
('Pedro de Oliveira da Silva', 9, 'Java', 2147483647, '5', '00-0000-0000', 'masculino', '2014-09-13', 'testes2@testes.com.br'),
('Pedro de Oliveira da Silva', 10, 'Java', 2147483647, '5', '00-0000-0000', 'masculino', '2014-09-13', 'testes2@testes.com.br'),
('Pedro de Oliveira da Silva', 11, 'Java', 2147483647, '5', '00-0000-0000', 'masculino', '2014-09-13', 'testes2@testes.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependencia`
--

CREATE TABLE IF NOT EXISTS `dependencia` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `senha` varchar(112) NOT NULL,
  `entrada` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tabela testes' AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`, `tipo`, `cpf`, `senha`, `entrada`) VALUES
(1, '', '', '222.222.222-', '12345', '2014-07-22 00:00:00'),
(2, 'teste testes 2', 'Coordenador', '017.814.121-62', '1111', '2014-07-22 00:00:00'),
(3, 'Cleynaldo Carvalho', '', '017.814.121-62', '827ccb0eea8a706c4c34a16891f84e7b', '2014-07-23 00:00:00'),
(4, 'testes', '', '000.000.000-00', '3b712de48137572f3849aabd5666a4e3', '2014-07-23 00:00:00'),
(5, 'testes 3', '', '111.111.111-11', '698d51a19d8a121ce581499d7b701668', '2014-07-23 00:00:00'),
(6, 'carlos', 'Professor', '444.444.444-44', 'e14128c3e1544432b1e8367a32283b4c', '2014-07-23 00:00:00'),
(7, 'roberta', 'Secretaria', '777.777.777-77', '6c44e5cd17f0019c64b042e4a745412a', '2014-07-23 00:00:00'),
(8, 'testes1', 'Professor', '000.000.000-00', 'c20ad4d76fe97759aa27a0c99bff6710', '2014-07-23 00:00:00'),
(9, 'Cleynaldo Carvalho dos Santos', 'Coordenador', '000.000.000-11', '202cb962ac59075b964b07152d234b70', '2014-07-24 00:00:00'),
(10, 'Cleynaldo Carvalho dos Santos', 'Coordenador', '000.000.000-11', '202cb962ac59075b964b07152d234b70', '2014-07-24 00:00:00'),
(11, 'Cleynaldo Carvalho dos Santos', 'Coordenador', '000.000.000-11', '202cb962ac59075b964b07152d234b70', '2014-07-24 00:00:00'),
(12, '', '', 'fdf.d', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00'),
(13, 'Fernando ', 'Coordenador', '049.620.671-09', 'd92f2caf0f2b2a76994f887fb371781b', '1992-03-12 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `disponibilidade` varchar(100) NOT NULL,
  `tipos_dep` varchar(100) NOT NULL,
  `componentes` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `data`, `hora`, `disponibilidade`, `tipos_dep`, `componentes`, `status`) VALUES
(1, '0', '0000-00-00', '00:00:01', '0', '0', '0', ''),
(2, 'Turma 237', '2014-09-14', '01:30:00', 'Fernando GonÃ§alves', 'STR', 'ProgramaÃ§Ã£o Comercial', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ra` int(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `ra`, `senha`) VALUES
(0, 'cleynaldo', 2147483647, '827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
