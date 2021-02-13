-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 fév. 2021 à 21:10
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
-- Base de données : `tiweb_lennoxm`
--

-- --------------------------------------------------------

--
-- Structure de la table `missionsapollo`
--

CREATE TABLE `missionsapollo` (
  `id` int(10) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `astronautes` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `resume` text DEFAULT NULL,
  `progres` text DEFAULT NULL,
  `reussi` varchar(255) DEFAULT NULL,
  `retour` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `missionsapollo`
--

INSERT INTO `missionsapollo` (`id`, `titre`, `astronautes`, `date`, `resume`, `progres`, `reussi`, `retour`, `image`) VALUES
(1, 'Apollo 1', 'Gus Grissom, Ed White et Roger Chaffee ', '1967-01-27', 'Un mois avant la date prévue du lancement, ils testent la capsule.', 'La capsule prévu de lancement ne fonctionne pas.', 'Le test à échoué.', 'Ils meurent tous asphyxiés dans un incendie causé par une étincelle dans la capsule.', 'apollo1.jpg'),
(2, 'Apollo 7', 'Donn Eisele, Walter M. Schirra et Walter Cunningham', '1968-10-11', 'Le premier vol habité du programme. Ce voyage de 11 jours autour de la Terre a pour but de vérifier le fonctionnement complet du vaisseau. Ce fut également la première mission américaine à envoyer une équipe de trois homme dans l\'espace, et la première mission à diffuser des images à la télévision.', 'Le vaisseau est fonctionnel pour le voyage de 11 jours autour de la Terre.', 'Le test est un succès.', 'L\'astronaute Walter-Cunningham est toujours en vie aujourd\'hui.', 'apollo7.jpg'),
(3, 'Apollo 11', 'Neil Armstrong, Micheal Collins et Edwin \"Buzz\" Aldrin', '1969-07-16', 'Le 19 juillet, Apollo 11 entre en orbite lunaire. À la suite d\'un vérification complète des équipements, la séparation du module d\'exploitation s\'effectue le 20 juillet 1969. Ce dernier se pose sur la mère de la Tranquillité la même journée.  Neil Armstrong sera le premier à poser le pied sur la Lune, suivi d\'Edwin Aldrin. Le retour sur Terre s\'est effectué avec succès le 24 juillet 1969. ', 'Pour la première fois, un vaisseau spatial amène des humains sur la lune.', 'La missions fut un succès: Neil Armstrong sera le premier à poser le pied sur la lune.', 'Neil Armstrong est mort en 2012, et les deux autres sont toujours en vie.', 'apollo11.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `missionsapollo`
--
ALTER TABLE `missionsapollo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `missionsapollo`
--
ALTER TABLE `missionsapollo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
