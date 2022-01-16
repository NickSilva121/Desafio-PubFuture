-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jan-2022 às 02:42
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pubfuture`
--
CREATE DATABASE IF NOT EXISTS `pubfuture` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pubfuture`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

DROP TABLE IF EXISTS `contas`;
CREATE TABLE IF NOT EXISTS `contas` (
  `ID_CONTA` int(11) NOT NULL AUTO_INCREMENT,
  `NR_CONTA` text NOT NULL,
  `SALDO_CONTA` double NOT NULL,
  `TIPO_CONTA` varchar(38) NOT NULL,
  `INSTITUICAOFINANCEIRA_CONTA` varchar(38) NOT NULL,
  PRIMARY KEY (`ID_CONTA`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`ID_CONTA`, `NR_CONTA`, `SALDO_CONTA`, `TIPO_CONTA`, `INSTITUICAOFINANCEIRA_CONTA`) VALUES
(28, '1234-5', 0, 'Conta Corrente', 'Bradesco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

DROP TABLE IF EXISTS `despesas`;
CREATE TABLE IF NOT EXISTS `despesas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VALOR_DESP` int(11) NOT NULL,
  `DATAPAGAMENTO_DESP` date NOT NULL,
  `DATAPAGAMENTOESPERADO_DESP` date NOT NULL,
  `CONTA_DESP` varchar(15) NOT NULL,
  `TIPO_DESP` varchar(38) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`ID`, `VALOR_DESP`, `DATAPAGAMENTO_DESP`, `DATAPAGAMENTOESPERADO_DESP`, `CONTA_DESP`, `TIPO_DESP`) VALUES
(11, 100, '2022-01-14', '2022-01-10', '1234-5', 'Alimentacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

DROP TABLE IF EXISTS `receita`;
CREATE TABLE IF NOT EXISTS `receita` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `conta` varchar(65) NOT NULL,
  `valor` decimal(65,0) NOT NULL,
  `tipoReceita` varchar(15) NOT NULL,
  `dataRecebimento` date NOT NULL,
  `dataRecebimentoEsperado` date NOT NULL,
  `descricao` varchar(65) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`ID`, `conta`, `valor`, `tipoReceita`, `dataRecebimento`, `dataRecebimentoEsperado`, `descricao`) VALUES
(27, '1234-5', '100', 'Outros', '2022-01-14', '2022-01-05', 'Aposta'),
(30, '1234-5', '200', 'Presente', '2021-12-14', '2021-12-30', 'Presente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
