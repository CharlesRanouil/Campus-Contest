-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 déc. 2019 à 10:10
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `ID` int(4) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Cle primaire',
  `URL` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`ID`, `URL`, `description`) VALUES
(1, 'assets/images/logo_ca.png', 'Logo campus academy'),
(2, 'assets\\images\\bitcoin.jpg', 'Logo');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `utiliser` tinyint(1) NOT NULL DEFAULT '0',
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `likedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `utiliser`, `nom`, `prenom`, `email`, `facebook`, `twitter`, `likedin`, `github`, `instagram`) VALUES
(1, 1, 'BRUNET', 'Jérémy', 'jeremybrunet86470@gmail.com', 'https://www.facebook.com/james.gglebg', 'https://twitter.com/Jeremy_b86', 'https://www.linkedin.com/in/j%C3%A9r%C3%A9my-brunet-366684194/', 'https://github.com/Jeremyb86', 'https://www.instagram.com/jeremy_b86/'),
(2, 0, 'RANOUIL', 'Charles', 'ranouilcharles@gmail.com', 'https://www.facebook.com/charles.ranouil', 'https://twitter.com/Charles_Rnl', 'https://www.linkedin.com/in/charles-ranouil-3a4845194/', 'https://github.com/CharlesRanouil', 'https://www.instagram.com/charlesrnl/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
