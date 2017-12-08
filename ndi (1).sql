-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 déc. 2017 à 04:07
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
-- Structure de la table `defis`
--

DROP TABLE IF EXISTS `defis`;
CREATE TABLE IF NOT EXISTS `defis` (
  `def_id` int(11) NOT NULL AUTO_INCREMENT,
  `def_lib` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`def_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `defis`
--

INSERT INTO `defis` (`def_id`, `def_lib`) VALUES
(1, 'Finissez la citation : qui boit la gnole, casse la b--- !'),
(2, 'Pierre feuille ciseaux'),
(3, 'Premier a faire 10 pompes !'),
(4, 'Premier a trouver un objet violet !'),
(5, 'Donner le nombre de voyelle dans : celui qui conduit c est celui qui ne boit pas !'),
(6, 'Epeler : ornithorynque !'),
(7, 'Citer 5 marques de sodas !'),
(8, 'Donner un mot de 10 lettres !');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `eve_id` int(11) NOT NULL AUTO_INCREMENT,
  `uti_id` int(11) DEFAULT NULL,
  `eve_titre` varchar(100) DEFAULT NULL,
  `eve_description` varchar(1000) DEFAULT NULL,
  `eve_risque` int(11) DEFAULT NULL,
  `eve_lieu` varchar(100) DEFAULT NULL,
  `eve_date` datetime DEFAULT NULL,
  PRIMARY KEY (`eve_id`),
  KEY `uti_id` (`uti_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`eve_id`, `uti_id`, `eve_titre`, `eve_description`, `eve_risque`, `eve_lieu`, `eve_date`) VALUES
(1, 1, 'Nuit de l info', 'On aime tous participer a la nuit de l info !', 10, 'Dans l etablissement de 3iL', '2017-12-06 20:00:00'),
(2, 1, 'Nuit de l info', 'On aime tous participer a la nuit de l info !', 10, 'Dans l etablissement de 3iL', '2017-12-06 20:00:00'),
(3, 1, 'lolilol', 'alors je ne sais pas ce que je dis', 100, '10 avenue de paris', '2017-12-08 05:07:00'),
(4, 1, 'lolilol', 'alors je ne sais pas ce que je dis', 100, '10 avenue de paris', '2017-12-08 05:07:00'),
(5, 1, 'nouveau', 'je suis nvo ds le game !', 600, 'la bas', '2017-12-28 05:18:00'),
(6, 1, 'ilyapleindepossibilitedanscetexte', 'etilyenaencoreplusici', 500, 'la bas aussi', '2017-12-27 09:28:00');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`mes_id`, `uti_id`, `eve_id`, `mes_lib`, `mes_date`) VALUES
(1, 1, 1, 'J ai vraiment trop hate lol !', '2017-12-07 16:20:00'),
(2, 12, 5, 'cc', '2017-12-08 04:01:42'),
(3, 12, 5, 'ca va?', '2017-12-08 04:01:46');

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
(1, 1),
(12, 1),
(12, 2),
(12, 3),
(12, 5);

-- --------------------------------------------------------

--
-- Structure de la table `signalement`
--

DROP TABLE IF EXISTS `signalement`;
CREATE TABLE IF NOT EXISTS `signalement` (
  `sig_id` int(11) NOT NULL AUTO_INCREMENT,
  `sig_lib` varchar(200) DEFAULT NULL,
  `sig_date` datetime DEFAULT NULL,
  `typ_id` int(11) DEFAULT NULL,
  `uti_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sig_id`),
  KEY `typ_id` (`typ_id`),
  KEY `uti_id` (`uti_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `signalement`
--

INSERT INTO `signalement` (`sig_id`, `sig_lib`, `sig_date`, `typ_id`, `uti_id`) VALUES
(1, 'A la sortie 15 dirsction Brive, faite attention !', '2017-12-07 16:20:00', 1, 1),
(2, 'Accident kilometre 12 A10 !', '2017-12-07 16:20:00', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typesignal`
--

DROP TABLE IF EXISTS `typesignal`;
CREATE TABLE IF NOT EXISTS `typesignal` (
  `typ_id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_lib` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`typ_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typesignal`
--

INSERT INTO `typesignal` (`typ_id`, `typ_lib`) VALUES
(1, 'Ralentissement'),
(2, 'Accident');

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
  `uti_mdp` text,
  PRIMARY KEY (`uti_id`),
  UNIQUE KEY `uti_email` (`uti_email`),
  UNIQUE KEY `uti_pseudo` (`uti_pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`uti_id`, `uti_nom`, `uti_prenom`, `uti_email`, `uti_pseudo`, `uti_mdp`) VALUES
(1, 'michel', 'billandre', NULL, 'michmich', 'michmich'),
(8, 'mich', 'mich', 'mich@mich', 'mich', '8764a42105b3ab67969c29304022bcdfefabf9d2da7b8550d7cc8970435c460e'),
(9, 'poi', 'poi', 'poi@poi', 'poi', '224b3dd7dc51234bb2835d64cf831201d31d9c80c24754af67e721552f0c8fcb'),
(10, 'mlk', 'mlk', 'mlk@mlk', 'mlk', '6c35e3ebd1e790088b13f5b1e95489d54fac32af5e9aff43849b8c85fc07c68e'),
(7, 'lol', 'lol', 'lol@lol', 'lol', '4d38af9f871e6e275f34100fac32c688dbb9d54ce5d93527df9a17867a37d203'),
(11, 'nbv', 'nbv', 'nbv@nbv', 'nbv', 'f0f9f504c58556eb24ed0a3ed7ddb7e34db7525fb06386fa36d18989430c4fc6'),
(12, 'azer', 'azer', 'azer@azer', 'azer', '3c8fccd967d8803ef1a89198ce97301c53f3f55f484c5c3d7ca1159c276bc2ee');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement` ADD FULLTEXT KEY `ift_eve` (`eve_titre`,`eve_description`);
ALTER TABLE `evenement` ADD FULLTEXT KEY `ift_titre` (`eve_titre`);
ALTER TABLE `evenement` ADD FULLTEXT KEY `ift_description` (`eve_description`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
