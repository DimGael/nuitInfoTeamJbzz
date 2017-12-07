-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 déc. 2017 à 20:42
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
-- Base de données :  `ndi`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `eve_id` int(11) NOT NULL AUTO_INCREMENT,
  `uti_id` int(11) DEFAULT NULL,
  `eve_titre` varchar(20) DEFAULT NULL,
  `eve_description` varchar(1000) DEFAULT NULL,
  `eve_risque` int(11) DEFAULT NULL,
  `eve_lieu` varchar(100) DEFAULT NULL,
  `eve_date` datetime DEFAULT NULL,
  PRIMARY KEY (`eve_id`),
  KEY `uti_id` (`uti_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`eve_id`, `uti_id`, `eve_titre`, `eve_description`, `eve_risque`, `eve_lieu`, `eve_date`) VALUES
(1, 1, 'Nuit de l info', 'On aime tous participer a la nuit de l info !', 10, 'Dans l etablissement de 3iL', '2017-12-06 20:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `mes_id` int(11) NOT NULL AUTO_INCREMENT,
  `uti_id` int(11) DEFAULT NULL,
  `eve_id` int(11) DEFAULT NULL,
  `mes_lib` varchar(1000) DEFAULT NULL,
  `mes_date` datetime DEFAULT NULL,
  PRIMARY KEY (`mes_id`),
  KEY `uti_id` (`uti_id`),
  KEY `eve_id` (`eve_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`mes_id`, `uti_id`, `eve_id`, `mes_lib`, `mes_date`) VALUES
(1, 1, 1, 'J ai vraiment trop hate lol !', '2017-12-07 16:20:00');

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

DROP TABLE IF EXISTS `participe`;
CREATE TABLE IF NOT EXISTS `participe` (
  `uti_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  PRIMARY KEY (`uti_id`,`eve_id`),
  KEY `eve_id` (`eve_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participe`
--

INSERT INTO `participe` (`uti_id`, `eve_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `uti_id` int(11) NOT NULL AUTO_INCREMENT,
  `uti_nom` varchar(20) DEFAULT NULL,
  `uti_prenom` varchar(20) DEFAULT NULL,
  `uti_email` varchar(100) DEFAULT NULL,
  `uti_pseudo` varchar(20) DEFAULT NULL,
  `uti_mdp` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`uti_id`),
  UNIQUE KEY `uti_email` (`uti_email`),
  UNIQUE KEY `uti_pseudo` (`uti_pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`uti_id`, `uti_nom`, `uti_prenom`, `uti_email`, `uti_pseudo`, `uti_mdp`) VALUES
(1, 'michel', 'billandre', NULL, 'michmich', 'michmich');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
