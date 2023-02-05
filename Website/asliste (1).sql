-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 jan. 2023 à 18:39
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `asliste`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `place` varchar(100) NOT NULL,
  `heure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`place`, `heure`) VALUES
('', '18'),
('', '19');

-- --------------------------------------------------------

--
-- Structure de la table `taxi`
--

CREATE TABLE `taxi` (
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `heure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `taxi`
--

INSERT INTO `taxi` (`prenom`, `nom`, `tel`, `place`, `heure`) VALUES
('test', 'test', 'test', '1', '18h'),
('tewtr', 't', 't', '2', '19h'),
('rete', 'tert', 'erter', 'ertert', '20h'),
('qwe', 'qwe', 'qwe', '1', '18h'),
('qweqw', 'qweqwe', 'qweqwe', 'qwe', '18h'),
('qwe', 'qwe', 'qwe', 'qew', '18h'),
('eqwe', 'qweqwe', 'qweqweqweqweqweq', 'qweqweqwe', '19h'),
('123123', '123123', '123123', 'sdasdasd', '18h'),
('qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', '18h'),
('qew', 'qwe', 'qweqweqweqweqweqweqweqw', 'qweqwetryrytytyty', '18h');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
