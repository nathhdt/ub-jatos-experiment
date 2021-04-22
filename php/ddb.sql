-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 22 avr. 2021 à 18:01
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `jatos_experiment`
--

-- --------------------------------------------------------

--
-- Structure de la table `expeNumber`
--

CREATE TABLE `expeNumber` (
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `expeNumber`
--

INSERT INTO `expeNumber` (`number`) VALUES
(10);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `datePhase1` datetime NOT NULL,
  `email` text NOT NULL,
  `sujet` int(11) NOT NULL,
  `resultId` int(11) NOT NULL,
  `anneeDeNaissance` int(11) NOT NULL,
  `genre` text NOT NULL,
  `niveauEtudes` text NOT NULL,
  `filiere` text NOT NULL,
  `langueMaternelle` text NOT NULL,
  `langueSwahili` text NOT NULL,
  `notionsLangueSwahili` text NOT NULL,
  `commentairesPhase1` text NOT NULL,
  `datePhase2` datetime NOT NULL,
  `sujetFinal` int(11) NOT NULL,
  `resultIdPhase2` int(11) NOT NULL,
  `sensHabitudesApprentissage` text NOT NULL,
  `methodeDesTests` text NOT NULL,
  `frequenceMethodeDesTests` int(11) NOT NULL,
  `efficaciteMethodeDesTests` int(11) NOT NULL,
  `materielParticulier` text NOT NULL,
  `frequenceMaterielParticulier` int(11) NOT NULL,
  `pourquoiMaterielParticulier` text NOT NULL,
  `affirmationApprendreVocabulaire2Sens` text NOT NULL,
  `commentairesPhase2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`datePhase1`, `email`, `sujet`, `resultId`, `anneeDeNaissance`, `genre`, `niveauEtudes`, `filiere`, `langueMaternelle`, `langueSwahili`, `notionsLangueSwahili`, `commentairesPhase1`, `datePhase2`, `sujetFinal`, `resultIdPhase2`, `sensHabitudesApprentissage`, `methodeDesTests`, `frequenceMethodeDesTests`, `efficaciteMethodeDesTests`, `materielParticulier`, `frequenceMaterielParticulier`, `pourquoiMaterielParticulier`, `affirmationApprendreVocabulaire2Sens`, `commentairesPhase2`) VALUES
('2021-04-22 17:04:09', 'nathan.haudot@outlook.fr', 5, 5, 2000, 'Homme', 'Bac+3', 'ESIREM', 'Français', 'Non', 'Non', '/', '2021-04-22 17:04:21', 5, 37, 'Les deux sens (maternelle/étrangère et inversement)', 'Oui', 3, 4, 'Appli iOS Babbel', 3, 'Déterminer ce que je sais et ne sais pas', 'Pas d\'avis', '/');
