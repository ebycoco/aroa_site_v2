-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 juin 2022 à 19:54
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aroa_site_v2`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenoms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `prenoms`, `email`, `email_verified_at`, `telephone`, `photo`, `poste`, `pole`, `password`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DIBY', 'KOFFI INNOCENT-KERICSON', 'admin@aroapartners.com', NULL, '0758084198', 'avatar.png', 'Développeur web', 'IT', '$2y$10$pDifse8goK4qKPciMiPuY.Yt2V6KLtCpSBellg7MwMJQ86eTevr3C', 1, 1, NULL, '2022-03-10 14:10:55', '2022-06-13 13:47:32', NULL),
(2, 'Innocent-kericson', 'Koffi', 'kericson.diby@gmail.com', NULL, '0758084198', 'avatar.png', NULL, NULL, '$2y$10$5tbskna89d91IULKaNSsZOufFCMR7kBqdwTUTErcoFxdCdIChb.i6', 3, 0, NULL, '2022-03-25 18:17:42', '2022-03-29 18:07:25', '2022-03-29 18:07:25'),
(3, 'Test', 'Test', 'test@admin.com', NULL, '0102030405', 'avatar.png', NULL, NULL, '$2y$10$jSZBqMFSTpdjgquTrMr/3e7BKAto37nbicJpYbBxhzdoQnWAi7Txm', 2, 0, NULL, '2022-03-25 18:22:02', '2022-03-29 18:07:52', '2022-03-29 18:07:52'),
(4, 'Jean', 'Jacques', 'jeanjacques@gmail.com', NULL, '0125487552', 'avatar.png', NULL, NULL, '$2y$10$o4TgNY1/GT982eJX7J.af.4OA/GPWZCmeLuJtcVFN/MuC6k1MDRXK', 2, 1, NULL, '2022-03-25 18:22:41', '2022-06-13 13:47:30', NULL),
(5, 'DIBY', 'KOFFI', 'kericson.diby@aroapartners.com', NULL, '07580841980', 'avatar.png', 'Développeur Web', 'IT / Digital', '$2y$10$oN5FLo0f8YYCcH.EUQixueKHfLjohILRtzF.hKNjlTXJPsTbEOaUC', 1, 1, NULL, '2022-04-06 13:32:14', '2022-06-13 13:48:44', NULL),
(6, 'DJE', 'Jean-Emmanuel', 'jeanemmanuel.dje@aroapartners.com', NULL, '07000000000', 'avatar.png', NULL, NULL, '$2y$10$TJ9YGOd5Zhk/FVs4UO52lucc9c1fLBvNtU5RFHW.c1E/TzHmNLHZm', 3, 1, NULL, '2022-06-09 17:20:46', '2022-06-10 09:52:32', NULL),
(7, 'test', 'test', 'test@test.com', NULL, '070000000', 'avatar.png', NULL, NULL, '$2y$10$NQ.44Pvs6b3NuSvffamOYO6zX3anFHc0CDt6nYm9Jy.Kn/ZEUD35W', 3, 1, NULL, '2022-06-13 10:58:15', '2022-06-13 10:58:20', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `pole_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `title_article`, `article_fr`, `article_en`, `image_article`, `category_id`, `pole_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Développement Web', '<p>Le développement Web est le codage ou la programmation qui permet de faire fonctionner un site Web, selon les exigences du propriétaire. Il traite principalement de l’aspect non conceptuel de la création de sites Web, qui comprend le codage et l’écriture du balisage.</p>', '<p>Web development is the coding or programming that makes a website work, as required by the owner. It mainly deals with the non-design side of website building, which includes coding and writing markup.</p>', 'vlcsnap-2022-01-10-15h25m41s820.png', 3, 1, 5, '2022-05-10 14:58:33', '2022-06-10 15:49:56', '2022-06-10 15:49:56'),
(2, 'Django (framework)', '<p><strong>Django</strong> est un <a href=\"https://fr.wikipedia.org/wiki/Framework\">cadre</a> de développement web <a href=\"https://fr.wikipedia.org/wiki/Open_source\"><i>open source</i></a> en <a href=\"https://fr.wikipedia.org/wiki/Python_(langage)\">Python</a>. Il a pour but de rendre le développement <a href=\"https://fr.wikipedia.org/wiki/Web_2.0\">web 2.0</a> simple et rapide. Pour cette raison, le projet a pour <a href=\"https://fr.wikipedia.org/wiki/Slogan\">slogan</a> «&nbsp;Le framework pour les perfectionnistes avec des deadlines&nbsp;». Développé en <a href=\"https://fr.wikipedia.org/wiki/2003_en_informatique\">2003</a> pour le journal local de <a href=\"https://fr.wikipedia.org/wiki/Lawrence_(Kansas)\">Lawrence</a> (État du <a href=\"https://fr.wikipedia.org/wiki/Kansas\">Kansas</a>, aux <a href=\"https://fr.wikipedia.org/wiki/%C3%89tats-Unis\">États-Unis</a>), Django a été publié sous <a href=\"https://fr.wikipedia.org/wiki/Licence_BSD\">licence BSD</a> à partir de <a href=\"https://fr.wikipedia.org/wiki/Juillet_2005\">juillet</a> <a href=\"https://fr.wikipedia.org/wiki/2005\">2005</a>.</p><p>Depuis <a href=\"https://fr.wikipedia.org/wiki/Juin_2008\">juin</a> <a href=\"https://fr.wikipedia.org/wiki/2008\">2008</a>, la <i>Django Software Foundation</i> s\'occupe du développement et de la promotion du cadre. En plus de cette promotion régulière, des conférences entre développeurs et utilisateurs de Django sont organisées deux fois par an depuis <a href=\"https://fr.wikipedia.org/wiki/2008\">2008</a>. Nommées <i>DjangoCon</i>, une se déroule en <a href=\"https://fr.wikipedia.org/wiki/Europe\">Europe</a> et l\'autre aux <a href=\"https://fr.wikipedia.org/wiki/%C3%89tats-Unis\">États-Unis</a>.</p>', NULL, 'vlcsnap-2022-01-10-15h24m38s758.png', 3, 1, 5, '2022-05-11 14:10:03', '2022-05-11 14:10:03', NULL),
(3, 'Python', '<p><strong>Django</strong> est un <a href=\"https://fr.wikipedia.org/wiki/Framework\">cadre</a> de développement web <a href=\"https://fr.wikipedia.org/wiki/Open_source\"><i>open source</i></a> en <a href=\"https://fr.wikipedia.org/wiki/Python_(langage)\">Python</a>. Il a pour but de rendre le développement <a href=\"https://fr.wikipedia.org/wiki/Web_2.0\">web 2.0</a> simple et rapide. Pour cette raison, le projet a pour <a href=\"https://fr.wikipedia.org/wiki/Slogan\">slogan</a> «&nbsp;Le framework pour les perfectionnistes avec des deadlines&nbsp;». Développé en <a href=\"https://fr.wikipedia.org/wiki/2003_en_informatique\">2003</a> pour le journal local de <a href=\"https://fr.wikipedia.org/wiki/Lawrence_(Kansas)\">Lawrence</a> (État du <a href=\"https://fr.wikipedia.org/wiki/Kansas\">Kansas</a>, aux <a href=\"https://fr.wikipedia.org/wiki/%C3%89tats-Unis\">États-Unis</a>), Django a été publié sous <a href=\"https://fr.wikipedia.org/wiki/Licence_BSD\">licence BSD</a> à partir de <a href=\"https://fr.wikipedia.org/wiki/Juillet_2005\">juillet</a> <a href=\"https://fr.wikipedia.org/wiki/2005\">2005</a>.</p><p>Depuis <a href=\"https://fr.wikipedia.org/wiki/Juin_2008\">juin</a> <a href=\"https://fr.wikipedia.org/wiki/2008\">2008</a>, la <i>Django Software Foundation</i> s\'occupe du développement et de la promotion du cadre. En plus de cette promotion régulière, des conférences entre développeurs et utilisateurs de Django sont organisées deux fois par an depuis <a href=\"https://fr.wikipedia.org/wiki/2008\">2008</a>. Nommées <i>DjangoCon</i>, une se déroule en <a href=\"https://fr.wikipedia.org/wiki/Europe\">Europe</a> et l\'autre aux <a href=\"https://fr.wikipedia.org/wiki/%C3%89tats-Unis\">États-Unis</a>.</p>', NULL, 'Capture d’écran 2022-03-09 103049.png', 3, 1, 5, '2022-05-11 15:00:46', '2022-05-13 09:58:23', '2022-05-13 09:58:23'),
(4, 'IFC', '<p>L’indemnité de fin de carrière ou IFC est une indemnité versée au salarié par l’employeur lors de son départ à la retraite. Elle est définie par les conventions collectives et/ou les accords d’entreprise ou d’établissement mais ne peut en aucun cas être inférieure à&nbsp;<a href=\"https://www.urssaf.fr/portail/home/employeur/calculer-les-cotisations/les-elements-a-prendre-en-compte/les-indemnites-de-rupture-du-con/les-indemnites-de-depart-volonta.html\">l’indemnité légale de départ à la retraite&nbsp;</a>si le départ&nbsp;est à l’initiative du salarié (départ volontaire) et à&nbsp;<a href=\"http://travail-emploi.gouv.fr/droit-du-travail/rupture-de-contrats/licenciement/article/l-indemnite-legale-de-licenciement\">l’indemnité légale de licenciement</a>&nbsp;si le départ est à l’initiative de l’employeur (mise à la retraite).</p>', NULL, 'sign.png', 2, 4, 5, '2022-05-11 15:08:37', '2022-05-11 15:08:37', NULL),
(5, 'Développement d\'applications mobiles', '<p>Web2Py. Il s\'agit de l\'un des cadres <strong>Python</strong> les plus populaires utilisés pour le <strong>développement</strong> d\'applications <strong>mobiles</strong>. Le framework est doté d\'un débogueur et d\'un outil de déploiement qui aident les développeurs à déboguer et à construire le code de manière efficace et à tester les applications.</p>', NULL, 'OrgCoral_Ofc-01_Concept-06.jpg', 3, 1, 5, '2022-05-12 11:00:23', '2022-06-10 14:57:48', NULL),
(6, 'WEB2PY', '<p>Free open source full-stack framework for rapid development of fast, scalable, <a href=\"http://www.web2py.com/book/default/chapter/01#Security\">secure</a> and portable database-driven web-based applications. Written and programmable in <a href=\"http://www.python.org/\">Python</a> (version 3 and 2.7).</p>', NULL, 'blog_risk.png', 3, 1, 5, '2022-05-12 11:02:05', '2022-05-12 11:02:05', NULL),
(7, 'Python web', '<p>Free open source full-stack framework for rapid development of fast, scalable, <a href=\"http://www.web2py.com/book/default/chapter/01#Security\">secure</a> and portable database-driven web-based applications. Written and programmable in <a href=\"http://www.python.org/\">Python</a> (version 3 and 2.7).</p>', NULL, 'blog_actuariat.png', 3, 1, 5, '2022-05-12 11:06:22', '2022-05-12 11:06:22', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `candidatures`
--

CREATE TABLE `candidatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offre_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `candidatures`
--

