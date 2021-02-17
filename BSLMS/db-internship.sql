-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 09:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `id_C` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`id_C`, `Name`, `Description`, `Picture`) VALUES
(1, 'Informatique', 'Catalogue pour le domaine d\'info', '/img/cata1'),
(2, 'Gestion des projets', 'Gerer et piloter les projets', 'img/cata2'),
(3, 'hybride', 'info et gestion', '/img/cata3'),
(4, 'catalogue', '4eme catalogue', '/img/cata4');

-- --------------------------------------------------------

--
-- Table structure for table `catalogue_formation`
--

CREATE TABLE `catalogue_formation` (
  `id_C` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue_formation`
--

INSERT INTO `catalogue_formation` (`id_C`, `id`) VALUES
(1, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `compagne`
--

CREATE TABLE `compagne` (
  `id` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Description` varchar(60) NOT NULL,
  `date_debut` varchar(15) NOT NULL,
  `date_fin` varchar(15) NOT NULL,
  `annee` varchar(15) NOT NULL,
  `population` varchar(30) NOT NULL,
  `echantillion` int(11) NOT NULL,
  `validation` varchar(30) NOT NULL,
  `budget` int(11) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `catalogue` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compagne`
--

INSERT INTO `compagne` (`id`, `Nom`, `Description`, `date_debut`, `date_fin`, `annee`, `population`, `echantillion`, `validation`, `budget`, `currency`, `catalogue`, `status`) VALUES
(202024, 'comp1', 'La 1ere compagne', '08/28/2020', '09/05/2020', '2020', 'manager', 33, 'manager', 40000, 'ADP', 'C1/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `compagne_employe`
--

CREATE TABLE `compagne_employe` (
  `id_C` int(11) NOT NULL,
  `matricule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compagne_employe`
--

INSERT INTO `compagne_employe` (`id_C`, `matricule`) VALUES
(202024, 'IA1745'),
(202024, 'L1342'),
(202024, 'R3716'),
(202110, 'IA1745'),
(202024, 'IA1745'),
(202024, 'L1342'),
(202024, 'R3716'),
(202110, 'IA1745');

-- --------------------------------------------------------

--
-- Table structure for table `compagne_mail`
--

CREATE TABLE `compagne_mail` (
  `id_email` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compagne_mail`
--

INSERT INTO `compagne_mail` (`id_email`, `id`, `status`) VALUES
(1, 202024, 1),
(2, 202110, 1);

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `iso` char(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`iso`, `name`) VALUES
('KRW', '(South) Korean Won'),
('AFA', 'Afghanistan Afghani'),
('ALL', 'Albanian Lek'),
('DZD', 'Algerian Dinar'),
('ADP', 'Andorran Peseta'),
('AOK', 'Angolan Kwanza'),
('ARS', 'Argentine Peso'),
('AMD', 'Armenian Dram'),
('AWG', 'Aruban Florin'),
('AUD', 'Australian Dollar'),
('BSD', 'Bahamian Dollar'),
('BHD', 'Bahraini Dinar'),
('BDT', 'Bangladeshi Taka'),
('BBD', 'Barbados Dollar'),
('BZD', 'Belize Dollar'),
('BMD', 'Bermudian Dollar'),
('BTN', 'Bhutan Ngultrum'),
('BOB', 'Bolivian Boliviano'),
('BWP', 'Botswanian Pula'),
('BRL', 'Brazilian Real'),
('GBP', 'British Pound'),
('BND', 'Brunei Dollar'),
('BGN', 'Bulgarian Lev'),
('BUK', 'Burma Kyat'),
('BIF', 'Burundi Franc'),
('CAD', 'Canadian Dollar'),
('CVE', 'Cape Verde Escudo'),
('KYD', 'Cayman Islands Dollar'),
('CLP', 'Chilean Peso'),
('CLF', 'Chilean Unidades de Fomento'),
('COP', 'Colombian Peso'),
('XOF', 'Communauté Financière Africaine BCEAO - Francs'),
('XAF', 'Communauté Financière Africaine BEAC, Francs'),
('KMF', 'Comoros Franc'),
('XPF', 'Comptoirs Français du Pacifique Francs'),
('CRC', 'Costa Rican Colon'),
('CUP', 'Cuban Peso'),
('CYP', 'Cyprus Pound'),
('CZK', 'Czech Republic Koruna'),
('DKK', 'Danish Krone'),
('YDD', 'Democratic Yemeni Dinar'),
('DOP', 'Dominican Peso'),
('XCD', 'East Caribbean Dollar'),
('TPE', 'East Timor Escudo'),
('ECS', 'Ecuador Sucre'),
('EGP', 'Egyptian Pound'),
('SVC', 'El Salvador Colon'),
('EEK', 'Estonian Kroon (EEK)'),
('ETB', 'Ethiopian Birr'),
('EUR', 'Euro'),
('FKP', 'Falkland Islands Pound'),
('FJD', 'Fiji Dollar'),
('GMD', 'Gambian Dalasi'),
('GHC', 'Ghanaian Cedi'),
('GIP', 'Gibraltar Pound'),
('XAU', 'Gold, Ounces'),
('GTQ', 'Guatemalan Quetzal'),
('GNF', 'Guinea Franc'),
('GWP', 'Guinea-Bissau Peso'),
('GYD', 'Guyanan Dollar'),
('HTG', 'Haitian Gourde'),
('HNL', 'Honduran Lempira'),
('HKD', 'Hong Kong Dollar'),
('HUF', 'Hungarian Forint'),
('INR', 'Indian Rupee'),
('IDR', 'Indonesian Rupiah'),
('XDR', 'International Monetary Fund (IMF) Special Drawing Rights'),
('IRR', 'Iranian Rial'),
('IQD', 'Iraqi Dinar'),
('IEP', 'Irish Punt'),
('ILS', 'Israeli Shekel'),
('JMD', 'Jamaican Dollar'),
('JPY', 'Japanese Yen'),
('JOD', 'Jordanian Dinar'),
('KHR', 'Kampuchean (Cambodian) Riel'),
('KES', 'Kenyan Schilling'),
('KWD', 'Kuwaiti Dinar'),
('LAK', 'Lao Kip'),
('LBP', 'Lebanese Pound'),
('LSL', 'Lesotho Loti'),
('LRD', 'Liberian Dollar'),
('LYD', 'Libyan Dinar'),
('MOP', 'Macau Pataca'),
('MGF', 'Malagasy Franc'),
('MWK', 'Malawi Kwacha'),
('MYR', 'Malaysian Ringgit'),
('MVR', 'Maldive Rufiyaa'),
('MTL', 'Maltese Lira'),
('MRO', 'Mauritanian Ouguiya'),
('MUR', 'Mauritius Rupee'),
('MXP', 'Mexican Peso'),
('MNT', 'Mongolian Tugrik'),
('MAD', 'Moroccan Dirham'),
('MZM', 'Mozambique Metical'),
('NAD', 'Namibian Dollar'),
('NPR', 'Nepalese Rupee'),
('ANG', 'Netherlands Antillian Guilder'),
('YUD', 'New Yugoslavia Dinar'),
('NZD', 'New Zealand Dollar'),
('NIO', 'Nicaraguan Cordoba'),
('NGN', 'Nigerian Naira'),
('KPW', 'North Korean Won'),
('NOK', 'Norwegian Kroner'),
('OMR', 'Omani Rial'),
('PKR', 'Pakistan Rupee'),
('XPD', 'Palladium Ounces'),
('PAB', 'Panamanian Balboa'),
('PGK', 'Papua New Guinea Kina'),
('PYG', 'Paraguay Guarani'),
('PEN', 'Peruvian Nuevo Sol'),
('PHP', 'Philippine Peso'),
('XPT', 'Platinum, Ounces'),
('PLN', 'Polish Zloty'),
('QAR', 'Qatari Rial'),
('RON', 'Romanian Leu'),
('RUB', 'Russian Ruble'),
('RWF', 'Rwanda Franc'),
('WST', 'Samoan Tala'),
('STD', 'Sao Tome and Principe Dobra'),
('SAR', 'Saudi Arabian Riyal'),
('SCR', 'Seychelles Rupee'),
('SLL', 'Sierra Leone Leone'),
('XAG', 'Silver, Ounces'),
('SGD', 'Singapore Dollar'),
('SKK', 'Slovak Koruna'),
('SBD', 'Solomon Islands Dollar'),
('SOS', 'Somali Schilling'),
('ZAR', 'South African Rand'),
('LKR', 'Sri Lanka Rupee'),
('SHP', 'St. Helena Pound'),
('SDP', 'Sudanese Pound'),
('SRG', 'Suriname Guilder'),
('SZL', 'Swaziland Lilangeni'),
('SEK', 'Swedish Krona'),
('CHF', 'Swiss Franc'),
('SYP', 'Syrian Potmd'),
('TWD', 'Taiwan Dollar'),
('TZS', 'Tanzanian Schilling'),
('THB', 'Thai Baht'),
('TOP', 'Tongan Paanga'),
('TTD', 'Trinidad and Tobago Dollar'),
('TND', 'Tunisian Dinar'),
('TRY', 'Turkish Lira'),
('UGX', 'Uganda Shilling'),
('AED', 'United Arab Emirates Dirham'),
('UYU', 'Uruguayan Peso'),
('USD', 'US Dollar'),
('VUV', 'Vanuatu Vatu'),
('VEF', 'Venezualan Bolivar'),
('VND', 'Vietnamese Dong'),
('YER', 'Yemeni Rial'),
('CNY', 'Yuan (Chinese) Renminbi'),
('ZRZ', 'Zaire Zaire'),
('ZMK', 'Zambian Kwacha'),
('ZWD', 'Zimbabwe Dollar');

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE `entity` (
  `id_entity` varchar(12) NOT NULL,
  `description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entity`
--

INSERT INTO `entity` (`id_entity`, `description`) VALUES
('E10', 'Administration'),
('E11', 'RH');

-- --------------------------------------------------------

--
-- Table structure for table `eval_criteria`
--

CREATE TABLE `eval_criteria` (
  `ec_id` varchar(5) NOT NULL,
  `ec_group` varchar(5) NOT NULL,
  `ec_order` int(11) NOT NULL,
  `ec_desc` text NOT NULL,
  `ec_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_e` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_debut` varchar(15) NOT NULL,
  `date_fin` varchar(15) NOT NULL,
  `cout` int(11) NOT NULL,
  `id_comp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_e`, `id`, `date_debut`, `date_fin`, `cout`, `id_comp`) VALUES
(1, 1, '01/01/2020', '04/01/2020', 1000, 202024),
(2, 1, '02/09/2020', '04/09/2020', 2000, 202024),
(3, 2, '23/08/2020', '25/08/2020', 3000, 202024),
(4, 2, '26/03/2020', '30/03/2020', 4000, 202024),
(5, 3, '12/04/2020', '20/04/2020', 3000, 202024),
(6, 3, '10/05/2020', '16/05/2020', 4000, 202024),
(7, 4, '06/06/2020', '09/06/2020', 2400, 202024),
(8, 4, '03/07/2020', '06/07/2020', 2000, 202024);

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Picture` varchar(40) NOT NULL,
  `Visible` tinyint(1) NOT NULL,
  `id_domaine` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `category_id` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`id`, `name`, `Description`, `Duration`, `Picture`, `Visible`, `id_domaine`, `category_id`, `type`) VALUES
(1, 'PHP', 'test test test', 3, '/img/form1', 1, '', '', 'certifiante'),
(2, 'Management', 'management', 3, '/img/form2', 1, '', '', 'diplomante'),
(3, 'Oracle', 'oracle course', 3, '/img/form3', 1, '', '', 'certifiante'),
(4, 'Web design', 'developpement web', 3, '/img/form4', 1, '', '', 'diplomante');

-- --------------------------------------------------------

--
-- Table structure for table `group_criteria_eval`
--

CREATE TABLE `group_criteria_eval` (
  `group_id` varchar(5) NOT NULL,
  `group_label` varchar(30) NOT NULL,
  `group_desc` text NOT NULL,
  `group_order` int(11) NOT NULL,
  `group_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `must_learn`
--

CREATE TABLE `must_learn` (
  `id_Q` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `must_learn`
--

INSERT INTO `must_learn` (`id_Q`, `Description`) VALUES
(1, 'QST1'),
(2, 'QST2');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id_user` varchar(10) NOT NULL,
  `id_passwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id_user`, `id_passwd`) VALUES
('IA1745', 'achr4248'),
('L1342', 'abde1234');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` varchar(10) NOT NULL,
  `label` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `label`) VALUES
('00001', 'Apprenant'),
('00002', 'Responsable de forma');

-- --------------------------------------------------------

--
-- Table structure for table `training_category`
--

CREATE TABLE `training_category` (
  `category_id` varchar(5) DEFAULT NULL,
  `category_label_fr` varchar(100) NOT NULL,
  `category_label_en` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_category`
--

INSERT INTO `training_category` (`category_id`, `category_label_fr`, `category_label_en`) VALUES
('00001', 'Technique', 'Technique'),
('00002', 'Gestion', 'Gestion'),
('00003', 'Gestion de projet', 'Gestion de projet'),
('00004', 'Logistique', 'Logistique'),
('00005', 'Gestion équipe', 'Gestion équipe'),
('00006', 'Administratif', 'Administratif'),
('00007', 'Développement RH', 'Développement RH'),
('00008', 'Formation', 'Formation'),
('00009', 'Communication digitale', 'Communication digitale'),
('00010', 'Outils', 'Outils'),
('00011', 'Sales', 'Sales'),
('00012', 'Marketing', 'Marketing'),
('00013', 'Finance', 'Finance'),
('00014', 'Achat', 'Achat'),
('00015', 'Soft Skills', 'Soft Skills'),
('00016', 'Innovation', 'Innovation'),
('00001', 'Technique', 'Technique'),
('00002', 'Gestion', 'Gestion'),
('00003', 'Gestion de projet', 'Gestion de projet'),
('00004', 'Logistique', 'Logistique'),
('00005', 'Gestion équipe', 'Gestion équipe'),
('00006', 'Administratif', 'Administratif'),
('00007', 'Développement RH', 'Développement RH'),
('00008', 'Formation', 'Formation'),
('00009', 'Communication digitale', 'Communication digitale'),
('00010', 'Outils', 'Outils'),
('00011', 'Sales', 'Sales'),
('00012', 'Marketing', 'Marketing'),
('00013', 'Finance', 'Finance'),
('00014', 'Achat', 'Achat'),
('00015', 'Soft Skills', 'Soft Skills'),
('00016', 'Innovation', 'Innovation');

-- --------------------------------------------------------

--
-- Table structure for table `training_domain`
--

CREATE TABLE `training_domain` (
  `domain_id` varchar(5) NOT NULL,
  `domain_label_fr` varchar(100) NOT NULL,
  `domain_label_en` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_domain`
--

INSERT INTO `training_domain` (`domain_id`, `domain_label_fr`, `domain_label_en`) VALUES
('00001', 'Informatique', 'Informatique'),
('00002', 'Gestion', 'Gestion'),
('00003', 'RH', 'RH'),
('00004', 'Communication', 'Communication'),
('00005', 'Sales & Marketing', 'Sales & Marketing'),
('00006', 'Finance & Achat', 'Finance & Achat'),
('00007', 'Soft Skills', 'Soft Skills'),
('00008', 'Innovation', 'Innovation'),
('00001', 'Informatique', 'Informatique'),
('00002', 'Gestion', 'Gestion'),
('00003', 'RH', 'RH'),
('00004', 'Communication', 'Communication'),
('00005', 'Sales & Marketing', 'Sales & Marketing'),
('00006', 'Finance & Achat', 'Finance & Achat'),
('00007', 'Soft Skills', 'Soft Skills'),
('00008', 'Innovation', 'Innovation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `matricule` varchar(10) NOT NULL,
  `civilite` varchar(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_entree` date NOT NULL,
  `matricule_manager` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `id_fonction` varchar(30) NOT NULL,
  `id_entity` varchar(12) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`matricule`, `civilite`, `nom`, `prenom`, `date_entree`, `matricule_manager`, `email`, `phone_number`, `id_fonction`, `id_entity`, `note`) VALUES
('IA1745', 'mr', 'rhd', 'achraf', '2020-05-05', 'R3716', 'achrhd80@gmail.com', '0666435817', '', 'E10', 80),
('L1342', 'mr', 'hss', 'samad', '2020-06-10', 'R3716', 'ahssaini16@gmail.com', '0611160536', '', 'E11', 75),
('R3716', 'mr', 'ilko', 'mehdi', '2020-07-13', 'QP1545', 'elmehdiilko@gmail.com', '0613064578', '', 'E10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_demande`
--

CREATE TABLE `user_demande` (
  `id_user` varchar(10) NOT NULL,
  `id_event` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `source` varchar(12) NOT NULL,
  `id_C` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_demande`
--

INSERT INTO `user_demande` (`id_user`, `id_event`, `status`, `source`, `id_C`) VALUES
('IA1745', 2, 0, 'agenda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_must_learn`
--

CREATE TABLE `user_must_learn` (
  `matricule` varchar(10) NOT NULL,
  `id_Q` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_must_learn`
--

INSERT INTO `user_must_learn` (`matricule`, `id_Q`, `status`) VALUES
('IA1745', 1, 1),
('IA1745', 2, 1),
('L1342', 1, 1),
('L1342', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_on_event`
--

CREATE TABLE `user_on_event` (
  `id_request` int(11) NOT NULL,
  `matricule` varchar(10) NOT NULL,
  `id_e` int(11) NOT NULL,
  `eval_chaud` tinyint(1) NOT NULL,
  `eval_froid` tinyint(1) NOT NULL,
  `note_eval_froid` int(11) NOT NULL,
  `note_test_acquis` int(11) NOT NULL,
  `desiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_on_event`
--

INSERT INTO `user_on_event` (`id_request`, `matricule`, `id_e`, `eval_chaud`, `eval_froid`, `note_eval_froid`, `note_test_acquis`, `desiste`) VALUES
(1, 'IA1745', 1, 1, 0, 0, 15, 0),
(2, 'IA1745', 3, 1, 0, 0, 10, 0),
(3, 'IA1745', 2, 0, 0, 0, 0, 1),
(4, 'L1342', 1, 1, 1, 10, 16, 0),
(5, 'L1342', 3, 1, 0, 0, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_presence`
--

CREATE TABLE `user_presence` (
  `Matricule` varchar(10) NOT NULL,
  `id_e` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_presence`
--

INSERT INTO `user_presence` (`Matricule`, `id_e`, `session`, `status`) VALUES
('IA1745', 1, 1, 1),
('IA1745', 1, 2, 1),
('IA1745', 3, 1, 0),
('IA1745', 3, 2, 0),
('L1342', 1, 1, 0),
('L1342', 1, 2, 0),
('L1342', 3, 1, 1),
('L1342', 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` varchar(10) NOT NULL,
  `profile_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `profile_id`) VALUES
('IA1745', '00002'),
('L1342', '00001'),
('IA1745', '00002'),
('L1342', '00001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`id_C`);

--
-- Indexes for table `catalogue_formation`
--
ALTER TABLE `catalogue_formation`
  ADD KEY `fk_catalogue` (`id_C`),
  ADD KEY `fk_formation` (`id`);

--
-- Indexes for table `compagne`
--
ALTER TABLE `compagne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compagne_employe`
--
ALTER TABLE `compagne_employe`
  ADD KEY `fk_compagne` (`id_C`),
  ADD KEY `fk_employe` (`matricule`);

--
-- Indexes for table `compagne_mail`
--
ALTER TABLE `compagne_mail`
  ADD PRIMARY KEY (`id_email`),
  ADD KEY `fk_mail` (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`iso`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`id_entity`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `fk_event` (`id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`matricule`);

--
-- Indexes for table `user_demande`
--
ALTER TABLE `user_demande`
  ADD KEY `fk_user_demande1` (`id_event`),
  ADD KEY `fk_user_demande2` (`id_user`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_profile` (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compagne_mail`
--
ALTER TABLE `compagne_mail`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalogue_formation`
--
ALTER TABLE `catalogue_formation`
  ADD CONSTRAINT `fk_catalogue` FOREIGN KEY (`id_C`) REFERENCES `catalogue` (`id_C`),
  ADD CONSTRAINT `fk_formation` FOREIGN KEY (`id`) REFERENCES `formation` (`id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event` FOREIGN KEY (`id`) REFERENCES `formation` (`id`);

--
-- Constraints for table `user_demande`
--
ALTER TABLE `user_demande`
  ADD CONSTRAINT `fk_user_demande2` FOREIGN KEY (`id_user`) REFERENCES `users` (`matricule`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `fk_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id_profile`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
