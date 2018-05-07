-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 07 Mai 2018 à 15:34
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `scolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `anneescolaires`
--

CREATE TABLE IF NOT EXISTS `anneescolaires` (
`id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `datedebut` datetime NOT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `anneescolaires`
--

INSERT INTO `anneescolaires` (`id`, `code`, `datedebut`, `statut`) VALUES
(1, '2017/2018', '2017-10-19 08:22:25', 1);

-- --------------------------------------------------------

--
-- Structure de la table `avoirs`
--

CREATE TABLE IF NOT EXISTS `avoirs` (
  `classe_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `coeff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `classrooms`
--

CREATE TABLE IF NOT EXISTS `classrooms` (
`id` int(11) NOT NULL,
  `serie_id` int(11) NOT NULL,
  `niveau_id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `libelle` varchar(254) NOT NULL,
  `inscription` float NOT NULL,
  `mensualite` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `classrooms`
--

INSERT INTO `classrooms` (`id`, `serie_id`, `niveau_id`, `code`, `libelle`, `inscription`, `mensualite`) VALUES
(1, 1, 1, '6e A', 'Sixième A', 15000, 10000),
(2, 4, 2, '5e A', 'Cinquième A', 20000, 15000),
(3, 2, 3, '4e A', 'Quatrième A', 25000, 20000),
(4, 2, 4, '3e A', 'Troisième A', 30000, 25000);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
`id` int(11) NOT NULL,
  `salles_id` int(11) NOT NULL,
  `professeur_id` int(11) NOT NULL,
  `anneescolaire_id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `jour` varchar(254) NOT NULL,
  `heuredebut` varchar(254) NOT NULL,
  `heurefin` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
`id` int(11) NOT NULL,
  `matricule` varchar(254) NOT NULL,
  `nom` varchar(254) NOT NULL,
  `prenom` varchar(254) NOT NULL,
  `datenaiss` datetime NOT NULL,
  `lieunaiss` varchar(254) NOT NULL,
  `sexe` int(11) NOT NULL,
  `adresse` varchar(254) NOT NULL,
  `telephone` varchar(254) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`id`, `matricule`, `nom`, `prenom`, `datenaiss`, `lieunaiss`, `sexe`, `adresse`, `telephone`) VALUES
(2, '', 'GUEYE', 'Papa', '0000-00-00 00:00:00', 'Thies', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316'),
(3, '', 'GUEYE', 'Papa', '0000-00-00 00:00:00', 'Thies', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316'),
(4, '', 'SARR', 'Omar Mbaye', '0000-00-00 00:00:00', 'Dakar Plateau', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316'),
(5, '2017OS000005', 'SARR', 'Omar Mbaye', '2009-02-08 00:00:00', 'Dakar Plateau', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316'),
(6, '2017OS000006', 'SARR', 'Omar Mbaye', '0000-00-00 00:00:00', 'Dakar Plateau', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316'),
(7, '2017OS000007', 'SARR', 'Omar Mbaye', '0000-00-00 00:00:00', 'Dakar Plateau', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316'),
(8, '2017/2018PG000008', 'GUEYE', 'Papa', '2009-07-05 00:00:00', 'Thies', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316'),
(9, '2017/2018PG000009', 'GUEYE', 'Papa', '2009-07-05 00:00:00', 'Thies', 1, 'Rue du Liban prolongÃ©e X Lamy, dakar', '776707316');

-- --------------------------------------------------------

--
-- Structure de la table `enseigners`
--

CREATE TABLE IF NOT EXISTS `enseigners` (
`id` int(11) NOT NULL,
  `anneescolaire_id` int(11) NOT NULL,
  `professeur_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE IF NOT EXISTS `evaluations` (
`id` int(11) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `date` datetime NOT NULL,
  `heuredebut` varchar(254) NOT NULL,
  `heurefin` varchar(254) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `typeevaluation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE IF NOT EXISTS `inscriptions` (
`id` int(11) NOT NULL,
  `anneescolaire_id` int(11) NOT NULL,
  `classroom_id` int(11) DEFAULT NULL,
  `eleve_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `montant` float NOT NULL,
  `mensualite` float NOT NULL,
  `social` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `anneescolaire_id`, `classroom_id`, `eleve_id`, `date`, `montant`, `mensualite`, `social`) VALUES
(6, 1, 3, 8, '2017-07-16 00:00:00', 36210, 10000, 1),
(7, 1, 3, 9, '2017-07-16 00:00:00', 36210, 10000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE IF NOT EXISTS `matieres` (
`id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `libelle` varchar(254) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matieres`
--

INSERT INTO `matieres` (`id`, `code`, `libelle`) VALUES
(1, 'MATHS', 'Mathématiques'),
(2, 'Fr', 'Français'),
(3, 'PC', 'Physique Chimie');

-- --------------------------------------------------------

--
-- Structure de la table `niveaus`
--

CREATE TABLE IF NOT EXISTS `niveaus` (
`id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `libelle` varchar(254) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `niveaus`
--

INSERT INTO `niveaus` (`id`, `code`, `libelle`) VALUES
(1, '6e', 'Sixième'),
(2, '5e', 'Cinquième'),
(3, '4e', 'Quatrième'),
(4, '3e', 'Troisième');

-- --------------------------------------------------------

--
-- Structure de la table `noters`
--

CREATE TABLE IF NOT EXISTS `noters` (
  `eleve_id` int(11) NOT NULL,
  `evaluation_id` int(11) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE IF NOT EXISTS `paiements` (
`id` int(11) NOT NULL,
  `eleve_id` int(11) NOT NULL,
  `anneescolaire_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `code` varchar(254) NOT NULL,
  `mois` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `paiements`
--

INSERT INTO `paiements` (`id`, `eleve_id`, `anneescolaire_id`, `date`, `code`, `mois`) VALUES
(3, 8, 1, '2018-02-17 19:24:00', 'code', 1),
(4, 8, 1, '2018-02-17 19:24:00', 'code', 1),
(5, 8, 1, '2018-02-17 19:24:00', 'code', 1),
(6, 9, 1, '2018-02-21 12:40:00', 'Mois de fevrire', 3),
(7, 8, 1, '2018-02-21 13:01:00', 'Mois de jAnvier', 1),
(8, 9, 1, '2018-02-21 13:11:00', 'Nouvelle Payement moi de d''aoute', 8);

-- --------------------------------------------------------

--
-- Structure de la table `participerevaluations`
--

CREATE TABLE IF NOT EXISTS `participerevaluations` (
  `evaluation_id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE IF NOT EXISTS `professeurs` (
`id` int(11) NOT NULL,
  `matricule` varchar(254) NOT NULL,
  `nom` varchar(254) NOT NULL,
  `prenom` varchar(254) NOT NULL,
  `adresse` varchar(254) NOT NULL,
  `telephone` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE IF NOT EXISTS `salles` (
`id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `nombreplace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `semestres`
--

CREATE TABLE IF NOT EXISTS `semestres` (
`id` int(11) NOT NULL,
  `anneescolaire_id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `datedebut` datetime NOT NULL,
  `phase` varchar(254) NOT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `semestres`
--

INSERT INTO `semestres` (`id`, `anneescolaire_id`, `code`, `datedebut`, `phase`, `statut`) VALUES
(1, 1, 'Semestre 1', '2017-10-01 00:00:00', 'Premier Semestre', 1),
(2, 1, 'Semestre 2', '2018-03-07 00:00:00', 'Deuxieme phase', 0);

-- --------------------------------------------------------

--
-- Structure de la table `series`
--

CREATE TABLE IF NOT EXISTS `series` (
`id` int(11) NOT NULL,
  `code` varchar(254) NOT NULL,
  `libelle` varchar(254) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `series`
--

INSERT INTO `series` (`id`, `code`, `libelle`) VALUES
(1, 'S1', 'Science expermentale 1'),
(2, 'S2', '`Science expermentale 2'),
(3, 'L1', 'Litterature 1'),
(4, 'L2', 'Litterature 2');

-- --------------------------------------------------------

--
-- Structure de la table `typeevaluations`
--

CREATE TABLE IF NOT EXISTS `typeevaluations` (
`id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typeevaluations`
--

INSERT INTO `typeevaluations` (`id`, `libelle`) VALUES
(1, 'Devoir'),
(2, 'Composition');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `profil` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `profil`, `username`, `password`, `active`) VALUES
(1, 'Pouye', 'Moustapha', 0, 'mouride', 'passer', 1),
(2, 'gueye', 'Pape', 0, 'magueye', 'passer', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `anneescolaires`
--
ALTER TABLE `anneescolaires`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avoirs`
--
ALTER TABLE `avoirs`
 ADD PRIMARY KEY (`classe_id`,`matiere_id`);

--
-- Index pour la table `classrooms`
--
ALTER TABLE `classrooms`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_association19` (`niveau_id`), ADD KEY `fk_association21` (`serie_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_association15` (`professeur_id`), ADD KEY `fk_association18` (`anneescolaire_id`), ADD KEY `fk_association3` (`matiere_id`), ADD KEY `fk_association4` (`classe_id`), ADD KEY `fk_association5` (`salles_id`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enseigners`
--
ALTER TABLE `enseigners`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_association16` (`professeur_id`), ADD KEY `fk_association24` (`matiere_id`), ADD KEY `fk_association25` (`anneescolaire_id`);

--
-- Index pour la table `evaluations`
--
ALTER TABLE `evaluations`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_association11` (`semestre_id`), ADD KEY `fk_association2` (`matiere_id`), ADD KEY `typeevaluation_id` (`typeevaluation_id`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_association10` (`anneescolaire_id`), ADD KEY `fk_association7` (`eleve_id`), ADD KEY `fk_association8` (`classroom_id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveaus`
--
ALTER TABLE `niveaus`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noters`
--
ALTER TABLE `noters`
 ADD PRIMARY KEY (`eleve_id`,`evaluation_id`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_association22` (`anneescolaire_id`), ADD KEY `fk_association23` (`eleve_id`);

--
-- Index pour la table `participerevaluations`
--
ALTER TABLE `participerevaluations`
 ADD PRIMARY KEY (`evaluation_id`,`classe_id`), ADD KEY `classe_id` (`classe_id`);

--
-- Index pour la table `professeurs`
--
ALTER TABLE `professeurs`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `semestres`
--
ALTER TABLE `semestres`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_association12` (`anneescolaire_id`);

--
-- Index pour la table `series`
--
ALTER TABLE `series`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeevaluations`
--
ALTER TABLE `typeevaluations`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `anneescolaires`
--
ALTER TABLE `anneescolaires`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `classrooms`
--
ALTER TABLE `classrooms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `enseigners`
--
ALTER TABLE `enseigners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `evaluations`
--
ALTER TABLE `evaluations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `niveaus`
--
ALTER TABLE `niveaus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `professeurs`
--
ALTER TABLE `professeurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `semestres`
--
ALTER TABLE `semestres`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `series`
--
ALTER TABLE `series`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `typeevaluations`
--
ALTER TABLE `typeevaluations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `classrooms`
--
ALTER TABLE `classrooms`
ADD CONSTRAINT `fk_association19` FOREIGN KEY (`niveau_id`) REFERENCES `niveaus` (`id`),
ADD CONSTRAINT `fk_association21` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
ADD CONSTRAINT `fk_association15` FOREIGN KEY (`professeur_id`) REFERENCES `professeurs` (`id`),
ADD CONSTRAINT `fk_association18` FOREIGN KEY (`anneescolaire_id`) REFERENCES `anneescolaires` (`id`),
ADD CONSTRAINT `fk_association3` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`),
ADD CONSTRAINT `fk_association4` FOREIGN KEY (`classe_id`) REFERENCES `classrooms` (`id`),
ADD CONSTRAINT `fk_association5` FOREIGN KEY (`salles_id`) REFERENCES `salles` (`id`);

--
-- Contraintes pour la table `enseigners`
--
ALTER TABLE `enseigners`
ADD CONSTRAINT `fk_association16` FOREIGN KEY (`professeur_id`) REFERENCES `professeurs` (`id`),
ADD CONSTRAINT `fk_association24` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`),
ADD CONSTRAINT `fk_association25` FOREIGN KEY (`anneescolaire_id`) REFERENCES `anneescolaires` (`id`);

--
-- Contraintes pour la table `evaluations`
--
ALTER TABLE `evaluations`
ADD CONSTRAINT `evaluations_ibfk_1` FOREIGN KEY (`typeevaluation_id`) REFERENCES `typeevaluations` (`id`),
ADD CONSTRAINT `fk_association11` FOREIGN KEY (`semestre_id`) REFERENCES `semestres` (`id`),
ADD CONSTRAINT `fk_association2` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`);

--
-- Contraintes pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
ADD CONSTRAINT `fk_association10` FOREIGN KEY (`anneescolaire_id`) REFERENCES `anneescolaires` (`id`),
ADD CONSTRAINT `fk_association7` FOREIGN KEY (`eleve_id`) REFERENCES `eleves` (`id`),
ADD CONSTRAINT `fk_association8` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`);

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
ADD CONSTRAINT `fk_association22` FOREIGN KEY (`anneescolaire_id`) REFERENCES `anneescolaires` (`id`),
ADD CONSTRAINT `fk_association23` FOREIGN KEY (`eleve_id`) REFERENCES `eleves` (`id`);

--
-- Contraintes pour la table `participerevaluations`
--
ALTER TABLE `participerevaluations`
ADD CONSTRAINT `participerevaluations_ibfk_1` FOREIGN KEY (`evaluation_id`) REFERENCES `evaluations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `participerevaluations_ibfk_2` FOREIGN KEY (`classe_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `semestres`
--
ALTER TABLE `semestres`
ADD CONSTRAINT `fk_association12` FOREIGN KEY (`anneescolaire_id`) REFERENCES `anneescolaires` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
