-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 06 Décembre 2012 à 19:20
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ndi2012`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `region` varchar(30) NOT NULL,
  `departement` varchar(30) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `note` double NOT NULL,
  `theme` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `numero` int(10) unsigned NOT NULL,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mentionne_departement`
--

CREATE TABLE IF NOT EXISTS `mentionne_departement` (
  `id_article` int(11) NOT NULL DEFAULT '0',
  `numero_departement` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_article`,`numero_departement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mentionne_region`
--

CREATE TABLE IF NOT EXISTS `mentionne_region` (
  `id_article` int(11) NOT NULL DEFAULT '0',
  `numero_region` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_article`,`numero_region`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rdappartient`
--

CREATE TABLE IF NOT EXISTS `rdappartient` (
  `numero_region` int(11) NOT NULL DEFAULT '0',
  `numero_departement` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numero_region`,`numero_departement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `numero` int(10) unsigned NOT NULL,
  `nom` varchar(30) NOT NULL,
  `localisation` varchar(2) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
