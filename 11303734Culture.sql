-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 04 Mars 2015 à 17:55
-- Version du serveur: 5.5.38
-- Version de PHP: 5.4.4-14+deb7u12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `11303734Culture`
--

-- --------------------------------------------------------

--
-- Structure de la table `Event`
--

CREATE TABLE IF NOT EXISTS `Event` (
  `titre` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(750) NOT NULL,
  `lieu` varchar(250) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`titre`,`date`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `user` varchar(100) NOT NULL,
  `event` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user`,`event`,`date`),
  KEY `event` (`event`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `statut` enum('Etudiant','Personnel universitaire') NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `campus` enum('Bobigny','Villetaneuse') NOT NULL,
  `droit` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdp` (`mdp`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `mdp`, `mail`, `statut`, `nom`, `prenom`, `campus`, `droit`) VALUES
('11303734', '0104015486L', 'alexis.j.dubois@gmail.com', 'Etudiant', 'Dubois', 'Alexis', 'Bobigny', '2');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`date`) REFERENCES `Event` (`date`),
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`event`) REFERENCES `Event` (`titre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