INSERT INTO `candidatures` (`id`, `nom`, `prenom`, `email`, `lm`, `cv`, `offre_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654615621.docx', 'Temmplate a propos_1654615621.pdf', 1, NULL, '2022-06-07 15:27:01', '2022-06-07 15:27:01'),
(2, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654615669.docx', 'Temmplate a propos_1654615669.pdf', 1, NULL, '2022-06-07 15:27:49', '2022-06-07 15:27:49'),
(3, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654616077.docx', 'Temmplate a propos_1654616077.pdf', 1, NULL, '2022-06-07 15:34:37', '2022-06-07 15:34:37'),
(4, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654616277.docx', 'Temmplate a propos_1654616277.pdf', 1, NULL, '2022-06-07 15:37:57', '2022-06-07 15:37:57'),
(5, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654616316.docx', 'Temmplate a propos_1654616316.pdf', 1, NULL, '2022-06-07 15:38:36', '2022-06-07 15:38:36'),
(6, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654618748.docx', 'Temmplate a propos_1654618748.pdf', 1, NULL, '2022-06-07 16:19:11', '2022-06-07 16:19:11'),
(7, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654619022.docx', 'Temmplate a propos_1654619022.pdf', 1, NULL, '2022-06-07 16:23:45', '2022-06-07 16:23:45'),
(8, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654619421.docx', 'Temmplate a propos_1654619421.pdf', 1, NULL, '2022-06-07 16:30:24', '2022-06-07 16:30:24'),
(9, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654619470.docx', 'Temmplate a propos_1654619470.pdf', 1, NULL, '2022-06-07 16:31:12', '2022-06-07 16:31:12'),
(10, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654619961.docx', 'Temmplate a propos_1654619961.pdf', 1, NULL, '2022-06-07 16:39:33', '2022-06-07 16:39:33'),
(11, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'LM_INNOCENT-KERICSON_1654620171.docx', 'CV_INNOCENT-KERICSON_1654620171.pdf', 1, NULL, '2022-06-07 16:42:54', '2022-06-07 16:42:54'),
(12, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'LM_INNOCENT-KERICSON_1654620383.docx', 'CV_INNOCENT-KERICSON_1654620383.pdf', 1, NULL, '2022-06-07 16:46:31', '2022-06-07 16:46:31'),
(13, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'LM_INNOCENT-KERICSON_1654620742.docx', 'CV_INNOCENT-KERICSON_1654620742.pdf', 1, NULL, '2022-06-07 16:52:24', '2022-06-07 16:52:24'),
(14, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654621350.docx', 'Temmplate a propos_1654621350.pdf', 1, NULL, '2022-06-07 17:02:32', '2022-06-07 17:02:32'),
(15, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654621526.docx', 'Temmplate a propos_1654621526.pdf', 1, NULL, '2022-06-07 17:05:29', '2022-06-07 17:05:29'),
(16, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654621737.docx', 'Temmplate a propos_1654621737.pdf', 1, NULL, '2022-06-07 17:09:01', '2022-06-07 17:09:01'),
(17, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654622582.docx', 'Temmplate a propos_1654622582.pdf', 1, NULL, '2022-06-07 17:23:09', '2022-06-07 17:23:09'),
(18, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654622898.docx', 'Temmplate a propos_1654622898.pdf', 1, NULL, '2022-06-07 17:28:24', '2022-06-07 17:28:24'),
(19, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654623230.docx', 'Temmplate a propos_1654623230.pdf', 1, NULL, '2022-06-07 17:33:58', '2022-06-07 17:33:58'),
(20, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654623823.docx', 'Temmplate a propos_1654623823.pdf', 1, NULL, '2022-06-07 17:43:48', '2022-06-07 17:43:48'),
(21, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654623980.docx', 'Temmplate a propos_1654623980.pdf', 2, NULL, '2022-06-07 17:46:27', '2022-06-07 17:46:27'),
(23, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654680543.docx', 'Temmplate a propos_1654680543.pdf', 1, NULL, '2022-06-08 09:29:08', '2022-06-08 09:29:08'),
(24, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654680623.docx', 'Temmplate a propos_1654680623.pdf', 1, NULL, '2022-06-08 09:30:28', '2022-06-08 09:30:28'),
(25, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Texte A PROPOS_1654681312.docx', 'Temmplate a propos_1654681312.pdf', 1, NULL, '2022-06-08 09:41:57', '2022-06-08 09:41:57'),
(26, 'INNOCENT-KERICSON', 'DIBY', 'kericson.diby@aroapartners.com', 'Texte A PROPOS_1654681376.docx', 'Temmplate a propos_1654681376.pdf', 1, NULL, '2022-06-08 09:43:02', '2022-06-08 09:43:02');

-- --------------------------------------------------------

--
-- Structure de la table `category_articles`
--

CREATE TABLE `category_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pole_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category_articles`
--

INSERT INTO `category_articles` (`id`, `title_category`, `description`, `image_category`, `pole_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Test', '<p>test</p>', 'formations.png', 1, 5, '2022-05-11 11:48:16', '2022-05-09 12:31:39', '2022-05-11 11:48:16'),
(2, 'IFRS 17', '<p>IFRS 17 remplace la norme IFRS 4 «&nbsp;Contrats d’assurance&nbsp;» publiée en 2004 comme une norme provisoire. IFRS 4 a autorisé les sociétés à continuer à utiliser les règles comptables nationales en matière de contrats d’assurance, ce qui a donné lieu à une multitude d’approches différentes et a rendu difficile pour les investisseurs toute comparaison des performances financières des différentes sociétés.&nbsp;Le Conseil de Stabilité Financière a indiqué en septembre 2015 l’importance d’achever le projet de remplacement de la norme IFRS 4 par une nouvelle norme.&nbsp;IFRS 17 résout les problèmes de comparaison créés par IFRS 4 en exigeant la comptabilisation de tous les contrats d’assurance de façon homogène. Sont concernées 450 sociétés d\'assurance cotées, représentant 13 trillions de total d\'actifs.</p>', 'actuariat11.jpg', 4, 5, NULL, '2022-05-09 14:14:30', '2022-05-11 11:48:55'),
(3, 'Développement Web', '<p>Le développement Web désigne de manière générale les tâches associées au <strong>développement de sites Web</strong> destinés à être hébergés via un intranet ou Internet. Le processus de développement web comprend, entre autres, la conception de sites web, le développement de contenu web, l’élaboration de <strong>scripts</strong> côté client ou côté serveur et la configuration de la sécurité du réseau.</p>', 'vlcsnap-2022-01-10-15h24m38s7581255977245.png', 1, 5, NULL, '2022-05-09 14:17:57', '2022-05-11 11:46:43');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `commentable_type`, `commentable_id`, `user_id`, `name`, `email`, `parent_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Blog', 7, NULL, 'DIBY KOFFI INNOCENT-KERICSON', 'kericson.diby@gmail.com', NULL, 'Parmi les caractéristiques qui font de Django un framework populaire pour Python', '2022-05-12 17:24:19', '2022-05-12 17:24:19'),
(2, 'App\\Models\\Blog', 7, NULL, 'DIBY Koffi', 'kericson92@gmail.com', 1, 'ASE', '2022-05-12 17:28:05', '2022-05-12 17:28:05'),
(3, 'App\\Models\\Blog', 7, NULL, 'DIBY KOFFI INNOCENT-KERICSON', 'kericson.diby@gmail.com', 1, 'Test', '2022-05-12 17:29:19', '2022-05-12 17:29:19'),
(4, 'App\\Models\\Blog', 7, NULL, 'Jacques Jean', 'jeanjacques@gmail.com', NULL, 'L’indemnité de fin de carrière ou IFC est une indemnité versée au salarié par l’employeur lors de son départ à la retraite. Elle est définie par les conventions collectives et/ou les accords d’entreprise ou d’établissement mais ne', '2022-05-12 17:38:53', '2022-05-12 17:38:53'),
(5, 'App\\Models\\Blog', 1, NULL, 'KOFFI INNOCENT-KERICSON DIBY', 'admin@aroapartners.com', NULL, 'ACCUEIL, signifie aussi, Secours, protection. L\'accueil qu\'a fait ce Seigneur à ce pauvre Gentilhomme en le retirant en sa maison, luy a sauvé la vie', '2022-05-13 17:59:11', '2022-05-13 17:59:11'),
(6, 'App\\Models\\Blog', 1, NULL, 'Jacques Jean', 'jeanjacques@gmail.com', NULL, 'dcqdscsxcsdcdscds', '2022-05-19 10:07:13', '2022-05-19 10:07:13'),
(7, 'App\\Models\\Blog', 1, NULL, 'DIBY KOFFI INNOCENT-KERICSON', 'kericson.diby@gmail.com', NULL, 'cv vc bv bv', '2022-06-07 11:33:24', '2022-06-07 11:33:24'),
(8, 'App\\Models\\Blog', 1, NULL, 'DIBY KOFFI INNOCENT-KERICSON', 'kericson.diby@gmail.com', NULL, 'dfvffdbbgbf', '2022-06-07 11:43:09', '2022-06-07 11:43:09'),
(9, 'App\\Models\\OffreEmploi', 1, NULL, 'DIBY KOFFI INNOCENT-KERICSON', 'kericson.diby@gmail.com', NULL, 'qscdcd', '2022-06-07 14:18:03', '2022-06-07 14:18:03'),
(10, 'App\\Models\\OffreEmploi', 1, NULL, 'Jacques Jean', 'jeanjacques@gmail.com', NULL, 'Tout est normal', '2022-06-07 14:18:22', '2022-06-07 14:18:22'),
(11, 'App\\Models\\OffreEmploi', 1, NULL, 'Test Test', 'test@admin.com', NULL, 'qgfgqfgs', '2022-06-07 14:19:30', '2022-06-07 14:19:30'),
(12, 'App\\Models\\OffreEmploi', 2, NULL, 'DIBY KOFFI INNOCENT-KERICSON', 'kericson.diby@gmail.com', NULL, 'Tout va bien', '2022-06-07 14:20:20', '2022-06-07 14:20:20');

-- --------------------------------------------------------

--
-- Structure de la table `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre_expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertise_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pole_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `expertises`
--

INSERT INTO `expertises` (`id`, `titre_expertise`, `expertise_fr`, `expertise_en`, `pole_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ANALYSE, CARTOGRAPHIE ET HIÉRARCHISATION DES RISQUES TECHNIQUES, OPÉRATIONNELS, STRATÉGIQUES ET FINANCIERS', '<ul><li>Identifier, analyser et évaluer les risques : activités, process, système d’information, outils de production, événements extérieurs…</li><li>Élaborer une cartographie des risques par entreprise, par direction/métier, par projet</li><li>Animer les ateliers d’identification et de hiérarchisation des risques</li></ul>', NULL, 2, 5, NULL, '2022-05-03 14:24:04', '2022-05-03 14:24:04'),
(2, 'PREVENTION ET GESTION DES RISQUES', '<ul><li>Déterminer la politique de gestion des risques et évaluer l’appétence des dirigeants à la prise de risque</li><li>Établir une ingénierie de prévention sur les zones à risques</li><li>Déterminer des plans de réduction des risques et en assurer le suivi</li></ul>', NULL, 2, 5, NULL, '2022-05-03 14:38:59', '2022-05-04 14:10:48'),
(3, 'SUPPORT IT', '<ul><li>Installation et configuration du matériel</li><li>Installation et configuration des applications</li><li>Gestion du réseau</li><li>Maintenance préventive</li><li>Gestion du système d’information</li></ul>', NULL, 1, 5, NULL, '2022-05-03 14:41:06', '2022-05-04 14:06:07'),
(5, 'APPLICATION', '<ul><li>Idea to Product to Market</li><li>Développement d’applications métiers</li><li>Développement d’applications web</li><li>Développement de sites web</li><li>Développement d’applications mobiles</li><li>Languages et technologies:<ul><li>Architecture micro-service (Laravel,Spring boot,Django)</li><li>Mobile: Dart, java, React Native</li><li>Web: PHP, JavaScript , html/CSS, VueJS, React JS, CMS, Django/flask</li><li>Base de données : programmation SQL, PostgreSQL, MySQL, SQL Server , Oracle, FireBASE</li><li>Data engineer: Python,R</li></ul></li></ul>', '<ul><li>Idea to Product to Market</li><li>Développement d’applications métiers</li><li>Développement d’applications web</li></ul>', 1, 5, NULL, '2022-05-04 14:05:53', '2022-06-13 17:37:25'),
(6, 'SECURITE INFORMATIQUE', '<ul><li>Analyse des risques liés aux systèmes d’information de l’entreprise</li><li>Conception et gestion des procédures pour la prémunition contre les intrusions ou sinistres</li><li>Installation des outils de sécurité informatique</li><li>Surveillance des infrastructures</li><li>Mise en place d’une procédure de continuité de l’activité</li></ul>', NULL, 1, 5, NULL, '2022-05-04 14:12:41', '2022-05-04 14:12:41'),
(7, 'DEVOPS', '<ul><li>Docker</li><li>Kubernetes</li><li>Amazon Web Service</li><li>Azure</li><li>Prometheus</li><li>GitLab CI/CD</li><li>Jenkins</li><li>Ansible</li></ul>', NULL, 1, 5, NULL, '2022-05-06 14:51:37', '2022-05-06 14:51:37'),
(8, NULL, '<ul><li>Conduite des études de terrains et benchmark (études de marchés, identifications de partenaires potentiels, des aides, des subventions &amp; des financements disponibles).</li><li>Accompagnement sur mesure à toutes les étapes de la mise en place des projets d’implantations et de déploiement des partenariats locaux (industriels, commerciaux, R&amp;D, opérations de fusion et acquisition).</li></ul>', NULL, 3, 5, NULL, '2022-05-06 15:05:38', '2022-05-06 15:05:38'),
(9, NULL, '<ul><li>Conduite des études de terrains et benchmark (études de marchés, identifications de partenaires potentiels, des aides, des subventions &amp; des financements disponibles).</li><li>Accompagnement sur mesure à toutes les étapes de la mise en place des projets d’implantations et de déploiement des partenariats locaux (industriels, commerciaux, R&amp;D, opérations de fusion et acquisition).</li></ul>', NULL, 3, 5, '2022-05-06 15:28:18', '2022-05-06 15:09:43', '2022-05-06 15:28:18'),
(10, NULL, '<ul><li>Business Development, structuration d’un réseau de distribution &amp; de partenaires techniques locaux suivant objectifs, planning et budgets validés conjointement.</li><li>Assistance dans le processus de recrutement et à la formation continue des équipes dans le respect des valeurs, en tenant compte des spécificités socioculturelles locales.</li></ul>', NULL, 3, 5, NULL, '2022-05-06 15:29:53', '2022-05-06 15:29:53'),
(11, NULL, '<ul><li>Support à la planification et accompagnement à la carte des équipes dans leurs actions de prospections et leurs participations à des salons professionnels, ainsi qu’à des manifestations internationales.</li></ul>', NULL, 3, 5, NULL, '2022-05-06 15:35:34', '2022-05-06 15:35:34'),
(12, 'STRATÉGIES MARKETING', '<ul><li>Etude de marché</li><li>Lancement de produit</li><li>Accompagnement stratégique et opérationnel</li><li>Design et conception print</li><li>Benchmarch</li><li>Identité visuelle</li><li>Buyer Persona</li><li>Positionnement Média</li></ul>', NULL, 7, 5, NULL, '2022-05-06 15:38:00', '2022-05-06 15:38:00'),
(13, 'CREATION / REFONTE SITE WEB', '<ul><li>Maquette (Architecture, Wireframe)</li><li>UI, UX Design</li><li>Sécurité Web</li><li>Développement technique du site (Site dynamique, responsive, moderne, intelligent)</li><li>Ergonomie</li></ul>', NULL, 7, 5, NULL, '2022-05-06 15:39:36', '2022-05-06 15:39:36'),
(14, 'ARCHITECTURE DE CONTENUS', '<ul><li>Production de contenu (Textes, images, vidéos)</li><li>Infographie</li><li>Direction Artistique</li></ul>', NULL, 7, 5, NULL, '2022-05-06 15:40:44', '2022-05-06 15:40:44'),
(15, 'REFERENCEMENT / PUBLICITE WEB', '<ul><li>SEO</li><li>SEA</li><li>Google Ads</li><li>Facebook Ads</li><li>Instagram Ads</li><li>LinkedIn Ads</li></ul>', NULL, 7, 5, NULL, '2022-05-06 15:43:06', '2022-05-06 15:43:06'),
(16, 'ANALYTICS', '<ul><li>Data Analyse</li><li>Suivi de traffic (Rapport personnalisé et indicateur KPI)</li><li>Tableau de flux budgétaire</li></ul>', NULL, 7, 5, NULL, '2022-05-06 15:45:29', '2022-05-06 15:45:29'),
(17, 'AUDIT', '<ul><li>Contrôle de conformité du site (Rapidité, Ergonomie, Sécurité)</li><li>Rapport de présence digitale</li><li>Rapport de conformité</li></ul>', NULL, 7, 5, NULL, '2022-05-06 15:46:20', '2022-05-06 15:46:20'),
(18, 'PROCESSUS DE RECRUTEMENT', '<ul><li>Etude de poste, d’environnement et de contexte</li><li>Sourcing : vivier candidats qualifiés, annonces, recherches CVthèques et réseaux sociaux professionnels</li><li>Evaluation : entretien face à face, questionnaires de personnalité, prises de références</li><li>Sélection : présentation d’une sélection de candidatures accompagnée de l’avis du consultant.</li></ul>', NULL, 6, 5, NULL, '2022-05-06 15:48:29', '2022-05-06 15:48:29'),
(19, 'GESTION DU PERSONNEL', '<ul><li>Mise en place de votre administration</li><li>Optimisation de l’organisation des postes de travail</li><li>Besoin d’informations en termes de réglementation en droit du travail ; vérification des obligations, conformité des contrats ; gestion des risques ; règlement intérieur etc.</li><li>Optimisation de la politique de rémunération</li><li>Structuration des outils de Gestion des Ressources Humaines (tableaux de bords…)</li><li>La gestion des absences</li><li>La gestion des salaires, des charges fiscales et sociales</li></ul>', NULL, 6, 5, NULL, '2022-05-06 15:51:47', '2022-05-06 15:51:47'),
(20, 'LA FORMATION', '<ul><li>Intégration et accueil du nouvel employé</li><li>Optimiser la gestion des équipes à distance</li><li>Evaluations individuelle et annuelle</li><li>Consolidation d’équipe (Team Building)</li><li>Formation des managers</li><li>Développement et épanouissement du capital humain</li><li>Développement de la coopération et du travail en équipe</li></ul>', NULL, 6, 5, NULL, '2022-05-06 15:53:19', '2022-05-06 15:53:19'),
(21, 'SENSIBILISATION A LA CULTURE DU RISQUE', '<ul><li>Sensibiliser les collaborateurs aux risques inhérents à leurs activités professionnelles en animant des formations, des actions de communication interne, des séminaires, des comités…</li><li>Assurer une remontée des informations du terrain par le développement, l’animation et la formation d’un réseau de correspondants</li><li>Visites de sites</li></ul>', NULL, 2, 5, NULL, '2022-05-06 15:57:25', '2022-05-06 15:57:25'),
(22, 'GESTION DES ASSURANCES ET SINISTRES', '<ul><li>Identifier des zones critiques</li><li>Gérer les relations avec les courtiers, assureurs, experts et négociation des contrats</li><li>Mettre en place un plan de protection à un coût optimisé</li><li>Gérer des sinistres et mettre en œuvre un plan de continuité d’activité</li></ul>', NULL, 2, 5, NULL, '2022-05-06 15:58:29', '2022-05-06 15:58:29'),
(23, 'REPORTING, INDICATEURS ET TABLEAUX DE BORD DE PILOTAGE DES RISQUE', '<ul><li>Animer le dispositif de gestion des risques</li><li>Rédiger des reportings, tableaux de bord pour la direction générale, des documents institutionnels et/ou réglementaires (rapport, document de référence…)</li><li>Animer ou participer au comité des risques</li></ul>', NULL, 2, 5, NULL, '2022-05-06 15:59:02', '2022-05-06 15:59:02'),
(24, 'VEILLE RÉGLEMENTAIRE ET PROSPECTIVE', '<ul><li>Assurer une veille règlementaire mais aussi prospective pour identifier des risques émergents, anticiper les variations d’évolution des risques ainsi que leurs effets sur l’organisation</li><li>Établir des plans d’actions appropriés</li></ul>', NULL, 2, 5, NULL, '2022-05-06 15:59:35', '2022-05-06 15:59:35'),
(25, 'ACTUARIAT CONSEIL ET ANALYSES STATISTIQUES', '<ul><li>Provisionnement</li><li>Tarification</li><li>Règlementation</li><li>Réassurance</li><li>Evaluation des passifs sociaux</li><li>Etudes statistiques</li></ul>', NULL, 4, 5, NULL, '2022-05-06 16:05:28', '2022-05-06 16:05:28'),
(26, 'FINANCE', '<ul><li>Dette</li><li>Emissions obligataires</li><li>Private Equity</li><li>Introduction en bourse</li><li>Risk &amp; regulatory compliance</li><li>Central Securities Depository (CSD)</li></ul>', NULL, 4, 5, NULL, '2022-05-06 16:05:58', '2022-05-06 16:05:58'),
(27, 'DEVELOPPEMENT D’OUTILS ACTUARIELS', '<ul><li>Outils pour calcul de provisions en assurance</li><li>Outils pour déterminations d’indemnités de fin de carrières</li><li>Outils pour gestion actif-passif en banque et en assurance</li></ul>', NULL, 4, 5, NULL, '2022-05-06 16:06:40', '2022-05-06 16:06:40'),
(28, 'GESTION DES RISQUES FINANCIERES', '<ul><li>Procédures</li><li>Contrôle interne</li><li>Système de gestion</li><li>Gestion quantitative des risques</li><li>ORSA</li><li>Risk Appetite</li></ul>', NULL, 4, 5, NULL, '2022-05-06 16:07:19', '2022-05-06 16:07:19'),
(29, 'MODÉLISATIONS ET DATA SCIENCE', '<ul><li>Intelligence Artificielle,</li><li>Data Mining,</li><li>Data Analytics,</li><li>Statistics</li></ul>', NULL, 4, 5, NULL, '2022-05-06 16:07:52', '2022-05-06 16:07:52'),
(30, 'OPTIMISATION DU BILAN', '<ul><li>ALM,</li><li>Allocation stratégique d’actifs,</li><li>Gestion du capital,</li><li>Analyses et optimisation de processus</li></ul>', NULL, 4, 5, NULL, '2022-05-06 16:08:35', '2022-05-06 16:08:35'),
(31, NULL, '<ul><li>Positionnement</li><li>Avantage concurrentiel</li><li>Domaines d\'activités stratégiques</li></ul>', NULL, 5, 5, NULL, '2022-05-06 16:10:01', '2022-05-06 16:10:01'),
(32, NULL, '<ul><li>Haut de bilan</li><li>Croissance externe</li></ul>', NULL, 5, 5, NULL, '2022-05-06 16:10:25', '2022-05-06 16:10:25'),
(33, NULL, '<ul><li>Diversification</li><li>Nouveaux marchés</li></ul>', NULL, 5, 5, NULL, '2022-05-06 16:10:40', '2022-05-06 16:10:40'),
(34, NULL, '<ul><li>Conduite des études de terrains et benchmark (études de marchés, identifications de partenaires potentiels, des aides, des subventions &amp; des financements disponibles).</li><li>Accompagnement sur mesure à toutes les étapes de la mise en place des projets d’implantations et de déploiement des partenariats locaux (industriels, commerciaux, R&amp;D, opérations de fusion et acquisition).</li></ul>', NULL, 3, 5, NULL, '2022-05-10 17:34:02', '2022-05-10 17:34:02'),
(35, NULL, '<ul><li>Conduite des études de terrains et benchmark (études de marchés, identifications de partenaires potentiels, des aides, des subventions &amp; des financements disponibles).</li><li>Accompagnement sur mesure à toutes les étapes de la mise en place des projets d’implantations et de déploiement des partenariats locaux (industriels, commerciaux, R&amp;D, opérations de fusion et acquisition).</li></ul>', NULL, 3, 5, NULL, '2022-05-10 17:34:28', '2022-05-10 17:34:28');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pole_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pole_id`)),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `title`, `description_fr`, `description_en`, `document`, `pole_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p>test</p>', '<p>test</p>', 'accueil_1649840298_1654274551.png', '[\"3\",\"1\",\"7\"]', 5, NULL, '2022-06-03 16:42:31', '2022-06-03 17:05:22'),
(2, 'Photo', '<p>dfdffdfdfd</p>', NULL, 'Temmplate a propos_1654861417.pdf', '[\"1\",\"6\",\"2\"]', 5, NULL, '2022-06-10 11:43:38', '2022-06-10 11:43:38');

-- --------------------------------------------------------

--
-- Structure de la table `icone_metiers`
--

CREATE TABLE `icone_metiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_icone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icone_noire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icone_blanche` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icone_blanche_cercle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `icone_metiers`
--

INSERT INTO `icone_metiers` (`id`, `nom_icone`, `icone_noire`, `icone_blanche`, `icone_blanche_cercle`, `url`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Presentation', 'presentation1578870309.png', 'presentation1600164126.png', 'presentation756010367.png', 'presentation', 5, NULL, '2022-04-26 10:31:59', '2022-05-06 11:36:37'),
(2, 'Blog', 'blog1712487670.png', 'blog1813343945.png', 'blog1949728150.png', 'blog', 5, NULL, '2022-04-26 11:17:24', '2022-05-06 11:36:55'),
(3, 'offre d\'emploi', 'offreemploi1281559863.png', 'offreemploi636384959.png', 'offre1316893208.png', 'offre-emploi', 5, NULL, '2022-04-26 11:32:10', '2022-05-06 11:37:17'),
(4, 'Equipe', 'equipe162741831.png', 'equipe286210670.png', 'equipe1547545432.png', 'equipe', 5, NULL, '2022-04-26 11:34:07', '2022-05-06 11:37:33'),
(5, 'Reference', 'reference343833068.png', 'Reference1367180919.png', 'reference1296240245.png', 'reference', 5, NULL, '2022-04-26 12:13:53', '2022-05-06 11:37:47'),
(6, 'Formations', 'formations76598870.png', 'formations633862910.png', 'formations912066063.png', 'formation', 5, NULL, '2022-04-26 12:14:42', '2022-05-06 11:38:08');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Presentation', 0, 'ab7baeb8-2a88-45c7-93fb-1e6e565c7d59', 'images', 'business_old', 'business_old.jpg', 'image/jpeg', 'public', 'public', 61546, '[]', '[]', '[]', '[]', 1, '2022-04-29 11:24:11', '2022-04-29 11:24:11'),
(2, 'App\\Models\\Presentation', 0, '60710605-95c5-4a98-ad85-6660f2930688', 'images', 'rh', 'rh.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 2, '2022-04-29 11:24:23', '2022-04-29 11:24:23'),
(3, 'App\\Models\\Presentation', 0, 'b164151f-e44a-4fb7-b2db-9f5ffb80f128', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 3, '2022-04-29 11:24:43', '2022-04-29 11:24:43'),
(4, 'App\\Models\\Presentation', 0, 'fa019d00-0d94-44ee-8b11-c211cf3b2db5', 'images', 'communication', 'communication.jpg', 'image/jpeg', 'public', 'public', 54828, '[]', '[]', '[]', '[]', 4, '2022-04-29 11:27:13', '2022-04-29 11:27:13'),
(5, 'App\\Models\\Presentation', 0, '13f296e7-f2a2-4ccc-b1d3-3a099f17f8ef', 'images', 'rh', 'rh.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 5, '2022-04-29 11:29:34', '2022-04-29 11:29:34'),
(6, 'App\\Models\\Presentation', 0, '7b95d356-c656-47b2-a9cf-0941f77f772c', 'images', 'strategie', 'strategie.jpg', 'image/jpeg', 'public', 'public', 49129, '[]', '[]', '[]', '[]', 6, '2022-04-29 11:33:42', '2022-04-29 11:33:42'),
(7, 'App\\Models\\Presentation', 0, 'efebfead-1a80-4e50-bd3b-dfacfdc7f2d6', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 7, '2022-04-29 11:37:12', '2022-04-29 11:37:12'),
(8, 'App\\Models\\Presentation', 0, '9b67be06-7ad8-4d54-8806-97e873aad75c', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 8, '2022-04-29 11:43:21', '2022-04-29 11:43:21'),
(9, 'App\\Models\\Presentation', 0, 'd75d9afa-1569-4606-a4bc-7807c8f55338', 'images', 'business_old', 'business_old.jpg', 'image/jpeg', 'public', 'public', 61546, '[]', '[]', '[]', '[]', 9, '2022-04-29 11:44:43', '2022-04-29 11:44:43'),
(10, 'App\\Models\\Presentation', 0, '11b5418c-24f1-46b0-9d99-8ae51f5bf1d0', 'images', 'communication', 'communication.jpg', 'image/jpeg', 'public', 'public', 54828, '[]', '[]', '[]', '[]', 10, '2022-04-29 11:45:22', '2022-04-29 11:45:22'),
(11, 'App\\Models\\Presentation', 0, '6939f83d-14c0-4373-b21c-0b90821d1465', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 11, '2022-04-29 12:02:11', '2022-04-29 12:02:11'),
(12, 'App\\Models\\Presentation', 0, '7b18cb2c-1c70-48f8-96a8-eaab5652d27e', 'images', 'rhss', 'rhss.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 12, '2022-04-29 12:03:58', '2022-04-29 12:03:58'),
(13, 'App\\Models\\Presentation', 0, '3bcbf604-b09d-4317-91ef-9078098b6f00', 'images', 'rh', 'rh.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 13, '2022-04-29 12:07:57', '2022-04-29 12:07:57'),
(14, 'App\\Models\\Presentation', 0, 'ca443528-1b57-40e2-afec-3d3b80baac46', 'images', 'rh', 'rh.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 14, '2022-04-29 12:08:44', '2022-04-29 12:08:44'),
(15, 'App\\Models\\Presentation', 0, 'eb3a44c7-b2ba-4132-9486-82db327fe8e9', 'images', 'communication', 'communication.jpg', 'image/jpeg', 'public', 'public', 54828, '[]', '[]', '[]', '[]', 15, '2022-04-29 12:09:12', '2022-04-29 12:09:12'),
(16, 'App\\Models\\Presentation', 0, 'e2273e51-7ba1-46e9-80ac-8a6f4ada66d0', 'images', 'rhss', 'rhss.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 16, '2022-04-29 12:10:20', '2022-04-29 12:10:20'),
(17, 'App\\Models\\Presentation', 0, 'd2224c84-c204-4d1e-83a9-45bcfd2e8c2f', 'images', 'rh', 'rh.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 17, '2022-04-29 12:12:26', '2022-04-29 12:12:26'),
(18, 'App\\Models\\Presentation', 0, '303dae7a-af99-4d9d-8798-9d2ac8612b3a', 'images', 'rh', 'rh.jpg', 'image/jpeg', 'public', 'public', 80703, '[]', '[]', '[]', '[]', 18, '2022-04-29 12:13:30', '2022-04-29 12:13:30'),
(19, 'App\\Models\\Presentation', 0, '3927eacc-1c89-4782-891a-623d414df7e4', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 19, '2022-04-29 12:23:51', '2022-04-29 12:23:51'),
(20, 'App\\Models\\Presentation', 0, '179d5b4c-3ab7-4894-81b6-4f1880b061c5', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 20, '2022-04-29 12:24:56', '2022-04-29 12:24:56'),
(21, 'App\\Models\\Presentation', 0, '53a90e28-e78f-45cd-950a-db18ea44800e', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 21, '2022-04-29 12:26:02', '2022-04-29 12:26:02'),
(22, 'App\\Models\\Presentation', 0, '9e384c4f-e9dd-47fe-9d63-766a8e26a57e', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 22, '2022-04-29 14:18:45', '2022-04-29 14:18:45'),
(23, 'App\\Models\\Presentation', 0, '741ea82b-792e-49e6-ba01-3708f9b44559', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 23, '2022-04-29 14:33:27', '2022-04-29 14:33:27'),
(24, 'App\\Models\\Presentation', 0, 'a18f1c46-fe9d-493b-8f11-5435fe8eb0fa', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 24, '2022-04-29 14:34:11', '2022-04-29 14:34:11'),
(25, 'App\\Models\\Presentation', 0, '92c84a21-f6b1-4c26-a132-96b4aab943b6', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 25, '2022-04-29 15:17:36', '2022-04-29 15:17:36'),
(26, 'App\\Models\\Presentation', 0, '4a8657ef-76fc-4557-a008-3c9bb1c8060c', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 26, '2022-04-29 15:18:34', '2022-04-29 15:18:34'),
(27, 'App\\Models\\Presentation', 0, '84fa17bd-8acf-4a4a-9210-5f313cf4ce81', 'images', 'communication', 'communication.jpg', 'image/jpeg', 'public', 'public', 54828, '[]', '[]', '[]', '[]', 27, '2022-04-29 15:20:38', '2022-04-29 15:20:38'),
(28, 'App\\Models\\Presentation', 0, '346353ba-ba77-4580-aee0-765655d424f0', 'images', 'communication', 'communication.jpg', 'image/jpeg', 'public', 'public', 54828, '[]', '[]', '[]', '[]', 28, '2022-04-29 15:21:14', '2022-04-29 15:21:14'),
(29, 'App\\Models\\Presentation', 0, '8cc135f8-4f49-429e-8a48-37d6e3e5e449', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 29, '2022-04-29 15:22:25', '2022-04-29 15:22:25'),
(30, 'App\\Models\\Presentation', 0, '5544515d-fb04-4aee-b497-dfd117984869', 'images', 'risk', 'risk.jpg', 'image/jpeg', 'public', 'public', 36556, '[]', '[]', '[]', '[]', 30, '2022-04-29 15:23:30', '2022-04-29 15:23:30'),
(31, 'App\\Models\\Presentation', 0, '7650fe18-cdc3-4d7e-b567-5d06488283d2', 'images', 'sign', 'sign.png', 'image/png', 'public', 'public', 101153, '[]', '[]', '[]', '[]', 31, '2022-05-11 11:23:52', '2022-05-11 11:23:52'),
(32, 'App\\Models\\Presentation', 0, '3f69e3d6-9d9d-45c8-90ed-b31fbaab3573', 'images', 'vlcsnap-2022-01-10-15h25m41s820', 'vlcsnap-2022-01-10-15h25m41s820.png', 'image/png', 'public', 'public', 5080300, '[]', '[]', '[]', '[]', 32, '2022-05-11 11:25:25', '2022-05-11 11:25:25'),
(33, 'App\\Models\\Presentation', 0, '25fbdbe4-90cc-445f-9b11-d2668cf4ea83', 'images', 'sign', 'sign.png', 'image/png', 'public', 'public', 101153, '[]', '[]', '[]', '[]', 33, '2022-05-11 11:34:13', '2022-05-11 11:34:13'),
(34, 'App\\Models\\Presentation', 0, '713bc56b-3ba6-41d7-8371-7490616807ad', 'images', 'sign', 'sign.png', 'image/png', 'public', 'public', 101153, '[]', '[]', '[]', '[]', 34, '2022-05-11 11:37:00', '2022-05-11 11:37:00'),
(35, 'App\\Models\\Presentation', 0, '96035b1e-2b1e-4008-b15d-1b0c7ba14c33', 'images', 'sign', 'sign.png', 'image/png', 'public', 'public', 101153, '[]', '[]', '[]', '[]', 35, '2022-05-11 11:39:37', '2022-05-11 11:39:37'),
(36, 'App\\Models\\Presentation', 0, '490413a2-de7e-4be0-aa7a-4ad026d896c0', 'images', 'vlcsnap-2022-01-10-15h24m38s758', 'vlcsnap-2022-01-10-15h24m38s758.png', 'image/png', 'public', 'public', 4830040, '[]', '[]', '[]', '[]', 36, '2022-06-02 10:35:33', '2022-06-02 10:35:33');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2022_03_18_173138_create_admins_table', 1),
(10, '2022_03_22_165745_create_permission_tables', 1),
(12, '2022_03_29_175417_add_delete_to_admins_table', 2),
(13, '2022_04_04_122826_create_translates_table', 3),
(16, '2022_04_11_181749_create_page_accueils_table', 4),
(21, '2022_04_27_102815_create_presentations_table', 7),
(22, '2022_04_29_111143_create_media_table', 8),
(24, '2022_05_03_102005_create_expertises_table', 9),
(25, '2022_04_13_160443_create_poles_table', 10),
(27, '2022_04_25_155917_create_icone_metiers_table', 11),
(28, '2022_05_09_105359_create_category_articles_table', 12),
(30, '2022_05_09_104921_create_blogs_table', 13),
(31, '2022_05_12_155848_create_comments_table', 14),
(33, '2022_05_13_102026_create_offre_emplois_table', 15),
(37, '2022_05_19_104934_create_teams_table', 16),
(38, '2022_05_20_105417_create_references_table', 17),
(40, '2022_06_02_142201_create_formations_table', 18),
(41, '2022_06_07_112018_create_candidatures_table', 19);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(1, 'App\\Models\\Admin', 3),
(1, 'App\\Models\\Admin', 4),
(1, 'App\\Models\\Admin', 5),
(2, 'App\\Models\\Admin', 1),
(2, 'App\\Models\\Admin', 3),
(2, 'App\\Models\\Admin', 4),
(2, 'App\\Models\\Admin', 5),
(3, 'App\\Models\\Admin', 1),
(3, 'App\\Models\\Admin', 3),
(3, 'App\\Models\\Admin', 4),
(3, 'App\\Models\\Admin', 5),
(4, 'App\\Models\\Admin', 1),
(4, 'App\\Models\\Admin', 3),
(4, 'App\\Models\\Admin', 4),
(4, 'App\\Models\\Admin', 5),
(5, 'App\\Models\\Admin', 1),
(5, 'App\\Models\\Admin', 2),
(5, 'App\\Models\\Admin', 3),
(5, 'App\\Models\\Admin', 5),
(5, 'App\\Models\\Admin', 6),
(5, 'App\\Models\\Admin', 7),
(6, 'App\\Models\\Admin', 1),
(6, 'App\\Models\\Admin', 2),
(6, 'App\\Models\\Admin', 3),
(6, 'App\\Models\\Admin', 5),
(7, 'App\\Models\\Admin', 1),
(7, 'App\\Models\\Admin', 2),
(7, 'App\\Models\\Admin', 3),
(7, 'App\\Models\\Admin', 5),
(7, 'App\\Models\\Admin', 6),
(7, 'App\\Models\\Admin', 7),
(8, 'App\\Models\\Admin', 1),
(8, 'App\\Models\\Admin', 5),
(9, 'App\\Models\\Admin', 1),
(9, 'App\\Models\\Admin', 5),
(10, 'App\\Models\\Admin', 1),
(10, 'App\\Models\\Admin', 5),
(14, 'App\\Models\\Admin', 6),
(14, 'App\\Models\\Admin', 7);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(1, 'App\\Models\\Admin', 5),
(2, 'App\\Models\\Admin', 3),
(2, 'App\\Models\\Admin', 4),
(3, 'App\\Models\\Admin', 2),
(3, 'App\\Models\\Admin', 6),
(3, 'App\\Models\\Admin', 7);

-- --------------------------------------------------------

--
-- Structure de la table `offre_emplois`
--

CREATE TABLE `offre_emplois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_offre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_alt` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_offre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_post` date DEFAULT NULL,
  `heure_post` time DEFAULT NULL,
  `pole_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offre_emplois`
