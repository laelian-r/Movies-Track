-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 mai 2025 à 08:41
-- Version du serveur : 9.1.0
-- Version de PHP : 8.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `movies-track`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `categorie` varchar(20) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `categorie`) VALUES
(1, 'Films'),
(2, 'Séries');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id_film` int NOT NULL AUTO_INCREMENT,
  `fichier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `id_categorie` int NOT NULL,
  PRIMARY KEY (`id_film`),
  KEY `idx_id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id_film`, `fichier`, `image`, `titre`, `description`, `date`, `id_categorie`) VALUES
(1, 'deadpool.mp4', 'https://m.media-amazon.com/images/I/71pInEHoevL.jpg', 'Deadpool', 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. À l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.', '2016-02-09', 1),
(2, 'l_amour_ouf.mp4', 'https://fr.web.img6.acsta.net/img/a8/3e/a83e4496e4b525082f93cc758a6d4a64.jpg', 'L\'amour ouf', 'Les années 80, dans le nord de la France. Jackie et Clotaire grandissent entre les bancs du lycée et les docks du port. Elle étudie, il traîne. Et puis leurs destins se croisent et c\'est l\'amour fou. La vie s\'efforcera de les séparer mais rien n\'y fait, ces deux-là sont comme les deux ventricules du même cœur...', '2024-10-16', 1),
(3, 'mr_aznavour.mp4', 'https://fr.web.img3.acsta.net/img/60/13/6013baf72e4a2adc636344c7a3dda3b8.jpg', 'MONSIEUR AZNAVOUR', 'Fils de réfugiés, petit, pauvre, à la voix voilée, on disait de lui qu\'il n\'avait rien pour réussir. À force de travail, de persévérance et d\'une volonté hors norme, Charles Aznavour est devenu un monument de la chanson, et un symbole de la culture française. Avec près de 1200 titres interprétés dans le monde entier et dans toutes les langues, il a inspiré des générations entières. Découvrez le parcours exceptionnel et intemporel de MONSIEUR AZNAVOUR.', '2024-10-23', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
