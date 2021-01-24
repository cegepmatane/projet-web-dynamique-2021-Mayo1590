-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 jan. 2021 à 21:18
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lune`
--

-- --------------------------------------------------------

--
-- Structure de la table `les missions apollo`
--

CREATE TABLE `les missions apollo` (
  `id` int(10) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `astronautes` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `les missions apollo`
--

INSERT INTO `les missions apollo` (`id`, `titre`, `astronautes`, `date`) VALUES
(1, 'Apollo 1', 'Gus Grissom, Ed White et Roger Chaffee', '1967-01-27'),
(2, 'Apollo 7', 'Donn Eisele, Walter M. Schirra et Walter Cunningham', '1968-10-11'),
(3, 'Apollo 11', 'Neil Armstrong, Micheal Collins et Edwin \"Buzz\" Aldrin', '1969-07-16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `les missions apollo`
--
ALTER TABLE `les missions apollo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `les missions apollo`
--
ALTER TABLE `les missions apollo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
