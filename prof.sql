-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2018 às 12:00
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prof`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `matricula` int(11) NOT NULL,
  `data_nat` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `fone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `graduacao` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `matricula`, `data_nat`, `sexo`, `fone`, `email`, `graduacao`, `created`, `modified`) VALUES
(5, 'Joaquim', 123, '20/10/1988', 'Masculino', 2147483647, 'joaquim@ifce.com.be', 'SI', '2017-12-03 15:03:02', '2017-12-03 20:10:22'),
(6, 'Jose', 231, '20/10/1988', 'Masculino', 123, 'jose@yahoo.com.br', 'SI', '2017-12-03 20:41:06', NULL),
(7, 'Renato Moura', 123, '20/10/1988', 'Masculino', 123, 'renatomoura557@yahoo.com.br', '', '2017-12-03 15:03:02', '2017-12-03 20:10:22'),
(8, 'Marcos', 123, '20/10/1988', 'Masculino', 2147483647, 'marcos@ifce.com.be', 'SI', '2017-12-03 15:03:02', '2017-12-03 20:10:22'),
(9, 'Mariana', 231, '20/10/1988', 'Feminino', 123, 'Mariana@yahoo.com.br', 'SI', '2017-12-03 20:41:06', NULL),
(10, 'Jonas', 123, '20/10/1988', 'Masculino', 2147483647, 'jonas@ifce.com.be', 'SI', '2017-12-03 15:03:02', '2017-12-03 20:10:22'),
(11, 'Josefa', 231, '20/10/1988', 'Feminino', 123, 'josefa@yahoo.com.br', 'SI', '2017-12-03 20:41:06', NULL),
(12, 'Lucia', 231, '20/10/1988', 'Feminino', 123, 'Lucia@yahoo.com.br', 'SI', '2017-12-03 20:41:06', NULL),
(13, 'Iza', 123, '20/10/1988', 'Feminino', 2147483647, 'iza@ifce.com.be', 'SI', '2017-12-03 15:03:02', '2017-12-03 20:10:22'),
(14, 'renato', 231, '20/10/1988', 'Masculino', 123, 'renatomoura55@yahoo.com.br', '', '2017-12-03 20:41:06', NULL),
(15, 'RENATO', 123, '20/10/1988', 'Masculino', 321, 'renato@webmail.com', '', '2017-12-04 00:54:31', NULL),
(16, 'katia', 123, '1966', 'Feminino', 2147483647, 'katia@gmail.com', 'biologia', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `nivel_acesso_id`, `created`, `modified`) VALUES
(7, 'Renato Moura', 'renatomoura557@yahoo.com.br', 'admin', '123', 1, '2017-12-03 15:03:02', '2017-12-03 20:10:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
