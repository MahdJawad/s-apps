-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 août 2022 à 23:01
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `grh`
--

-- --------------------------------------------------------

--
-- Structure de la table `abscences`
--

CREATE TABLE `abscences` (
  `numAbsence` int(10) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abscences`
--

INSERT INTO `abscences` (`numAbsence`, `matricule`, `debut`, `fin`, `created_at`, `updated_at`) VALUES
(2, 1, '2022-08-25', '2022-08-31', '2022-08-01 09:47:47', '2022-08-02 09:05:52');

-- --------------------------------------------------------

--
-- Structure de la table `affectations`
--

CREATE TABLE `affectations` (
  `idNaf` int(10) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `typeAffect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieuAffect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateAffect` date NOT NULL,
  `datePriseServ` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `anciennetes`
--

CREATE TABLE `anciennetes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avancements`
--

CREATE TABLE `avancements` (
  `num_arrete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCat` int(10) UNSIGNED NOT NULL,
  `dateDecision` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avances`
--

CREATE TABLE `avances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `valeur` double(8,2) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `banques`
--

CREATE TABLE `banques` (
  `idBanque` int(10) UNSIGNED NOT NULL,
  `nomBanque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` int(11) NOT NULL,
  `telBanque` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bulletins`
--

CREATE TABLE `bulletins` (
  `idBult` int(10) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `idLivre` int(10) UNSIGNED NOT NULL,
  `mois` date NOT NULL,
  `annee` date NOT NULL,
  `nbHeureTravail` double(8,2) NOT NULL,
  `nbHeureSup` double(8,2) NOT NULL,
  `salaireBrute` double(8,2) NOT NULL,
  `datePaieSalaire` date NOT NULL,
  `dateCongePaye` date NOT NULL,
  `nbJourF` int(11) NOT NULL,
  `netAPaye` double(8,2) NOT NULL,
  `cotisationMutuel` double(8,2) NOT NULL,
  `retenuCNSS` double(8,2) NOT NULL,
  `retenu` double(8,2) NOT NULL,
  `impot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `idCat` int(10) UNSIGNED NOT NULL,
  `libelleCat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCat`, `libelleCat`, `created_at`, `updated_at`) VALUES
(1, 'a', '2022-07-13 11:11:45', '2022-07-13 11:11:45'),
(2, 'b', '2022-07-13 11:11:56', '2022-07-13 11:11:56'),
(3, 'c', '2022-07-17 13:01:05', '2022-07-17 13:01:05'),
(4, 'd', '2022-07-25 11:46:55', '2022-07-25 11:46:55');

-- --------------------------------------------------------

--
-- Structure de la table `charge_familles`
--

CREATE TABLE `charge_familles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaiss` date NOT NULL,
  `lieuNaiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lienFamille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `charge_familles`
--

INSERT INTO `charge_familles` (`id`, `matricule`, `nom`, `prenom`, `dateNaiss`, `lieuNaiss`, `lienFamille`, `sexe`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dawa', 'Mahamadou Jawad', '2022-07-08', 'niamey', 'Enfant', 'masculin', '2022-07-27 11:40:34', '2022-07-27 11:40:34');

-- --------------------------------------------------------

--
-- Structure de la table `charge_patronales`
--

CREATE TABLE `charge_patronales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cnsss`
--

CREATE TABLE `cnsss` (
  `tauxSalarial` int(11) NOT NULL,
  `plafondSalarial` int(11) NOT NULL,
  `tauxPatronal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `conges`
--

CREATE TABLE `conges` (
  `idConge` int(10) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `idTypeConge` int(10) UNSIGNED NOT NULL,
  `dureeConge` int(11) NOT NULL,
  `dateCessation` date NOT NULL,
  `dateReprise` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `conges`
--

INSERT INTO `conges` (`idConge`, `matricule`, `idTypeConge`, `dureeConge`, `dateCessation`, `dateReprise`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 5, '2022-07-27', '2022-08-02', '2022-07-26 12:20:25', '2022-08-02 08:49:24'),
(2, 1, 3, 1, '2022-08-02', '2022-08-04', '2022-08-02 08:50:24', '2022-08-02 08:50:48');

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

CREATE TABLE `contrats` (
  `idContrat` int(10) UNSIGNED NOT NULL,
  `idTypeContrat` int(10) UNSIGNED NOT NULL,
  `dateEmbauche` date NOT NULL,
  `lieuEmbauche` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salaireBase` int(11) NOT NULL,
  `modeReglement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frequencePaie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contrats`
--

INSERT INTO `contrats` (`idContrat`, `idTypeContrat`, `dateEmbauche`, `lieuEmbauche`, `salaireBase`, `modeReglement`, `frequencePaie`, `created_at`, `updated_at`) VALUES
(3, 2, '2022-07-15', 'Niamey', 258, 'cheque', 'jour', '2022-07-25 13:36:47', '2022-07-25 13:36:47');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `idDepartement` int(10) UNSIGNED NOT NULL,
  `idDirection` int(10) UNSIGNED NOT NULL,
  `nomDepartement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`idDepartement`, `idDirection`, `nomDepartement`, `created_at`, `updated_at`) VALUES
(1, 1, 'dep', '2022-07-26 13:54:31', '2022-07-26 13:54:31'),
(2, 1, 'dep', '2022-07-26 13:58:40', '2022-07-26 13:58:40');

-- --------------------------------------------------------

--
-- Structure de la table `directions`
--

CREATE TABLE `directions` (
  `idDirection` int(10) UNSIGNED NOT NULL,
  `nomDirection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `directions`
--

INSERT INTO `directions` (`idDirection`, `nomDirection`, `created_at`, `updated_at`) VALUES
(1, 'inf', '2022-07-17 12:53:15', '2022-07-17 12:53:15');

-- --------------------------------------------------------

--
-- Structure de la table `echelons`
--

CREATE TABLE `echelons` (
  `idEchelon` int(10) UNSIGNED NOT NULL,
  `idCat` int(10) UNSIGNED NOT NULL,
  `libelleEchelon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `echelons`
--

INSERT INTO `echelons` (`idEchelon`, `idCat`, `libelleEchelon`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '2022-07-13 11:12:28', '2022-07-13 11:12:28'),
(2, 1, '1', '2022-07-13 11:14:11', '2022-07-13 11:14:11'),
(3, 2, '2', '2022-07-17 13:02:12', '2022-07-17 13:02:12'),
(4, 4, '2', '2022-07-25 12:05:17', '2022-07-25 12:05:17');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `matricule` int(10) UNSIGNED NOT NULL,
  `num_arrete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idFonction` int(10) UNSIGNED NOT NULL,
  `idCat` int(10) UNSIGNED NOT NULL,
  `idContrat` int(10) UNSIGNED NOT NULL,
  `nom_emp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_emp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` date NOT NULL,
  `lieunaiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation_matrimoniale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_femme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_enfant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_prise_fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_cnss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`matricule`, `num_arrete`, `idFonction`, `idCat`, `idContrat`, `nom_emp`, `prenom_emp`, `adress`, `datenaiss`, `lieunaiss`, `sexe`, `tel`, `mail`, `situation_matrimoniale`, `nb_femme`, `nb_enfant`, `date_prise_fonction`, `num_cnss`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, 3, 'ali', 'moussa', 'Banifondou 1', '2001-01-10', 'niamey', 'masculin', '227-99-99-99-99', 'ali@gmail.com', 'celibataire', '0', '0', '2022-07-01', '2559', '2022-07-26 09:40:14', '2022-07-26 09:40:14');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `idFonction` int(10) UNSIGNED NOT NULL,
  `idDirection` int(10) UNSIGNED NOT NULL,
  `intituleFonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonctions`
--

INSERT INTO `fonctions` (`idFonction`, `idDirection`, `intituleFonction`, `created_at`, `updated_at`) VALUES
(1, 1, 'developpeur', '2022-07-17 12:53:48', '2022-07-17 12:53:48'),
(2, 1, 'analyste', '2022-07-25 08:18:12', '2022-07-25 08:18:12');

-- --------------------------------------------------------

--
-- Structure de la table `grilles`
--

CREATE TABLE `grilles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idCat` int(10) UNSIGNED NOT NULL,
  `idEchelon` int(10) UNSIGNED NOT NULL,
  `indice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `grilles`
--

INSERT INTO `grilles` (`id`, `idCat`, `idEchelon`, `indice`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 5, '2022-07-27 12:20:46', '2022-07-27 12:20:46');

-- --------------------------------------------------------

--
-- Structure de la table `indemnites`
--

CREATE TABLE `indemnites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `idLivre` int(10) UNSIGNED NOT NULL,
  `dateSaisie` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_02_144856_create_permission_tables', 1),
(6, '2022_07_02_145319_create_type_contrats_table', 1),
(7, '2022_07_02_145545_create_categories_table', 1),
(8, '2022_07_02_145705_create_mutuels_table', 1),
(9, '2022_07_02_145948_create_cnsss_table', 1),
(10, '2022_07_02_150006_create_charge_patronales_table', 1),
(11, '2022_07_02_150044_create_anciennetes_table', 1),
(12, '2022_07_02_150115_create_parametre_societes_table', 1),
(13, '2022_07_02_150137_create_type_conges_table', 1),
(14, '2022_07_06_201030_create_directions_table', 1),
(15, '2022_07_12_131704_create_banques_table', 1),
(16, '2022_07_12_132123_create_missions_table', 1),
(17, '2022_07_02_145253_create_contrats_table', 2),
(18, '2022_07_02_145601_create_echelons_table', 3),
(19, '2022_07_02_145617_create_avancements_table', 4),
(20, '2022_07_02_151206_create_fonctions_table', 5),
(21, '2022_07_12_132034_create_departements_table', 6),
(22, '2022_07_12_132155_create_services_table', 7),
(23, '2022_07_12_132654_create_grilles_table', 8),
(24, '2022_07_02_145222_create_employes_table', 9),
(25, '2022_07_02_145644_create_conges_table', 10),
(26, '2022_07_12_130814_create_absences_table', 11),
(27, '2022_07_12_131635_create_affectations_table', 12),
(28, '2022_07_12_131752_create_chargefamiliales_table', 13),
(29, '2022_07_19_144105_create_abscences_table', 14),
(30, '2022_07_25_143338_create_charge_familles_table', 15),
(31, '2022_07_26_095442_create_grilles_table', 16),
(32, '2022_07_26_150551_create_abscences_table', 17),
(33, '2021_11_16_161009_create_events_table', 18),
(34, '2022_08_02_135325_create_indemnites_table', 19),
(35, '2022_08_02_135341_create_primes_table', 19),
(36, '2022_08_02_141400_create_avances_table', 19),
(37, '2022_08_02_144739_create_livres_table', 20),
(38, '2022_08_02_202758_create_livres_table', 21),
(39, '2022_08_02_203706_create_livres_table', 22),
(40, '2022_08_02_141752_create_bulletins_table', 23),
(41, '2022_08_02_205121_create_bulletins_table', 24),
(42, '2022_08_02_205843_create_bulletins_table', 25),
(43, '2022_08_02_141459_create_prets_table', 26);

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE `missions` (
  `numOrdre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetMission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateDepart` date NOT NULL,
  `dateRetour` date NOT NULL,
  `moyen` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mutuels`
--

CREATE TABLE `mutuels` (
  `tauxSalariale` int(11) NOT NULL,
  `tauxPatronal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parametre_societes`
--

CREATE TABLE `parametre_societes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'role-list', 'web', '2022-07-13 11:10:24', '2022-07-13 11:10:24'),
(2, 'role-create', 'web', '2022-07-13 11:10:24', '2022-07-13 11:10:24'),
(3, 'role-edit', 'web', '2022-07-13 11:10:24', '2022-07-13 11:10:24'),
(4, 'role-delete', 'web', '2022-07-13 11:10:24', '2022-07-13 11:10:24'),
(5, 'employe-list', 'web', '2022-07-13 11:10:24', '2022-07-13 11:10:24'),
(6, 'employe-create', 'web', '2022-07-13 11:10:24', '2022-07-13 11:10:24'),
(7, 'employe-edit', 'web', '2022-07-13 11:10:25', '2022-07-13 11:10:25'),
(8, 'employe-delete', 'web', '2022-07-13 11:10:25', '2022-07-13 11:10:25');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prets`
--

CREATE TABLE `prets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `idBult` int(10) UNSIGNED NOT NULL,
  `valeur` double(8,2) UNSIGNED NOT NULL,
  `retenu` double(8,2) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `primes`
--

CREATE TABLE `primes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'web', '2022-07-13 11:10:35', '2022-07-13 11:10:35');

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
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `idService` int(10) UNSIGNED NOT NULL,
  `idDepartement` int(10) UNSIGNED NOT NULL,
  `nomService` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`idService`, `idDepartement`, `nomService`, `created_at`, `updated_at`) VALUES
(1, 1, 'logistique', '2022-07-27 12:10:38', '2022-07-27 12:10:38');

-- --------------------------------------------------------

--
-- Structure de la table `type_conges`
--

CREATE TABLE `type_conges` (
  `idTypeConge` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_conges`
--

INSERT INTO `type_conges` (`idTypeConge`, `type`, `created_at`, `updated_at`) VALUES
(1, 'normal', '2022-07-25 09:21:03', '2022-07-25 09:21:03'),
(2, 'maladie', '2022-07-27 12:11:07', '2022-07-27 12:11:07'),
(3, 'autres', '2022-07-27 12:11:36', '2022-07-27 12:11:36');

-- --------------------------------------------------------

--
-- Structure de la table `type_contrats`
--

CREATE TABLE `type_contrats` (
  `idTypeContrat` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_contrats`
--

INSERT INTO `type_contrats` (`idTypeContrat`, `type`, `created_at`, `updated_at`) VALUES
(1, 'CDI', '2022-07-20 08:50:22', '2022-07-20 08:50:22'),
(2, 'CDD', '2022-07-25 10:01:10', '2022-07-25 10:01:10'),
(3, 'STAGE', '2022-07-25 10:01:31', '2022-07-25 10:01:31');

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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahd Jawad', 'admin@gmail.com', NULL, '$2y$10$A7AzSB1eVRcUGoUfiOvEgu.6VSEGd4ljmfNlvEUWUUavl2DPzHtaW', NULL, '2022-07-13 11:10:35', '2022-07-13 11:10:35'),
(2, 'test', 'test@test.it', NULL, '$2y$10$b3qUR9tMW6zjw9sSWTsMkuI0o/8lJ2r6N7WfXqm3kByUococY4Wqi', NULL, '2022-07-17 13:05:59', '2022-07-17 13:05:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abscences`
--
ALTER TABLE `abscences`
  ADD PRIMARY KEY (`numAbsence`),
  ADD KEY `abscences_matricule_foreign` (`matricule`);

--
-- Index pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD PRIMARY KEY (`idNaf`),
  ADD KEY `affectations_matricule_foreign` (`matricule`);

--
-- Index pour la table `anciennetes`
--
ALTER TABLE `anciennetes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avancements`
--
ALTER TABLE `avancements`
  ADD PRIMARY KEY (`num_arrete`),
  ADD KEY `avancements_idcat_foreign` (`idCat`);

--
-- Index pour la table `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avances_matricule_foreign` (`matricule`);

--
-- Index pour la table `banques`
--
ALTER TABLE `banques`
  ADD PRIMARY KEY (`idBanque`);

--
-- Index pour la table `bulletins`
--
ALTER TABLE `bulletins`
  ADD PRIMARY KEY (`idBult`),
  ADD KEY `bulletins_matricule_foreign` (`matricule`),
  ADD KEY `bulletins_idlivre_foreign` (`idLivre`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCat`);

--
-- Index pour la table `charge_familles`
--
ALTER TABLE `charge_familles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `charge_familles_matricule_foreign` (`matricule`);

--
-- Index pour la table `charge_patronales`
--
ALTER TABLE `charge_patronales`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conges`
--
ALTER TABLE `conges`
  ADD PRIMARY KEY (`idConge`),
  ADD KEY `conges_matricule_foreign` (`matricule`),
  ADD KEY `conges_idtypeconge_foreign` (`idTypeConge`);

--
-- Index pour la table `contrats`
--
ALTER TABLE `contrats`
  ADD PRIMARY KEY (`idContrat`),
  ADD KEY `contrats_idtypecontrat_foreign` (`idTypeContrat`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`idDepartement`),
  ADD KEY `departements_iddirection_foreign` (`idDirection`);

--
-- Index pour la table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`idDirection`);

--
-- Index pour la table `echelons`
--
ALTER TABLE `echelons`
  ADD PRIMARY KEY (`idEchelon`),
  ADD KEY `echelons_idcat_foreign` (`idCat`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `employes_num_arrete_foreign` (`num_arrete`),
  ADD KEY `employes_idfonction_foreign` (`idFonction`),
  ADD KEY `employes_idcat_foreign` (`idCat`),
  ADD KEY `employes_idcontrat_foreign` (`idContrat`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`idFonction`),
  ADD KEY `fonctions_iddirection_foreign` (`idDirection`);

--
-- Index pour la table `grilles`
--
ALTER TABLE `grilles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grilles_idcat_foreign` (`idCat`),
  ADD KEY `grilles_idechelon_foreign` (`idEchelon`);

--
-- Index pour la table `indemnites`
--
ALTER TABLE `indemnites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indemnites_matricule_foreign` (`matricule`);

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`idLivre`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`numOrdre`);

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
-- Index pour la table `parametre_societes`
--
ALTER TABLE `parametre_societes`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `prets`
--
ALTER TABLE `prets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prets_matricule_foreign` (`matricule`),
  ADD KEY `prets_idbult_foreign` (`idBult`);

--
-- Index pour la table `primes`
--
ALTER TABLE `primes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `primes_matricule_foreign` (`matricule`);

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
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idService`),
  ADD KEY `services_iddepartement_foreign` (`idDepartement`);

--
-- Index pour la table `type_conges`
--
ALTER TABLE `type_conges`
  ADD PRIMARY KEY (`idTypeConge`);

--
-- Index pour la table `type_contrats`
--
ALTER TABLE `type_contrats`
  ADD PRIMARY KEY (`idTypeContrat`);

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
-- AUTO_INCREMENT pour la table `abscences`
--
ALTER TABLE `abscences`
  MODIFY `numAbsence` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `affectations`
--
ALTER TABLE `affectations`
  MODIFY `idNaf` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `anciennetes`
--
ALTER TABLE `anciennetes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avances`
--
ALTER TABLE `avances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banques`
--
ALTER TABLE `banques`
  MODIFY `idBanque` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bulletins`
--
ALTER TABLE `bulletins`
  MODIFY `idBult` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `charge_familles`
--
ALTER TABLE `charge_familles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `charge_patronales`
--
ALTER TABLE `charge_patronales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `conges`
--
ALTER TABLE `conges`
  MODIFY `idConge` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contrats`
--
ALTER TABLE `contrats`
  MODIFY `idContrat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `idDepartement` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `directions`
--
ALTER TABLE `directions`
  MODIFY `idDirection` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `echelons`
--
ALTER TABLE `echelons`
  MODIFY `idEchelon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `idFonction` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `grilles`
--
ALTER TABLE `grilles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `indemnites`
--
ALTER TABLE `indemnites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `idLivre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `parametre_societes`
--
ALTER TABLE `parametre_societes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `prets`
--
ALTER TABLE `prets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `primes`
--
ALTER TABLE `primes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `idService` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `type_conges`
--
ALTER TABLE `type_conges`
  MODIFY `idTypeConge` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_contrats`
--
ALTER TABLE `type_contrats`
  MODIFY `idTypeContrat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abscences`
--
ALTER TABLE `abscences`
  ADD CONSTRAINT `abscences_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD CONSTRAINT `affectations_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `avancements`
--
ALTER TABLE `avancements`
  ADD CONSTRAINT `avancements_idcat_foreign` FOREIGN KEY (`idCat`) REFERENCES `categories` (`idCat`);

--
-- Contraintes pour la table `avances`
--
ALTER TABLE `avances`
  ADD CONSTRAINT `avances_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `bulletins`
--
ALTER TABLE `bulletins`
  ADD CONSTRAINT `bulletins_idlivre_foreign` FOREIGN KEY (`idLivre`) REFERENCES `livres` (`idLivre`),
  ADD CONSTRAINT `bulletins_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `charge_familles`
--
ALTER TABLE `charge_familles`
  ADD CONSTRAINT `charge_familles_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `conges`
--
ALTER TABLE `conges`
  ADD CONSTRAINT `conges_idtypeconge_foreign` FOREIGN KEY (`idTypeConge`) REFERENCES `type_conges` (`idTypeConge`),
  ADD CONSTRAINT `conges_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `contrats`
--
ALTER TABLE `contrats`
  ADD CONSTRAINT `contrats_idtypecontrat_foreign` FOREIGN KEY (`idTypeContrat`) REFERENCES `type_contrats` (`idTypeContrat`);

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `departements_iddirection_foreign` FOREIGN KEY (`idDirection`) REFERENCES `directions` (`idDirection`);

--
-- Contraintes pour la table `echelons`
--
ALTER TABLE `echelons`
  ADD CONSTRAINT `echelons_idcat_foreign` FOREIGN KEY (`idCat`) REFERENCES `categories` (`idCat`);

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_idcat_foreign` FOREIGN KEY (`idCat`) REFERENCES `categories` (`idCat`),
  ADD CONSTRAINT `employes_idcontrat_foreign` FOREIGN KEY (`idContrat`) REFERENCES `contrats` (`idContrat`),
  ADD CONSTRAINT `employes_idfonction_foreign` FOREIGN KEY (`idFonction`) REFERENCES `fonctions` (`idFonction`),
  ADD CONSTRAINT `employes_num_arrete_foreign` FOREIGN KEY (`num_arrete`) REFERENCES `avancements` (`num_arrete`);

--
-- Contraintes pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD CONSTRAINT `fonctions_iddirection_foreign` FOREIGN KEY (`idDirection`) REFERENCES `directions` (`idDirection`);

--
-- Contraintes pour la table `grilles`
--
ALTER TABLE `grilles`
  ADD CONSTRAINT `grilles_idcat_foreign` FOREIGN KEY (`idCat`) REFERENCES `categories` (`idCat`),
  ADD CONSTRAINT `grilles_idechelon_foreign` FOREIGN KEY (`idEchelon`) REFERENCES `echelons` (`idEchelon`);

--
-- Contraintes pour la table `indemnites`
--
ALTER TABLE `indemnites`
  ADD CONSTRAINT `indemnites_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

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
-- Contraintes pour la table `prets`
--
ALTER TABLE `prets`
  ADD CONSTRAINT `prets_idbult_foreign` FOREIGN KEY (`idBult`) REFERENCES `bulletins` (`idBult`),
  ADD CONSTRAINT `prets_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `primes`
--
ALTER TABLE `primes`
  ADD CONSTRAINT `primes_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `employes` (`matricule`);

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_iddepartement_foreign` FOREIGN KEY (`idDepartement`) REFERENCES `departements` (`idDepartement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
