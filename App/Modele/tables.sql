-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 25 Novembre 2015 à 22:14
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `e-miage`
--

-- --------------------------------------------------------

--
-- Structure de la table `Reference`
--

CREATE TABLE `Reference` (
`id` int(11) NOT NULL,
  `nom` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Reference`
--

INSERT INTO `Reference` (`id`, `nom`, `auteur`, `date`, `lien`) VALUES
(1, 'aa', 'auteur', 'November 23, 2015, 11:33 am', 'aaa'),
(2, 'docc1', 'auteur', 'November 23, 2015, 11:36 am', 'http'),
(3, 'docc1', 'auteur', 'November 23, 2015, 11:38 am', 'http'),
(4, 'azerty', 'auteur', 'November 23, 2015, 11:43 am', 'azerty'),
(5, 'test', 'auteur', 'November 23, 2015, 1:40 pm', 'test'),
(6, '', 'auteur', 'November 23, 2015, 1:54 pm', ''),
(7, '', 'auteur', 'November 23, 2015, 1:56 pm', ''),
(8, 'sdqs', 'auteur', 'November 23, 2015, 1:57 pm', 'sqddqsdsq'),
(9, 'Test', 'Jean-Philippe Hernandez', 'November 23, 2015, 2:12 pm', 'lien'),
(10, 'doc2', 'Jean-Philippe Hernandez', 'November 23, 2015, 2:14 pm', 'https:;sf'),
(11, 'tettt', 'Jean-Philippe Hernandez', 'November 23, 2015, 2:24 pm', 'tee'),
(12, 'kfldsfds', 'Jean-Philippe Hernandez', 'November 23, 2015, 2:24 pm', 'fdsfmsf'),
(13, 'dsfds', 'Jean-Philippe Hernandez', 'November 23, 2015, 2:27 pm', 'fdsfs'),
(14, 'test', 'Jean-Philippe Hernandez', 'November 24, 2015, 8:03 pm', 'test'),
(15, 'sqsq', 'Jean-Philippe Hernandez', 'November 24, 2015, 9:07 pm', 'sqsqs'),
(16, 'document 2', 'Jean-Philippe Hernandez', 'November 24, 2015, 9:23 pm', 'http://lien.com'),
(17, 'Document 2', 'Jean-Philippe Hernandez', 'November 24, 2015, 9:37 pm', 'http://document2.fr');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
`id` int(11) NOT NULL,
  `nom` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mdp` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`id`, `nom`, `prenom`, `login`, `mdp`, `email`) VALUES
(1, 'test', 'test', 'test', 'test', 'test'),
(2, 'test', 'test', 'test', 'test', 'test'),
(3, 'test', 'test', 'test', 'test', 'test'),
(4, 'test', 'test', 'test', 'test', 'test'),
(5, 'test', 'test', 'test', 'test', 'test'),
(6, 'test', 'test', 'test', 'test', 'test'),
(7, 'test', 'test', 'test', 'test', 'test'),
(8, 'Hernandez', 'Jean-Philippe', 'jp', '', 'dezhernan.jp@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Reference`
--
ALTER TABLE `Reference`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Reference`
--
ALTER TABLE `Reference`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;