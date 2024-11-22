-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2024 às 14:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blacklistdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `blacklist_emails`
--

CREATE TABLE `blacklist_emails` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `blacklist_emails`
--

INSERT INTO `blacklist_emails` (`id`, `email`, `data_criacao`) VALUES
(3, 'joao.vitor@gmail.com', '2024-11-20 14:06:00'),
(7, 'teste1@dominio.comteste2@dominio.comteste3@dominio.comteste4@dominio.comteste5@dominio.comteste6@dominio.comteste7@dominio.comteste8@dominio.comteste9@dominio.comteste10@dominio.com', '2024-11-22 13:09:00'),
(8, 'teste1@dominio.com', '2024-11-22 13:10:13'),
(9, 'teste2@dominio.com', '2024-11-22 13:10:13'),
(10, 'teste3@dominio.com', '2024-11-22 13:10:13'),
(11, 'teste4@dominio.com', '2024-11-22 13:10:13'),
(12, 'teste5@dominio.com', '2024-11-22 13:10:13'),
(13, 'teste6@dominio.com', '2024-11-22 13:10:13'),
(14, 'teste7@dominio.com', '2024-11-22 13:10:13'),
(15, 'teste8@dominio.com', '2024-11-22 13:10:13'),
(16, 'teste9@dominio.com', '2024-11-22 13:10:13'),
(17, 'teste10@dominio.com', '2024-11-22 13:10:13');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `blacklist_emails`
--
ALTER TABLE `blacklist_emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blacklist_emails`
--
ALTER TABLE `blacklist_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