--

INSERT INTO `offre_emplois` (`id`, `title_offre`, `meta_description`, `meta_title`, `meta_alt`, `content_fr`, `content_en`, `image_offre`, `date_post`, `heure_post`, `pole_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Developpeur web', 'developpement web', 'developpement web', NULL, '<p>developement</p>', '<p>developpement</p>', 'contacts.jpg', '2022-05-16', '15:00:00', 1, 5, '2022-06-10 15:54:25', '2022-05-16 12:04:44', '2022-06-10 15:54:25'),
(2, 'Developpeur web', 'developpement web', 'developpement web', NULL, '<p>Developpeur web</p>', '<p>Developpeur web</p>', 'blog_actuariat.png', '2022-05-17', '11:40:00', 1, 5, NULL, '2022-05-17 09:41:06', '2022-05-17 09:41:06'),
(3, 'IFRS', 'IFRS', 'IFRS', NULL, '<p>IFRS</p>', '<p>IFRS</p>', 'OrgCoral_Ofc-01_Concept-06.jpg', '2022-05-19', '10:52:00', 4, 5, NULL, '2022-05-19 08:52:17', '2022-06-10 15:48:47'),
(4, 'Application Mobile', 'Application Mobile', 'Application Mobile', NULL, '<p>Application Mobile</p>', '<p>Application Mobile</p>', 'OrgCoral_Ofc-01_Concept-06.jpg', '2022-06-10', '16:55:00', 7, 5, NULL, '2022-06-10 15:55:17', '2022-06-10 15:55:17'),
(5, 'Actuaire', 'Actuaire', 'Actuaire', NULL, '<p>Actuaire</p>', '<p>Actuaire</p>', 'OrgCoral_Ofc-01_Concept-06.jpg', '2022-06-10', '16:57:00', 4, 5, NULL, '2022-06-10 15:57:16', '2022-06-10 15:57:16');

-- --------------------------------------------------------

--
-- Structure de la table `page_accueils`
--

CREATE TABLE `page_accueils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page_accueils`
--

INSERT INTO `page_accueils` (`id`, `video`, `nom_entreprise`, `slogant`, `message`, `path`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'fin_1649848104.mp4', 'Aroapartners', 'Dynamisez votre création de valeur', 'Cliquez pour entrer', 'public/files/ssMyuX3WO08G1bWgRruRRBPA2lZagbGyrVPZruZZ.png', 5, NULL, '2022-04-13 14:51:45');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'creer-role', 'admin', '2022-03-25 18:13:26', '2022-06-09 16:53:44'),
(2, 'ajouter-pole', 'admin', '2022-03-25 18:13:46', '2022-03-25 18:13:46'),
(3, 'creer-utilisateur', 'admin', '2022-03-25 18:14:10', '2022-03-25 18:14:10'),
(4, 'modifier utilisateur', 'admin', '2022-03-25 18:14:37', '2022-03-25 18:14:37'),
(5, 'voir-profil', 'admin', '2022-03-25 18:14:52', '2022-03-25 18:14:52'),
(6, 'modifier-profil', 'admin', '2022-03-25 18:15:10', '2022-03-25 18:15:10'),
(7, 'voir-blog', 'admin', '2022-03-25 18:15:25', '2022-03-25 18:15:25'),
(8, 'creer-cle-langue', 'admin', '2022-04-06 11:57:54', '2022-04-06 11:57:54'),
(9, 'modifier-cle-langue', 'admin', '2022-04-06 11:58:29', '2022-04-06 11:58:29'),
(10, 'mise-a-jour-traduction', 'admin', '2022-04-06 11:59:11', '2022-04-06 11:59:11'),
(11, 'creer-formation', 'admin', '2022-06-09 15:27:22', '2022-06-09 15:27:22'),
(12, 'modifier-formation', 'admin', '2022-06-09 15:33:00', '2022-06-09 15:33:00'),
(13, 'supprimer-formation', 'admin', '2022-06-09 16:41:40', '2022-06-09 16:41:40'),
(14, 'voir-reference', 'admin', '2022-06-09 16:42:22', '2022-06-09 16:42:22'),
(15, 'ajouter-reference', 'admin', '2022-06-09 16:43:46', '2022-06-09 16:43:46'),
(16, 'supprimer-reference', 'admin', '2022-06-09 16:45:07', '2022-06-09 16:45:07'),
(17, 'ajouter-offre', 'admin', '2022-06-09 16:46:08', '2022-06-09 16:46:08'),
(18, 'modifier-offre', 'admin', '2022-06-09 16:54:28', '2022-06-09 16:54:28'),
(19, 'supprimer-equipe', 'admin', '2022-06-10 10:00:17', '2022-06-10 10:00:17');

-- --------------------------------------------------------

--
-- Structure de la table `poles`
--

CREATE TABLE `poles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_pole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_noir_pole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_blanc_pole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `poles`
--

INSERT INTO `poles` (`id`, `nom_pole`, `logo_noir_pole`, `logo_blanc_pole`, `url`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'IT / Digital', 'it.png', 'it.png', 'it', 5, '2022-04-20 15:11:49', '2022-05-05 16:54:00'),
(2, 'Risk management', 'risk_management.png', 'risk_management.png', 'risk', 5, '2022-04-20 15:13:16', '2022-05-05 16:55:40'),
(3, 'Business developpement', 'business_developpement.png', 'business_developpement.png', 'business', 5, '2022-04-20 15:13:54', '2022-05-05 16:58:36'),
(4, 'Techniques financières et actuarielles', 'actuariat.png', 'actuariat.png', 'actuariat', 5, '2022-04-20 15:14:48', '2022-05-05 16:58:24'),
(5, 'Strategie', 'strategie.png', 'strategie.png', 'strategie', 5, '2022-04-20 15:15:23', '2022-05-05 17:03:08'),
(6, 'Ressources Humaines / Juridique', 'ressources_humaines.png', 'ressources_humaines.png', 'rh', 5, '2022-04-20 15:15:57', '2022-05-05 17:05:00'),
(7, 'Marketing & Communication', 'com.png', 'com.png', 'communication', 5, '2022-04-20 15:16:38', '2022-05-05 17:05:26');

-- --------------------------------------------------------

--
-- Structure de la table `presentations`
--

CREATE TABLE `presentations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `presentation_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pole_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `presentations`
--

INSERT INTO `presentations` (`id`, `presentation_fr`, `presentation_en`, `image`, `pole_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p>Les transformations numériques façonnent notre quotidien et nos conceptions de l’éfficacité dans un monde en perpétuelle évolution. Nos experts informatiques vous accompagnent dans cette transition technologique, de la conception de vos supports numériques à la sécurité du parc informatique de votre entreprise ou organisation.<br>Notre approche intègre accompagnement pratique et opérationnel. Le lab digital AROA_Lab, composé de jeunes talents à la pointe des dernières technologies, connaissant le marché local et conscients de ses réalités, conçoit vos projets de transformation digitale en mettant en œuvre une démarche et des techniques élaborées ayant fait leurs preuves.</p>', '<p>Digital transformations are shaping our daily lives and our concepts of efficiency in a constantly changing world. Our IT experts will support you in this technological transition, from the design of your digital media to the security of your company\'s or organisation\'s IT assets.</p>', 'business.jpg', 1, 5, '2022-04-27 10:52:42', '2022-06-13 17:40:30', NULL),
(2, '<p>Le cabinet Aroa Partners vous accompagne dans vos démarches d\'amélioration continue et de recherche de la performance à travers la mise en place d’une équipe pluridimensionnelle.<br>Nous bâtissons ensemble des solutions alignées sur vos besoins et ceux de votre secteur d’activités.<br><strong>Nos différents services :</strong></p><ul><li>L’accompagnement et le pilotage du processus de repérage et de recrutement</li><li>La gestion de l’organisation et de l’administration du personnel</li><li>La formation</li></ul>', NULL, 'business_old.jpg', 6, 5, '2022-04-27 11:18:57', '2022-04-29 15:25:00', NULL),
(3, '<p>Forts des années d’expériences acquises à l’international et de leur connaissance du continent africain, nos experts en Business development élaborent des Stratégies commerciales afin de maximiser les résultats de votre entreprise.<br>Notre accompagnement tient compte des impératifs opérationnels du marché en mettant en place des leviers d’évolution pertinents, durables et surtout à valeur ajoutée significative. Conscients du potentiel du continent, en plein essor économique, nous vous guidons dans la recherche de nouvelles opportunités, la pénétration de nouveaux marchés ou le lancement de produits.<br>Dynamisez la croissance de votre entreprise en nous confiant vos stratégies et passez à la vitesse supérieure.</p>', '<p>test</p>', 'actuariats.jpg', 3, 5, '2022-04-27 17:52:00', '2022-06-13 17:28:53', NULL),
(4, '<p>AROA dispose d’une expertise et des expériences avérées dans les domaines financiers, de l’assurance, de la réassurance et de l’actuariat (Pricing, Reserving, Risk Management, …).<br>Nos consultants, cumulent plusieurs dizaines d’années d’expérience dans de grands groupes et cabinets internationaux qui leur ont permis de développer des expertises solides et une vision holistique des problématiques de ces domaines.<br>AROA vous accompagne de manière efficace avec rigueur et professionnalisme dans la recherche de solutions répondant à vos enjeux financiers et règlementaires.</p>', NULL, 'actuariat33.jpg', 4, 5, '2022-05-04 17:11:37', '2022-05-04 17:11:37', NULL),
(5, '<p>Créer de la valeur. Pourquoi, comment, quand et pour qui ? Ces questions sont au centre de vos nombreuses réflexions de Direction.<br>A vos côtés, définissons l’orientation idéale à donner à votre entreprise.<br>Identifions les actions permettant de répondre aux attentes de toutes les parties prenantes (actionnaires, clients, salariés etc..), en mobilisant votre environnement, vos ressources et compétences pour bâtir un avantage concurrentiel pérenne.</p>', NULL, 'strategie.jpg', 5, 5, '2022-05-04 17:13:14', '2022-05-04 17:13:14', NULL),
(6, '<p>Concevoir des stratégies d’accompagnement en Communication 360 et Marketing, accroître votre visibilité et vous accorder une place de choix dans le cœur de vos clients est le pari des équipes de Communication et Marketing du cabinet AROA Partners.<br>Confier vos campagnes à nos experts, vous confèrent l’avantage de choisir une équipe dynamique et créative, en phase avec les évolutions des techniques de communication et marketing du marché africain et international.<br>Que ce soit sur le digital, sur les médias ou hors-média, vous serez vu et reconnu.</p>', NULL, 'communication.jpg', 7, 5, '2022-05-04 17:14:39', '2022-05-04 17:14:39', NULL),
(7, '<p>Le Risk Management est un véritable outil de pilotage opérationnel et d\'aide à la décision stratégique pour les entreprises.<br>AROA, cabinet de conseil spécialisé en Risk Management et Actuariat, accompagne les entreprises dans l\'anticipation et la maitrise des risques inhérents à leurs activités.<br>Nous apportons une véritable valeur stratégique aux entreprises en accompagnant les équipes de directions dans la gestion des risques.<br>Grâce à nos experts, nous vous assistons dans la mise en place d’un dispositif de risques maitrisés et vous proposons des solutions de traitement optimisées.</p>', NULL, 'risk.jpg', 2, 5, '2022-05-04 17:17:14', '2022-05-04 17:17:14', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pole_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `references`
--

INSERT INTO `references` (`id`, `title`, `description_fr`, `description_en`, `pole_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'ASSUREURS AFRICAINS', '<ul><li>Due diligence et assistance pré-acquisition dans plusieurs pays sub-sahariens</li><li>Audit des programmes de réassurance et optimisation des processus en Afrique</li><li>Audit actuariel et revue des réserves pour un grand groupe marocain d’assurance Réforme du secteur des assurances d’un pays d’Afrique centrale</li><li>Audit et réforme d’une société nationale d’assurances, Afrique centrale.</li></ul>', NULL, 1, 5, NULL, '2022-06-02 13:44:35', '2022-06-02 13:44:35'),
(6, 'ASSUREURS TRANSPORT / CRÉDIT', '<ul><li>Assistance à la rédaction des politiques du modèle interne du Groupe (Gouvernance, validation, politique de changement, …)</li><li>Gap Analysis sur les états de reporting Pilier 3 et sur les rapports narratifs</li><li>Revue actuarielle annuelle des réserves non-vie de l’ensemble du Groupe</li><li>Revue de la Formule Standard (Groupe et Solo) dans le cadre du projet Solvabilité 2</li><li>Revue actuarielle des réserves d’un portefeuille en Run-Off dans le cadre d’une garantie de passif</li><li>Assistance à la validation du modèle interne pour les différentes entités du Groupe Implémentation de modèle interne partiel pour les entités du Groupe.</li></ul>', NULL, 1, 5, NULL, '2022-06-02 13:49:03', '2022-06-02 13:49:03'),
(7, 'INSTITUTIONS INTERNATIONALES', '<ul><li>Plusieurs formations relatives à Solvabilité 2 à l’ensemble du marché</li><li>Test de la formule standard sur le marché</li><li>Workshop à l’ensemble des actuaires de la sous-région sur le provisionnement l’exercice de détermination des exigences réglementaires en capital Chongli (China) – 2017 – Supervisory Capacity Building: Actuarial services : Prudential Supervision and risk management insurance.</li></ul>', NULL, 1, 5, NULL, '2022-06-02 13:49:45', '2022-06-02 13:49:45'),
(8, 'BANQUES', '<ul><li>Central Securities Depositary (CSD) Création d’entités égales, gestion de la transformation</li><li>Accompagnement dans les négociations avec les régulateurs</li><li>Risk &amp; Regulatory Compliance</li><li>Mise en place de la fonction Compliance pour le CSD Investment Banking Gestion et mise en place des Equity Derivatives en zones EMEA, APAC, BUNA et émergents</li><li>Management du Front office au back office, P&amp;L validation pour les comptes</li><li>Asset Management &amp; Asset Servicing Private Banking, Retail and Corporate Banking Equity Primary Markets.</li></ul>', NULL, 1, 5, NULL, '2022-06-02 13:54:48', '2022-06-02 13:54:48'),
(9, 'RÉASSUREUR INTERNATIONAL', '<ul><li>Assistance à la rédaction des politiques du modèle interne de Groupe (Gouvernance du modèle, politique de validation du modèle, politique de changement du modèle, …)</li><li>Gap Analysis sur les états de reporting Pilier 3 et sur les rapports narratifs</li><li>Revue actuarielle annuelle des réserves non-vie de l’ensemble du Groupe</li><li>Revue de la Formule Standard (Groupe et Solo) dans le cadre du projet Solvabilité 2</li><li>Revue actuarielle des réserves d’un portefeuille en Run-Off dans le cadre d’une garantie de passif.</li></ul>', NULL, 1, 5, NULL, '2022-06-02 13:55:26', '2022-06-02 13:55:26'),
(10, 'ASSUREUR NATIONAL', '<ul><li>Définition du cadre méthodologique pour l’Appétence au risque de la compagnie</li><li>Choix d’une plateforme de développement pour le modèle d’Appétence au risque</li><li>Optimisation de la rétrocession</li><li>Assistance à la rédaction du rapport narratif (RSR et SFCR) et de politiques</li><li>Analyse des risques en matière de provisionnement</li><li>Audit et validation des modèles actuariels et financiers</li><li>Audit des systèmes de gestion et d’information</li><li>Évaluation indépendante des modèles internes</li><li>Valorisation d’options</li><li>Assistance technique auprès des services commerciaux.</li></ul>', NULL, 1, 5, NULL, '2022-06-02 13:56:05', '2022-06-02 13:56:05'),
(11, 'BANCASSURANCE', '<ul><li>Audit des provisions Réalisation de l’étude QIS 5 pour les 2 captives du Groupe Provisionnement des contrats en Unité de Comptes</li><li>Études et analyse actuarielles et juridiques des développements</li><li>IT Assistance actuarielle et technique pour le lancement de nouveaux produits</li><li>Assistance technique auprès des équipes commerciales et IT Provisionnement et gestion technique des contrats de prévoyance</li><li>ALM Gestion du capital.</li></ul>', NULL, 1, 5, NULL, '2022-06-02 13:56:36', '2022-06-02 13:56:36');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2022-03-25 18:15:57', '2022-03-25 18:15:57'),
(2, 'editeur', 'admin', '2022-03-25 18:16:30', '2022-06-09 13:35:25'),
(3, 'visiteur', 'admin', '2022-03-25 18:17:05', '2022-03-25 18:17:05'),
(4, 'rh', 'admin', '2022-06-09 13:47:53', '2022-06-09 13:47:53');

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(5, 3),
(5, 4),
(6, 1),
(7, 1),
(7, 3),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(11, 1),
(11, 4),
(12, 1),
(12, 4),
(13, 1),
(14, 1),
(14, 3),
(15, 1),
(16, 1),
(17, 1),
(17, 4),
(18, 1),
(18, 4);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0700000000',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `pole_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`id`, `nom`, `prenom`, `email`, `poste`, `telephone`, `photo`, `facebook`, `twitter`, `linkedin`, `status`, `pole_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KOFFI INNOCENT-KERICSON', 'DIBY', 'kericson.diby@gmail.com', 'Développeur Web', '0700000000', 'Kerickson_1652972207.jpg', NULL, NULL, NULL, 1, 1, 5, '2022-05-19 16:49:28', '2022-05-19 14:56:47', '2022-05-19 16:49:28'),
(2, 'Akichi', 'Jean-Philippe', 'jeanphilippe.akichi@aroapartners.com', 'Développeur Web', '0758650487', 'AKICHI Jean-Phillipe02_1652972907.jpg', NULL, NULL, NULL, 1, 1, 5, NULL, '2022-05-19 15:08:28', '2022-05-19 15:08:28'),
(3, 'DJE', 'Emannuel', 'emmanuel.dje@aroapartners.com', 'Développeur Mobile', '0700000000', 'PHOTO-2022-02-15-09-44-59_1652972993.png', NULL, NULL, NULL, 1, 1, 5, NULL, '2022-05-19 15:09:54', '2022-05-19 15:09:54'),
(4, 'Kangah', 'Jean Mari', 'jeanmari.kangah@aroapartners.com', 'Manager IT', '0700000000', 'KANGAH041_1652975797.jpg', NULL, NULL, NULL, 1, 1, 5, NULL, '2022-05-19 15:56:37', '2022-05-19 15:56:37'),
(5, 'DEA', 'Vatié', 'vatie.dea@aroapartners.com', 'Chargée de gestion administrative', '07000000000', 'DEA_1652975931.jpg', NULL, NULL, NULL, 1, 5, 5, NULL, '2022-05-19 15:58:52', '2022-05-19 15:58:52'),
(6, 'KOUADIO', 'Leslie', 'leslie.kouadio@aroapartners.com', 'Chargée de communication', '0700000000', 'Célina KOUADIO_1652976015.jpg', NULL, NULL, NULL, 1, 7, 5, NULL, '2022-05-19 16:00:15', '2022-05-19 16:00:15'),
(7, 'KAMAN', 'Diana', 'diana.kaman@aroapartners.com', 'Directrice', '07000000000', 'DSC_9525 2_1652976090.JPG', NULL, NULL, NULL, 1, 3, 5, NULL, '2022-05-19 16:01:30', '2022-05-19 16:01:30'),
(8, 'DIBY', 'Koffi Innocent-Kericson', 'kericson.diby@aroapartners.com', 'Développeur Web', '0758084198', 'Kerickson_1652979412.jpg', NULL, NULL, NULL, 1, 1, 5, NULL, '2022-05-19 16:56:52', '2022-05-19 16:56:52');

