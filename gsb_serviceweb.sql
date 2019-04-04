-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 27 mars 2019 à 08:52
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsb_serviceweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

--
-- Déchargement des données de la table `praticien`
--

INSERT INTO `praticien` (`pra_num`, `pra_nom`, `pra_prenom`, `pra_adresse`, `pra_cp`, `pra_ville`, `pra_coefNotoriete`, `pra_typeCode`, `pra_visiteur`) VALUES
(1, 'Notini', 'Alain', '114 r Authie', '85000', 'LA ROCHE SUR YON', 290.03, 'MH', 'a131'),
(2, 'Gosselin', 'Albert', '13 r Devon', '41000', 'BLOIS', 307.49, 'MV', 'a131'),
(3, 'Delahaye', 'André', '36 av 6 Juin', '25000', 'BESANCON', 185.79, 'PS', 'a131'),
(4, 'Leroux', 'André', '47 av Robert Schuman', '60000', 'BEAUVAIS', 172.04, 'PH', 'a131'),
(5, 'Desmoulins', 'Anne', '31 r St Jean', '30000', 'NIMES', 94.75, 'PO', 'a131'),
(6, 'Mouel', 'Anne', '27 r Auvergne', '80000', 'AMIENS', 45.2, 'MH', 'a131'),
(7, 'Desgranges-Lentz', 'Antoine', '1 r Albert de Mun', '29000', 'MORLAIX', 20.07, 'MV', 'a17'),
(8, 'Marcouiller', 'Arnaud', '31 r St Jean', '68000', 'MULHOUSE', 396.52, 'PS', 'a17'),
(9, 'Dupuy', 'Benoit', '9 r Demolombe', '34000', 'MONTPELLIER', 395.66, 'PH', 'a17'),
(10, 'Lerat', 'Bernard', '31 r St Jean', '59000', 'LILLE', 257.79, 'PO', 'a17'),
(11, 'Marçais-Lefebvre', 'Bertrand', '86Bis r Basse', '67000', 'STRASBOURG', 450.96, 'MH', 'a17'),
(12, 'Boscher', 'Bruno', '94 r Falaise', '10000', 'TROYES', 356.14, 'MV', 'a17'),
(13, 'Morel', 'Catherine', '21 r Chateaubriand', '75000', 'PARIS', 379.57, 'PS', 'c14'),
(14, 'Guivarch', 'Chantal', '4 av Gén Laperrine', '45000', 'ORLEANS', 114.56, 'PH', 'c14'),
(15, 'Bessin-Grosdoit', 'Christophe', '92 r Falaise', '6000', 'NICE', 222.06, 'PO', 'c14'),
(16, 'Rossa', 'Claire', '14 av Thiès', '6000', 'NICE', 529.78, 'MH', 'c14'),
(17, 'Cauchy', 'Denis', '5 av Ste Thérèse', '11000', 'NARBONNE', 458.82, 'MV', 'c14'),
(18, 'Gaffé', 'Dominique', '9 av 1ère Armée Française', '35000', 'RENNES', 213.4, 'PS', 'c14'),
(19, 'Guenon', 'Dominique', '98 bd Mar Lyautey', '44000', 'NANTES', 175.89, 'PH', 'c14'),
(20, 'Prévot', 'Dominique', '29 r Lucien Nelle', '87000', 'LIMOGES', 151.36, 'PO', 'p42'),
(21, 'Houchard', 'Eliane', '9 r Demolombe', '49100', 'ANGERS', 436.96, 'MH', 'p42'),
(22, 'Desmons', 'Elisabeth', '51 r Bernières', '29000', 'QUIMPER', 281.17, 'MV', 'p42'),
(23, 'Flament', 'Elisabeth', '11 r Pasteur', '35000', 'RENNES', 315.6, 'PS', 'p42'),
(24, 'Goussard', 'Emmanuel', '9 r Demolombe', '41000', 'BLOIS', 40.72, 'PH', 'p42'),
(25, 'Desprez', 'Eric', '9 r Vaucelles', '33000', 'BORDEAUX', 406.85, 'PO', 'p42'),
(26, 'Coste', 'Evelyne', '29 r Lucien Nelle', '19000', 'TULLE', 441.87, 'MH', 'p42'),
(27, 'Lefebvre', 'Frédéric', '2 pl Wurzburg', '55000', 'VERDUN', 573.63, 'MV', 'p42'),
(28, 'Lemée', 'Frédéric', '29 av 6 Juin', '56000', 'VANNES', 326.4, 'PS', 'p42'),
(29, 'Martin', 'Frédéric', 'Bât A 90 r Bayeux', '70000', 'VESOUL', 506.06, 'PH', 'm35'),
(30, 'Marie', 'Frédérique', '172 r Caponière', '70000', 'VESOUL', 313.31, 'PO', 'm35'),
(31, 'Rosenstech', 'Geneviève', '27 r Auvergne', '75000', 'PARIS', 366.82, 'MH', 'm35'),
(32, 'Pontavice', 'Ghislaine', '8 r Gaillon', '86000', 'POITIERS', 265.58, 'MV', 'm35'),
(33, 'Leveneur-Mosquet', 'Guillaume', '47 av Robert Schuman', '64000', 'PAU', 184.97, 'PS', 'm35'),
(34, 'Blanchais', 'Guy', '30 r Authie', '8000', 'SEDAN', 502.48, 'PH', 'm35'),
(35, 'Leveneur', 'Hugues', '7 pl St Gilles', '62000', 'ARRAS', 7.39, 'PO', 'm35'),
(36, 'Mosquet', 'Isabelle', '22 r Jules Verne', '76000', 'ROUEN', 77.1, 'MH', 'm35'),
(37, 'Giraudon', 'Jean-Christophe', '1 r Albert de Mun', '38100', 'VIENNE', 92.62, 'MV', 'm35'),
(38, 'Marie', 'Jean-Claude', '26 r Hérouville', '69000', 'LYON', 120.1, 'PS', 'm35'),
(39, 'Maury', 'Jean-François', '5 r Pierre Girard', '71000', 'CHALON SUR SAONE', 13.73, 'PH', 'm35'),
(40, 'Dennel', 'Jean-Louis', '7 pl St Gilles', '28000', 'CHARTRES', 550.69, 'PO', 'm35'),
(41, 'Ain', 'Jean-Pierre', '4 résid Olympia', '2000', 'LAON', 5.59, 'MH', 'm35'),
(42, 'Chemery', 'Jean-Pierre', '51 pl Ancienne Boucherie', '14000', 'CAEN', 396.58, 'MV', 'm35'),
(43, 'Comoz', 'Jean-Pierre', '35 r Auguste Lechesne', '18000', 'BOURGES', 340.35, 'PS', 'm35'),
(44, 'Desfaudais', 'Jean-Pierre', '7 pl St Gilles', '29000', 'BREST', 71.76, 'PH', 'm35');

