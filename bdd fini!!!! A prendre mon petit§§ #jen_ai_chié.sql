
-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Jeu 06 Mars 2014 à 07:49
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE IF NOT EXISTS `activite` (
  `id_activite` int(8) NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `duree(j)` int(2) NOT NULL,
  `prix` int(3) NOT NULL,
  `nb_place_dispo` int(2) NOT NULL,
  `description` text NOT NULL,
  `id_equipe` int(11) NOT NULL,
  `id_asso` int(11) NOT NULL,
  PRIMARY KEY (`id_activite`),
  UNIQUE KEY `id_equipe` (`id_equipe`),
  UNIQUE KEY `id_asso` (`id_asso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE IF NOT EXISTS `appartient` (
  `id_equipe` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_personne`),
  KEY `id_personne` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE IF NOT EXISTS `association` (
  `id_asso` int(10) NOT NULL,
  `nom_asso` varchar(30) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mail_asso` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id_asso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int(11) NOT NULL,
  `nb_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE IF NOT EXISTS `participe` (
  `id_activite` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `num_dossard` int(11) NOT NULL,
  `pre_inscrit` tinyint(1) NOT NULL,
  `paye` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_activite`,`id_personne`),
  KEY `id_personne` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `id_pers` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `mail_pers` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `id_asso` int(11) NOT NULL,
  PRIMARY KEY (`id_pers`),
  UNIQUE KEY `id_asso` (`id_asso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_2` FOREIGN KEY (`id_asso`) REFERENCES `association` (`id_asso`),
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`);

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `appartient_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_pers`),
  ADD CONSTRAINT `appartient_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`);

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_pers`),
  ADD CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`id_asso`) REFERENCES `association` (`id_asso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
