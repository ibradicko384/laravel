-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 juil. 2023 à 13:51
-- Version du serveur : 8.0.30
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `email`, `telephone`, `created_at`, `updated_at`) VALUES
(2, 'DICKO', 'Boureima', 'ibra@gmail.com', '74593366', '2023-07-02 22:30:12', '2023-07-02 22:30:12'),
(3, 'AMONTO', 'Kodjo', 'am@gmail.com', '70000044', '2023-07-02 22:39:47', '2023-07-02 22:39:47'),
(4, 'ODG', 'Henri', 'o@gmail.com', '76760000', '2023-07-02 22:40:27', '2023-07-02 22:40:27'),
(5, 'SANKARA', 'Matou', 'm@gmail.com', '71110010', '2023-07-02 23:24:47', '2023-07-02 23:24:47'),
(6, 'DA', 'Moussa', 'd@gmail.com', '70202020', '2023-07-03 00:53:01', '2023-07-03 00:53:01'),
(7, 'TRAORE', 'Abdoul', 't@gmail.com', '70101010', '2023-07-03 00:59:26', '2023-07-03 00:59:26'),
(8, 'KOLO', 'Dalo', 'm@gmail.com', '70020202', '2023-07-03 01:00:33', '2023-07-03 01:00:33'),
(9, 'BA', 'Damso', 'b@gmail.com', '74747474', '2023-07-03 01:01:10', '2023-07-03 01:01:10'),
(10, 'KABORE', 'Sadia', 'k@gmail.com', '74747474', '2023-07-03 10:36:29', '2023-07-03 10:36:29'),
(11, 'TAMBOU', 'Henri', 'o@gmail.com', '70000000', '2023-07-03 13:23:15', '2023-07-03 13:23:15'),
(12, 'EUDES', 'Yelyaoré', 'eudes@gmail.com', '74444444', '2023-07-03 13:45:16', '2023-07-03 13:45:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
