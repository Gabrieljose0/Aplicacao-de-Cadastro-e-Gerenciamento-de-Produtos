-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/03/2024 às 01:18
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_desafio`
--

CREATE DATABASE db_desafio;
USE db_desafio;
-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id` int(11) NOT NULL,
  `produto` varchar(200) NOT NULL,
  `valor` double NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `disponivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `produto`, `valor`, `descricao`, `disponivel`) VALUES
(10, 'Smartphone', 1500, 'Um smartphone de última geração com tela de alta resolução, processador rápido e câmera de alta qualidade.', 1),
(11, 'Laptop', 2500, 'Um laptop leve e potente, perfeito para trabalho e entretenimento, com processador de última geração e grande capacidade de armazenamento.', 1),
(12, 'Fones de Ouvido Bluetooth', 200, 'Fones de ouvido sem fio com tecnologia Bluetooth, design ergonômico e qualidade de som excepcional.', 1),
(13, 'Livro \"O Hobbit\" de J.R.R. Tolkien', 39.99, 'Um clássico da literatura fantástica, seguindo as aventuras de Bilbo Bolseiro em sua jornada inesperada.', 1),
(14, 'Smart TV LED 55\"', 3500.89, 'Uma Smart TV de alta definição com tela grande de 55 polegadas, acesso a aplicativos de streaming e qualidade de imagem impressionante.', 1),
(15, 'Tênis Esportivo Nike Air Max', 400, 'Tênis esportivo de alta performance da Nike, com tecnologia Air Max para maior amortecimento e conforto durante atividades físicas.', 1),
(16, 'Mochila para Notebook', 150, ' Mochila resistente e acolchoada, projetada para transportar notebooks com segurança, além de oferecer espaço para outros itens essenciais.', 1),
(17, 'Relógio Inteligente (Smartwatch)', 649.99, 'Um relógio inteligente com tela touch, monitoramento de atividades físicas, notificações de smartphone e diversas funcionalidades úteis no dia a dia.', 1),
(18, 'Conjunto de Talheres de Aço Inoxidável', 58.95, 'Um conjunto completo de talheres de alta qualidade, feitos de aço inoxidável durável, perfeito para uso diário ou ocasiões especiais.', 1),
(19, 'Impressora Multifuncional a Jato de Tinta', 423.75, 'Uma impressora versátil que imprime, copia e digitaliza, com conexão Wi-Fi, compatível com diversos tipos de dispositivos e sistemas operacionais.', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
