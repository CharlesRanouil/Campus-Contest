-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le :  ven. 20 déc. 2019 à 15:32
-- Version du serveur :  10.3.14-MariaDB
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
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `prenom`, `commentaire`) VALUES
(1, 'Kelly', 'Travis', 'Je recommanderais vivement à tous ceux qui recherchent de l\'aide pour leur référencement. Il est très compétent, franc et honnête sur le processus de classement des sites en haut de Google. Vous ne serez pas déçu lorsque vous travaillerez avec lui.'),
(4, 'Belder', 'Marine', 'Les compétences de Daniel dans l\'optimisation des moteurs de recherche sont bien supérieures à la moyenne. Il a grandement contribué à la réussite du projet que nous avons travaillé ensemble.'),
(3, 'Grechko', 'Constantine', 'J\'était en charge de toute la partie SEO, du PPC et de l\'aide sur des campagnes comme Outbrain. Il est très professionnel, toujours disponible pour toute question. Je recommande fortement de travailler avec lui.'),
(7, 'Nela', '', 'Il n\'y a pas trop de gens avec qui j\'ai travaillé qui dépassent vraiment mes attentes élevées pour l\'optimisation des moteurs de recherche.');

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
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_users` int(4) NOT NULL,
  `img` varchar(400) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `id_users`, `img`, `description`, `age`) VALUES
(1, 1, 'assets/images/jeremy.jfif', 'Je suis analyste-programmeur et diplômé d\'un DUT informatique suivi d\'une licence professionnelle CDED (Concepteur Développeur en Environnement Distribué). Je travaille actuellement en tant que développeur au CRITT Matériaux Alsace, situé à Schiltigheim en Alsace. Je suis également le pilote du processus \'Systèmes informatiques\'.\r\n\r\nCe portfolio a pour but de présenter les différents projets sur lesquels j\'ai travaillé ces dernières années. Vous pouvez également visualiser mon CV et le télécharger.\r\n\r\nSi vous avez une question, ou si vous avez simplement besoin d\'un renseignement, vous pouvez me contacter', 23),
(2, 2, 'assets/images/charles.jfif', 'Interessé par la science de la Technologie et de l\'Information, j\'ai decidé de commencer un Certificat Fédéral de Capacité d\'informaticien en Suisse en 2012.\r\n\r\nSpecialisé dans les Technologies Web, mes domaines de prédiléctions sont le JavaScript, l\'HTML5 et le CSS3, ainsi que le PHP, NODE.JS et jSon. Mes expérience antérieures m\'ont formés à atteindre les objectifs fixés dans les divers projets oú j\'ai contribué. D\'un naturel ouvert et toujours prêt a acquérir de nouvelles compétences.\r\n\r\nCe portfolio a pour but de présenter les différents projets sur lesquels j\'ai travaillé ces dernières années. Vous pouvez également visualiser mon CV et le télécharger.', 20);

-- --------------------------------------------------------

--
-- Structure de la table `recommandation`
--

DROP TABLE IF EXISTS `recommandation`;
CREATE TABLE IF NOT EXISTS `recommandation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recommandation`
--

INSERT INTO `recommandation` (`id`, `nom`, `email`, `tel`, `message`) VALUES
(3, 'Brunet', 'jeremybrunet86470@gmail.com', '0673381679', 'Bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `rang` int(1) UNSIGNED NOT NULL DEFAULT 0,
  `utiliser` tinyint(1) NOT NULL DEFAULT 0,
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

INSERT INTO `users` (`ID`, `rang`, `utiliser`, `nom`, `prenom`, `email`, `facebook`, `twitter`, `likedin`, `github`, `instagram`) VALUES
(1, 1, 1, 'BRUNET', 'Jérémy', 'jeremybrunet86470@gmail.com', 'https://www.facebook.com/james.gglebg', 'https://twitter.com/Jeremy_b86', 'https://www.linkedin.com/in/j%C3%A9r%C3%A9my-brunet-366684194/', 'https://github.com/Jeremyb86', 'https://www.instagram.com/jeremy_b86/'),
(2, 0, 0, 'RANOUIL', 'Charles', 'ranouilcharles@gmail.com', 'https://www.facebook.com/charles.ranouil', 'https://twitter.com/Charles_Rnl', 'https://www.linkedin.com/in/charles-ranouil-3a4845194/', 'https://github.com/CharlesRanouil', 'https://www.instagram.com/charlesrnl/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
