-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 mai 2020 à 13:26
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crash_true_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartes`
--

DROP TABLE IF EXISTS `cartes`;
CREATE TABLE IF NOT EXISTS `cartes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cartes_nom_unique` (`nom`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cartes`
--

INSERT INTO `cartes` (`id`, `created_at`, `updated_at`, `nom`, `etat`) VALUES
(1, '2020-05-18 10:54:19', '2020-05-18 10:54:19', 'Map 1', 0),
(2, '2020-05-18 10:54:24', '2020-05-18 10:54:24', 'Map 2', 0);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_18_031338_create_utilisateurs_table', 1),
(2, '2020_05_18_053228_create_tournois_table', 1),
(3, '2020_05_18_054440_create_cartes_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tournois`
--

DROP TABLE IF EXISTS `tournois`;
CREATE TABLE IF NOT EXISTS `tournois` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `utilisateurs_id` int(11) DEFAULT NULL,
  `cartes_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tournois_nom_unique` (`nom`) USING HASH,
  KEY `tournois_utilisateurs_id_foreign` (`utilisateurs_id`),
  KEY `tournois_cartes_id_foreign` (`cartes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tournois`
--

INSERT INTO `tournois` (`id`, `created_at`, `updated_at`, `nom`, `password`, `date`, `utilisateurs_id`, `cartes_id`) VALUES
(1, '2020-05-18 08:52:15', '2020-05-18 08:52:15', 'Tournoi 1', '$2y$10$dfAqsJ5Hom3DN15Okiin2.dzrzYQrrRZLc/ISQ3x0gJu/4baYnlsu', '2020-05-22', NULL, NULL),
(2, '2020-05-18 08:53:29', '2020-05-18 08:53:29', 'Tournoi 2', '$2y$10$6.doc77dwR8.E8/TGzqFDuVQmUimvroh/ePrJeHO0rgW6WZcbV6O.', '2020-06-27', NULL, NULL),
(3, '2020-05-18 08:54:03', '2020-05-18 08:54:03', 'Tournoi 3', '$2y$10$NW94ULuuhykCrxy0VT802OatqPRDwBd6B2Z/7Vc8PzPEU.29x4pfK', '2020-07-16', NULL, NULL),
(4, '2020-05-18 10:47:30', '2020-05-18 10:47:30', '10', '$2y$10$l.9crUXT7y4DbYgBDdGH3uXVoTNP31WbyS2GPdO/k2o0MGubzxrvW', '2020-09-01', NULL, NULL),
(5, '2020-05-18 10:48:40', '2020-05-18 10:48:40', 'Test', '$2y$10$cFbSVp7QB4IZf6tnyRpU6.6ktPGylnomHJqzx6pu2covCXTKHhL9C', '2020-05-01', NULL, NULL),
(6, '2020-05-18 10:53:29', '2020-05-18 10:53:29', 'Tournoi test', '$2y$10$bQ0DfGDt1uA/dmIfjM0TdO6cDu1YO/LrRt/a7J.dJXP0DYe6n/YqK', '2020-07-11', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateurs_email_unique` (`email`) USING HASH,
  UNIQUE KEY `utilisateurs_pseudo_unique` (`pseudo`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `created_at`, `updated_at`, `email`, `pseudo`, `password`, `role`) VALUES
(1, '2020-05-18 08:51:34', '2020-05-18 08:51:34', '1@1', 'Theo', '$2y$10$euOJm447pfBu3CzVqQ4TWeiEWQUEOAcfTG.zbSrUj7xEtwUeIu84W', NULL),
(2, '2020-05-18 10:52:29', '2020-05-18 10:52:29', 't@t', 'theor', '$2y$10$TflpCFL9q5oLoB9Y6xykje2kQ8oTfaLfNp9nQYpyk53J97u.c3vf.', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