-- --------------------------------------------------------

--
-- Structure de la table `rapport_visite`
--


--
-- Déchargement des données de la table `rapport_visite`
--

INSERT INTO `rapport_visite` (`vis_matricule`, `rap_num`, `pra_num`, `rap_bilan`, `rap_dateVisite`, `rap_dateRapport`) VALUES
('a131', 1, 1, 'Accueil chaleureux. Praticien cordial. A été convaincu par les produits présentés', '2018-02-20', '2018-02-20'),
('a131', 2, 2, 'Entretien expéditif. Praticien non convaincu. Rendez-vous pris dans un mois', '2018-02-20', '2018-02-21'),
('a55', 3, 36, 'Très agréable. Intéressée par les produits. Echange intéressant. A demandé des échantillons spécifiques', '2018-03-14', '2018-03-14'),
('n42', 4, 40, 'Rendez-vous annulé. Praticien appelé pour une urgence. A rappeler pour rendez-vous ultérieur', '2018-02-24', '2018-02-24');

-- --------------------------------------------------------

--
-- Structure de la table `type_praticien`
--


--
-- Déchargement des données de la table `type_praticien`
--

INSERT INTO `type_praticien` (`type_code`, `type_libelle`, `type_lieu`) VALUES
('MH', 'Médecin Hospitalier', 'Hopital ou clinique'),
('MV', 'Médecine de Ville', 'Cabinet'),
('PH', 'Pharmacien Hospitalier', 'Hopital ou clinique'),
('PO', 'Pharmacien Officine', 'Pharmacie'),
('PS', 'Personnel de santé', 'Centre paramédical');

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`vis_matricule`, `vis_nom`, `vis_prenom`, `vis_adresse`, `vis_cp`, `vis_ville`, `vis_login`, `vis_mdp`) VALUES
('a131', 'Villechalane', 'Louis', '8 cours Lafontaine', '29000', 'BREST', 'lvillachane', 'azerty'),
('a17', 'Andre', 'David', '1 rue Aimon de Chissee', '38100', 'GRENOBLE', 'dandre', 'azerty'),
('a55', 'Bedos', 'Christian', '1 rue Bénédictins', '65000', 'TARBES', 'cbedos', 'azerty'),
('a93', 'Tusseau', 'Louis', '22 rue Renou', '86000', 'POITIERS', 'ltusseau', 'azerty'),
('b13', 'Bentot', 'Pascal', '11 avenue 6 Juin', '67000', 'STRASBOURG', 'pbentot', 'azerty'),
('b16', 'Bioret', 'Luc', '1 rue Linne', '35000', 'RENNES', 'lbioret', 'azerty'),
('b19', 'Bunisset', 'Francis', '10 rue Nicolas Chorier', '85000', 'LA ROCHE SUR YON', 'fbunisset', 'azerty'),
('b25', 'Bunisset', 'Denise', '1 rue Lionne', '49100', 'ANGERS', 'dbunisset', 'azerty'),
('b28', 'Cacheux', 'Bernard', '114 rue Authie', '34000', 'MONTPELLIER', 'bcacheux', 'azerty'),
('b34', 'Cadic', 'Eric', '123 rue Caponière', '41000', 'BLOIS', 'ecadic', 'azerty'),
('b4', 'Charoze', 'Catherine', '100 place Géants', '33000', 'BORDEAUX', 'ccharoze', 'azerty'),
('b50', 'Clepkens', 'Christophe', '12 rue Fédérico Garcia Lorca', '13000', 'MARSEILLE', 'cclepkens', 'azerty'),
('b59', 'Cottin', 'Vincenne', '36 square Capucins', '5000', 'GAP', 'vcottin', 'azerty'),
('c14', 'Daburon', 'François', '13 rue Champs Elysées', '88500', 'MIRECOURT', 'fdaburon', 'azerty'),
('c3', 'De', 'Philippe', '13 rue Charles Peguy', '10000', 'TROYES', 'pde', 'azerty'),
('c54', 'Debelle', 'Michel', '181 rue Caponière', '88000', 'EPINAL', 'mdebelle', 'azerty'),
('d13', 'Debelle', 'Jeanne', '134 rue Stalingrad', '44000', 'NANTES', 'jdebelle', 'azerty'),
('d51', 'Debroise', 'Michel', '2 avenue 6 Juin', '70000', 'VESOUL', 'mdebroise', 'azerty'),
('e22', 'Desmarquest', 'Nathalie', '14 rue Fédérico Garcia Lorca', '54000', 'NANCY', 'ndesmarquest', 'azerty'),
('e24', 'Desnost', 'Pierre', '16 rue Barral de Montferrat', '55000', 'VERDUN', 'pdesnost', 'azerty'),
('e39', 'Dudouit', 'Frédéric', '18 quai Xavier Jouvin', '75000', 'PARIS', 'fdudouit', 'azerty'),
('e49', 'Duncombe', 'Claude', '19 avenue Alsace Lorraine', '88800', 'VITTEL', 'cduncombe', 'azerty'),
('e5', 'Enault-Pascreau', 'Céline', '25B rue Stalingrad', '40000', 'MONT DE MARSAN', 'cenault', 'azerty'),
('e52', 'Eynde', 'Valérie', '3 rue Henri Moissan', '76000', 'ROUEN', 'veynde', 'azerty'),
('f21', 'Finck', 'Jacques', 'route Montreuil Bellay', '74000', 'ANNECY', 'jfinck', 'azerty'),
('f39', 'Frémont', 'Fernande', '4 rue Jean Giono', '69000', 'LYON', 'ffremont', 'azerty'),
('f4', 'Gest', 'Alain', '30 rue Authie', '46000', 'FIGEAC', 'agest', 'azerty');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
