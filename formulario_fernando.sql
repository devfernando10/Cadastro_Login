-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 06:34
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
-- Banco de dados: `formulario_fernando`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `genero` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `estado` text DEFAULT NULL,
  `endereco` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `genero`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES
(2, 'Fernando', 'fernando@gmail.com', 'egg%%ybbJY752', '71986554882', 'masculino', '2001-06-20', 'Pernanbuco', 'PE', 'Pina'),
(4, 'Robert', 'robert@gmail.com', 'hjdu6731OKh', '75983509876', 'masculino', '2001-09-10', 'São Paulo', 'SP', 'Av.Guarulhos'),
(5, 'Alfredo', 'alfredo@gmail.com', 'jgtdNJhjJ26', '71987990232', 'masculino', '2008-04-23', 'Caixias', 'RS', 'Av.Gelada'),
(6, 'Maria', 'maria@gmail.com', 'YETngwq542jh', '4588735090', 'feminino', '1993-12-25', 'Rio de Janeiro', 'RJ', 'Av.Cristo'),
(7, 'Maria', 'maria@gmail.com', 'bdsbggLO97', '4588735090', 'feminino', '1993-12-25', 'Rio de Janeiro', 'RJ', 'Av.Cristo'),
(12, 'Rodrigo', 'rodrigo@gmail.com', 'tEjnI', '71986554882', 'masculino', '2023-11-05', 'São Paulo', 'SP', 'Dorival Cayme'),
(14, 'João Santos', 'joao@gmail.com', 'jgftdlutd', '71986554882', 'outro', '2023-11-14', 'São Paulo', 'SP', 'Dorival Cayme'),
(15, 'Fernando Santana', 'fernando@gmail.com', '123457', '71987990232', 'masculino', '2023-11-12', 'Salvador', 'BA', 'Paripe'),
(16, 'Marta', 'marta@gmail.com', '25112023', '4588735090', 'feminino', '2023-11-03', 'São Paulo', 'SP', 'Av.Gualrulho');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
