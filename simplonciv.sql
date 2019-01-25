-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 07 déc. 2018 à 04:54
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simplonciv`
--

-- --------------------------------------------------------

--
-- Structure de la table `simplonien`
--

DROP TABLE IF EXISTS `simplonien`;
CREATE TABLE IF NOT EXISTS `simplonien` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numTel` int(8) NOT NULL,
  `sexe` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `simplonien`
--

INSERT INTO `simplonien` (`id`, `nom`, `prenom`, `email`, `numTel`, `sexe`) VALUES
(13, 'Eponou Felicia', 'Simplice', 'fliciaroselinestaxy@yahoo.com', 9682009, 'F'),
(12, 'Eponou Felicia', 'Simplice', 'fliciaroselinestaxy@yahoo.com', 47052652, 'M'),
(11, 'Eponou Felicia', 'Simplice', 'fliciaroselinestaxy@yahoo.com', 47052652, 'M'),
(10, 'Eponou Felicia', 'Simplice', 'fliciaroselinestaxy@yahoo.com', 47052652, 'M'),
(14, 'jjipi', 'kjnin', 'fliciaroselinestaxy@yahoo.com', 9682009, 'M'),
(15, 'jjipi', 'kjnin', 'fliciaroselinestaxy@yahoo.com', 9682009, 'M'),
(16, 'jjipi', 'kjnin', 'fliciaroselinestaxy@yahoo.com', 9682009, 'M'),
(17, 'jjipi', 'kjnin', 'fliciaroselinestaxy@yahoo.com', 9682009, 'M');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
