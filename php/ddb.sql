-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 20 mars 2021 à 17:15
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
(3);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `datePhase1` datetime NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `anneeDeNaissance` int(11) NOT NULL,
  `genre` text NOT NULL,
  `niveauEtudes` text NOT NULL,
  `filiere` text NOT NULL,
  `langueMaternelle` text NOT NULL,
  `langueSwahili` text NOT NULL,
  `commentairesPhase1` text NOT NULL,
  `datePhase2` datetime NOT NULL,
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

INSERT INTO `resultats` (`datePhase1`, `nom`, `prenom`, `email`, `anneeDeNaissance`, `genre`, `niveauEtudes`, `filiere`, `langueMaternelle`, `langueSwahili`, `commentairesPhase1`, `datePhase2`, `sensHabitudesApprentissage`, `methodeDesTests`, `frequenceMethodeDesTests`, `efficaciteMethodeDesTests`, `materielParticulier`, `frequenceMaterielParticulier`, `pourquoiMaterielParticulier`, `affirmationApprendreVocabulaire2Sens`, `commentairesPhase2`) VALUES
('2021-03-20 15:03:05', 'HAUDOT', 'Nathan', 'nathan.haudot@outlook.fr', 2000, 'Homme', 'Bac+3', 'Sciences de l\'ingénieur', 'Français', 'Non', 'MONSUPERCOMMENTAIRE', '2021-03-20 16:03:39', 'Langue étrangère vers maternelle', 'Oui', 4, 4, 'Oui', 5, 'Déterminer ce que je sais et ne sais pas', 'Vraie', 'MONSUPERSECONDCOMMENTAIRE');

