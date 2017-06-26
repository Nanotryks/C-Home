-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 26 Juin 2017 à 07:18
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
(20, 53, 'Humidité', 19, 0),
(20, 54, 'Présence', 0, 0);

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
  `IdUtilisateur` int(11) NOT NULL,
  `IdDonnees` int(255) NOT NULL,
  `Type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Valeur` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(45, 29, 'Maison Principal', 1, 'rue', 'Pierre Currie', '94700', 'MaisonAlfort', 12, 2);

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
(1, 'Jean-Baptiste MARCHON', 'Bonjour, je rencontre un problème lorsque je veux modifier mes paramètres utilisateurs. Pourriez-vous m\'aider ?\r\n', '123456789'),
(2, 'Benjamin DRAN', 'Bonsoir, je pars en vacances dans 2 jours et j\'aimerai que vous puissiez garder un oeil sur le chauffage central de ma maison', '0123456789');

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
(29, 20, 'Salon');

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
(43, 'admin', 'admin', 'admin@Chome.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '0000', '0123456789', 'Couleur', 'd1695e2cec40372ed7283e1e657b7ab18cd3efa9', 1),
(45, 'Demo', 'Demo', 'demo@Chome.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '0001', '0123456789', 'Couleur', 'a0d6b8b8b6ff239253dbc1af10337dabd12f2236', 0);

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
  ADD PRIMARY KEY (`IdDonnees`),
  ADD KEY `IdUtilisateur` (`IdUtilisateur`);

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
  MODIFY `IdCapteur` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT pour la table `conditions_d_utilisation`
--
ALTER TABLE `conditions_d_utilisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `donnees`
--
ALTER TABLE `donnees`
  MODIFY `IdDonnees` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `IdMaison` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `mode`
--
ALTER TABLE `mode`
  MODIFY `Idmode` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `IdPiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUtilisateur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`IdPiece`) REFERENCES `piece` (`IdPiece`);

--
-- Contraintes pour la table `donnees`
--
ALTER TABLE `donnees`
  ADD CONSTRAINT `donnees_ibfk_1` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);

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
