-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Set-2020 às 19:33
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webcrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `wccategorias`
--

CREATE TABLE `wccategorias` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `wccategorias`
--

INSERT INTO `wccategorias` (`cod`, `descricao`) VALUES
(1, 'Camisetas'),
(2, 'Bermudas'),
(3, 'Shorts'),
(4, 'Blusas'),
(5, 'Meias'),
(6, 'Tênis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wcclientes`
--

CREATE TABLE `wcclientes` (
  `nome_razao` varchar(120) NOT NULL,
  `cpf_cnpj` varchar(20) NOT NULL,
  `email` varchar(140) DEFAULT NULL,
  `cod` int(11) NOT NULL,
  `nasc` date DEFAULT NULL,
  `sexo` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `ativo` int(1) NOT NULL,
  `rg_ie` varchar(20) NOT NULL,
  `tipo` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `wcclientes`
--

INSERT INTO `wcclientes` (`nome_razao`, `cpf_cnpj`, `email`, `cod`, `nasc`, `sexo`, `telefone`, `celular`, `ativo`, `rg_ie`, `tipo`) VALUES
('Gabriel', '123', 'gabriel@email.com', 25, '0000-00-00', '', '', '123', 1, '123', 'pf'),
('Débora', '123', 'debora@email.com', 28, '0000-00-00', '', '', '123', 1, '123', 'pf'),
('Raphael', '123', 'raphael@email.com', 29, '0000-00-00', '', '', '123', 1, '123', 'pf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wcfornecedores`
--

CREATE TABLE `wcfornecedores` (
  `cod` int(11) NOT NULL,
  `razao` varchar(120) NOT NULL,
  `fantasia` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `ie` varchar(15) NOT NULL,
  `dtfund` date NOT NULL,
  `ender` varchar(100) NOT NULL,
  `nro` int(5) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `compl` varchar(120) NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `wcfornecedores`
--

INSERT INTO `wcfornecedores` (`cod`, `razao`, `fantasia`, `email`, `telefone`, `cnpj`, `ie`, `dtfund`, `ender`, `nro`, `bairro`, `cidade`, `cep`, `compl`, `ativo`) VALUES
(3, 'LUPO S.A.', 'LUPO', '', '', '43.948.405/0001-69', '181.040.356.111', '0000-00-00', 'RODOVIA WASHINGTON LUIS', 0, 'RECREIO CAMPESTRE IDANORMA', 'ARARAQUARA', '14803900', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wcpaises`
--

CREATE TABLE `wcpaises` (
  `cod` int(11) NOT NULL,
  `pais` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `wcpaises`
--

INSERT INTO `wcpaises` (`cod`, `pais`) VALUES
(1, 'Brasil'),
(2, 'Estados Unidos'),
(3, 'Canadá'),
(4, 'Portugal'),
(5, 'Russia'),
(6, 'Austrália');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wcprodutos`
--

CREATE TABLE `wcprodutos` (
  `cod` int(11) NOT NULL,
  `descr` varchar(80) NOT NULL,
  `marca` varchar(80) DEFAULT NULL,
  `codbarras` varchar(13) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `altura` decimal(10,2) DEFAULT NULL,
  `largura` decimal(10,2) DEFAULT NULL,
  `profundidade` decimal(10,2) DEFAULT NULL,
  `referencia` varchar(20) DEFAULT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `estoque` int(11) NOT NULL,
  `prvenda` decimal(10,2) NOT NULL,
  `prcompra` decimal(10,2) NOT NULL,
  `lucro` decimal(10,2) DEFAULT NULL,
  `unidade` varchar(20) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `fornecedor` varchar(120) NOT NULL,
  `origem` varchar(60) NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `wcunidades`
--

CREATE TABLE `wcunidades` (
  `cod` int(11) NOT NULL,
  `unidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `wcunidades`
--

INSERT INTO `wcunidades` (`cod`, `unidade`) VALUES
(1, 'UN'),
(2, 'KG'),
(3, 'PC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wcusuarios`
--

CREATE TABLE `wcusuarios` (
  `cod` int(11) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(160) NOT NULL,
  `dtnasc` date NOT NULL,
  `celular` varchar(20) NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `wcusuarios`
--

INSERT INTO `wcusuarios` (`cod`, `usuario`, `senha`, `nome`, `email`, `dtnasc`, `celular`, `ativo`) VALUES
(1, 'gabriel', 'gabriel', 'Gabriel', 'pintogabriel@outlook.com.br', '2000-02-08', '18997675381', 1),
(12, 'debora', 'debora', 'Débora', '', '0000-00-00', '', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `wccategorias`
--
ALTER TABLE `wccategorias`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `wcclientes`
--
ALTER TABLE `wcclientes`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `wcfornecedores`
--
ALTER TABLE `wcfornecedores`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `wcpaises`
--
ALTER TABLE `wcpaises`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `wcunidades`
--
ALTER TABLE `wcunidades`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `wcusuarios`
--
ALTER TABLE `wcusuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `wccategorias`
--
ALTER TABLE `wccategorias`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `wcclientes`
--
ALTER TABLE `wcclientes`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `wcfornecedores`
--
ALTER TABLE `wcfornecedores`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `wcpaises`
--
ALTER TABLE `wcpaises`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `wcunidades`
--
ALTER TABLE `wcunidades`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `wcusuarios`
--
ALTER TABLE `wcusuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
