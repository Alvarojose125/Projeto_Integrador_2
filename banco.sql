-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2022 às 02:43
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `CPF` int(11) NOT NULL,
  `NOME` varchar(20) NOT NULL,
  `SOBRENOME` varchar(300) NOT NULL,
  `ENDERECO` varchar(300) NOT NULL,
  `TELEFONE` int(12) NOT NULL,
  `EMAIL` varchar(300) NOT NULL,
  `SENHA` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`CPF`, `NOME`, `SOBRENOME`, `ENDERECO`, `TELEFONE`, `EMAIL`, `SENHA`) VALUES
(1, 'ALVARO', 'jose', 'RUA DA VARGEM', 92204372, 'alvarojose125@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(12, 'alvaro ', 'jose', 'RUA DA VARGEM', 92204372, 'alvarojose125@gmail.com1', 'c20ad4d76fe97759aa27a0c99bff6710');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
