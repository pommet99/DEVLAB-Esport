-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 mai 2020 à 07:36
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cartes`
--

INSERT INTO `cartes` (`id`, `created_at`, `updated_at`, `nom`, `etat`) VALUES
(1, '2020-05-18 04:47:28', '2020-05-18 04:47:28', 'map 1', 0),
(2, '2020-05-18 04:48:02', '2020-05-18 04:48:02', 'map 2', 0),
(3, '2020-05-18 04:53:58', '2020-05-18 04:53:58', 'map 3', 0),
(4, '2020-05-18 04:57:38', '2020-05-18 04:57:38', 'map 4', 0),
(5, '2020-05-18 04:57:41', '2020-05-18 04:57:41', 'map 5', 0),
(6, '2020-05-18 05:29:47', '2020-05-18 05:29:47', 'carte 6', 0),
(7, '2020-05-18 05:30:08', '2020-05-18 05:30:08', 'crate 7', 0);

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
  `date_tournoi` date NOT NULL,
  `utilisateurs_id` int(11) NOT NULL,
  `cartes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tournois_nom_unique` (`nom`) USING HASH,
  KEY `tournois_utilisateurs_id_foreign` (`utilisateurs_id`),
  KEY `tournois_cartes_id_foreign` (`cartes_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `role` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateurs_email_unique` (`email`) USING HASH,
  UNIQUE KEY `utilisateurs_pseudo_unique` (`pseudo`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `created_at`, `updated_at`, `email`, `pseudo`, `password`, `role`) VALUES
(1, '2020-05-18 05:26:17', '2020-05-18 05:26:17', 'a@a', 'a', '$2y$10$CG1r9jzJBABIjJtiLu4Dy.WyCfjqh6pA5ssMZ9pKPPJg4Qlbujas6', NULL),
(2, '2020-05-18 05:26:39', '2020-05-18 05:26:39', 'test@test', 'test', '$2y$10$Qe1luXH9qGLVOgOFwWsRjOQpLMLJxgCgmx/Fvzb9r/yw/3ab5QIlK', NULL),
(3, '2020-05-18 05:27:26', '2020-05-18 05:27:26', 'theo@t', 'theo', '$2y$10$uMtgBRCLgLUWsv/xO9ErV.o2q0E5B5GNbbtGcoHG8TNru.pfHQQMO', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