-- --------------------------------------------------------

--
-- Structure de la table `translates`
--

CREATE TABLE `translates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `english` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `french` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `translates`
--

INSERT INTO `translates` (`id`, `lang_key`, `english`, `french`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Impulsez votre création de valeur', 'Empowering your growth', 'Impulsez votre création de valeur', 1, '2022-04-05 11:58:15', '2022-04-06 11:39:17'),
(3, 'Cliquez pour entrer', 'Click to enter', 'Cliquez pour entrer', 1, '2022-04-05 14:40:10', '2022-06-13 15:18:58'),
(4, 'Accueil', 'Home', 'Accueil', 1, '2022-04-05 14:45:16', '2022-04-06 10:50:22'),
(5, 'Emploi', 'Job', 'Emploi', 1, '2022-04-05 14:47:04', '2022-04-06 11:22:08'),
(6, 'Blog', 'Blog', 'Blog', 1, '2022-04-05 15:01:14', '2022-04-06 11:21:39'),
(7, 'Presentation', NULL, 'Presentation', 1, '2022-04-05 16:38:43', '2022-04-26 11:16:17'),
(8, 'Références', 'References', 'Références', 1, '2022-04-05 16:39:06', '2022-06-13 14:19:53'),
(9, 'Messages', 'Messages', 'Messages', 1, '2022-04-05 16:39:23', '2022-04-06 11:54:35'),
(10, 'Email', NULL, 'Email', 1, '2022-04-05 16:39:34', '2022-04-06 11:24:14'),
(11, 'Password', 'Mot de passe', 'Password', 1, '2022-04-05 16:39:49', '2022-04-06 11:33:26'),
(12, 'Anglais', 'English', 'Anglais', 1, '2022-04-05 18:04:36', '2022-04-06 11:18:01'),
(13, 'Français', 'French', 'Français', 1, '2022-04-05 18:04:44', '2022-04-06 11:27:26'),
(14, 'Temps', 'Time', 'Temps', 1, '2022-04-05 18:31:58', '2022-04-06 11:33:46'),
(15, 'Strategie', 'Strategy', 'Strategie', 5, '2022-04-13 11:53:34', '2022-06-13 14:15:32'),
(16, 'Business developpement', NULL, 'Business developpement', 5, '2022-04-13 11:55:37', '2022-04-13 11:55:37'),
(17, 'Ressources Humaines / Juridique', NULL, 'Ressources Humaines / Juridique', 5, '2022-04-13 11:55:47', '2022-04-13 11:55:47'),
(18, 'IT / Digital', NULL, 'IT / Digital', 5, '2022-04-13 11:56:00', '2022-04-14 10:34:46'),
(19, 'Risk management', NULL, 'Risk management', 5, '2022-04-13 11:56:06', '2022-04-13 11:56:06'),
(20, 'Marketing & Communication', NULL, 'Marketing & Communication', 5, '2022-04-13 11:56:13', '2022-04-13 11:56:13'),
(21, 'Techniques financières et actuarielles', 'Financial and actuarial techniques', 'Techniques financières et actuarielles', 5, '2022-04-13 11:56:22', '2022-06-13 15:21:43'),
(22, 'Dynamisez votre création de valeur', 'Boost your value creation', 'Dynamisez votre création de valeur', 5, '2022-04-13 14:36:21', '2022-06-13 15:19:50'),
(24, 'Koffi Innocent-kericson', NULL, 'Koffi Innocent-kericson', 5, '2022-04-14 10:24:47', '2022-04-14 10:24:47'),
(25, 'Aroapartners', 'Aroapartners', 'Aroapartners', 5, '2022-04-14 10:27:09', '2022-06-13 14:17:31'),
(26, 'Business Development', NULL, 'Business Development', 1, '2022-04-25 14:56:45', '2022-04-25 14:56:45'),
(27, 'offre d\'emploi', NULL, 'offre d\'emploi', 5, '2022-04-26 11:32:10', '2022-04-26 11:32:10'),
(28, 'Equipe', NULL, 'Equipe', 5, '2022-04-26 11:34:07', '2022-04-26 11:34:07'),
(29, 'Reference', 'Reference', 'Référence', 5, '2022-04-26 12:13:53', '2022-06-13 14:21:47'),
(30, 'Formations', NULL, 'Formations', 5, '2022-04-26 12:14:42', '2022-04-26 12:14:42'),
(31, '<p>Les transformations numériques façonnent notre quotidien et nos conceptions de l’éfficacité dans un monde en perpétuelle évolution. Nos experts informatiques vous accompagnent dans cette transition technologique, de la conception de vos supports numériques à la sécurité du parc informatique de votre entreprise ou organisation.<br>Notre approche intègre accompagnement pratique et opérationnel. Le lab digital AROA_Lab, composé de jeunes talents à la pointe des dernières technologies, connaissant le marché local et conscients de ses réalités, conçoit vos projets de transformation digitale en mettant en œuvre une démarche et des techniques élaborées ayant fait leurs preuves.</p>', NULL, '<p>Les transformations numériques façonnent notre quotidien et nos conceptions de l’éfficacité dans un monde en perpétuelle évolution. Nos experts informatiques vous accompagnent dans cette transition technologique, de la conception de vos supports numériques à la sécurité du parc informatique de votre entreprise ou organisation.<br>Notre approche intègre accompagnement pratique et opérationnel. Le lab digital AROA_Lab, composé de jeunes talents à la pointe des dernières technologies, connaissant le marché local et conscients de ses réalités, conçoit vos projets de transformation digitale en mettant en œuvre une démarche et des techniques élaborées ayant fait leurs preuves.</p>', 5, '2022-04-27 10:52:42', '2022-04-27 10:52:42'),
(32, '<p>Le cabinet Aroa Partners vous accompagne dans vos démarches d\'amélioration continue et de recherche de la performance à travers la mise en place d’une équipe pluridimensionnelle.<br>Nous bâtissons ensemble des solutions alignées sur vos besoins et ceux de votre secteur d’activités.<br><strong>Nos différents services :</strong></p><ul><li>L’accompagnement et le pilotage du processus de repérage et de recrutement</li><li>La gestion de l’organisation et de l’administration du personnel</li><li>La formation</li></ul>', NULL, '<p>Le cabinet Aroa Partners vous accompagne dans vos démarches d\'amélioration continue et de recherche de la performance à travers la mise en place d’une équipe pluridimensionnelle.<br>Nous bâtissons ensemble des solutions alignées sur vos besoins et ceux de votre secteur d’activités.<br><strong>Nos différents services :</strong></p><ul><li>L’accompagnement et le pilotage du processus de repérage et de recrutement</li><li>La gestion de l’organisation et de l’administration du personnel</li><li>La formation</li></ul>', 5, '2022-04-27 11:18:57', '2022-04-29 15:25:00'),
(33, '<p>Forts des années d’expériences acquises à l’international et de leur connaissance du continent africain, nos experts en Business development élaborent des Stratégies commerciales afin de maximiser les résultats de votre entreprise.<br>Notre accompagnement tient compte des impératifs opérationnels du marché en mettant en place des leviers d’évolution pertinents, durables et surtout à valeur ajoutée significative. Conscients du potentiel du continent, en plein essor économique, nous vous guidons dans la recherche de nouvelles opportunités, la pénétration de nouveaux marchés ou le lancement de produits.<br>Dynamisez la croissance de votre entreprise en nous confiant vos stratégies et passez à la vitesse supérieure.</p>', NULL, '<p>Forts des années d’expériences acquises à l’international et de leur connaissance du continent africain, nos experts en Business development élaborent des Stratégies commerciales afin de maximiser les résultats de votre entreprise.<br>Notre accompagnement tient compte des impératifs opérationnels du marché en mettant en place des leviers d’évolution pertinents, durables et surtout à valeur ajoutée significative. Conscients du potentiel du continent, en plein essor économique, nous vous guidons dans la recherche de nouvelles opportunités, la pénétration de nouveaux marchés ou le lancement de produits.<br>Dynamisez la croissance de votre entreprise en nous confiant vos stratégies et passez à la vitesse supérieure.</p>', 5, '2022-04-27 17:52:00', '2022-05-11 11:29:29'),
(34, '<ul><li>Installation et configuration du matériel</li><li>Installation et configuration des applications</li><li>Gestion du réseau</li><li>Maintenance préventive</li><li>Gestion du système d’information</li></ul>', NULL, '<ul><li>Installation et configuration du matériel</li><li>Installation et configuration des applications</li><li>Gestion du réseau</li><li>Maintenance préventive</li><li>Gestion du système d’information</li></ul>', 5, '2022-05-03 12:24:26', '2022-05-03 12:24:26'),
(35, '<ul><li>Identifier, analyser et évaluer les risques : activités, process, système d’information, outils de production, événements extérieurs…</li><li>Élaborer une cartographie des risques par entreprise, par direction/métier, par projet</li><li>Animer les ateliers d’identification et de hiérarchisation des risques</li></ul>', NULL, '<ul><li>Identifier, analyser et évaluer les risques : activités, process, système d’information, outils de production, événements extérieurs…</li><li>Élaborer une cartographie des risques par entreprise, par direction/métier, par projet</li><li>Animer les ateliers d’identification et de hiérarchisation des risques</li></ul>', 5, '2022-05-03 12:25:27', '2022-05-03 12:25:27'),
(36, 'ANALYSE, CARTOGRAPHIE ET HIÉRARCHISATION DES RISQUES TECHNIQUES, OPÉRATIONNELS, STRATÉGIQUES ET FINANCIERS', NULL, 'ANALYSE, CARTOGRAPHIE ET HIÉRARCHISATION DES RISQUES TECHNIQUES, OPÉRATIONNELS, STRATÉGIQUES ET FINANCIERS', 5, '2022-05-03 14:24:04', '2022-05-03 14:24:04'),
(37, '<ul><li>Déterminer la politique de gestion des risques et évaluer l’appétence des dirigeants à la prise de risque</li><li>Établir une ingénierie de prévention sur les zones à risques</li><li>Déterminer des plans de réduction des risques et en assurer le suivi</li></ul>', NULL, '<ul><li>Déterminer la politique de gestion des risques et évaluer l’appétence des dirigeants à la prise de risque</li><li>Établir une ingénierie de prévention sur les zones à risques</li><li>Déterminer des plans de réduction des risques et en assurer le suivi</li></ul>', 5, '2022-05-03 14:38:59', '2022-05-03 14:38:59'),
(38, 'PREVENTION ET GESTION DES RISQUES', NULL, 'PREVENTION ET GESTION DES RISQUES', 5, '2022-05-03 14:38:59', '2022-05-03 14:38:59'),
(39, 'SUPPORT IT', 'IT SUPPORT', 'SUPPORT IT', 5, '2022-05-03 14:41:06', '2022-06-13 14:15:53'),
(40, '<ul><li>Idea to Product to Market</li><li>Développement d’applications métiers</li><li>Développement d’applications web</li><li>Développement de sites web</li><li>Développement d’applications mobiles</li><li>Languages et technologies:<ul><li>Architecture micro-service (Laravel,Spring boot,Django)</li><li>Mobile: Dart, java, React Native</li><li>Web: PHP, JavaScript , html/CSS, VueJS, React JS, CMS, Django/flask</li><li>Base de données : programmation SQL, PostgreSQL, MySQL, SQL Server , Oracle, FireBASE</li><li>Data engineer: Python,R</li></ul></li></ul>', NULL, '<ul><li>Idea to Product to Market</li><li>Développement d’applications métiers</li><li>Développement d’applications web</li><li>Développement de sites web</li><li>Développement d’applications mobiles</li><li>Languages et technologies:<ul><li>Architecture micro-service (Laravel,Spring boot,Django)</li><li>Mobile: Dart, java, React Native</li><li>Web: PHP, JavaScript , html/CSS, VueJS, React JS, CMS, Django/flask</li><li>Base de données : programmation SQL, PostgreSQL, MySQL, SQL Server , Oracle, FireBASE</li><li>Data engineer: Python,R</li></ul></li></ul>', 5, '2022-05-04 11:17:53', '2022-05-04 11:17:53'),
(41, 'APPLICATION', 'APPLICATION', 'APPLICATION', 5, '2022-05-04 11:17:53', '2022-06-13 14:17:38'),
(42, '<ul><li>Analyse des risques liés aux systèmes d’information de l’entreprise</li><li>Conception et gestion des procédures pour la prémunition contre les intrusions ou sinistres</li><li>Installation des outils de sécurité informatique</li><li>Surveillance des infrastructures</li><li>Mise en place d’une procédure de continuité de l’activité</li></ul>', NULL, '<ul><li>Analyse des risques liés aux systèmes d’information de l’entreprise</li><li>Conception et gestion des procédures pour la prémunition contre les intrusions ou sinistres</li><li>Installation des outils de sécurité informatique</li><li>Surveillance des infrastructures</li><li>Mise en place d’une procédure de continuité de l’activité</li></ul>', 5, '2022-05-04 14:12:41', '2022-05-04 14:12:41'),
(43, 'SECURITE INFORMATIQUE', NULL, 'SECURITE INFORMATIQUE', 5, '2022-05-04 14:12:41', '2022-05-04 14:12:41'),
(44, 'EXPERTISES', NULL, 'EXPERTISES', 5, '2022-05-04 14:55:33', '2022-05-04 14:55:33'),
(46, '<p>Créer de la valeur. Pourquoi, comment, quand et pour qui ? Ces questions sont au centre de vos nombreuses réflexions de Direction.<br>A vos côtés, définissons l’orientation idéale à donner à votre entreprise.<br>Identifions les actions permettant de répondre aux attentes de toutes les parties prenantes (actionnaires, clients, salariés etc..), en mobilisant votre environnement, vos ressources et compétences pour bâtir un avantage concurrentiel pérenne.</p>', NULL, '<p>Créer de la valeur. Pourquoi, comment, quand et pour qui ? Ces questions sont au centre de vos nombreuses réflexions de Direction.<br>A vos côtés, définissons l’orientation idéale à donner à votre entreprise.<br>Identifions les actions permettant de répondre aux attentes de toutes les parties prenantes (actionnaires, clients, salariés etc..), en mobilisant votre environnement, vos ressources et compétences pour bâtir un avantage concurrentiel pérenne.</p>', 5, '2022-05-04 17:13:14', '2022-06-08 10:15:58'),
(48, '<p>Le Risk Management est un véritable outil de pilotage opérationnel et d\'aide à la décision stratégique pour les entreprises.<br>AROA, cabinet de conseil spécialisé en Risk Management et Actuariat, accompagne les entreprises dans l\'anticipation et la maitrise des risques inhérents à leurs activités.<br>Nous apportons une véritable valeur stratégique aux entreprises en accompagnant les équipes de directions dans la gestion des risques.<br>Grâce à nos experts, nous vous assistons dans la mise en place d’un dispositif de risques maitrisés et vous proposons des solutions de traitement optimisées.</p>', NULL, '<p>Le Risk Management est un véritable outil de pilotage opérationnel et d\'aide à la décision stratégique pour les entreprises.<br>AROA, cabinet de conseil spécialisé en Risk Management et Actuariat, accompagne les entreprises dans l\'anticipation et la maitrise des risques inhérents à leurs activités.<br>Nous apportons une véritable valeur stratégique aux entreprises en accompagnant les équipes de directions dans la gestion des risques.<br>Grâce à nos experts, nous vous assistons dans la mise en place d’un dispositif de risques maitrisés et vous proposons des solutions de traitement optimisées.</p>', 5, '2022-05-04 17:17:14', '2022-05-04 17:17:14'),
(49, '<ul><li>Docker</li><li>Kubernetes</li><li>Amazon Web Service</li><li>Azure</li><li>Prometheus</li><li>GitLab CI/CD</li><li>Jenkins</li><li>Ansible</li></ul>', NULL, '<ul><li>Docker</li><li>Kubernetes</li><li>Amazon Web Service</li><li>Azure</li><li>Prometheus</li><li>GitLab CI/CD</li><li>Jenkins</li><li>Ansible</li></ul>', 5, '2022-05-06 14:51:37', '2022-05-06 14:51:37'),
(50, 'DEVOPS', NULL, 'DEVOPS', 5, '2022-05-06 14:51:37', '2022-05-06 14:51:37'),
(51, '<ul><li>Conduite des études de terrains et benchmark (études de marchés, identifications de partenaires potentiels, des aides, des subventions &amp; des financements disponibles).</li><li>Accompagnement sur mesure à toutes les étapes de la mise en place des projets d’implantations et de déploiement des partenariats locaux (industriels, commerciaux, R&amp;D, opérations de fusion et acquisition).</li></ul>', NULL, '<ul><li>Conduite des études de terrains et benchmark (études de marchés, identifications de partenaires potentiels, des aides, des subventions &amp; des financements disponibles).</li><li>Accompagnement sur mesure à toutes les étapes de la mise en place des projets d’implantations et de déploiement des partenariats locaux (industriels, commerciaux, R&amp;D, opérations de fusion et acquisition).</li></ul>', 5, '2022-05-06 15:05:38', '2022-05-06 15:05:38'),
(52, '<ul><li>Business Development, structuration d’un réseau de distribution &amp; de partenaires techniques locaux suivant objectifs, planning et budgets validés conjointement.</li><li>Assistance dans le processus de recrutement et à la formation continue des équipes dans le respect des valeurs, en tenant compte des spécificités socioculturelles locales.</li></ul>', NULL, '<ul><li>Business Development, structuration d’un réseau de distribution &amp; de partenaires techniques locaux suivant objectifs, planning et budgets validés conjointement.</li><li>Assistance dans le processus de recrutement et à la formation continue des équipes dans le respect des valeurs, en tenant compte des spécificités socioculturelles locales.</li></ul>', 5, '2022-05-06 15:29:54', '2022-05-06 15:29:54'),
(53, '<ul><li>Support à la planification et accompagnement à la carte des équipes dans leurs actions de prospections et leurs participations à des salons professionnels, ainsi qu’à des manifestations internationales.</li></ul>', NULL, '<ul><li>Support à la planification et accompagnement à la carte des équipes dans leurs actions de prospections et leurs participations à des salons professionnels, ainsi qu’à des manifestations internationales.</li></ul>', 5, '2022-05-06 15:35:34', '2022-05-06 15:35:34'),
(54, '<ul><li>Etude de marché</li><li>Lancement de produit</li><li>Accompagnement stratégique et opérationnel</li><li>Design et conception print</li><li>Benchmarch</li><li>Identité visuelle</li><li>Buyer Persona</li><li>Positionnement Média</li></ul>', NULL, '<ul><li>Etude de marché</li><li>Lancement de produit</li><li>Accompagnement stratégique et opérationnel</li><li>Design et conception print</li><li>Benchmarch</li><li>Identité visuelle</li><li>Buyer Persona</li><li>Positionnement Média</li></ul>', 5, '2022-05-06 15:38:00', '2022-05-06 15:38:00'),
(55, 'STRATÉGIES MARKETING', NULL, 'STRATÉGIES MARKETING', 5, '2022-05-06 15:38:00', '2022-05-06 15:38:00'),
(56, '<ul><li>Maquette (Architecture, Wireframe)</li><li>UI, UX Design</li><li>Sécurité Web</li><li>Développement technique du site (Site dynamique, responsive, moderne, intelligent)</li><li>Ergonomie</li></ul>', NULL, '<ul><li>Maquette (Architecture, Wireframe)</li><li>UI, UX Design</li><li>Sécurité Web</li><li>Développement technique du site (Site dynamique, responsive, moderne, intelligent)</li><li>Ergonomie</li></ul>', 5, '2022-05-06 15:39:36', '2022-05-06 15:39:36'),
(57, 'CREATION / REFONTE SITE WEB', NULL, 'CREATION / REFONTE SITE WEB', 5, '2022-05-06 15:39:36', '2022-05-06 15:39:36'),
(58, '<ul><li>Production de contenu (Textes, images, vidéos)</li><li>Infographie</li><li>Direction Artistique</li></ul>', NULL, '<ul><li>Production de contenu (Textes, images, vidéos)</li><li>Infographie</li><li>Direction Artistique</li></ul>', 5, '2022-05-06 15:40:44', '2022-05-06 15:40:44'),
(59, 'ARCHITECTURE DE CONTENUS', NULL, 'ARCHITECTURE DE CONTENUS', 5, '2022-05-06 15:40:44', '2022-05-06 15:40:44'),
(60, '<ul><li>SEO</li><li>SEA</li><li>Google Ads</li><li>Facebook Ads</li><li>Instagram Ads</li><li>LinkedIn Ads</li></ul>', NULL, '<ul><li>SEO</li><li>SEA</li><li>Google Ads</li><li>Facebook Ads</li><li>Instagram Ads</li><li>LinkedIn Ads</li></ul>', 5, '2022-05-06 15:43:06', '2022-05-06 15:43:06'),
(61, 'REFERENCEMENT / PUBLICITE WEB', NULL, 'REFERENCEMENT / PUBLICITE WEB', 5, '2022-05-06 15:43:06', '2022-05-06 15:43:06'),
(62, '<ul><li>Data Analyse</li><li>Suivi de traffic (Rapport personnalisé et indicateur KPI)</li><li>Tableau de flux budgétaire</li></ul>', NULL, '<ul><li>Data Analyse</li><li>Suivi de traffic (Rapport personnalisé et indicateur KPI)</li><li>Tableau de flux budgétaire</li></ul>', 5, '2022-05-06 15:45:29', '2022-05-06 15:45:29'),
(63, 'ANALYTICS', NULL, 'ANALYTICS', 5, '2022-05-06 15:45:29', '2022-05-06 15:45:29'),
(64, '<ul><li>Contrôle de conformité du site (Rapidité, Ergonomie, Sécurité)</li><li>Rapport de présence digitale</li><li>Rapport de conformité</li></ul>', NULL, '<ul><li>Contrôle de conformité du site (Rapidité, Ergonomie, Sécurité)</li><li>Rapport de présence digitale</li><li>Rapport de conformité</li></ul>', 5, '2022-05-06 15:46:20', '2022-05-06 15:46:20'),
(65, 'AUDIT', NULL, 'AUDIT', 5, '2022-05-06 15:46:21', '2022-05-06 15:46:21'),
(66, '<ul><li>Etude de poste, d’environnement et de contexte</li><li>Sourcing : vivier candidats qualifiés, annonces, recherches CVthèques et réseaux sociaux professionnels</li><li>Evaluation : entretien face à face, questionnaires de personnalité, prises de références</li><li>Sélection : présentation d’une sélection de candidatures accompagnée de l’avis du consultant.</li></ul>', NULL, '<ul><li>Etude de poste, d’environnement et de contexte</li><li>Sourcing : vivier candidats qualifiés, annonces, recherches CVthèques et réseaux sociaux professionnels</li><li>Evaluation : entretien face à face, questionnaires de personnalité, prises de références</li><li>Sélection : présentation d’une sélection de candidatures accompagnée de l’avis du consultant.</li></ul>', 5, '2022-05-06 15:48:29', '2022-05-06 15:48:29'),
(67, 'PROCESSUS DE RECRUTEMENT', NULL, 'PROCESSUS DE RECRUTEMENT', 5, '2022-05-06 15:48:29', '2022-05-06 15:48:29'),
(68, '<ul><li>Mise en place de votre administration</li><li>Optimisation de l’organisation des postes de travail</li><li>Besoin d’informations en termes de réglementation en droit du travail ; vérification des obligations, conformité des contrats ; gestion des risques ; règlement intérieur etc.</li><li>Optimisation de la politique de rémunération</li><li>Structuration des outils de Gestion des Ressources Humaines (tableaux de bords…)</li><li>La gestion des absences</li><li>La gestion des salaires, des charges fiscales et sociales</li></ul>', NULL, '<ul><li>Mise en place de votre administration</li><li>Optimisation de l’organisation des postes de travail</li><li>Besoin d’informations en termes de réglementation en droit du travail ; vérification des obligations, conformité des contrats ; gestion des risques ; règlement intérieur etc.</li><li>Optimisation de la politique de rémunération</li><li>Structuration des outils de Gestion des Ressources Humaines (tableaux de bords…)</li><li>La gestion des absences</li><li>La gestion des salaires, des charges fiscales et sociales</li></ul>', 5, '2022-05-06 15:51:48', '2022-05-06 15:51:48'),
(69, 'GESTION DU PERSONNEL', NULL, 'GESTION DU PERSONNEL', 5, '2022-05-06 15:51:48', '2022-05-06 15:51:48'),
(70, '<ul><li>Intégration et accueil du nouvel employé</li><li>Optimiser la gestion des équipes à distance</li><li>Evaluations individuelle et annuelle</li><li>Consolidation d’équipe (Team Building)</li><li>Formation des managers</li><li>Développement et épanouissement du capital humain</li><li>Développement de la coopération et du travail en équipe</li></ul>', NULL, '<ul><li>Intégration et accueil du nouvel employé</li><li>Optimiser la gestion des équipes à distance</li><li>Evaluations individuelle et annuelle</li><li>Consolidation d’équipe (Team Building)</li><li>Formation des managers</li><li>Développement et épanouissement du capital humain</li><li>Développement de la coopération et du travail en équipe</li></ul>', 5, '2022-05-06 15:53:19', '2022-05-06 15:53:19'),
(71, 'LA FORMATION', NULL, 'LA FORMATION', 5, '2022-05-06 15:53:19', '2022-05-06 15:53:19'),
(72, '<ul><li>Sensibiliser les collaborateurs aux risques inhérents à leurs activités professionnelles en animant des formations, des actions de communication interne, des séminaires, des comités…</li><li>Assurer une remontée des informations du terrain par le développement, l’animation et la formation d’un réseau de correspondants</li><li>Visites de sites</li></ul>', NULL, '<ul><li>Sensibiliser les collaborateurs aux risques inhérents à leurs activités professionnelles en animant des formations, des actions de communication interne, des séminaires, des comités…</li><li>Assurer une remontée des informations du terrain par le développement, l’animation et la formation d’un réseau de correspondants</li><li>Visites de sites</li></ul>', 5, '2022-05-06 15:57:25', '2022-05-06 15:57:25'),
(73, 'SENSIBILISATION A LA CULTURE DU RISQUE', NULL, 'SENSIBILISATION A LA CULTURE DU RISQUE', 5, '2022-05-06 15:57:25', '2022-05-06 15:57:25'),
(74, '<ul><li>Identifier des zones critiques</li><li>Gérer les relations avec les courtiers, assureurs, experts et négociation des contrats</li><li>Mettre en place un plan de protection à un coût optimisé</li><li>Gérer des sinistres et mettre en œuvre un plan de continuité d’activité</li></ul>', NULL, '<ul><li>Identifier des zones critiques</li><li>Gérer les relations avec les courtiers, assureurs, experts et négociation des contrats</li><li>Mettre en place un plan de protection à un coût optimisé</li><li>Gérer des sinistres et mettre en œuvre un plan de continuité d’activité</li></ul>', 5, '2022-05-06 15:58:29', '2022-05-06 15:58:29'),
(75, 'GESTION DES ASSURANCES ET SINISTRES', NULL, 'GESTION DES ASSURANCES ET SINISTRES', 5, '2022-05-06 15:58:29', '2022-05-06 15:58:29'),
(76, '<ul><li>Animer le dispositif de gestion des risques</li><li>Rédiger des reportings, tableaux de bord pour la direction générale, des documents institutionnels et/ou réglementaires (rapport, document de référence…)</li><li>Animer ou participer au comité des risques</li></ul>', NULL, '<ul><li>Animer le dispositif de gestion des risques</li><li>Rédiger des reportings, tableaux de bord pour la direction générale, des documents institutionnels et/ou réglementaires (rapport, document de référence…)</li><li>Animer ou participer au comité des risques</li></ul>', 5, '2022-05-06 15:59:02', '2022-05-06 15:59:02'),
(77, 'REPORTING, INDICATEURS ET TABLEAUX DE BORD DE PILOTAGE DES RISQUE', NULL, 'REPORTING, INDICATEURS ET TABLEAUX DE BORD DE PILOTAGE DES RISQUE', 5, '2022-05-06 15:59:02', '2022-05-06 15:59:02'),
(78, '<ul><li>Assurer une veille règlementaire mais aussi prospective pour identifier des risques émergents, anticiper les variations d’évolution des risques ainsi que leurs effets sur l’organisation</li><li>Établir des plans d’actions appropriés</li></ul>', NULL, '<ul><li>Assurer une veille règlementaire mais aussi prospective pour identifier des risques émergents, anticiper les variations d’évolution des risques ainsi que leurs effets sur l’organisation</li><li>Établir des plans d’actions appropriés</li></ul>', 5, '2022-05-06 15:59:35', '2022-05-06 15:59:35'),
(79, 'VEILLE RÉGLEMENTAIRE ET PROSPECTIVE', NULL, 'VEILLE RÉGLEMENTAIRE ET PROSPECTIVE', 5, '2022-05-06 15:59:35', '2022-05-06 15:59:35'),
(80, '<ul><li>Provisionnement</li><li>Tarification</li><li>Règlementation</li><li>Réassurance</li><li>Evaluation des passifs sociaux</li><li>Etudes statistiques</li></ul>', NULL, '<ul><li>Provisionnement</li><li>Tarification</li><li>Règlementation</li><li>Réassurance</li><li>Evaluation des passifs sociaux</li><li>Etudes statistiques</li></ul>', 5, '2022-05-06 16:05:28', '2022-05-06 16:05:28'),
(81, 'ACTUARIAT CONSEIL ET ANALYSES STATISTIQUES', NULL, 'ACTUARIAT CONSEIL ET ANALYSES STATISTIQUES', 5, '2022-05-06 16:05:28', '2022-05-06 16:05:28'),
(82, '<ul><li>Dette</li><li>Emissions obligataires</li><li>Private Equity</li><li>Introduction en bourse</li><li>Risk &amp; regulatory compliance</li><li>Central Securities Depository (CSD)</li></ul>', NULL, '<ul><li>Dette</li><li>Emissions obligataires</li><li>Private Equity</li><li>Introduction en bourse</li><li>Risk &amp; regulatory compliance</li><li>Central Securities Depository (CSD)</li></ul>', 5, '2022-05-06 16:05:58', '2022-05-06 16:05:58'),
(83, 'FINANCE', NULL, 'FINANCE', 5, '2022-05-06 16:05:58', '2022-05-06 16:05:58'),
(84, '<ul><li>Outils pour calcul de provisions en assurance</li><li>Outils pour déterminations d’indemnités de fin de carrières</li><li>Outils pour gestion actif-passif en banque et en assurance</li></ul>', NULL, '<ul><li>Outils pour calcul de provisions en assurance</li><li>Outils pour déterminations d’indemnités de fin de carrières</li><li>Outils pour gestion actif-passif en banque et en assurance</li></ul>', 5, '2022-05-06 16:06:40', '2022-05-06 16:06:40'),
(85, 'DEVELOPPEMENT D’OUTILS ACTUARIELS', NULL, 'DEVELOPPEMENT D’OUTILS ACTUARIELS', 5, '2022-05-06 16:06:40', '2022-05-06 16:06:40'),
(86, '<ul><li>Procédures</li><li>Contrôle interne</li><li>Système de gestion</li><li>Gestion quantitative des risques</li><li>ORSA</li><li>Risk Appetite</li></ul>', NULL, '<ul><li>Procédures</li><li>Contrôle interne</li><li>Système de gestion</li><li>Gestion quantitative des risques</li><li>ORSA</li><li>Risk Appetite</li></ul>', 5, '2022-05-06 16:07:19', '2022-05-06 16:07:19'),
(87, 'GESTION DES RISQUES FINANCIERES', NULL, 'GESTION DES RISQUES FINANCIERES', 5, '2022-05-06 16:07:19', '2022-05-06 16:07:19'),
(88, '<ul><li>Intelligence Artificielle,</li><li>Data Mining,</li><li>Data Analytics,</li><li>Statistics</li></ul>', NULL, '<ul><li>Intelligence Artificielle,</li><li>Data Mining,</li><li>Data Analytics,</li><li>Statistics</li></ul>', 5, '2022-05-06 16:07:52', '2022-05-06 16:07:52'),
(89, 'MODÉLISATIONS ET DATA SCIENCE', NULL, 'MODÉLISATIONS ET DATA SCIENCE', 5, '2022-05-06 16:07:52', '2022-05-06 16:07:52'),
(90, '<ul><li>ALM,</li><li>Allocation stratégique d’actifs,</li><li>Gestion du capital,</li><li>Analyses et optimisation de processus</li></ul>', NULL, '<ul><li>ALM,</li><li>Allocation stratégique d’actifs,</li><li>Gestion du capital,</li><li>Analyses et optimisation de processus</li></ul>', 5, '2022-05-06 16:08:35', '2022-05-06 16:08:35'),
(91, 'OPTIMISATION DU BILAN', NULL, 'OPTIMISATION DU BILAN', 5, '2022-05-06 16:08:35', '2022-05-06 16:08:35'),
(92, '<ul><li>Positionnement</li><li>Avantage concurrentiel</li><li>Domaines d\'activités stratégiques</li></ul>', NULL, '<ul><li>Positionnement</li><li>Avantage concurrentiel</li><li>Domaines d\'activités stratégiques</li></ul>', 5, '2022-05-06 16:10:01', '2022-05-06 16:10:01'),
(93, '<ul><li>Haut de bilan</li><li>Croissance externe</li></ul>', NULL, '<ul><li>Haut de bilan</li><li>Croissance externe</li></ul>', 5, '2022-05-06 16:10:25', '2022-05-06 16:10:25'),
(94, '<ul><li>Diversification</li><li>Nouveaux marchés</li></ul>', NULL, '<ul><li>Diversification</li><li>Nouveaux marchés</li></ul>', 5, '2022-05-06 16:10:40', '2022-05-06 16:10:40'),
(95, 'Développement Web', NULL, 'Développement Web', 5, '2022-05-09 12:31:39', '2022-05-11 11:13:20'),
(97, 'IFRS 17', NULL, 'IFRS 17', 5, '2022-05-09 14:14:30', '2022-05-09 14:14:30'),
(98, '<p>IFRS 17 remplace la norme IFRS 4 «&nbsp;Contrats d’assurance&nbsp;» publiée en 2004 comme une norme provisoire. IFRS 4 a autorisé les sociétés à continuer à utiliser les règles comptables nationales en matière de contrats d’assurance, ce qui a donné lieu à une multitude d’approches différentes et a rendu difficile pour les investisseurs toute comparaison des performances financières des différentes sociétés.&nbsp;Le Conseil de Stabilité Financière a indiqué en septembre 2015 l’importance d’achever le projet de remplacement de la norme IFRS 4 par une nouvelle norme.&nbsp;IFRS 17 résout les problèmes de comparaison créés par IFRS 4 en exigeant la comptabilisation de tous les contrats d’assurance de façon homogène. Sont concernées 450 sociétés d\'assurance cotées, représentant 13 trillions de total d\'actifs.</p>', NULL, '<p>IFRS 17 remplace la norme IFRS 4 «&nbsp;Contrats d’assurance&nbsp;» publiée en 2004 comme une norme provisoire. IFRS 4 a autorisé les sociétés à continuer à utiliser les règles comptables nationales en matière de contrats d’assurance, ce qui a donné lieu à une multitude d’approches différentes et a rendu difficile pour les investisseurs toute comparaison des performances financières des différentes sociétés.&nbsp;Le Conseil de Stabilité Financière a indiqué en septembre 2015 l’importance d’achever le projet de remplacement de la norme IFRS 4 par une nouvelle norme.&nbsp;IFRS 17 résout les problèmes de comparaison créés par IFRS 4 en exigeant la comptabilisation de tous les contrats d’assurance de façon homogène. Sont concernées 450 sociétés d\'assurance cotées, représentant 13 trillions de total d\'actifs.</p>', 5, '2022-05-09 14:14:31', '2022-05-09 14:14:31'),
(99, 'Développement Web', NULL, 'Développement Web', 5, '2022-05-09 14:17:57', '2022-05-10 11:43:30'),
(100, '<p>Le développement Web désigne de manière générale les tâches associées au <strong>développement de sites Web</strong> destinés à être hébergés via un intranet ou Internet. Le processus de développement web comprend, entre autres, la conception de sites web, le développement de contenu web, l’élaboration de <strong>scripts</strong> côté client ou côté serveur et la configuration de la sécurité du réseau.</p>', NULL, '<p>Le développement Web désigne de manière générale les tâches associées au <strong>développement de sites Web</strong> destinés à être hébergés via un intranet ou Internet. Le processus de développement web comprend, entre autres, la conception de sites web, le développement de contenu web, l’élaboration de <strong>scripts</strong> côté client ou côté serveur et la configuration de la sécurité du réseau.</p>', 5, '2022-05-09 14:17:57', '2022-06-08 10:16:03'),
(101, 'Django (framework)', NULL, 'Django (framework)', 5, '2022-05-11 14:10:03', '2022-05-11 14:10:03'),
(102, 'Python', NULL, 'Python', 5, '2022-05-11 15:00:46', '2022-05-11 15:00:46'),
(103, 'IFC', NULL, 'IFC', 5, '2022-05-11 15:08:37', '2022-05-11 15:08:37'),
(105, 'WEB2PY', NULL, 'WEB2PY', 5, '2022-05-12 11:02:05', '2022-05-12 11:02:05'),
(106, 'Python web', NULL, 'Python web', 5, '2022-05-12 11:06:22', '2022-05-12 11:06:22'),
(107, 'Offres d\'emploi', NULL, 'Offres d\'emploi', 5, '2022-05-16 16:18:51', '2022-05-16 16:18:51'),
(108, 'Nos references', 'Our references', 'Nos références', 5, '2022-06-02 16:18:46', '2022-06-13 14:19:51'),
(109, 'ASSUREUR NATIONAL', NULL, 'ASSUREUR NATIONAL', 5, '2022-06-02 16:36:07', '2022-06-02 16:36:07'),
(110, 'ASSUREURS AFRICAINS', NULL, 'ASSUREURS AFRICAINS', 5, '2022-06-02 16:36:37', '2022-06-02 16:36:37'),
(111, 'ASSUREURS TRANSPORT / CRÉDIT', NULL, 'ASSUREURS TRANSPORT / CRÉDIT', 5, '2022-06-02 16:36:46', '2022-06-02 16:36:46'),
(112, 'BANCASSURANCE', NULL, 'BANCASSURANCE', 5, '2022-06-02 16:36:54', '2022-06-02 16:36:54'),
(113, 'INSTITUTIONS INTERNATIONALES', NULL, 'INSTITUTIONS INTERNATIONALES', 5, '2022-06-02 16:37:10', '2022-06-02 16:37:10'),
(114, 'RÉASSUREUR INTERNATIONAL', NULL, 'RÉASSUREUR INTERNATIONAL', 5, '2022-06-02 16:37:22', '2022-06-02 16:37:22'),
(115, 'BANQUES', NULL, 'BANQUES', 5, '2022-06-02 16:37:52', '2022-06-02 16:37:52'),
(116, 'Lire moins', NULL, 'Lire moins', 5, '2022-06-02 16:39:28', '2022-06-02 16:39:28'),
(117, 'Lire plus', NULL, 'Lire plus', 5, '2022-06-02 16:39:38', '2022-06-02 16:39:38'),
(118, 'CONDUITE DU CHANGEMENT ET DE LA TRANSFORMATION', NULL, 'CONDUITE DU CHANGEMENT ET DE LA TRANSFORMATION', 5, '2022-06-02 16:52:47', '2022-06-02 16:52:47'),
(119, 'EXCEL EN ASSURANCE I', NULL, 'EXCEL EN ASSURANCE I', 5, '2022-06-02 16:53:10', '2022-06-02 16:53:10'),
(120, 'LES BONNES PRATIQUES POUR UN PARCOURS CLIENT OPTIMISE', NULL, 'LES BONNES PRATIQUES POUR UN PARCOURS CLIENT OPTIMISE', 5, '2022-06-02 16:53:21', '2022-06-02 16:53:21'),
(121, 'REALISER DES TABLEAUX DE BORDS PERTINENTS EN ASSURANCE', NULL, 'REALISER DES TABLEAUX DE BORDS PERTINENTS EN ASSURANCE', 5, '2022-06-02 16:53:38', '2022-06-02 16:53:38'),
(122, 'Formation', NULL, 'Formation', 5, '2022-06-03 14:37:56', '2022-06-03 14:37:56'),
(123, 'Autres', NULL, 'Autres', 5, '2022-06-03 15:39:52', '2022-06-03 15:39:52'),
(124, 'zone', 'area', 'zone', 5, '2022-06-03 16:06:30', '2022-06-13 14:16:58'),
(126, 'Photo', NULL, 'Photo', 5, '2022-06-10 11:43:38', '2022-06-10 11:43:38'),
(127, 'A propos', 'About us', 'A propos', 5, '2022-06-13 14:03:56', '2022-06-13 14:04:29'),
(128, 'Contactez nous à Abidjan', 'Contact us in Abidjan', 'Contactez nous à Abidjan', 5, '2022-06-13 14:06:36', '2022-06-13 14:09:37'),
(129, 'et partout dans le monde', 'and all over the world', 'et partout dans le monde', 5, '2022-06-13 14:07:54', '2022-06-13 14:13:32'),
(130, 'Contactez nous à Paris', 'Contact us in Paris', 'Contactez nous à Paris', 5, '2022-06-13 14:08:04', '2022-06-13 14:12:07'),
(131, 'et partout en afrique', 'and throughout africa', 'et partout en afrique', 5, '2022-06-13 14:08:12', '2022-06-13 14:13:35'),
(132, 'Aroa Partners est un cabinet d’Ingénierie Financière, spécialisé dans le Conseil Stratégique & Opérationnel.', NULL, 'Aroa Partners est un cabinet d’Ingénierie Financière, spécialisé dans le Conseil Stratégique & Opérationnel.', 5, '2022-06-13 14:29:35', '2022-06-13 14:29:35'),
(133, 'Notre mission est de proposer une offre transverse de services afin d’apporter des réponses pratiques et opérationnelles aux entreprises africaines et leur permettre de transformer les défis du modernisme en opportunités de croissance.', NULL, 'Notre mission est de proposer une offre transverse de services afin d’apporter des réponses pratiques et opérationnelles aux entreprises africaines et leur permettre de transformer les défis du modernisme en opportunités de croissance.', 5, '2022-06-13 14:30:19', '2022-06-13 14:30:19'),
(134, 'Avec des expériences et bonnes pratiques acquises au sein de cabinets de conseil internationaux, le cabinet réuni un pôle d’experts, capable de proposer aux acteurs du marché des solutions à haute valeur ajoutée et en adéquation avec leurs problématiques...', NULL, 'Avec des expériences et bonnes pratiques acquises au sein de cabinets de conseil internationaux, le cabinet réuni un pôle d’experts, capable de proposer aux acteurs du marché des solutions à haute valeur ajoutée et en adéquation avec leurs problématiques...', 5, '2022-06-13 14:34:01', '2022-06-13 14:34:01'),
(135, 'AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises qu’elle accompagne avec pour objectif la transmission d’une culture d’excellence.', NULL, 'AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises qu’elle accompagne avec pour objectif la transmission d’une culture d’excellence.', 5, '2022-06-13 14:34:21', '2022-06-13 14:34:21'),
(136, 'Disposant de solides références à des niveaux décisionnels, nos experts proposent une offre transverse de services répondant aux enjeux réglementaires.', NULL, 'Disposant de solides références à des niveaux décisionnels, nos experts proposent une offre transverse de services répondant aux enjeux réglementaires.', 5, '2022-06-13 14:34:48', '2022-06-13 14:34:48'),
(137, 'La volonté d’excellence technique de l’équipe se traduit par une participation active des fondateurs et des consultants aux instances professionnelles qui régissent les corps financiers, managériaux et technologiques. Une telle implication permet d’anticiper les évolutions du marché et du contexte réglementaire afin d’être proactif dans leur mise en œuvre.', NULL, 'La volonté d’excellence technique de l’équipe se traduit par une participation active des fondateurs et des consultants aux instances professionnelles qui régissent les corps financiers, managériaux et technologiques. Une telle implication permet d’anticiper les évolutions du marché et du contexte réglementaire afin d’être proactif dans leur mise en œuvre.', 5, '2022-06-13 14:35:23', '2022-06-13 14:35:23'),
(138, 'Lire la suite', NULL, 'Lire la suite', 5, '2022-06-13 14:36:00', '2022-06-13 14:36:00'),
(144, 'Nos articles', 'Our articles', 'Nos articles', 5, '2022-06-13 17:45:44', '2022-06-13 17:46:46'),
(145, 'Poles', NULL, 'Poles', 5, '2022-06-13 17:49:32', '2022-06-13 17:49:32');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_pole_id_foreign` (`pole_id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Index pour la table `candidatures`
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidatures_offre_id_foreign` (`offre_id`);

--
-- Index pour la table `category_articles`
--
ALTER TABLE `category_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_articles_pole_id_foreign` (`pole_id`),
  ADD KEY `category_articles_user_id_foreign` (`user_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`);

--
-- Index pour la table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expertises_pole_id_foreign` (`pole_id`),
  ADD KEY `expertises_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formations_user_id_foreign` (`user_id`);

--
-- Index pour la table `icone_metiers`
--
ALTER TABLE `icone_metiers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `icone_metiers_user_id_foreign` (`user_id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `offre_emplois`
--
ALTER TABLE `offre_emplois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offre_emplois_pole_id_foreign` (`pole_id`),
  ADD KEY `offre_emplois_user_id_foreign` (`user_id`);

--
-- Index pour la table `page_accueils`
--
ALTER TABLE `page_accueils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_accueils_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `poles`
--
ALTER TABLE `poles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poles_user_id_foreign` (`user_id`);

--
-- Index pour la table `presentations`
--
ALTER TABLE `presentations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presentations_pole_id_foreign` (`pole_id`),
  ADD KEY `presentations_user_id_foreign` (`user_id`);

--
-- Index pour la table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `references_pole_id_foreign` (`pole_id`),
  ADD KEY `references_user_id_foreign` (`user_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_pole_id_foreign` (`pole_id`),
  ADD KEY `teams_user_id_foreign` (`user_id`);

--
-- Index pour la table `translates`
--
ALTER TABLE `translates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translates_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `candidatures`
--
ALTER TABLE `candidatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `category_articles`
--
ALTER TABLE `category_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `icone_metiers`
--
ALTER TABLE `icone_metiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `offre_emplois`
--
ALTER TABLE `offre_emplois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `page_accueils`
--
ALTER TABLE `page_accueils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `poles`
--
ALTER TABLE `poles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `presentations`
--
ALTER TABLE `presentations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `translates`
--
ALTER TABLE `translates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_pole_id_foreign` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `candidatures`
--
ALTER TABLE `candidatures`
  ADD CONSTRAINT `candidatures_offre_id_foreign` FOREIGN KEY (`offre_id`) REFERENCES `offre_emplois` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `category_articles`
--
ALTER TABLE `category_articles`
  ADD CONSTRAINT `category_articles_pole_id_foreign` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `expertises`
--
ALTER TABLE `expertises`
  ADD CONSTRAINT `expertises_pole_id_foreign` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expertises_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `icone_metiers`
--
ALTER TABLE `icone_metiers`
  ADD CONSTRAINT `icone_metiers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `offre_emplois`
--
ALTER TABLE `offre_emplois`
  ADD CONSTRAINT `offre_emplois_pole_id_foreign` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offre_emplois_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `page_accueils`
--
ALTER TABLE `page_accueils`
  ADD CONSTRAINT `page_accueils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `poles`
--
ALTER TABLE `poles`
  ADD CONSTRAINT `poles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `presentations`
--
ALTER TABLE `presentations`
  ADD CONSTRAINT `presentations_pole_id_foreign` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `presentations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `references`
--
ALTER TABLE `references`
  ADD CONSTRAINT `references_pole_id_foreign` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `references_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_pole_id_foreign` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `translates`
--
ALTER TABLE `translates`
  ADD CONSTRAINT `translates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
