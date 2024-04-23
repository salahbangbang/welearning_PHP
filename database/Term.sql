-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 25 mars 2024 à 12:15
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
-- Base de données : `Welearn1`
--

-- --------------------------------------------------------

--
-- Structure de la table `Term`
--

CREATE TABLE `Term` (
  `term_id` int(11) NOT NULL,
  `term_name` varchar(100) NOT NULL,
  `term_content` text NOT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Term`
--

INSERT INTO `Term` (`term_id`, `term_name`, `term_content`, `user_type_id`) VALUES
(1, 'ok', 'bref', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Term`
--
ALTER TABLE `Term`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Term`
--
ALTER TABLE `Term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Term`
--
ALTER TABLE `Term`
  ADD CONSTRAINT `term_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `User_type` (`user_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
