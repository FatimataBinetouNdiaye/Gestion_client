-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 août 2023 à 19:10
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_client`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `adresse` varchar(15) NOT NULL,
  `telephone` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `statut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id`, `nom`, `adresse`, `telephone`, `email`, `sexe`, `statut`) VALUES
(1, 'Fabi', 'mermoz', 785901973, 'email', 'f', 'actif'),
(4, 'Fatimata', 'cite lamy', 785901973, 'fatoubintoundiaye704', 'feminin', 'ACTIF'),
(6, 'Ibrahima', 'mbao', 774560312, 'gibrahima09@gmail.co', 'masculin', 'inactif'),
(8, 'Moussa', 'touba', 785825690, 'pmoussa930@gmail', 'mascilin', 'inactif'),
(11, 'AISSATOU', 'Dakar', 776684356, 'aisikon@gmail.com', 'feminin', 'inactif'),
(12, 'kine ', 'rio', 775640923, 'kine@gmail.com', 'feminin', 'ACTIF'),
(13, 'fabin', 'cite', 454980309, 'BI@gmail.com', 'feminin', 'actif'),
(14, 'ndack', 'louga', 3534, 'topndack@gmail.com', 'feminin', 'actif'),
(15, 'Serigne Saliou DIOUF', 'sebi', 776543409, 'saliou@gmail.com', 'masculin', 'inactif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
