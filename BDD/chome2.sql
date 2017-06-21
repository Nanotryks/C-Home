-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Juin 2017 à 12:36
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chome2`
--

-- --------------------------------------------------------

--
-- Structure de la table `auto`
--

CREATE TABLE `auto` (
  `IdAuto` int(255) NOT NULL,
  `Capteur` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Valeur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `auto`
--

INSERT INTO `auto` (`IdAuto`, `Capteur`, `Valeur`) VALUES
(1, 'Température', 20),
(2, 'Lumière', 700);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `IdPiece` int(255) NOT NULL,
  `IdCapteur` int(255) NOT NULL,
  `Nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Valeur` int(255) NOT NULL,
  `Mode_Valeur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`IdPiece`, `IdCapteur`, `Nom`, `Valeur`, `Mode_Valeur`) VALUES
(5, 12, 'Fumée', 0, 0),
(6, 26, 'Température', 21, 20),
(7, 27, 'Lumière', 700, 700),
(10, 30, 'Température', 20, 20),
(10, 31, 'Lumière', 700, 700),
(12, 32, 'Température', 23, 20),
(13, 33, 'Température', 21, 20),
(12, 34, 'Présence', 1, 0),
(15, 36, 'Lumière', 700, 700),
(14, 37, 'Température', 20, 20),
(14, 38, 'Porte d\'entrée', 1, 0),
(14, 39, 'Fenêtre', 1, 0),
(16, 40, 'Température', 20, 20),
(16, 41, 'Lumière', 700, 700),
(16, 42, 'Humidité', 81, 0),
(16, 43, 'Présence', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `conditions_d_utilisation`
--

CREATE TABLE `conditions_d_utilisation` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `conditions_d_utilisation`
--

INSERT INTO `conditions_d_utilisation` (`id`, `text`) VALUES
(1, 'Mamadou fi lay ndogoo inchaAllah');

-- --------------------------------------------------------

--
-- Structure de la table `donnees`
--

CREATE TABLE `donnees` (
  `IdDonnees` int(255) NOT NULL,
  `Type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Valeur` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `donnees`
--

INSERT INTO `donnees` (`IdDonnees`, `Type`, `Valeur`, `date`, `time`) VALUES
(1, 'Température', 10, '2017-06-01', '00:00:00'),
(2, 'Température', 11, '2017-06-01', '03:00:00'),
(3, 'Température', 12, '2017-06-01', '06:00:00'),
(4, 'Température', 15, '2017-06-01', '09:00:00'),
(5, 'Température', 19, '2017-06-01', '12:00:00'),
(6, 'Température', 25, '2017-06-01', '15:00:00'),
(7, 'Température', 16, '2017-06-01', '18:00:00'),
(8, 'eau', 1, '2017-06-02', '05:00:00'),
(9, 'eau', 10, '2017-06-02', '08:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `IdUtilisateur` int(255) NOT NULL,
  `IdMaison` int(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Porte` int(255) NOT NULL,
  `Voie` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Code_Postal` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Nombre_Piece` int(255) NOT NULL,
  `Nombre_Etage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `maison`
--

INSERT INTO `maison` (`IdUtilisateur`, `IdMaison`, `Nom`, `Porte`, `Voie`, `Adresse`, `Code_Postal`, `Ville`, `Nombre_Piece`, `Nombre_Etage`) VALUES
(24, 2, 'Maison1', 1, 'rue', 'bidon', '90000', 'Issy', 5, 1),
(25, 11, 'vacance', 6, 'rue', 'vac', '75000', 'rochelle', 9, 2),
(29, 12, 'Maison1', 1, 'rue', 'azerty', '90000', 'Issy', 10, 2),
(31, 21, 'Ma maison', 23, 'boulevard', 'Général Leclerc', '92130', 'Lizié', 4, 1),
(36, 24, 'Maison1', 1, 'rue', 'azerty', '90000', 'Issy', 20, 4),
(38, 25, 'Maison1', 2, 'rue', 'azerty', '90000', 'Issy', 12, 2),
(38, 26, 'Maison2', 3, 'rue', 'bidon', '90000', 'Issy', 10, 2),
(39, 27, 'Maison Principal', 10, 'rue', 'Pierre Currie', '94700', 'MaisonAlfort', 12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `nom`, `message`, `contact`) VALUES
(1, 'azerty', 'je suis le mesage\r\n', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `mode`
--

CREATE TABLE `mode` (
  `IdUtilisateur` int(255) NOT NULL,
  `IdCapteur` int(255) NOT NULL,
  `Idmode` int(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `Capteur` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Valeur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mode`
--

INSERT INTO `mode` (`IdUtilisateur`, `IdCapteur`, `Idmode`, `mode`, `Capteur`, `Valeur`) VALUES
(29, 26, 11, 'Automatique', 'Température', 20),
(31, 30, 13, 'Automatique', 'Température', 20),
(31, 31, 14, 'Automatique', 'Lumière', 700),
(36, 32, 15, 'Automatique', 'Température', 20),
(36, 33, 16, 'Automatique', 'Température', 20),
(38, 36, 18, 'Automatique', 'Lumière', 700),
(38, 37, 19, 'Automatique', 'Température', 20),
(39, 40, 20, 'Automatique', 'Température', 20),
(39, 41, 21, 'Automatique', 'Lumière', 700);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `IdMaison` int(11) NOT NULL,
  `IdPiece` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`IdMaison`, `IdPiece`, `Nom`) VALUES
(2, 5, 'Salon'),
(12, 6, 'Salon'),
(12, 7, 'Chambre'),
(12, 8, 'Cuisine'),
(21, 10, 'Salon'),
(21, 11, 'Cuisine'),
(24, 12, 'Salon'),
(24, 13, 'Chambre'),
(25, 14, 'Salon'),
(26, 15, 'Chambre'),
(27, 16, 'Salon'),
(27, 17, 'Chambre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IdUtilisateur` int(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `numero_abonne` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `QuestionSecrete` varchar(255) NOT NULL,
  `ReponseSecrete` varchar(255) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `nom`, `prenom`, `mail`, `mdp`, `numero_abonne`, `telephone`, `QuestionSecrete`, `ReponseSecrete`, `Admin`) VALUES
(2, 'jgdgdf', 'dfgsdhf', '123@gmail.com', 'qsdqsdqsdqsd', '1231312', '1231312', '', '', 0),
(3, 'abcde', 'ddadqss', 'dqsfqfqsfqs@qsdqs', 'sqdqsdq', '1231312', '1231312', '', '', 0),
(6, 'nouveaunom', 'test2', 'jdrebd@test', 'fhfghfghg', '2222222', '1231312', '', '', 0),
(7, 'dran', 'be', 'benjamin@dran.fr', 'azertyazerty', '999992222', '6943837', '', '', 0),
(17, '', '', 'jb', '90795a0ffaa8b88c0e250546d8439b', 'tata', '758449357', '', '', 0),
(20, 'LO', 'CHEIKHOUNA', 'cheikhouna@cheikhouna.com', '3105221c1c15399d170ef540e974ef4f37f84e93', 'tete', '758449357', '', '', 0),
(22, 'Chomes', 'G8C', 'G8c@chome.com', 'Chome', '0', '758449357', '', '', 0),
(24, 'dran', 'be', 'Chome@Chome.com', '8cb2237d0679ca88db6464eac60da96345513964', '12345', '12345', '', '', 0),
(25, 'dell', 'paul', 'pauldell@c-home.com', '8cb2237d0679ca88db6464eac60da96345513964', 'paul', '12345', '', '', 0),
(26, 'LO', 'CHEIKHOUNA', 'azerty@azerty.com', 'a0ff094025db6249d90f911e531633bdaea45616', 'azerty', '123456', '', '', 1),
(28, 'Basile', 'test', 'test@test.com', 'c4033bff94b567a190e33faa551f411caef444f2', 'test', '758449357', '', '', 0),
(29, 'azerty', 'azerty', 'azerty@azerty.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'azerty', '123456789', '', '', 0),
(31, 'qsd', 'qsd', 'qsd@qsd', '81b87be71decdd74ee12a34ad4c278b401bc2a09', 'jb123', '0648624597', '', '', 0),
(35, 'ben', 'ben', 'ben@chome.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'ben', '0123456789', 'Couleur', 'd1695e2cec40372ed7283e1e657b7ab18cd3efa9', 1),
(36, 'benji', 'benji', 'benji@chome.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'benji', '0123456789', 'Couleur', '1dc97c0fa3d7c1ac3418c6b94d7199687bef0836', 0),
(37, '', '', 'azefg', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '', 'SÃ©lectionnez une question', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0),
(38, 'dran', 'ben', 'benjamin123@C-Home.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', '123', '0123456789', 'Couleur', 'a0d6b8b8b6ff239253dbc1af10337dabd12f2236', 0),
(39, 'DRAN', 'Benjamin', 'benjamin.dran@isep.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'benjamindran', '0123456789', 'Couleur', 'a0d6b8b8b6ff239253dbc1af10337dabd12f2236', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`IdAuto`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`IdCapteur`),
  ADD KEY `IdPiece` (`IdPiece`);

--
-- Index pour la table `conditions_d_utilisation`
--
ALTER TABLE `conditions_d_utilisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donnees`
--
ALTER TABLE `donnees`
  ADD PRIMARY KEY (`IdDonnees`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`IdMaison`),
  ADD KEY `IdUtilisateur` (`IdUtilisateur`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mode`
--
ALTER TABLE `mode`
  ADD PRIMARY KEY (`Idmode`),
  ADD KEY `IdUtilisateur` (`IdUtilisateur`),
  ADD KEY `IdCapteur` (`IdCapteur`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`IdPiece`),
  ADD KEY `IdMaison` (`IdMaison`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IdUtilisateur`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `auto`
--
ALTER TABLE `auto`
  MODIFY `IdAuto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `IdCapteur` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `conditions_d_utilisation`
--
ALTER TABLE `conditions_d_utilisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `donnees`
--
ALTER TABLE `donnees`
  MODIFY `IdDonnees` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `IdMaison` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `mode`
--
ALTER TABLE `mode`
  MODIFY `Idmode` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `IdPiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUtilisateur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`IdPiece`) REFERENCES `piece` (`IdPiece`);

--
-- Contraintes pour la table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `maison_ibfk_1` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);

--
-- Contraintes pour la table `mode`
--
ALTER TABLE `mode`
  ADD CONSTRAINT `mode_ibfk_1` FOREIGN KEY (`IdCapteur`) REFERENCES `capteur` (`IdCapteur`),
  ADD CONSTRAINT `mode_ibfk_2` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`IdMaison`) REFERENCES `maison` (`IdMaison`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
