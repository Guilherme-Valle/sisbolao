-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Dez-2018 às 21:57
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisbolao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bets`
--

DROP TABLE IF EXISTS `bets`;
CREATE TABLE IF NOT EXISTS `bets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `set_id` int(11) DEFAULT NULL,
  `bettor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7C28752B10FB0D18` (`set_id`),
  KEY `IDX_7C28752BC7573C15` (`bettor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bettingset`
--

DROP TABLE IF EXISTS `bettingset`;
CREATE TABLE IF NOT EXISTS `bettingset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator_id` int(11) DEFAULT NULL,
  `round_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A60CB74861220EA6` (`creator_id`),
  UNIQUE KEY `UNIQ_A60CB748A6005CA0` (`round_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bettor`
--

DROP TABLE IF EXISTS `bettor`;
CREATE TABLE IF NOT EXISTS `bettor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `championships`
--

DROP TABLE IF EXISTS `championships`;
CREATE TABLE IF NOT EXISTS `championships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hunches`
--

DROP TABLE IF EXISTS `hunches`;
CREATE TABLE IF NOT EXISTS `hunches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bet_id` int(11) DEFAULT NULL,
  `scoreboard_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E609F5B3F22C936C` (`scoreboard_id`),
  KEY `IDX_E609F5B3D871DC26` (`bet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `round_id` int(11) DEFAULT NULL,
  `scoreboard_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_62615BAF22C936C` (`scoreboard_id`),
  KEY `IDX_62615BAA6005CA0` (`round_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rounds`
--

DROP TABLE IF EXISTS `rounds`;
CREATE TABLE IF NOT EXISTS `rounds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `championship_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3A7FD55494DDBCE9` (`championship_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `scoreboards`
--

DROP TABLE IF EXISTS `scoreboards`;
CREATE TABLE IF NOT EXISTS `scoreboards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `match_id` int(11) DEFAULT NULL,
  `visitor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `principal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C09A6D072ABEACD6` (`match_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `access_level`, `state`, `name`, `email`, `password`, `last_login`, `last_ip`) VALUES
(1, '1', '0', 'Lucas de Jesus Santos Brito', 'lucasljsb@gmail.com', '123456', NULL, NULL),
(2, '1', '0', 'Guilherme do Valle', 'gdovalle@gmail.com', '12345', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bets`
--
ALTER TABLE `bets`
  ADD CONSTRAINT `FK_7C28752B10FB0D18` FOREIGN KEY (`set_id`) REFERENCES `bettingset` (`id`),
  ADD CONSTRAINT `FK_7C28752BC7573C15` FOREIGN KEY (`bettor_id`) REFERENCES `bettor` (`id`);

--
-- Limitadores para a tabela `bettingset`
--
ALTER TABLE `bettingset`
  ADD CONSTRAINT `FK_A60CB74861220EA6` FOREIGN KEY (`creator_id`) REFERENCES `bettor` (`id`),
  ADD CONSTRAINT `FK_A60CB748A6005CA0` FOREIGN KEY (`round_id`) REFERENCES `rounds` (`id`);

--
-- Limitadores para a tabela `hunches`
--
ALTER TABLE `hunches`
  ADD CONSTRAINT `FK_E609F5B3D871DC26` FOREIGN KEY (`bet_id`) REFERENCES `bets` (`id`),
  ADD CONSTRAINT `FK_E609F5B3F22C936C` FOREIGN KEY (`scoreboard_id`) REFERENCES `scoreboards` (`id`);

--
-- Limitadores para a tabela `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `FK_62615BAA6005CA0` FOREIGN KEY (`round_id`) REFERENCES `rounds` (`id`),
  ADD CONSTRAINT `FK_62615BAF22C936C` FOREIGN KEY (`scoreboard_id`) REFERENCES `scoreboards` (`id`);

--
-- Limitadores para a tabela `rounds`
--
ALTER TABLE `rounds`
  ADD CONSTRAINT `FK_3A7FD55494DDBCE9` FOREIGN KEY (`championship_id`) REFERENCES `championships` (`id`);

--
-- Limitadores para a tabela `scoreboards`
--
ALTER TABLE `scoreboards`
  ADD CONSTRAINT `FK_C09A6D072ABEACD6` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
