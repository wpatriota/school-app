-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Ago-2019 às 03:22
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_evento` int(11) NOT NULL,
  `nome_evento` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `horario` time(6) NOT NULL,
  `evento_publico` varchar(1) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_evento` (`id_tipo_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `id_tipo_evento`, `nome_evento`, `data`, `horario`, `evento_publico`, `updated_at`, `created_at`) VALUES
(1, 1, 'Gira de Caboclos', '2019-01-19', '20:00:00.000000', 'S', NULL, NULL),
(2, 2, 'Primeiro bastimo do ano', '2019-02-15', '20:00:00.000000', 'S', NULL, NULL),
(3, 1, 'Cachoeira', '2019-02-02', '20:00:00.000000', 's', '2019-02-27 20:34:20', '2019-02-27 20:34:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_individuo` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `data_matricula` date NOT NULL,
  `valor_mensalidade` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_individuo` (`id_individuo`),
  KEY `id_turma` (`id_turma`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `id_individuo`, `id_turma`, `data_matricula`, `valor_mensalidade`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-02-06', 60, NULL, NULL),
(2, 11, 1, '2019-02-01', 80, NULL, NULL),
(3, 17, 1, '2019-02-27', 100, '2019-02-27 14:49:30', '2019-02-27 14:49:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo_individuo`
--

DROP TABLE IF EXISTS `arquivo_individuo`;
CREATE TABLE IF NOT EXISTS `arquivo_individuo` (
  `id_arquivo_individuo` int(11) NOT NULL AUTO_INCREMENT,
  `id_individuo` int(11) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `data_inclusao` datetime NOT NULL,
  PRIMARY KEY (`id_arquivo_individuo`),
  KEY `id_individuo` (`id_individuo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `valor_mensalidade` double NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `descricao`, `valor_mensalidade`, `updated_at`, `created_at`) VALUES
(1, 'Teologia/Sacerdócio', 'Curso fundamental para exercer atividades na tenda', 60, '2019-02-10 22:34:35', NULL),
(2, 'Magia Divina', 'A magia do fogo é um sistema universal de conhecimento', 60, '2019-02-26 15:42:13', '2019-02-02 03:42:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_estoque`
--

DROP TABLE IF EXISTS `entrada_estoque`;
CREATE TABLE IF NOT EXISTS `entrada_estoque` (
  `id_entrada_estoque` int(11) NOT NULL AUTO_INCREMENT,
  `nome_responsavel` varchar(255) DEFAULT NULL,
  `id_individuo` int(11) DEFAULT NULL,
  `quantidade` float NOT NULL,
  `id_tipo_item` int(11) NOT NULL,
  `id_unidade_medida` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  PRIMARY KEY (`id_entrada_estoque`),
  KEY `id_tipo_item` (`id_tipo_item`),
  KEY `id_unidade_medida` (`id_unidade_medida`),
  KEY `id_individuo` (`id_individuo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entrada_estoque`
--

INSERT INTO `entrada_estoque` (`id_entrada_estoque`, `nome_responsavel`, `id_individuo`, `quantidade`, `id_tipo_item`, `id_unidade_medida`, `data_entrada`) VALUES
(1, '', 1, 10, 1, 1, '2019-01-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_financeiro`
--

DROP TABLE IF EXISTS `entrada_financeiro`;
CREATE TABLE IF NOT EXISTS `entrada_financeiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_financeiro` int(11) NOT NULL,
  `id_forma_pagamento` int(11) NOT NULL,
  `valor` double NOT NULL,
  `data` date NOT NULL,
  `mes_referencia` varchar(2) NOT NULL,
  `ano_referencia` varchar(4) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_forma_pagamento` (`id_forma_pagamento`),
  KEY `id_tipo_financeiro` (`id_tipo_financeiro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_item` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `quantidade_minima` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_item` (`id_tipo_item`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `id_tipo_item`, `quantidade`, `quantidade_minima`) VALUES
(1, 6, 10, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia_colegio`
--

DROP TABLE IF EXISTS `frequencia_colegio`;
CREATE TABLE IF NOT EXISTS `frequencia_colegio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `id_agenda` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_agenda` (`id_agenda`),
  KEY `id_aluno` (`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `frequencia_colegio`
--

INSERT INTO `frequencia_colegio` (`id`, `id_aluno`, `id_agenda`, `updated_at`, `created_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia_tenda`
--

DROP TABLE IF EXISTS `frequencia_tenda`;
CREATE TABLE IF NOT EXISTS `frequencia_tenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_membro` int(11) NOT NULL,
  `id_agenda` int(11) NOT NULL,
  `horario_marcacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_agenda` (`id_agenda`),
  KEY `id_membro` (`id_membro`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `frequencia_tenda`
--

INSERT INTO `frequencia_tenda` (`id`, `id_membro`, `id_agenda`, `horario_marcacao`) VALUES
(1, 1, 1, '2019-01-19 20:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_limpeza`
--

DROP TABLE IF EXISTS `grupo_limpeza`;
CREATE TABLE IF NOT EXISTS `grupo_limpeza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_individuo` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_individuo` (`id_individuo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo_limpeza`
--

INSERT INTO `grupo_limpeza` (`id`, `id_individuo`, `data_inicio`, `created_at`, `updated_at`) VALUES
(1, 13, '2019-02-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `individuo`
--

DROP TABLE IF EXISTS `individuo`;
CREATE TABLE IF NOT EXISTS `individuo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado_civil` varchar(255) NOT NULL,
  `profissao` varchar(255) NOT NULL,
  `observacao` text,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `individuo`
--

INSERT INTO `individuo` (`id`, `user_id`, `nome`, `sobrenome`, `rg`, `cpf`, `email`, `telefone`, `celular`, `endereco`, `bairro`, `cidade`, `estado`, `cep`, `data_nascimento`, `estado_civil`, `profissao`, `observacao`, `updated_at`, `created_at`) VALUES
(1, 1, 'Carolina', 'Costa Figueredo', '38.970.313-8', '', 'carolfig89@gmail.com', '11981677253', '(11)95178-1705', 'Rua Tomas Santa Rosa, 17', 'ermelino matarazzo', 'são pauo', 'SP', '03806-030', '1990-01-08', 'solteiro(a)', 'Analista de sistemas', NULL, NULL, NULL),
(3, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:27:18', '2019-02-27 14:27:18'),
(4, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:28:09', '2019-02-27 14:28:09'),
(5, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:28:58', '2019-02-27 14:28:58'),
(6, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:29:17', '2019-02-27 14:29:17'),
(7, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:32:52', '2019-02-27 14:32:52'),
(8, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:33:08', '2019-02-27 14:33:08'),
(9, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:33:16', '2019-02-27 14:33:16'),
(10, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:34:42', '2019-02-27 14:34:42'),
(11, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:35:24', '2019-02-27 14:35:24'),
(12, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:36:00', '2019-02-27 14:36:00'),
(13, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:38:01', '2019-02-27 14:38:01'),
(14, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste2', '2019-02-27 14:47:36', '2019-02-27 14:47:36'),
(15, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 14:48:24', '2019-02-27 14:48:24'),
(16, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 14:49:12', '2019-02-27 14:49:12'),
(17, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 14:49:30', '2019-02-27 14:49:30'),
(18, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 15:13:52', '2019-02-27 15:13:52'),
(19, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 15:20:46', '2019-02-27 15:20:46'),
(20, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 15:21:40', '2019-02-27 15:21:40'),
(21, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 15:23:54', '2019-02-27 15:23:54'),
(22, NULL, 'Wellington', 'de Sousa', '46954605', '382.524.648-58', 'w_patriota@hotmail.com', '11981677253', '11981677253', 'Rua Tomas Santa Rosa, 17', 'VL PARANAGUA', 'SAO PAULO', 'SP', '03806-030', '1990-06-27', 'SP', 'analista', 'teste', '2019-02-27 15:41:46', '2019-02-27 15:41:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro`
--

DROP TABLE IF EXISTS `membro`;
CREATE TABLE IF NOT EXISTS `membro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_individuo` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_saida` date NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 's',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_individuo` (`id_individuo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `membro`
--

INSERT INTO `membro` (`id`, `id_individuo`, `data_inicio`, `data_saida`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, '2019-02-22', '2019-02-26', 'S', NULL, NULL),
(2, 22, '2019-02-27', '2019-06-25', 's', '2019-02-27 15:41:46', '2019-02-27 15:41:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade_aluno`
--

DROP TABLE IF EXISTS `mensalidade_aluno`;
CREATE TABLE IF NOT EXISTS `mensalidade_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `data_pagamento` datetime NOT NULL,
  `id_entrada_financeiro` int(11) DEFAULT NULL,
  `recebido` varchar(1) NOT NULL DEFAULT 'N',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_entrada_financeiro` (`id_entrada_financeiro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_24_023257_create_agenda_table', 1),
(2, '2019_01_24_023257_create_aluno_table', 1),
(3, '2019_01_24_023257_create_arquivo_individuo_table', 1),
(4, '2019_01_24_023257_create_curso_table', 1),
(5, '2019_01_24_023257_create_entrada_estoque_table', 1),
(6, '2019_01_24_023257_create_estoque_table', 1),
(7, '2019_01_24_023257_create_frequencia_table', 1),
(8, '2019_01_24_023257_create_grupo_limpeza_table', 1),
(9, '2019_01_24_023257_create_individuo_table', 1),
(10, '2019_01_24_023257_create_membro_table', 1),
(11, '2019_01_24_023257_create_saida_estoque_table', 1),
(12, '2019_01_24_023257_create_tipo_evento_table', 1),
(13, '2019_01_24_023257_create_tipo_item_table', 1),
(14, '2019_01_24_023257_create_turma_table', 1),
(15, '2019_01_24_023257_create_unidade_medida_table', 1),
(16, '2019_01_24_023257_create_users_table', 1),
(17, '2019_01_24_023258_add_foreign_keys_to_agenda_table', 1),
(18, '2019_01_24_023258_add_foreign_keys_to_aluno_table', 1),
(19, '2019_01_24_023258_add_foreign_keys_to_arquivo_individuo_table', 1),
(20, '2019_01_24_023258_add_foreign_keys_to_entrada_estoque_table', 1),
(21, '2019_01_24_023258_add_foreign_keys_to_frequencia_table', 1),
(22, '2019_01_24_023258_add_foreign_keys_to_grupo_limpeza_table', 1),
(23, '2019_01_24_023258_add_foreign_keys_to_membro_table', 1),
(24, '2019_01_24_023258_add_foreign_keys_to_turma_table', 1),
(25, '2019_02_02_023155_create_agenda_table', 0),
(26, '2019_02_02_023155_create_aluno_table', 0),
(27, '2019_02_02_023155_create_arquivo_individuo_table', 0),
(28, '2019_02_02_023155_create_curso_table', 0),
(29, '2019_02_02_023155_create_entrada_estoque_table', 0),
(30, '2019_02_02_023155_create_estoque_table', 0),
(31, '2019_02_02_023155_create_frequencia_table', 0),
(32, '2019_02_02_023155_create_grupo_limpeza_table', 0),
(33, '2019_02_02_023155_create_individuo_table', 0),
(34, '2019_02_02_023155_create_membro_table', 0),
(35, '2019_02_02_023155_create_saida_estoque_table', 0),
(36, '2019_02_02_023155_create_tipo_evento_table', 0),
(37, '2019_02_02_023155_create_tipo_item_table', 0),
(38, '2019_02_02_023155_create_turma_table', 0),
(39, '2019_02_02_023155_create_unidade_medida_table', 0),
(40, '2019_02_02_023155_create_users_table', 0),
(41, '2019_02_02_023156_add_foreign_keys_to_agenda_table', 0),
(42, '2019_02_02_023156_add_foreign_keys_to_aluno_table', 0),
(43, '2019_02_02_023156_add_foreign_keys_to_arquivo_individuo_table', 0),
(44, '2019_02_02_023156_add_foreign_keys_to_entrada_estoque_table', 0),
(45, '2019_02_02_023156_add_foreign_keys_to_frequencia_table', 0),
(46, '2019_02_02_023156_add_foreign_keys_to_grupo_limpeza_table', 0),
(47, '2019_02_02_023156_add_foreign_keys_to_membro_table', 0),
(48, '2019_02_02_023156_add_foreign_keys_to_turma_table', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_individuo` int(11) NOT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_individuo` (`id_individuo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `id_individuo`, `data_inicio`, `data_termino`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-02-06', NULL, NULL, NULL),
(3, 4, '2019-02-27', '2019-03-21', '2019-02-27 16:10:15', '2019-02-27 16:10:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_estoque`
--

DROP TABLE IF EXISTS `saida_estoque`;
CREATE TABLE IF NOT EXISTS `saida_estoque` (
  `id_saida_estoque` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` float NOT NULL,
  `id_individuo` int(11) NOT NULL,
  `id_tipo_item` int(11) NOT NULL,
  `data_saida` datetime NOT NULL,
  PRIMARY KEY (`id_saida_estoque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_financeiro`
--

DROP TABLE IF EXISTS `saida_financeiro`;
CREATE TABLE IF NOT EXISTS `saida_financeiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_financeiro` int(11) NOT NULL,
  `id_forma_pagamento` int(11) NOT NULL,
  `valor` double NOT NULL,
  `mes_referencia` varchar(2) NOT NULL,
  `ano_referencia` varchar(4) NOT NULL,
  `data` date NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_financeiro` (`id_tipo_financeiro`),
  KEY `id_forma_pagamento` (`id_forma_pagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `saida_financeiro`
--

INSERT INTO `saida_financeiro` (`id`, `id_tipo_financeiro`, `id_forma_pagamento`, `valor`, `mes_referencia`, `ano_referencia`, `data`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1000, '02', '2019', '2019-02-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_entrada_financeiro`
--

DROP TABLE IF EXISTS `tipo_entrada_financeiro`;
CREATE TABLE IF NOT EXISTS `tipo_entrada_financeiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_entrada_financeiro`
--

INSERT INTO `tipo_entrada_financeiro` (`id`, `descricao`, `updated_at`, `created_at`) VALUES
(1, 'Mensalidade Curso', '2019-02-10 00:00:00', '2019-02-10 00:00:00'),
(2, 'Mensalidade Tenda', '2019-02-10 00:00:00', '2019-02-10 00:00:00'),
(3, 'Matrícula Curso', NULL, NULL),
(4, 'Inscrição Batizado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_evento`
--

DROP TABLE IF EXISTS `tipo_evento`;
CREATE TABLE IF NOT EXISTS `tipo_evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_evento`
--

INSERT INTO `tipo_evento` (`id`, `descricao`) VALUES
(1, 'Gira'),
(2, 'Batismo'),
(3, 'Consagração'),
(4, 'Casamento'),
(6, 'Aula');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_forma_pagamento`
--

DROP TABLE IF EXISTS `tipo_forma_pagamento`;
CREATE TABLE IF NOT EXISTS `tipo_forma_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_forma_pagamento`
--

INSERT INTO `tipo_forma_pagamento` (`id`, `descricao`, `updated_at`, `created_at`) VALUES
(1, 'À vista (Dinheiro)', NULL, NULL),
(2, 'À Vista (Cartão de Débito)', NULL, NULL),
(3, 'À Prazo (Cartão de Crédito)', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_item`
--

DROP TABLE IF EXISTS `tipo_item`;
CREATE TABLE IF NOT EXISTS `tipo_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_item`
--

INSERT INTO `tipo_item` (`id`, `descricao`) VALUES
(1, 'Vela Branca'),
(2, 'Vela Preta'),
(3, 'Vela Verde'),
(4, 'Vela Amarela'),
(5, 'Vela 7 dias Branca'),
(6, 'Cigarro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_saida_financeiro`
--

DROP TABLE IF EXISTS `tipo_saida_financeiro`;
CREATE TABLE IF NOT EXISTS `tipo_saida_financeiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_saida_financeiro`
--

INSERT INTO `tipo_saida_financeiro` (`id`, `descricao`, `updated_at`, `created_at`) VALUES
(1, 'Aluguel', '2019-02-10 00:00:00', '2019-02-10 00:00:00'),
(2, 'Conta de luz', '2019-02-10 00:00:00', '2019-02-10 00:00:00'),
(3, 'Conta de Água', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL,
  `id_professor` int(11) DEFAULT NULL,
  `periodo_matricula` varchar(1) NOT NULL DEFAULT 'S',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`),
  KEY `turma_ibfk_2` (`id_professor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `id_curso`, `nome`, `data_inicio`, `data_termino`, `id_professor`, `periodo_matricula`, `updated_at`, `created_at`) VALUES
(1, 1, 'Turma (segunda-feira)', '2019-02-06', '2019-02-28', 1, 'S', '2019-02-10 22:39:39', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade_medida`
--

DROP TABLE IF EXISTS `unidade_medida`;
CREATE TABLE IF NOT EXISTS `unidade_medida` (
  `id_unidade_medida` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `abreviatura` varchar(5) NOT NULL,
  PRIMARY KEY (`id_unidade_medida`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidade_medida`
--

INSERT INTO `unidade_medida` (`id_unidade_medida`, `descricao`, `abreviatura`) VALUES
(1, 'Kilos', 'Kg'),
(2, 'Gramas', 'g'),
(3, 'unidades', 'Un');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wellington', 'w_patriota@hotmail.com', NULL, '$2y$10$TUqx48c3ObRTPXTHtFkLmuyOelRSkyBCJv7zUixqNAhP21IONkHZm', 'U4ylhwjVXgY4uoYVXTQunAhds3kx4tNkkDm57FJBIrgnvZFeENdebLMdnMwX', '2019-01-24 04:14:34', '2019-01-24 04:14:34'),
(2, 'Nilson', 'nilson@tenda.com.br', NULL, '$2y$10$UMeiW/lnNBy4Y3MxLEisp.67hYdrnQvguyWukB0Z4SJznS3IjklJ.', 'CFxVaYRPWwOuYQRiG5a4eeimN09OZqUTtVmQdvXKIWehoVObZi1zteGAewvA', '2019-03-01 19:17:24', '2019-03-01 19:17:24'),
(3, 'Claudia', 'claudia@tenda.com.br', NULL, '$2y$10$zfi/LISKAFNfqbixcgScn.we/kLH7IC8cZ.kxuR6jwmZnup7rPzfm', 'GeId4Pl0c4FIFQ99JVHXMQLHvBWfhiNSHtVo1iulBnAOvBefvVVbJl5FfyAi', '2019-03-01 19:18:46', '2019-03-01 19:18:46'),
(4, 'Sergio', 'sergio@tenda.com.br', NULL, '$2y$10$4KPd7VChKCOYkto0GBQQiusJKyGoHx.HOKSDlQzPOunc4HMXQbeYa', 'eXknZLGUxnG9R1CiUbpJyBf90peWNEc5l4SXjNeGIqZrP7jmqnvgHiRcOLGy', '2019-03-01 19:20:21', '2019-03-01 19:20:21');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_tipo_evento`) REFERENCES `tipo_evento` (`id`);

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`id_individuo`) REFERENCES `individuo` (`id`),
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `arquivo_individuo`
--
ALTER TABLE `arquivo_individuo`
  ADD CONSTRAINT `arquivo_individuo_ibfk_1` FOREIGN KEY (`id_individuo`) REFERENCES `individuo` (`id`);

--
-- Limitadores para a tabela `entrada_estoque`
--
ALTER TABLE `entrada_estoque`
  ADD CONSTRAINT `entrada_estoque_ibfk_1` FOREIGN KEY (`id_individuo`) REFERENCES `individuo` (`id`);

--
-- Limitadores para a tabela `entrada_financeiro`
--
ALTER TABLE `entrada_financeiro`
  ADD CONSTRAINT `entrada_financeiro_ibfk_1` FOREIGN KEY (`id_forma_pagamento`) REFERENCES `tipo_forma_pagamento` (`id`),
  ADD CONSTRAINT `entrada_financeiro_ibfk_2` FOREIGN KEY (`id_tipo_financeiro`) REFERENCES `tipo_entrada_financeiro` (`id`);

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`id_tipo_item`) REFERENCES `tipo_item` (`id`);

--
-- Limitadores para a tabela `frequencia_colegio`
--
ALTER TABLE `frequencia_colegio`
  ADD CONSTRAINT `frequencia_colegio_ibfk_1` FOREIGN KEY (`id_agenda`) REFERENCES `agenda` (`id`),
  ADD CONSTRAINT `frequencia_colegio_ibfk_2` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`);

--
-- Limitadores para a tabela `frequencia_tenda`
--
ALTER TABLE `frequencia_tenda`
  ADD CONSTRAINT `frequencia_tenda_ibfk_1` FOREIGN KEY (`id_agenda`) REFERENCES `agenda` (`id`),
  ADD CONSTRAINT `frequencia_tenda_ibfk_2` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`);

--
-- Limitadores para a tabela `grupo_limpeza`
--
ALTER TABLE `grupo_limpeza`
  ADD CONSTRAINT `grupo_limpeza_ibfk_1` FOREIGN KEY (`id_individuo`) REFERENCES `individuo` (`id`);

--
-- Limitadores para a tabela `membro`
--
ALTER TABLE `membro`
  ADD CONSTRAINT `membro_ibfk_1` FOREIGN KEY (`id_individuo`) REFERENCES `individuo` (`id`);

--
-- Limitadores para a tabela `mensalidade_aluno`
--
ALTER TABLE `mensalidade_aluno`
  ADD CONSTRAINT `mensalidade_aluno_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `mensalidade_aluno_ibfk_2` FOREIGN KEY (`id_entrada_financeiro`) REFERENCES `entrada_financeiro` (`id`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`id_individuo`) REFERENCES `individuo` (`id`);

--
-- Limitadores para a tabela `saida_financeiro`
--
ALTER TABLE `saida_financeiro`
  ADD CONSTRAINT `saida_financeiro_ibfk_1` FOREIGN KEY (`id_tipo_financeiro`) REFERENCES `tipo_saida_financeiro` (`id`),
  ADD CONSTRAINT `saida_financeiro_ibfk_2` FOREIGN KEY (`id_forma_pagamento`) REFERENCES `tipo_forma_pagamento` (`id`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
