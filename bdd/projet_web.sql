-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 déc. 2018 à 12:39
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `ID_client` decimal(10,0) NOT NULL,
  `Abonnement_annuel` decimal(15,3) NOT NULL,
  `Abonnement_mensuel` decimal(15,3) NOT NULL,
  `Abonne` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `ID_auteur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_auteur` char(25) COLLATE latin1_general_ci NOT NULL,
  `Prenom_auteur` char(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID_auteur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`ID_auteur`, `Nom_auteur`, `Prenom_auteur`) VALUES
(1, 'bear', 'greg'),
(2, 'Sandrel', 'Julien');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_client` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_client` char(25) COLLATE latin1_general_ci NOT NULL,
  `Prenom_client` char(25) COLLATE latin1_general_ci NOT NULL,
  `Dateenaissance_client` date NOT NULL,
  `e_mail_client` char(50) COLLATE latin1_general_ci NOT NULL,
  `Adresse1_client` char(50) COLLATE latin1_general_ci NOT NULL,
  `Adresse2_client` char(50) COLLATE latin1_general_ci NOT NULL,
  `Ville_client` char(25) COLLATE latin1_general_ci NOT NULL,
  `CP_client` char(5) COLLATE latin1_general_ci NOT NULL,
  `Civilite_client` char(5) COLLATE latin1_general_ci NOT NULL,
  `username_client` text COLLATE latin1_general_ci NOT NULL,
  `password_client` text COLLATE latin1_general_ci NOT NULL,
  `ID_client_ABONNEMENT` char(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID_client`),
  KEY `CLIENT_ABONNEMENT_FK` (`ID_client_ABONNEMENT`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID_client`, `Nom_client`, `Prenom_client`, `Dateenaissance_client`, `e_mail_client`, `Adresse1_client`, `Adresse2_client`, `Ville_client`, `CP_client`, `Civilite_client`, `username_client`, `password_client`, `ID_client_ABONNEMENT`) VALUES
(34, 'lescole', 'alessandro', '2000-08-26', 'sandro@gmail.com', 'tregf', 'h0fhjfjhg', 'montpellier', '34090', 'Homme', 'sandro', '$2y$10$ciyvwHjEOxxPWl46t.TXWuDK.LkZ3r4/33YR4AMwyk.8Va6ufgfie', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `ID_editeur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_editeur` char(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID_editeur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`ID_editeur`, `Nom_editeur`) VALUES
(1, 'Del Rey Books, Victor Gollancz Ltd'),
(2, 'Calmann Levy'),
(3, 'Arbor House');

-- --------------------------------------------------------

--
-- Structure de la table `exemplaire`
--

DROP TABLE IF EXISTS `exemplaire`;
CREATE TABLE IF NOT EXISTS `exemplaire` (
  `ID_livre` decimal(10,0) NOT NULL,
  `Etat_exemplaire` char(10) COLLATE latin1_general_ci NOT NULL,
  `ID_livre_LIER` decimal(10,0) NOT NULL,
  `ID_client` int(11) NOT NULL,
  PRIMARY KEY (`ID_livre`),
  KEY `EXEMPLAIRE_LIVRE_FK` (`ID_livre_LIER`),
  KEY `EXEMPLAIRE_CLIENT0_FK` (`ID_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `ID_livre` int(11) NOT NULL AUTO_INCREMENT,
  `titre_livre` char(50) COLLATE latin1_general_ci NOT NULL,
  `Dateedition_livre` date NOT NULL,
  `ID_auteur` decimal(10,0) NOT NULL,
  `ID_editeur` decimal(10,0) NOT NULL,
  `chemin_img` text COLLATE latin1_general_ci NOT NULL,
  `desc_livre` text COLLATE latin1_general_ci NOT NULL,
  `genre` text COLLATE latin1_general_ci,
  PRIMARY KEY (`ID_livre`),
  KEY `LIVRE_AUTEUR_FK` (`ID_auteur`),
  KEY `LIVRE_EDITEUR0_FK` (`ID_editeur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`ID_livre`, `titre_livre`, `Dateedition_livre`, `ID_auteur`, `ID_editeur`, `chemin_img`, `desc_livre`, `genre`) VALUES
(1, 'la cité à la fin des temps', '2001-07-17', '1', '1', 'Images/la-cite.jpg', 'Ginny et Jack rêvent d’une cité fabuleuse, assiégée dans un avenir lointain par un ennemi implacable. Et ces visions impérieuses projettent leur esprit dans le corps de deux créatures de cette ville menacée. Daniel, lui, ne rêve que de ténèbres sans fin, reflet du sort qui l’attend. Ces jeunes gens sont liés par autre chose que les rêves. Ils sont des Changeurs de destin, nés avec le don de sauter entre les lignes-mondes, afin d’habiter d’autres versions d’eux-mêmes. Et chacun d’entre eux possède un mystérieux artefact appelé « messager », qui ne semble pas altéré par ces permutations. Ginny, Jack et Daniel se voient bientôt enrôlés dans une mission presque sans espoir pour sauver l’avenir... et achever la plus grande oeuvre de toute l’histoire humaine. Mais d’effroyables chasseurs sont déjà à leurs trousses...', 'science-fiction'),
(2, 'La Chambre des Merveilles', '2018-03-07', '2', '2', 'Images/les-merveillles.jpeg', 'Louis a 12 ans. Ce matin, alors qu’il veut confier à sa mère, Thelma, qu’il est amoureux pour la première fois, il voit bien qu’elle pense à autre chose.\r\nAlors il part, fâché et déçu, avec son skate, et traverse la rue à fond. Un camion le percute de plein fouet.\r\nLe pronostic est sombre. Dans quatre semaines, s’il n’y a pas d’amélioration, il faudra débrancher le respirateur de Louis.\r\nEn rentrant de l’hôpital, désespérée, Thelma trouve un carnet sous le matelas de son fils.\r\nÀ l’intérieur, il a dressé la liste de toutes ses « merveilles », c’est-à-dire les expériences qu’il aimerait vivre au cours de sa vie.\r\nThelma prend une décision : page après page, ces merveilles, elle va les accomplir à sa place.\r\nSi Louis entend ses aventures, il verra combien la vie est belle. Peut–être que ça l’aidera à revenir.\r\nEt si dans quatre semaines Louis doit mourir, à travers elle il aura vécu la vie dont il rêvait.\r\nMais il n’est pas si facile de vivre les rêves d’un ado, quand on a presque quarante ans...', 'Fiction'),
(3, 'la musique du sang', '1985-01-01', '1', '3', 'Images/la-musique-du-sang.jpg', 'Parce qu\'il a mené des recherches secrètes sur les \"bio-chips\", des ordinateurs biologiques vivants de la taille d\'une cellule, Vergil Ulam, jeune et brillant généticien, est renvoyé de son laboratoire. Pour sauver le produit de son travail, il s\'injecte les précieuses cellules, croyant pouvoir facilement les récupérer. Mais celles-ci se multiplient, pervertissent peu à peu leurs congénères saines, finissent par remodeler tout son organisme. Et l\'inquiétude naît quand il se rend compte que cette maladie intelligente se transmet à une vitesse fulgurante. Les Etats-Unis, et bientôt la planète entière, vont vivre une apocalypse inédite.\r\nA la fois spéculation scientifique aux potentialités effrayantes et roman catastrophe dans la droite lignée de ceux de Stephen King, \"La musique du sang\" développe le thème de la nouvelle \"Le chant des leucocytes\", lauréate des prix Hugo et Nebula, les deux plus hautes distinctions de la science-fiction mondiale.', 'Sciencefiction');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
