-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 03 juil. 2018 à 08:53
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `fmbb`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE `administrateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date NOT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `nom`, `prenom`, `email`, `password`, `created_at`, `updated_at`, `contact`, `roles_id`) VALUES
(4, 'jersam', 'heri', 'herimandimbyjersam@gmail.com', 'jersam', '2017-12-11', '2017-12-11', 'dfgdldfkgj', 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `nbrelecture` int(11) DEFAULT NULL,
  `tag` varchar(250) DEFAULT NULL,
  `seo` varchar(250) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page_titre` varchar(255) DEFAULT NULL,
  `page_description` varchar(255) DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `categorie` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `priorite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `nbrelecture`, `tag`, `seo`, `statut`, `created_at`, `updated_at`, `page_titre`, `page_description`, `date_publication`, `image_id`, `categorie`, `user_id`, `priorite`) VALUES
(3, 'THE ALCHEMISTS TEAM IS APPEARING IN L.A. BEACH FOR CHARITY', '&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); text-align: justify; font-family: Arial;&quot;&gt;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', NULL, 'basketball,fmbb,NBA', NULL, 0, '2018-04-02 06:58:11', '2018-04-07 03:27:57', 'THE ALCHEMISTS TEAM IS APPEARING IN L.A. BEACH FOR CHARITY', '<p><span style=\"color: rgb(0, 0, 0); text-align: justify; font-family: Arial;\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give yo...', '2018-04-03', 2, 'Equipe', 2, NULL),
(4, 'JEREMY RITTERSEN WAS CALLED TO BE IN THE NATIONAL TEAM', '<p style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0);\"><span style=\"font-family: Arial;\">Nunc vel efficitur dolor. In non mi a lorem pellentesque eleifend in id massa. Aenean vehicula nulla mi, eu dapibus risus placerat sit amet. Pellentesque tincidunt vitae erat nec vehicula. Nunc sodales diam in elementum porttitor. Quisque volutpat ligula a erat fermentum, ut dapibus nisl malesuada. Mauris vel orci augue. Fusce id odio aliquet, auctor elit id, tristique nunc. Nulla vel vulputate ipsum.</span></p><p style=\"margin-top: 0px; margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0);\"><span style=\"font-family: Arial;\">Curabitur porta turpis ac risus aliquam, dictum gravida mauris vulputate. Curabitur tempor vehicula arcu nec consectetur. Donec scelerisque sodales lorem non ultrices. Etiam nec mollis odio. Integer lobortis ac augue bibendum imperdiet. In eleifend blandit libero, id consequat metus ultrices quis. Integer ac scelerisque massa, in blandit ligula. Suspendisse potenti. Sed tincidunt, neque ac finibus ultricies, ex nunc placerat mauris, eget commodo leo ligula eu orci. Nulla efficitur, urna sit amet commodo cursus, justo purus auctor ligula, non fringilla eros ipsum ut elit. Donec aliquam eros facilisis elit luctus, et posuere lectus semper. Nulla euismod justo sit amet fermentum ornare. Aenean ultrices sed erat sed pretium. Vestibulum sagittis sapien nunc, quis efficitur ipsum semper non. Finisht</span></p>', NULL, 'basketball,fmbb,Dame', NULL, 0, '2018-04-02 08:58:16', '2018-04-07 03:27:52', 'jeremy rittersen was called to be in the national team', '<p style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0);\"><span style=\"font-family: Arial;\">Nunc vel efficitur dolor. In non mi a lorem pellente...', '2018-04-13', 3, 'Equipe', 2, NULL),
(5, 'Coupe du Président 2018', 'Les équipes qualifiées en TOP 8 du 08 au 15 avril 2018 au palais des sports et de la culture Mahamasina sont : <br />\r\n<br />\r\nASCB Boeny (N1A), SBBC Boeny(N1A), ASCUT Antsinanana (N1A), GNBC Vakinakaratra (N1A), COSMOS Diana (N1A), COSPN Analamanga (N1A), MB2ALL Analamanga (N1B) et COSFA Analamanga (N1A)', NULL, 'basketball,fmbb,coupe,président,2018', NULL, 1, '2018-04-04 00:03:21', '2018-05-31 04:03:25', 'coupe du président 2018', 'Les équipes qualifiées en TOP 8 du 08 au 15 avril 2018 au palais des sports et de la culture Mahamasina sont : \r\n\r\nASCB Boeny (N1A), SBBC Boeny(N1A), ASCUT An...', '2018-04-07', 4, 'Compétition', 2, NULL),
(6, 'TRAINING ARE GETTING REALLY HARD', '<p><span style=\"color: rgb(0, 0, 0); text-align: justify; font-family: Arial;\">On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).</span><br></p>', NULL, 'basketball,fmbb,article', NULL, 0, '2018-04-04 00:03:21', '2018-04-07 03:39:44', 'training are getting really hard', '<p><span style=\"color: rgb(0, 0, 0); text-align: justify; font-family: Arial;\">On sait depuis longtemps que travailler avec du texte lisible et contenant du sen...', '2018-04-04', 5, 'Compétition', 2, NULL),
(7, 'Basketball -N1A - Premier titre pour ASCB', '<p style=\"line-height: 1.5; text-align: justify;\">A l’issue d\'une finale 100% majungaise, l\'ASCB sort vainqueur par 71 à 65 contre SBBC.</p><p style=\"line-height: 1.5; text-align: justify;\">© Source : .midi-madagasikara.mg - 13 septembre 2017</p>', NULL, 'basketball,fmbb,N1A', NULL, 1, '2018-04-04 00:07:42', '2018-04-09 12:28:16', 'basketball -n1a - premier titre pour ascb', '<p style=\"line-height: 1.5; text-align: justify;\">A l’issue d\'une finale 100% majungaise, l\'ASCB sort vainqueur par 71 à 65 contre SBBC.</p><p style=\"line-he...', '2018-04-01', 7, 'Actualité', 2, NULL),
(8, 'CCCOI 2017 - Participation de l\'ASCUT', '<p><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"> En 2015 et 2016, les équipes malgaches ont réalisé un très beau doublé. L’Association sportive de la commune urbaine de Toamasina (ASCUT) tenante du titre est prête pour cette échéance. « </span><em style=\"border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; color: rgb(51, 51, 51); font-variant-ligatures: normal; orphans: 2; widows: 2;\">L’ASCUT est habituée à cette compétition et possède à son palmarès plusieurs titres. Nous ne faisons pas appel à des renforts, on va miser sur nos jeunes joueurs qui vont attaquer une semaine après la 2<span style=\"border: 0px; outline: 0px; font-size: 9.75px; vertical-align: baseline; background-color: transparent; top: -0.5em; line-height: 0; position: relative; background-position: initial initial; background-repeat: initial initial;\">e</span> phase du Championnat national N1A </em><span style=\"color: rgb(51, 51, 51); font-size: 13px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">» a déclaré, Herilanto Randriamanalina dit Bomba.</span></span></p><p><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">© Source : midi-madagasikara.mg - 13 Septembre 2017<br></span></span><br></p>', NULL, 'basketball,fmbb,ASCUT,CCCOI,Masculin', NULL, 0, '2018-04-04 00:08:26', '2018-04-09 03:32:08', 'cccoi 2017 - participation de l\'ascut', '<p><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; font-variant-ligatures: normal; orphans: 2; widows: 2;\"> En 2015 et ...', '2018-04-07', 8, 'Actualité', 2, NULL),
(9, 'CCCOI 2017 : Quinze équipes participantes', 'La liste est bouclée. 15 équipes de 5 pays dont Maurice, Seychelles, Comores, Mayotte et Madagascar, pays hôte ont confirmé leur engagement à participer à la Coupe des clubs champions de l’Océan Indien (CCCOI) du 23 septembre au 1er octobre au Palais des Sports de Mahamasina.  Cette édition 2017 verra une participation massive des équipes de la sous région en quête du ticket pour la Coupe d’Afrique des clubs champions (CACC) prévue pour la fin de l’année.<br />\r\n<br />\r\n© Source : midi-madagasikara.mg - 13 Septembre 2017', NULL, 'basketball,fmbb,international,CCCOI', NULL, 1, '2018-04-04 00:10:10', '2018-05-30 11:47:24', 'cccoi 2017 : quinze équipes participantes', 'La liste est bouclée. 15 équipes de 5 pays dont Maurice, Seychelles, Comores, Mayotte et Madagascar, pays hôte ont confirmé leur engagement à participer à...', '2018-04-01', 9, 'Actualité', 2, NULL),
(10, 'CCCOI 2017 - MB2ALL(MAD) vs BCM(MAY)', '<p style=\"text-align: justify; line-height: 1.2;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; font-variant-ligatures: normal; orphans: 2; widows: 2;\">A l’exception de la Réunion, les pays de la zone Océan Indien seront présents à savoir Maurice, Seychelles, Comores, Mayotte et Madagascar, pays hôte</span></span><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" orphans:=\"\" 2;=\"\" widows:=\"\" 2;\"=\"\">. </span><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; orphans: 2; widows: 2;\">Du côté des dames, la championne en titre MB2All sera de la partie aux côtés de Fandrefiala et TAMIFA. Elles en découdront avec le basketball club de M’Tsapéré et le Golden Force Chiconi de Mayotte et le B. Challenge des Seychelles.</span></span></p><p style=\"text-align: justify; line-height: 1.2;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; orphans: 2; widows: 2;\"><br></span></span><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; orphans: 2; widows: 2;\">© Source : </span></span>.midi-madagasikara.mg - 13 septembre 2017</p>', NULL, 'basketball,fmbb,CCCOI', NULL, 0, '2018-04-04 00:11:52', '2018-04-07 05:49:47', 'cccoi 2017 - mb2all(mad) vs bcm(may)', '<p style=\"text-align: justify; line-height: 1.2;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px; font-variant-ligatures...', '2018-04-01', 10, 'Equipe', 2, NULL),
(11, 'NBA : Denver, une victoire à couper le souffler', '<p><span style=\"color: rgb(61, 66, 72); font-size: 16px; font-family: Arial;\">Il vaut mieux ne pas être cardiaque pour supporter les Nuggets. Cette équipe est capable du meilleur comme du pire. Parfois au cours d’une même rencontre. Et ses fans passent donc par toutes les émotions possibles, quitte à finir frustrés, soulagés, joyeux, tristes ou énervés. Cette nuit, l’ascenseur sentimental était bloqué au rez-de-chaussée avant de décoller en moins d’une minute. Ça, c’est l’effet Denver. Alors qu’il restait huit minutes de jeu, Nikola Jokic (35 points, 13 rebonds, 5 passes) et les siens étaient menés de 17 points suite à un tir primé de Tony Snell. L’affaire semblait déjà presque pliée. Avec cette défaite à venir s’éloignait un peu plus les chances de qualification en playoffs.</span><br></p>', NULL, 'basketball,fmbb,NBA,DENVER', NULL, 0, '2018-04-04 22:40:01', '2018-04-07 03:27:18', 'nba : denver, une victoire à couper le souffler', '<p><span style=\"color: rgb(61, 66, 72); font-size: 16px; font-family: Arial;\">Il vaut mieux ne pas être cardiaque pour supporter les Nuggets. Cette équipe est...', '2018-04-01', 11, 'Compétition', 2, NULL),
(12, 'Le Tournoi FIBA 3x3 Challenge U18 arrive à Madagascar', '&lt;p&gt;Le Le Tournoi FIBA 3x3 Challenge U18 arrive à Madagascar arrive au Palais des Sports Mahamasina et se déroulera le 06 au 07 Avril 2018. Le tournoi sera ouvert aux clubs, aux écoles et aux ligues régionales voulant y participer. Divers divertissements ne manqueront pas au appel comme un Show Dance 3x3. Un concours de dance urbaine ouvert à tous pour le grand public. Ce Tournoi sera officiellement organisé par la fédération Malagasy Basketball ou plus communément appelé la FMBB.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;© Rédaction : Fédération Malagasy du Basketball - Avril 2018&lt;/p&gt;', NULL, 'basketball,fmbb,FIBA,3x3,U18,Dance,Urbaine', NULL, 1, '2018-04-07 02:27:51', '2018-04-07 02:27:51', 'Le Tournoi FIBA 3x3 Challenge U18 arrive à Madagascar', '<p>Le Le Tournoi FIBA 3x3 Challenge U18 arrive à Madagascar arrive au Palais des Sports Mahamasina et se déroulera le 06 au 07 Avril 2018. Le tournoi sera ou...', '2018-04-07', 17, 'Actualité', 2, 1),
(13, 'Préparation du Tournoi FIBA 3x3 Challenge U18 au Palais des Sports', '&lt;p&gt;La préparation du Tournoi FIBA 3x3 Challenge U18 est encours. La Fédération Malagasy du BasketBall suit les normes internationales imposé par la FIBA de faire dérouler l\'ensemble de la compétition à l\'extérieur de la Grande Salle du palais des Sports. Et cela grâce à un terrain totalement amovible qui est placé à l\'extérieur du Stade. Les matérielles ainsi que les différentes installations suivent le norme international.&lt;/p&gt;&lt;p&gt;© Rédaction : Fédération Malagasy du Basketball - Avril 2018 &lt;br&gt;&lt;/p&gt;', NULL, 'basketball,fmbb,FIBA,3x3,Challenge,U18', NULL, 1, '2018-04-07 02:43:53', '2018-04-07 02:43:53', 'Préparation du Tournoi FIBA 3x3 Challenge U18 au Palais des Sports', '<p>La préparation du Tournoi FIBA 3x3 Challenge U18 est encours. La Fédération Malagasy du BasketBall suit les normes internationales imposé par la FIBA de ...', '2018-04-07', 18, 'Actualité', 2, 1),
(14, 'Réunion Technique du jeudi 05 Avril 2018 : FIBA 3x3 Challenge U18', '&lt;p&gt;La réunion technique du Tournoi FIBA 3x3 Challenge U18 s\'est déroulé le jeudi 05 Avril 2018 à la Salle de réunion du Palais des Sports et de la Culture Mahamasina. La fédération Malagasy de Basketball ou fmbb organisateur et les participants de la compétition ont été présents pendant la séance de travail. &lt;/p&gt;&lt;p&gt;© Rédaction : Fédération Malagasy du BasketBall - Avril 2018&lt;/p&gt;', NULL, 'basketball,fmbb,Réuinion,Technique,FIBA,3x3,U18', NULL, 1, '2018-04-07 03:07:05', '2018-04-07 03:07:05', 'Réunion Technique du jeudi 05 Avril 2018 : FIBA 3x3 Challenge U18', '<p>La réunion technique du Tournoi FIBA 3x3 Challenge U18 s\'est déroulé le jeudi 05 Avril 2018 à la Salle de réunion du Palais des Sports et de la Culture ...', '2018-04-07', 19, 'Organisation', 2, 1),
(15, 'Ouverture officielle du Tournoi FIBA 3x3 Challenge U18', '<p>La cérémonie d\'ouverture officielle de Challenge 3X3 U18 Garçons et Filles s\'est fait à Antananarivo au Palais des Sports et de la Culture Mahamasina. La tournoi a été officiellement ouvert par le Directeur du Sport Fédéral Madame Rosa Rakotozafy représentant du Ministère de la Jeunesse et des Sports et le vice-président de la Fédération Malagasy du Basketball ou fmbb Monsieur Lionel Rabenarivo.</p><p>© Rédaction : Fédération Malagasy du Basketball - Avril 2018</p>', NULL, 'basketball,fmbb,Ouverture,3x3,FIBA', NULL, 1, '2018-04-07 03:19:27', '2018-04-07 03:28:35', 'ouverture officielle du tournoi fiba 3x3 challenge u18', '<p>La cérémonie d\'ouverture officielle de Challenge 3X3 U18 Garçons et Filles s\'est fait à Antananarivo au Palais des Sports et de la Culture Mahamasina. La...', '2018-04-07', 20, 'Actualité', 2, 1),
(16, 'Résumé de la journée du Vendredi 06 Avril 2018', 'Ce vendredi 06 Avril 2018 commence le tournoi FIBA 3x3 Challenge U18. la phase éliminatoire s\'est déroulée ce jour. Le nombre de l\'équipe féminine est de 15 et celui de l\'équipe masculine est de 31. Les ligues suivantes ont des représentants : <br />\r\n<br />\r\nla ligue Analamanga, Atsinanana, Matsiatra Ambony, Amoron\'i Mania, Itasy, Analanjirofo, boeny, Vakinakaratra, Vatovavy fito vinany, Bongolava.<br />\r\n<br />\r\n © Rédaction : Fédération Malagasy du Basketball - Avril 2018', NULL, 'basketball,fmbb', NULL, 1, '2018-04-07 03:39:29', '2018-05-30 11:10:32', 'résumé de la journée du vendredi 06 avril 2018', 'Ce vendredi 06 Avril 2018 commence le tournoi FIBA 3x3 Challenge U18. la phase éliminatoire s\'est déroulée ce jour. Le nombre de l\'équipe féminine est de 1...', '2018-04-07', 21, 'Equipe', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `CALENDRIERS`
--

CREATE TABLE `CALENDRIERS` (
  `IDCALENDRIER` int(11) NOT NULL,
  `DATEMATCH` datetime DEFAULT NULL,
  `HEUREMATCH` time DEFAULT NULL,
  `LIEUMATCH` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `CALENDRIERS`
--

INSERT INTO `CALENDRIERS` (`IDCALENDRIER`, `DATEMATCH`, `HEUREMATCH`, `LIEUMATCH`, `created_at`, `updated_at`) VALUES
(29, '2017-12-25 00:00:00', '17:40:00', 'Stade Alarobia', '2017-12-26 15:36:51', '2017-12-26 15:36:51'),
(30, '2017-12-28 00:00:00', '18:40:00', 'Stade Mahamasina', '2017-12-26 15:38:40', '2017-12-26 15:38:40'),
(31, '2017-12-26 00:00:00', '15:10:00', 'Stade Mahamasina', '2017-12-27 12:11:00', '2017-12-27 12:11:00'),
(32, '2018-01-05 00:00:00', '12:34:00', 'Stade Mahamasina', '2018-01-02 08:06:47', '2018-01-03 05:37:57'),
(33, '2018-01-06 00:00:00', '15:40:00', 'Stade Alarobia', '2018-01-05 16:40:40', '2018-01-05 16:40:40'),
(36, '2018-02-03 00:00:00', '11:05:00', 'Stade Municipal Mahamasina', '2018-02-03 05:04:18', '2018-02-03 05:04:18'),
(40, '2018-02-05 00:00:00', '18:10:00', 'Stade Municipal Alarobia', '2018-02-05 12:10:42', '2018-02-05 12:10:42'),
(41, '2018-02-06 00:00:00', '17:10:00', 'Stade Mahamasina', '2018-02-06 11:10:45', '2018-02-06 11:10:45'),
(42, '2018-02-14 00:00:00', '14:10:00', 'Stade Tanambao', '2018-02-14 12:08:11', '2018-02-14 12:08:11');

-- --------------------------------------------------------

--
-- Structure de la table `CATEGORIES`
--

CREATE TABLE `CATEGORIES` (
  `id` int(11) NOT NULL,
  `libellecategorie` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `CATEGORIES`
--

INSERT INTO `CATEGORIES` (`id`, `libellecategorie`) VALUES
(1, 'N1A'),
(2, 'N1B'),
(3, 'U-20');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `option` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `article_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comments`, `option`, `created_at`, `updated_at`, `user_id`, `article_id`) VALUES
(2, 'liantsoa', 'tsorakoto@gmail.com', 'votre commentaire', 0, '2018-05-31 11:06:42', '2018-05-31 11:06:42', NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `config_landingpages`
--

CREATE TABLE `config_landingpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlimage` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci,
  `vue` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `config_landingpages`
--

INSERT INTO `config_landingpages` (`id`, `titre`, `urlimage`, `code`, `vue`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Landing page 1', '1527082462-.jpg', '&lt;h5 class=&quot;hero-unit__subtitle&quot;&gt;F.M.B.B&lt;/h5&gt;\n      &lt;h4 class=&quot;hero-unit__title&quot;&gt;Fédération &lt;span class=&quot;text-secondary&quot;&gt;Malagasy de &lt;/span&gt; &lt;span class=&quot;text-tertiary&quot;&gt; BasketBall&lt;/span&gt; &lt;/h4&gt;', 1, '2018-05-23 10:34:22', '2018-06-26 05:49:01', 'description landing page'),
(3, 'Landing Page 2', '1527150936-.jpg', '&lt;h5 class=&quot;hero-unit__subtitle&quot;&gt;F.M.B.B&lt;/h5&gt;\n      &lt;h4 class=&quot;hero-unit__title&quot;&gt;Fédération &lt;span class=&quot;text-secondary&quot;&gt;Malagasy de &lt;/span&gt; &lt;span class=&quot;text-tertiary&quot;&gt; BasketBall&lt;/span&gt; &lt;/h4&gt;', 0, '2018-05-24 05:35:36', '2018-06-26 05:49:01', 'image Paysage');

-- --------------------------------------------------------

--
-- Structure de la table `EQUIPES`
--

CREATE TABLE `EQUIPES` (
  `IDEQUIPE` int(11) NOT NULL,
  `IDREGION` int(11) NOT NULL,
  `IDCATEGORIE` int(11) NOT NULL,
  `NAME` varchar(45) DEFAULT NULL,
  `LOGOURL` varchar(45) DEFAULT NULL,
  `SEXE` varchar(45) DEFAULT NULL,
  `SIGLE` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `EQUIPES`
--

INSERT INTO `EQUIPES` (`IDEQUIPE`, `IDREGION`, `IDCATEGORIE`, `NAME`, `LOGOURL`, `SEXE`, `SIGLE`) VALUES
(1, 2, 1, NULL, 'default.png', 'Homme', 'SBBC'),
(2, 1, 1, NULL, 'ascut.jpg', 'Homme', 'ASCUT'),
(3, 2, 1, NULL, 'default.png', 'Homme', 'ASCB'),
(4, 3, 1, NULL, 'default.png', 'Homme', 'TMBB'),
(5, 4, 1, NULL, 'default.png', 'Homme', 'GNBC'),
(6, 3, 1, NULL, 'default.png', 'Homme', 'COSFA'),
(7, 3, 1, NULL, 'default.png', 'Homme', 'COSPN'),
(8, 5, 1, NULL, 'default.png', 'Homme', 'COSMOS'),
(9, 4, 1, NULL, 'default.png', 'Homme', '2BC'),
(10, 3, 1, NULL, 'default.png', 'Homme', 'MB2ALL'),
(11, 2, 1, NULL, 'default.png', 'Homme', 'SEBAM'),
(12, 3, 1, NULL, 'default.png', 'Homme', 'CHALLENGER'),
(13, 6, 1, NULL, 'default.png', 'Homme', 'TTS'),
(14, 7, 1, NULL, 'default.png', 'Homme', 'USF');

-- --------------------------------------------------------

--
-- Structure de la table `EQUIPE_POULES`
--

CREATE TABLE `EQUIPE_POULES` (
  `IDEQUIPES` varchar(45) DEFAULT NULL,
  `IDPOULE` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `EQUIPE_POULES`
--

INSERT INTO `EQUIPE_POULES` (`IDEQUIPES`, `IDPOULE`, `created_at`, `updated_at`) VALUES
('1,2,3', 1, NULL, NULL),
('4,5,6', 2, NULL, NULL),
('7,8,9', 3, NULL, NULL),
('1,2,3', 4, NULL, NULL),
('4,5,6', 5, NULL, NULL),
('7,8,9', 6, NULL, NULL),
('1,3', 7, NULL, NULL),
('1,3,5', 9, NULL, NULL),
('3,5,7', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `EVENTS`
--

CREATE TABLE `EVENTS` (
  `id` int(11) NOT NULL,
  `startday` date DEFAULT NULL,
  `endday` date DEFAULT NULL,
  `libellevent` varchar(45) DEFAULT NULL,
  `description` text,
  `lieu` varchar(191) DEFAULT NULL,
  `typevenement` varchar(191) NOT NULL,
  `urlogoevent` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `EVENTS`
--

INSERT INTO `EVENTS` (`id`, `startday`, `endday`, `libellevent`, `description`, `lieu`, `typevenement`, `urlogoevent`, `created_at`, `updated_at`) VALUES
(1, '2017-12-15', '2017-12-19', 'Championnat N1A', 'Description Championnat N1A Madagascar', 'Antananarivo, Madagascar', 'Championnat', 'event-1513671848.jpg', '2017-12-19 05:24:08', '2017-12-19 11:09:26'),
(2, '2018-01-02', '2018-04-26', 'Championnat basketball 2018', 'Description championnat basketball', 'Antananarivo, Madagascar', 'Championnat', 'event-1514891071.jpg', '2018-01-02 08:04:31', '2018-04-24 04:41:04'),
(6, '2018-02-14', '2018-03-29', 'Ligue Analamanga', 'Description Ligue Analamanga', 'Antananarivo', 'Ligue', 'event-1518620632.jpg', '2018-02-14 12:03:52', '2018-03-27 10:08:17');

-- --------------------------------------------------------

--
-- Structure de la table `EVENTS_CATEGORIES`
--

CREATE TABLE `EVENTS_CATEGORIES` (
  `IDEVENT` int(11) NOT NULL,
  `IDCATEGORIE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `EVENTS_CATEGORIES`
--

INSERT INTO `EVENTS_CATEGORIES` (`IDEVENT`, `IDCATEGORIE`) VALUES
(1, 1),
(2, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `fmbb_missions`
--

CREATE TABLE `fmbb_missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci,
  `tags` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fmbb_missions`
--

INSERT INTO `fmbb_missions` (`id`, `contenu`, `tags`, `images`, `created_at`, `updated_at`, `titre`) VALUES
(1, 'La Fédération Malagasy de Basket-Ball a pour but :<br />\r\n<br />\r\n1. de développer, de soutenir, d’encourager, de promouvoir et de contrôler la pratique du Basket-ball à Madagascar. A cet effet, elle propage, supervise, et dirige le Basket-ball à Madagascar en tenant compte de son impact universel, éducatif, culturel et humanitaire, et ce, en mettant entre autres en œuvre des programmes de jeunesse et de développement ;<br />\r\n2. d’organiser, d’autoriser, de régir et de contrôler toutes compétitions régionales et nationales selon les règlements de la FIBA, en particulier au niveau des équipes nationales et des clubs ;<br />\r\n3. de fixer des règlements pour les compétitions nationales et d’adopter des dispositions en relation avec ses activités, tout en veillant à leur respect ;<br />\r\n4. de contrôler la pratique du Basketball sous toutes ses formes, genres et dans toutes les catégories d’âges par l’adoption de mesures qui s’avèrent nécessaires ou recommandables afin de prévenir la violation des Statuts, des règlements, des décisions de la FMBB, de la FIBA et de FIBA Afrique, ainsi que des lois du jeu ;<br />\r\n5. d’empêcher toutes méthodes et pratiques de nature à mettre en danger l’intégrité du jeu ou des compétitions, ou à donner lieu à des abus dans le Basket-ball ;<br />\r\n6. d’entretenir des relations avec la FIBA, la FIBA Afrique, les autres zones continentales de la FIBA et autres organisations de Basket-ball;<br />\r\n7. de promouvoir le Basket-ball, sans aucune discrimination contre une région, un individu ou un groupe de personnes fondée sur des considérations ethniques, de sexe, de langue, de religion, de politique ou pour toutes autres raisons discriminatoires;<br />\r\n8. de lutter contre le dopage et de prendre des mesures contre l’usage de substances interdites dans le but de préserver la santé et la surveillance médicale des basketteurs ;<br />\r\n9. de promouvoir des relations amicales entre les Fédérations et Associations nationales, dans les zones, les clubs, les officiels et les joueurs ;<br />\r\n10. de promouvoir la formation et le stage de perfectionnement des cadres techniques et administratifs, et la préparation de la relève ;<br />\r\n11. d’adhérer aux principes fondamentaux du Mouvement Olympique et s’engager à : <br />\r\n. Promouvoir la paix, la solidarité et l’unité du sport. <br />\r\n. Soutenir les actions de l’Union Africaine et des Organisations Non Gouvernementales en faveur de la jeunesse, du sport et de la culture. <br />\r\n. Soutenir le Système des Nations Unies dans sa lutte contre les fléaux qui ravagent le continent et menacent l’humanité.<br />\r\n12. de délivrer les titres fédéraux, les licences sportives, les mutations, les attestations, les autorisations de sortie des athlètes dont les modalités sont définies par le Règlement Intérieur, <br />\r\n13. d’assurer la gestion, la conservation du patrimoine, la représentation et la défense des intérêts de la FMBB, de la discipline et de ses membres<br />\r\n14. d’aider et conseiller les organes des structures fédérales notamment des ligues, des sections et des clubs sur le plan administratif et financier, d’approuver les statuts et règlements des ligues et des sections ainsi que leur modification.<br />\r\n15. de proposer les mérites et les sanctions aux membres conformément aux textes en vigueur <br />\r\n16. de collecter, vulgariser et mettre à la disposition des entités intéressées les données relatives à la discipline et d’assurer la conservation des archives et la tenue de la documentation correspondante.', 'missions,attributions,fmbb,2018', NULL, '2018-05-22 09:05:24', '2018-05-30 11:36:19', 'Missions et attributions');

-- --------------------------------------------------------

--
-- Structure de la table `fmbb_presentation`
--

CREATE TABLE `fmbb_presentation` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Naissance de la Fédération Malagasy du Basketball ',
  `presentation` text COLLATE utf8mb4_unicode_ci,
  `image_cover` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_profil` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fmbb_presentation`
--

INSERT INTO `fmbb_presentation` (`id`, `titre`, `presentation`, `image_cover`, `images_profil`, `created_at`, `updated_at`, `tags`) VALUES
(1, 'Naissance de la Fédération Malagasy du Basketball', 'Bien de chemins ont été parcourus par le Basket-Ball Malgache depuis son implantation à Madagascar en 1920 par Jean Beigbeder, Directeur Fondateur du Foyer Chrétien des Jeunes, en passant par la Fédération des Sociétés des Sports Athlétiques de Madagascar (F.S.S.A.M.) en 1933, Fédération omnisport qui gère à l’époque toutes les disciplines sportives. Il a fallu attendre 1951, lors d’un Congrès du Sport, pour l’institution de la Ligue Régionale de Basket-Ball de Madagascar, c’est-à-dire, le Basket-Ball devait se structurer et s’organiser selon les règlements et textes en vigueur en France. En Janvier 1959, il fut décidé de changer la dénomination de la Ligue en Fédération et ce ne fut que le 02 Février 1963, une fois l’ordonnance N°62068, relative à l’organisation du Sport à Madagascar adoptée que la Fédération Malgache de Basket-Ball fut agréée. Cette reconnaissance fut d’ailleurs suivie de son admission au sein de la Fédération Internationale de Basket-Ball (FIBA) et l’Association des Fédérations Africaines de Basket-Ball (AFABA).<br />\r\n<br />\r\n Après une phase transitoire qui a duré de 1979 à 1989, le Basket-Ball a été dirigé par le Comité National de Coordination et c’est au cours de l’Assemblée Générale en Octobre 1989, selon l’Ordonnance 80012 que l’Association Nationale de Basket-Ball dite « Fédération Malagasy de Basket-Ball » est constituée et agréée par la suite par le Ministre des Sports.', NULL, NULL, NULL, '2018-05-30 11:14:40', 'basketball,fmbb,Historique,Naissance,Organisation');

-- --------------------------------------------------------

--
-- Structure de la table `fmbb_reglement_interieur`
--

CREATE TABLE `fmbb_reglement_interieur` (
  `id` int(10) UNSIGNED NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci,
  `tags` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fmbb_reglement_interieur`
--

INSERT INTO `fmbb_reglement_interieur` (`id`, `contenu`, `tags`, `options`, `created_at`, `updated_at`, `titre`) VALUES
(1, 'CHAPITRE I : AFFILIATION A LA FEDERATION<br />\r\nArticle premier : Nul ne peut faire partie de la Fédération Malagasy de Basket Ball ou de l’une de ses associations affiliées, s’il ne répond pas aux critères définis par la Fédération Internationale de Basket Ball (FIBA) et le Comité International Olympique (C.I.O).<br />\r\n<br />\r\nArticle 2 : Les Ligues et les Sections de Basket Ball, organes décentralisés de la FMBB, lui sont affiliées d’office. Toutefois, elles doivent être en règle notamment en ce qui concerne leurs contributions financières au fonctionnement de la Fédération pour prétendre à l’exercice de droits et au bénéfice d’avantages.<br />\r\n<br />\r\nArticle 3 : Tous les membres des Comités Directeurs ou des Commissions de la Fédération, des Ligues provinciales ou régionales, ainsi que les arbitres, les officiels de table, les entraîneurs et animateurs sportifs doivent être licenciés à la Fédération.<br />\r\n<br />\r\nArticle 4 : Les groupements sportifs, associations sportives ligues ou clubs de basket Ball qui sollicitent leur affiliation à la FMBB doivent avoir été constitués conformément aux lois et règlements en vigueur.<br />\r\n<br />\r\nArticle 5 : Les entités visées à l’article précédent doivent adresser leurs demandes d’affiliation à la section ou à la Ligue du ressort territorial de leurs lieux d’implantation.<br />\r\nL’entité intéressée doit impérativement joindre à sa demande d’affiliation son propre statut et les CV du Président et des membres du CD et de ses responsables techniques, sous peine de rejet. Par sa demande, elle s’engage à respecter scrupuleusement les statuts et règlements régissant la Fédération ainsi qu’à leurs modifications ultérieures.<br />\r\nDes entités particulières telles que JUMP, MBA JAM ou autres doivent adresser directement leur demande d’affiliation à la Fédération pour  obtenir leur reconnaissance sans que cela leur donne le droit de participer aux championnats et compétitions officielles, lesquels relèvent de la compétence des organes de la FMBB.<br />\r\n<br />\r\nArticle 6 : La Section transmet pour décision à la Ligue concernée la demande d’affiliation du club, association sportive ou groupement sportif revêtue de son avis. La ligue est tenue de se prononcer dans les 15 Jours suivant la réception de la demande. Elle informe la section de sa décision et en rend compte à la Fédération.<br />\r\nLa Fédération, autorité hiérarchique, ne peut modifier la décision de la Ligue qu’en faveur de l’entité demanderesse sauf en cas d’existence de violation flagrante des  dispositions légales en vigueur ou de disposition substantielle des Statuts et du Règlement Intérieur de la Fédération.<br />\r\n<br />\r\nArticle 7 : L’affiliation d’un club, association sportive ou groupement sportif à la ligue implique automatiquement son affiliation à la Fédération.<br />\r\nEn contrepartie, cette affiliation n’est effective qu’après le paiement du Droit d’Affiliation et de la Cotisation Annuelle dont les montants sont fixés par l’Assemblée Générale de la FMBB (Voir infra : Dispositions Financières)<br />\r\n<br />\r\nCHAPITRE II : ADMISSION DANS LES STRUCTURES DE LA FMBB<br />\r\n<br />\r\nArticle 8 : Sont membres d’office les personnes déterminées par les articles 6 des Statuts et 2 du présent Règlement Intérieur.<br />\r\nLe Président de la Fédération, à la fois Président du Comité Directeur, est élu par l’Assemblée Générale.<br />\r\nIl procède souverainement à la désignation ou à la révocation des membres du Comité, conformément aux dispositions des articles 24 et suivants des Statuts. Cette désignation doit être soumise à l’approbation de l’Assemblée Générale la plus proche.<br />\r\nIl détermine également les commissions nécessaires au bon fonctionnement du Comité Directeur.<br />\r\n<br />\r\nCHAPITRE III : DEFAILLANCE<br />\r\nArticle 9 : La défaillance d’un membre du Comité Directeur peut être constatée par les motifs suivants ;<br />\r\n¬	Trois (3) absences répétées non excusées ou non justifiées aux réunions ;<br />\r\n¬	Négligence de ses attributions ;<br />\r\n¬	Mauvaise conduite (corruption…) ;<br />\r\n¬	Mauvaise foi manifeste ;<br />\r\n¬	Non-respect des Statuts et des Règlements ;<br />\r\n<br />\r\nArticle 10 : La défaillance du Comité Directeur peut être constaté par<br />\r\n¬	La non-organisation du Championnat National ;<br />\r\n¬	Le non présentation du rapport d’activités annuelles ;<br />\r\nArticle 11 : La défaillance des organes décentralisés (Ligue-Section) peut être constatée par les motifs ci-après :<br />\r\n¬	Inexistence de Règlement Intérieur ;<br />\r\n¬	Non-organisation de Championnat ;<br />\r\n¬	Non-présentation du rapport d’activités annuelles ;<br />\r\n¬	Non-accomplissement des obligations de contribution au fonctionnement de la Fédération ;<br />\r\n¬	Non-respect des instructions du Comité directeur de la Fédération ;<br />\r\n¬	Dysfonctionnement de l’organe décentralisé dû à  une mésentente caractérisée au sein du Comité Directeur.<br />\r\nArticle 12 : Tout membre dont la défaillance dans ses fonctions ou dans sa conduite a pu être prouvée come portant atteinte au bon fonctionnement et/ou à l’honneur du Comité peut faire l’objet d’une destitution et de remplacement.<br />\r\nSi ce cas concerne le Président, le remplacement du défaillant relève de la compétence de l’Assemblée Générale. Jusqu’à l’élection d’un nouveau Président, l’intérim de ses fonctions sera assuré par le Vice-Président<br />\r\nArticle 13 : Dans le cas de constat de défaillance d’un organe décentralisé, la Fédération est habilitée à organiser une Assemblée Générale Extraordinaire de l’organe concerné et fait procéder à la constitution d’un nouveau Bureau après concertation préalable avec le représentant local du Ministère de tutelle.<br />\r\n<br />\r\nCHAPITRE IV : PERTE DE QUALITE DE MEMBRE<br />\r\nArticle 14 : La perte de la qualité de membre de la Fédération ou de ses organes intervient :<br />\r\nA-	Pour les groupements sportifs, associations sportives ou clubs :<br />\r\n¬	Par démission exprimée dans une lettre recommandée adressée à la FMBB et signée par le ou les responsables compétents de ces entités. La lettre doit être accompagnée du P.V. de l’A.G.E ;<br />\r\n¬	Par mesure disciplinaire de radiation ;<br />\r\n¬	Temporairement par mesure disciplinaire de suspension.<br />\r\nB-	Titre individuel :<br />\r\n¬	Par démission exprimée dans une lettre recommandée adressée à la FMBB ou par démission<br />\r\n¬	Par mesure disciplinaire de radiation ;<br />\r\n¬	Temporairement par mesure disciplinaire de suspension ;<br />\r\n¬	Par retrait du Licence ;<br />\r\nPar exclusion des structures dirigeantes et techniques de la FMBB<br />\r\n<br />\r\nCHAPITRE V : FONCTIONNEMENT DES STRUCTURES<br />\r\n<br />\r\nArticle 15 : Principe hiérarchique<br />\r\nLes différentes structures et organes de la Fédération fonctionnent suivant le principe hiérarchique. En conséquence, les échelons supérieurs définissent les orientations générales, décident des grandes activités annuelles, donnent des directives et veillent à leur exécution. Les échelons subordonnés sont tenus de s’y conformer.<br />\r\nToutefois, les échelons subordonnés sont invités à transmettre leurs desiderata aux échelons supérieurs dans le cadre de l’élaboration du programme global annuel.<br />\r\n<br />\r\nArticle 16 : Les structures et organes subordonnés jouissent d’une large autonomie et peuvent prendre les mesures qu’ils jugent utiles pour l’accomplissement de leurs objectifs, missions et responsabilités sans aller à l’encontre des dispositions statutaires et réglementaires régissant la Fédération et des orientations générales.<br />\r\n<br />\r\nArticle 17 : En cas de violation des dispositions des Statuts, des Règlements Généraux ou du Règlement Intérieur de la Fédération, le Comité Directeur dispose du droit d’annuler ou de faire modifier les actes des organes dépendants ou affiliés.<br />\r\n<br />\r\nArticle 18 : Chaque Ligue et Section doivent avoir ses propres Statuts et Règlements Intérieur, lesquels ne doivent pas avoir des dispositions contraires à  celles des Statuts et Règlement Intérieur de la Fédération. Un exemplaire de chaque est remis au Comité Directeur de la FMBB. <br />\r\n<br />\r\nArticle 19 : Les groupements sportifs, associations sportives ou clubs affiliés sont tenus d’informer préalablement le Comité Directeur de la Fédération directement ou par l’intermédiaire de ses organes décentralisés de toute activité d’envergure qu’ils organisent. Ces derniers sont soumis à la même obligation vis-à-vis du Comité Directeur si l’activité n’a pas été prévue dans le programme d’activités annuelles remis à la Fédération.<br />\r\n<br />\r\nArticle 20 : Les activités, notamment le calendrier des compétitions, organisées par ces entités doivent tenir compte du programme d’activités annuelles de la Fédération de manière à ne pas perturber ces dernières.<br />\r\n<br />\r\nArticle 21 : La Fédération  ne correspondra avec les Sections et les Clubs que par l’intermédiaire des Ligues tandis que les Clubs et les Sections transmettront par l’intermédiaire des Ligues leurs correspondances à la Fédération. En cas d’urgence, un double de la correspondance peut être remis directement au destinataire.<br />\r\n<br />\r\nArticle 22 : Il est interdit à une entité affiliée à la Fédération de prendre part à toutes manifestations organisées par une entité non affiliée à la Fédération.<br />\r\n<br />\r\nArticle 23 : Nul ne peut participer à une manifestation organisée par la Fédération, la Ligue et la Section, s’il n’est titulaire d’un passeport sportif et/ou d’une licence sportive à jour, en qualité de joueurs/joueuses, arbitres ou officiels.<br />\r\n<br />\r\nArticle 24 : Le passeport sportif et/ou la licence sportive est délivré(e) par la Fédération Malagasy de Basket Ball.<br />\r\n<br />\r\nArticle 25 : Production de rapport annuel<br />\r\nLe Comité Directeur de la FMBB, par la voix de son Président, présente annuellement un rapport moral et financier à l’Assemblée Générale.<br />\r\n<br />\r\nChaque Ligue est tenue de fournir annuellement au Comité Directeur de la Fédération un programme d’activités, en début de saison et un rapport d’activités en fin de saison.<br />\r\n<br />\r\nChaque Section est tenue des mêmes obligations vis-à-vis de la Ligue, avec copie à titre de compte rendu à la Fédération.<br />\r\nLe rapport d’activités doit mentionner entre autres les noms des Champions, Vice-champions et vainqueurs ou classés second des Championnats ou Tournois ainsi que les résultats nominatifs des différents stages organisés. Il en est de même pour les statistiques (clubs, licenciés par catégorie, encadrement technique), les zones d’intervention, les forces, les faiblesses, les perspectives,...<br />\r\n<br />\r\nCHAPITRE VI : LES ORGANES DE LA FMBB<br />\r\n<br />\r\nASSEMBLEE GENERALE<br />\r\n<br />\r\nArticle 26 : L’assemblée Générale est l’organe suprême et de délibération de la Fédération Malagasy de Basket Ball à Madagascar.<br />\r\nEn tant que tel, l’élection du Président de la Fédération ne peut se faire en dehors d’elle.<br />\r\nElle peut recommander à la Fédération et ses organismes décentralisés, l’exécution d’une ou plusieurs motions votées durant sa session.<br />\r\nElle oriente et définit la politique générale de la Fédération sur proposition du Comité Directeur et en assure le contrôle de l’exécution.<br />\r\nElle approuve le programme d’activités annuelles proposé par le Comité Directeur.<br />\r\nElle entend les rapports du Comité Directeur sur la situation morale et financière de la Fédération ainsi que sur la gestion technique.<br />\r\nElle approuve le compte de l’exercice clos et en donne quitus en fin de mandat, vote le budget de l’exercice suivant et délibère sur les questions inscrites à l’ordre du jour par le Comité Directeur ou sur demande de la majorité absolue des membres.<br />\r\n<br />\r\nArticle 27 : Composition et Droit de vote<br />\r\nLa composition de l’A.G. et la disposition du droit de vote sont déterminées par les Statuts.<br />\r\n<br />\r\nPour une AGO ou AGE (non élective), les représentants des Ligues, de la CTN, de la Médecine du Sport, de la CCA doivent se munir<br />\r\n¬	De la convocation ;<br />\r\n¬	De leur carte d’identité nationale ;<br />\r\n¬	De mandat écrit émanent de leur entité respective. Pour les Ligues, ce mandat doit être visé par le DRJS ou le Délégué des Sports de la circonscription.<br />\r\nEn cas d’empêchement d’un ou des représentants de Ligue, la personne concernée peut donner procuration en bonne et due forme, visée par le DRJSL ou le Délégué Régional des Sports de leur circonscription, à une personne de son choix parmi celles disposant d‘une droit de vote.<br />\r\nLes modalités de fonctionnement d’une Assemblée Générale Elective sont déterminées dans les statuts.<br />\r\nArticle 28 : Réunion de l’A.G<br />\r\nL’Assemblée Générale de la Fédération se réunit une fois par an en session ordinaire et chaque fois qu’elle est convoquée par son Président ou à la demande du tiers de ses membres. Dans ce cas, l’ordre du jour doit être précisé par le Comité Directeur.<br />\r\nLes membres de l’A.G. doivent être informés de l’ordre du jour arrêté par le Comité Directeur au moins 10 (Dix) jours avant la date de la réunion portée sur la lettre de convocation. Cette dernière précise, en outre, le lieu de la réunion.<br />\r\nToute réunion de l’A.G. doit comporter un ordre du jour. L’A.G.O. est essentiellement consacrée à la présentation du rapport moral et financier de la Fédération de la saison écoulée et à la présentation du projet de programme d’activités de la saison à venir pour approbation de l’A.G.<br />\r\nSeules les questions proposées par le Comité directeur ou les Ligues affiliées peuvent être portées à l’ordre du jour de l’Assemblée Générale à condition qu’elles relèvent de la compétence de l’A.G.<br />\r\nLes propositions doivent être soumises à la Fédération au plus tard 21 jours avant l’ouverture de l’A.G.<br />\r\nAux termes des statuts de la Fédération, la présence d’au moins deux tiers des membres de l’A.G. disposant du droit de vote est requise pour la validité des délibérations et le vote est acquis à la majorité des membres présents. En cas d’égalité des voix ; celle du Président de séance est prépondérante.<br />\r\nSi le quorum de deux tiers requis pour la validité de la délibération de l’A.G. n’est pas atteint à la première convocation, une deuxième convocation est lancée. Les décisions prises seront alors valides quel que soit le nombre des membres présents sauf dans le cas prévu par l’article 31 des Statuts dont les dispositions sont impératives.<br />\r\nLes réunion de l’A.G. sont présidées par un Président de séance et se déroulent conformément aux Statuts.<br />\r\nLa décision de l’A.G. se fait par vote secret.<br />\r\nLes décisions de l’A.G. sont souveraines et engagent la responsabilité de tous les membres.<br />\r\nLes présidents des différentes Commissions, les membres honoraires, bienfaiteurs et donateurs assistent mais n’ont qu’une voix consultative lors des Assemblés Générales de la Fédération.<br />\r\nCOMITE DIRECTEUR<br />\r\nArticle 29 : l’Assemblée Générale confie l’administration générale de la Fédération au Comité Directeur.<br />\r\nA ce titre, le Comité Directeur est investi des pouvoirs les plus étendus pour faire autoriser tous actes qui ne sont pas réservés à l’A.G. Il surveille la gestion des membres de bureau et a le droit de se faire rendre compte de leurs actes. Il se prononce sur toutes les admissions ou radiations des membres de la Fédération.<br />\r\nArticle 30 : Le Comité Directeur statue sur les questions intéressant la Fédération, ainsi que les différents groupements sportifs adhérents et les membres donateurs, bienfaiteurs et d’honneur.<br />\r\nIl élabore les différents règlements intérieurs, administratifs et sportifs et veille à leur application.<br />\r\nIl approuve, au préalable, les Statuts et le Règlement Intérieur des Ligues ainsi que les modifications qui peuvent y être apportées.<br />\r\nIl délègue ses pouvoirs aux Ligues placées sous sa tutelle, à charge pour les ligues de les exercer sur les groupements sportifs affiliés ayant leur siège sur leur territoire.<br />\r\nArticle 31 : Les membres du Comité Directeur de la Fédération peuvent assister avec voix consultative, aux assemblées générales ou aux séances de ses structures décentralisées.<br />\r\nArticle 32 : Le Comité Directeur est administré par un Bureau permanent qui exerce l’ensemble des attributions que les Statuts et le présent Règlement Intérieur ne confèrent pas à l’Assemblée Générale de la Fédération.<br />\r\nLe Bureau permanent est composé de :<br />\r\nϖ	Un Président élu directement par l’A.G.<br />\r\nϖ	Un ou deux Vice-Président(s)<br />\r\nϖ	Un Secrétaire Général ;<br />\r\nϖ	Un Trésorier ;<br />\r\nϖ	Un Secrétaire Administratif (s’il  a lieu).<br />\r\n<br />\r\n⎫	Le mandat du Bureau Permanent prend fin avec celui du Comité Directeur.<br />\r\nArticle 33 : Réunion de Comité Directeur et du Bureau Permanent.<br />\r\n1-	Le Comité Directeur se réunit régulièrement à un jour fixe par le Président de la Fédération. En cas de besoin, particulièrement pour la préparation et l’organisation d’importantes manifestations, la fréquence des réunions peut être rapprochée.<br />\r\n2-	Le Bureau Permanent se réunit tous les 7(Sept) jours, ou sur convocation de son Président chaque fois qu’il le juge nécessaire.<br />\r\nL’ordre du jour du Comité Directeur doit obligatoirement comporter :<br />\r\n♣	Le rappel des sujets et décisions traités par le Bureau Permanent ;<br />\r\n♣	Le compte rendu de l’activité fédérale.<br />\r\n Ces réunions sont présidées par le Président ou, s’il est absent ou indisponible, par le Vice-Président. <br />\r\nArticle 34 : Le Président de la Fédération assure la police des séances. Il a le droit de prononcer le rappel à l’ordre, de lever ou de suspendre la séance si les circonstances l’exigent.<br />\r\nArticle 35 : Chaque séance commencera par la lecture des procès-verbaux de la séance précédente. Toute modification ou observation aux procès-verbaux de chaque réunion de la Fédération sera notifiée par la Commission concernée.<br />\r\nArticle 36 : La présence de la moitié au moins des membres du Comité est nécessaire pour la validité des délibérations.<br />\r\nToutes les décisions seront prises à la majorité des voix exprimées. En cas de partage des voix, celle du Président sera prépondérante.<br />\r\nChaque membre n’aura droit qu’à une voix et en cas d’absence, ne pourra se faire représenter par un collègue.<br />\r\n⎫	Les Présidents des Commissions et autres personnalités invitées peuvent assister aux réunions de la Fédération mais uniquement avec l’accord de celle-ci. Leur voix est consultative.<br />\r\nLES DIFFERENTES COMMISSIONS DE LA FMBB<br />\r\nArticle 37 : Outre les commissions dont la création est prévue par les textes en vigueur, le Comité Directeur peut créer des organismes spécialisés dont il fixe les attributions, la composition, les modalités de fonctionnement et nomme les Présidents chaque année ou pendant la durée du mandat du Comité Directeur, selon le cas.<br />\r\nUn membre du Comité Directeur doit siéger dans chacune de ces commissions.<br />\r\nDans tous les cas, Le Président de la Fédération et le Secrétaire Général sont membres d’office de toutes les commissions de la Fédération.<br />\r\nLes Commissions spécialisées fonctionnement sous la responsabilité directe de leurs Présidents respectifs.<br />\r\nChaque Président de Commission organise, dirige et anime son département de  manière à en assurer le bon fonctionnement et à accomplir les missions qui lui sont confiées. Il peut appeler des personnes extérieures au Comité Directeur pour être des collaborateurs permanents.<br />\r\nLes membres des commissions permanentes qui ne prennent pas activement part, ou ne le souhaitent plus ou ne peuvent plus prendre part aux travaux de leur commission peuvent être remplacés par décision du Bureau.<br />\r\nLes commissions permanentes exercent uniquement une fonction consultative et n’ont pas de pouvoir exécutif. Les Présidents et membres des commissions peuvent être appelés à exercer des fonctions exécutives par délégation du Bureau Permanent. Dans ce cas, ils n’agissent pas en tant que représentants de leur commission mais en tant que représentants de la Fédération.<br />\r\nLe Secrétaire Général de la FMBB travaille en étroit liaison avec toutes les commissions. Au besoin, il organise et préside ces réunions de travail communes entre les commissions.<br />\r\nChaque département conserve ses archives, mais est tenu de remettre un exemplaire de leur correspondance au Secrétariat Général de la FMBB, pour le suivi de la cohérence des actions et la coordination.<br />\r\n<br />\r\nCHAPITRE VII : ATTRIBUTIONS DES MEMBRES DU COMITE DIRECTEUR<br />\r\n Article 38 : L’exercice de toute fonction au sein de la Fédération tant au niveau du Comité Directeur que des différentes Commissions n’ouvre droit à aucune rétribution ou indemnité.<br />\r\nToutefois, des menus frais ponctuellement engagés, sur accord préalable du Président de la Fédération, peuvent être remboursés sur présentation de pièces justificatives.<br />\r\n1-	Le Président<br />\r\n♣	Le président est le premier responsable de la Fédération. Il est secondé dans l’exercice de ses fonctions par le Vice-Président ;<br />\r\n♣	Il représente la Fédération dans tous les actes de la vie civile et auprès des différentes autorités publiques ou privées et partout où besoin sera ;<br />\r\n♣	Il veille au respect des statuts et règlement intérieur et à  l’exécution des délibérations de l’Assemblée Générale et la mise en œuvre des décisions du Comité Directeur ;<br />\r\n♣	Il oriente, dirige et supervise les activités du Comité en vue de la promotion et du développement de Basket Ball et en assure le suivi et le contrôle de l’exécution par les différents organes administratifs et techniques,<br />\r\n♣	Il veille au respect de l’éthique sportive et notamment des règles déontologiques régissant la pratique du Basket par les membres et prend les mesures qui s’imposent à l’encontre des contrevenants ;<br />\r\n♣	Il nomme et révoque les autres membres du Comité Directeur envers lesquels il a autorité ;<br />\r\n♣	Il signe tout document justificatif légal attestant de la régularité de la situation d’un membre ou d’un officiel vis-à-vis de la Fédération, notamment la Carte des membres, concurremment avec le SG de la Fédération ou le premier responsable de la commission selon le cas ;<br />\r\n♣	Il signe les correspondances adressées aux autorités administratives, aux instances sportives officielles nationales et étrangères, et d’une manière générale toutes les correspondances engageant la responsabilité de la Fédération ;<br />\r\n♣	Il ordonnance les dépenses ;<br />\r\n♣	Il représente la Fédération auprès des groupements sportifs et des instances sportives officiels tant au plan régional, national qu’international, en justice et dans tous les actes de la vie civile concernant le Basket Ball ;<br />\r\n♣	Il peut donner délégation de pouvoir ou de signature dans des conditions fixées par le présent Règlement Intérieur. Toutefois, la représentation de la Fédération en justice ne peut être assurée à défaut du Président que par un mandataire agissant en vertu d’un pouvoir spécial ;<br />\r\n♣	Le Président est responsable vis-à-vis de l’Assemblée Générale à laquelle il présente annuellement un rapport moral et financier ;<br />\r\n♣	Il ne peut exercer de fonctions officielles au sein d’une Association ou groupement sportif, à l’exception des organes Olympiques.<br />\r\n♣	En cas de vacance ou d’empêchement dûment constaté, les fonctions du Président sont exercées par le Vice-Président.<br />\r\n<br />\r\n2-	Le Vice-Président<br />\r\n<br />\r\n♣	Il assiste le Président dans l’exercice de ses attributions. En ce sens, il l’éclaire dans le prise de décisions relatives à des questions d’importance particulière et le supplée en cas d’indisponibilité pour la conduite des réunions de l’Assemblée Générale ou de Bureau Permanent ;<br />\r\n♣	Il assure particulièrement les relations de la Fédération avec les différentes Associations au plan national ;<br />\r\n♣	Il assume également des fonctions de représentation sur désignation du Président.<br />\r\n<br />\r\n3-	Le Secrétaire Général<br />\r\n<br />\r\n♣	Le Secrétaire Général anime, coordonne et supervise les activités des organismes régionaux suivant les directives qu’il reçoit du Président de la Fédération qu’il tient informé de toutes les activités ;<br />\r\n♣	Il assure à cet effet l’harmonie des rapports entre les Commissions dans l’accomplissement de leurs responsabilités respectives ;<br />\r\n♣	Il décide de l’opportunité de toutes les correspondances préparées et présentées par les Commissions et les signe au nom de la Fédération quand elles ne relèvent pas de la compétence exclusive du Président. Ces correspondances sont signées conjointement avec la Commission concernée ;<br />\r\n♣	Il est responsable des services administratifs de la Fédération et assure notamment la correspondance, les convocations et tient à jour les divers registres et archivages. A ce titre, il assure par délégation du Président, le traitement de toutes les correspondances concernant le fonctionnement administratif de la Fédération, à l’exception de celles qui relèvent de la compétence du Trésorier ;<br />\r\n♣	Il est chargé de toutes les affaires générales de la Fédération, notamment celles ayant trait à l’organisation des compétitions, à la demande d’assistance auprès d’associations ou d’organismes internationaux et aux formalités de sortie à l’extérieur ;<br />\r\n♣	Il établit l’ordre du jour des réunions en étroite collaboration avec le Président de la Fédération. En outre, il assure la tenue et le suivi des réunions ;<br />\r\n♣	Il est chargé de la rédaction des procès-verbaux du Bureau, du Comité directeur et de l’Assemblée Générale et de leur diffusion ;<br />\r\n♣	Il veille au respect de la discipline générale qui doit prévaloir au sein de la Fédération et envers les organismes régionaux ;<br />\r\n♣	Il présente au Comité Directeur le dossier disciplinaire de toute personne ou organismes régionaux susceptibles de sanction.<br />\r\n♣	Il assume des fonctions de représentation sur délégation du Président.<br />\r\n<br />\r\n4-	Le Trésorier<br />\r\n<br />\r\n♣	Il a pour mission principale de trouver les voies et  moyens pour la Fédération de se procurer les ressources financières nécessaires à l’exécution de son programme d’activités et au bon fonctionnement de l’administration du Comité Directeur ;<br />\r\n♣	Il est disciplinairement et pécuniairement responsable de la gestion financière ;<br />\r\n♣	Il encaisse les recettes, assure le recouvrement des cotisations et des créances dues à la Fédération, effectue les paiements sous la supervision du Président ;<br />\r\n♣	Il est responsable de la gestion du patrimoine de la Fédération et assure la bonne conservation des matériels et mobiliers de la Fédération et pourvoit aux besoins nécessités par l’organisation de stage, regroupement ou séminaires organisée par le Fédération ;<br />\r\n♣	Il rend compte au Comité Directeur de la situation financière de la Fédération et présente à l’A.G. le bilan Financier pour le compte du Comité Directeur ;<br />\r\n♣	Les Chèques bancaires et ordres de virement sont soumis strictement au principe de la double signature dans les conditions fixées par le présent Règlement ;<br />\r\n♣	Il présente au Bureau Directeur à l’issue de chaque manifestation la comptabilité y afférente.<br />\r\n♣	Toutes opérations financières sont retracées dans les Livres Comptables côtés et paraphés de la Fédération.<br />\r\n♣	Prépare le Budget de la saison suivante en liaison avec les autres Commissions qui le présente au Comité Directeur.<br />\r\n<br />\r\n5-	Le Directeur Technique National (DTN)<br />\r\n<br />\r\n♣	Est le premier responsable technique de la discipline sportive du Basket Ball ;<br />\r\n♣	Elabore et propose par ordre de  priorité le programme technique à mettre en œuvre ;<br />\r\n♣	Rend compte de l’exécution de ses missions au Comité directeur ;<br />\r\n♣	Renvoie sous forme de recommandation les résultats de ses études aux structures décentralisées après avis de la Fédération.<br />\r\nConformément aux Statuts, son mode de fonctionnement est fixe par Arrêté du Ministère chargé des Sports.<br />\r\n<br />\r\nCHAPITRE VIII : ELECTION DES MEMBRES DE LA FEDERATION<br />\r\nELECTIONS<br />\r\nArticle 39 : L’élection est l’expression de la volonté de l’Assemblée Générale en désignant un certain nombre d’individus en lesquels elle a confiance et auxquels elle transfère le pouvoir de diriger la Fédération.<br />\r\nArticle 40 : Afin de parvenir à un choix sincère, libre et réfléchi, il faut respecter et défendre à tout prix les 04 principes fondamentaux suivants :<br />\r\n1.	Sincérité et liberté dans le vote ;<br />\r\n2.	Egalité de chance des candidats ;<br />\r\n3.	Régularité du déroulement des élections ;<br />\r\n4.	Neutralité de l’Administration (Ministère).<br />\r\nArticle 41 : L’élection se fait à l’Assemblée Générale par vote secret et, à la majorité simple des voix.<br />\r\nArticle 42 : Les modalités d’élection et les conditions d’éligibilité sont celles stipulées dans les Statuts de la FMBB. Il est entendu que les membres du Bureau de Vote sont choisis parmi les délégués assistant à l’Assemblée Générale, mais ne sont pas candidats.<br />\r\nLe Président de séance dirige les débats, en assure l’organisation et la discipline. En cas d’incident, il prononce des rappels à l’ordre.<br />\r\nArticle  43 : Le dépouillement est public et doit être effectué dans le bureau de vote sur une seule table.<br />\r\nArticle 44 : Immédiatement après la clôture du scrutin, le Président de séance dressera un procès-verbal, signé par lui-même et ses assesseurs du déroulement de l’élection.<br />\r\nArticle 45 : Les résultats définitifs des élections sont proclamés en Assemblée Générale par le Président de séance.<br />\r\nArticle 46 : En présence d’une seule candidature, le candidat Président est élu par acclamation.<br />\r\nArticle 47 : L’élection du Président doit être prise à la majorité simple des suffrages exprimés et des bulletins blancs et nuls.<br />\r\nELECTEURS<br />\r\nArticle 48: Sont électeurs tous ceux qui sont stipulés dans l’article 6 des statuts de la Fédération.<br />\r\nCANDIDATS<br />\r\nArticle 49 : Les candidats doivent remplir les conditions fixées par les Statuts.<br />\r\nArticle 50 : Les candidatures aux fonctions du Président de la Fédération et des membres du Comité directeur doivent être adressées par lettre recommandée avec accusé de réception ou déposées au Siège de la Fédération, au moins vingt- Et-Un (21) jours avant la date de l’Assemblée Générale.<br />\r\nAu plus tard 10 jours avant l’Assemblée Elective, le Comité directeur publie la liste des candidatures.<br />\r\n<br />\r\nCHAPITRE IX : DISPOSITIONS FINANCIERES<br />\r\nArticle 51 : La FMBB est titulaire d’un compte bancaire.<br />\r\nL’établissement des chèques bancaires requiert la double signature (du Président de la FMBB et du Vice-Président et nécessairement du Trésorier, et du Trésorier-Adjoint en cas de besoin). <br />\r\nToutefois, pour les besoins courants, il est créé une ‘’petite caisse’ ’dont le montant de l’encaisse ne peut dépasser les FMG 500.000.<br />\r\nLe commissaire aux Comptes<br />\r\nArticle 52 : Sur proposition du Comité Directeur, la nomination du Commissaire aux Comptes est approuvée par l’Assemblée Générale pour une durée d’une année renouvelable. Ses fonctions sont incompatibles avec le mandat de membre du Comité Directeur.<br />\r\nIl contrôle les comptes d’actif et de passif et les opérations composant le compte de pertes et profits. Il doit présenter un rapport à l’Assemblée Générale.<br />\r\nArticle 53 : La comptabilité de la Fédération est tenue conformément aux lois et règlements en vigueur. Cette comptabilité fait apparaitre annuellement un compte d’exploitation, le résultat de l’exercice et un bilan.<br />\r\nContributions au Fonctionnement de la Fédération<br />\r\nArticle 54 : Les Ligues, les Sections, les groupements sportifs et associations sportives qui lui sont affiliés contribuent au fonctionnement de la Fédération selon les modalités ci-après :<br />\r\na.	Pour les Ligues et Sections : <br />\r\n•	par le paiement du droit d’affiliation dont le montant est déterminé par l’Assemblée Générale sur proposition du Comité Directeur ;<br />\r\n•	par le paiement, en début de saison, d’une cotisation annuelle due à la Fédération par chaque Ligue, dont le montant est déterminé annuellement par l’Assemblée Générale sur proposition du Comité Directeur ;<br />\r\n•	par la prise en charge par les Ligues et Sections, des frais de transport Aller-Retour et de séjour (hébergement, restauration, transport local) de leurs délégations lors des championnats nationaux ou compétitions d’envergure nationale ;<br />\r\n•	par prise en charge par les Ligues et Sections, des frais de transport et de séjour de leurs présélectionnés lors des groupements au niveau des Ligues ;<br />\r\n•	par la prise en charge par les Ligues des frais de transport, de séjour de leurs délégations participant aux Assemblées Générales ;<br />\r\n•	la Fédération prend en charge les frais de transport (A-R) et de séjours des joueurs /joueuses retenus pour les présélections et les équipes nationales.<br />\r\n<br />\r\nb.	Pour les groupements sportifs, associations sportives et clubs :<br />\r\n•	par le paiement du droit d’affiliation dont le montant est déterminé par l’Assemblée Générale sur proposition du Comité Directeur ;<br />\r\n•	par le paiement, en début de saison, d’une cotisation annuelle due aux organes décentralisés, dont le montant est déterminé par l’Assemblée Générale sur proposition du Comité Directeur ;<br />\r\n•	par le paiement de droit d’engagement aux compétitions d’envergure nationale ; <br />\r\n•	par l’achat de licence pour leurs membres. <br />\r\nArticle 55 : A défaut d’accomplissement de ces obligations de contribution au fonctionnement de Fédération, les organes décentralisés et les groupements ou associations affiliés ne peuvent prétendre à la jouissance de droits et avantages auprès de la Fédération et s’exposent à des sanctions prononcées à leur encontre ou à l’encontre des premiers responsables de ces entités.<br />\r\nCHAPITRE X : LES MOYENS D’ACTION<br />\r\nArticle 56 : Les moyens d’action de la Fédération pour atteindre ses objectifs sont les suivants :<br />\r\na.	Les Statuts, les Règlements Unifiés des Compétitions, le Règlement Intérieur, et le cas échéant, les Règlements Généraux de la Fédération ainsi que les règles déontologiques communément reconnus, les Règlements Techniques Internationaux et ceux établis par la Fédération Nationale concernant la pratique et les compétitions de Basket Ball, qu’elle fait respecter et dont la violation donne lieu à des sanctions.<br />\r\nb.	L’organisation et le suivi de la formation et du perfectionnement des cadres techniques et des Basketteurs par tous les moyens appropriés.<br />\r\nc.	L’organisation par elle-même ou par l’entremise des organes décentralisés (Ligues, Sections) et éventuellement des associations qui lui sont affiliées, de manifestations se rapportant à son objet (compétitions ; démonstrations ; stages, conférences ; séminaires, exposition, assemblée…)<br />\r\nd.	Assistance technique et suivi du fonctionnement des organes décentralisés et leur fournir régulièrement des directives utiles.<br />\r\ne.	Délivrance aux dirigeants, cadres techniques et Basketteurs de licence et, au besoin, de justificatif légal attestant leur reconnaissance par la Fédération.<br />\r\nf.	La tenue de documentation et la fourniture d’informations concernant le Basket Ball.<br />\r\ng.	Affiliation au Comité Olympique Malagasy, à la FIBA AFRIQUE (Zone 7), à la FIBA SIEGE, aux organisations de la sous région de l’Océan Indien et établissement de relations avec les autres Fédérations Nationales.<br />\r\nh.	Les ressources humaines, matérielles et financières dont elle dispose<br />\r\ni.	Les sanctions disciplinaires qu’elle prend à l’encontre des membres du Comité Directeur de la Fédération, des dirigeants ou des membres des organes décentralisés ou des associations affiliés en cas de nécessité.<br />\r\nLes récompenses qu’elle attribue aux groupements sportifs, associations sportives ou club, aux dirigeants ou Basketteurs et à toute personne dont elle reconnait le mérite particulier.<br />\r\n<br />\r\nCHAPITRE XI : LES RELATIONS EXTERIEURES<br />\r\nArticle 57 : La FMBB est seule habilitée à parler au nom de Madagascar auprès des instances officielles régionales, internationales et mondiales du Basket Ball.<br />\r\nNul ne peut prétendre auprès d’organismes étranges avoir une qualité reconnue par la FMBB s’il n’est titulaire d’une licence dûment établie et délivrée par elle et, au besoin, porteur d’une attestation officielle.<br />\r\nArticle 58 : La FMBB peut nouer des relations avec les associations ou groupements sportifs nationaux ou étrangers légalement constitués en vue de la réalisation de ses objectifs. <br />\r\nElle peut également avoir des relations de partenariat contractées en son nom propre ou à travers les entités composantes.<br />\r\nArticle 59 : La FMBB peut faire appel au service d’experts étrangers résidant en permanence à Madagascar ou effectuant un séjour ponctuel pour l’assister dans la réalisation de ses objectifs.<br />\r\nLes groupements sportifs ou associations sportives peuvent également faire appel au service d’experts étrangers. Toutefois, il est de leur devoir de veiller à l’authenticité de la qualité de ces experts. Ils doivent préalablement informer par écrit la Fédération de leur venue au moins 60 jours avant la date prévue pour leur arrivée. L’entrée à Madagascar de ces experts ou d’une équipe étrangère est soumise à  l’aval de la FMBB en vue de la délivrance d’autorisation par le Ministère des Sports. Cette autorisation est également requise pour la sortie à l’extérieur d’une équipe malgache.<br />\r\nLa validité de diplôme ou de grade délivré au sein des groupements sportifs, associations sportives ou clubs est circonscrite à ces entités.<br />\r\nLa délivrance de diplômes techniques et de grades fédéraux ainsi que la reconnaissance ou l’homologation du diplôme et des grades délivrés par d’autres organismes relèvent de la souveraineté et de la compétence exclusive de la FMBB.<br />\r\nArticle 60 : Une Ligue, une Section ou toute autre entité affiliée ne peut organiser une rencontre avec un groupement ou un club étranger sans l’autorisation écrite de la Fédération. Pour ce faire, l’entité concernée doit faire une saisine par écrit.<br />\r\n<br />\r\nCHAPITRE XII : DISCIPLINE ET SANCTIONS<br />\r\nArticle 61 : La Fédération a autorité sur ses organes décentralisés (ligues et sections), sur les Commissions érigées en son sein, sur les groupements sportifs et associations sportives qui lui sont affiliées et sur les membres de ces derniers.<br />\r\nArticle 62 : En vertu de l’Article précèdent, le Comité Directeur de la Fédération exerce un pouvoir hiérarchique et disciplinaire en cas d’infraction aux statuts, Règlement Intérieur, Règlement Unifiés des Compétitions, Règlements Généraux.<br />\r\nLa sanction prononcée est signée conjointement par le Président de la Fédération et le Secrétaire Général.<br />\r\nArticle 63 : La panoplie des  principaux motifs de sanction et les sanctions y afférentes sont fixées par le présent Règlement Intérieur.<br />\r\nArticle 64 : Dossier Disciplinaire.<br />\r\nLe dossier disciplinaire présenté par le Secrétaire Général au Comité Directeur doit mentionner les éléments ci-après : <br />\r\n-	Nom et prénoms de la personne ou de l’entité (groupement, association, club) mise en cause ; groupement, association ou club d’appartenance ;<br />\r\n-	Motif de sanction ;<br />\r\n-	Circonstance de la faute (où, quand, faits, personnes impliquées) ;<br />\r\n-	Les conséquences physiques, matérielles ou financières, s’il y a lieu ;<br />\r\n-	Sanction proposée ;<br />\r\n-	Signatures conjointes du S.G et du Président de la Commission spécialisée concernée<br />\r\nArticle 65 : Droit de la Défense<br />\r\nLe motif de sanction et les circonstances qui ont accompagné la faute sont communiqués à la personne ou au premier responsable de l’entité présumée fautive pour qu’elle puisse présenter par écrit ou physiquement sa défense au Comité Directeur dans le délai de dix(10)jours suivant la réception de lettre d’information. Le présumé fautif peut se faire assister d’une personne de son choix pour assurer sa défense.<br />\r\nPassé le délai susmentionné, le Comité Directeur s’érige en Commission Disciplinaire et statue sur la sanction.<br />\r\nArticle 66 : La sanction prononcée est notifiée au fautif, à la Ligue, à la Section, au groupement, à l’association et au club d’appartenance de l’intéressé ou de l’entité et, pour large diffusion, à l’ensemble des organes décentralisés de la Fédération.<br />\r\nArticle 67 : Voie de recours ou révision de sanction<br />\r\nLa décision de sanction prise par le Comité Directeur de la Fédération est rendue de manière définitive.<br />\r\nToute autre sanction à caractère permanent peut faire l’objet d’une demande de révision auprès du Comité Directeur après une période d’au moins deux saisons sportives. En d’autres termes, toute demande de révision de sanction n’est recevable qu’à partir de la 3è saison consécutive au forfait.<br />\r\nArticle 68 : Principaux motifs de sanction.<br />\r\n•	Fait ou acte portant atteinte à l’honneur ou à la considération du Basket Ball, de la Fédération ou de ses membres ;<br />\r\n•	Propos injurieux, grossiers ou diffamatoires envers le Comité Directeur de la FMBB ou l’un de ses membres ;<br />\r\n•	Propos injurieux, grossiers au cours d’une manifestation ou d’une réunion ;<br />\r\n•	Indiscipline caractérisée ;<br />\r\n•	Comportement indigne caractérisé (bagarre, etc.,…) ;<br />\r\n•	Ivresse en public ;<br />\r\n•	Auteur de scandale lors d’une manifestation ou activité organisée par la FMBB ou un de ses démembrements ;<br />\r\n•	Agressions verbales, intimidation ou gestes obscènes à l’égard d’un dirigeant, arbitre, officiel, ou un pratiquant au cours d’une manifestation sportive ou d’une réunion ;<br />\r\n•	Agression d’un dirigeant, arbitre, officiel ou un pratiquant ;<br />\r\n•	Perturbation délibérée d’une réunion de l’A.G, d’une Commission de la FMBB ou de ses organes décentralisés ;<br />\r\n•	Incitation au boycottage concerté d’une compétition officielle ;<br />\r\n•	Chantage pour non-participation ;<br />\r\n•	Fraude ou tentative de fraude, ou falsification de tout genre ;<br />\r\n•	Usurpation de grade ou  de titre ;<br />\r\n•	 Vol ou tentative de vol ;<br />\r\n•	Détournement de deniers ; <br />\r\n•	Corruption ou tentative avérée de manipulation ;<br />\r\n•	Participation à des manifestations organisées par une entité non affiliée à la Fédération ;<br />\r\n•	Rapport mensonger ou faux rapport ;<br />\r\n•	Non soumission à une ou plusieurs mesures de portée générale édictées par la Fédération ;<br />\r\n•	Trois(3) absences répétées non excusées aux réunions ;<br />\r\n•	Non-paiement de contribution due à la Fédération ;<br />\r\n•	Violation des dispositions des Statuts et des Règlement ;<br />\r\n<br />\r\nCette liste n’est pas exhaustive. Le Comité Directeur de la Fédération statuera sur les cas non prévus et décidera des sanctions qu’il juge appropriées.<br />\r\nArticle 69 : Sanctions applicables<br />\r\n•	Avertissement ;<br />\r\n•	Suspension temporaire ;<br />\r\n•	Interdiction d’activités ou de participation à des compétitions (3 mois à 3 ans) ;<br />\r\n•	Exclusion de l’équipe nationale ;<br />\r\n•	Rétrogradation ;<br />\r\n•	Interdiction temporaire ou définitive d’exercice de fonctions de dirigeants, de cadres techniques ou d’arbitre (3 mois à 3 ans) ;<br />\r\n•	Interdiction d’accès aux manifestations officielles (1 an et plus) ;<br />\r\n•	Retrait de la qualité d’entraineur ou d’arbitre ;<br />\r\n•	Retrait temporaire ou définitif de la licence sportive ou du passeport sportif ;<br />\r\n•	Exclusion des structures dirigeantes et techniques de la FMBB ;<br />\r\n•	Radiation.<br />\r\nAu besoin, les sanctions peuvent être cumulées.<br />\r\nLa durée des sanctions temporaires est déterminée par le Comité Directeur. Cette liste n’est pas exhaustive et ces sanctions disciplinaires n’excluent pas les poursuites et sanctions pénales éventuelles que peuvent encourir les personnes physiques ou morales mises en cause.<br />\r\nArticle 70 : Toute faute sanctionnée par une suspension ou radiation entraîne la cessation temporaire ou définitive selon le cas de toute fonction et activité relative au Basket Ball tant en public que dans les salles au sein des groupements, associations et clubs affiliés à la Fédération et au sein du Comité Directeur de la Fédération et de ses organes décentralisés.<br />\r\nDans le cas de radiation à vie, le dossier est traité de concert avec le Ministère chargé du Sport.<br />\r\nArticle 71 : Les motifs de sanction et les sanctions susmentionnés s’appliquent tant aux dirigeant, cadres techniques, arbitres et pratiquants de Basket Ball qu’aux groupements, associations et clubs affiliés à la FMBB.<br />\r\nArticle 72 : Le Comité Directeur de la Fédération pourra se saisir d’office de toutes les infractions aux dispositions de ses statuts ou de ses Règlements ainsi que des actes et comportements susceptibles d’être sanctionnés dont il a connaissance ou qui parviennent à sa connaissance.<br />\r\nArticle 73 : Les organes décentralisés et les entités affiliés à la Fédération prendront en compte les sanctions prononcées par le Comité Directeur à l’ encontre d’une personne ou d’une entité sportive.<br />\r\n<br />\r\nCHAPITRE XIII : DISPOSITIONS DIVERSES<br />\r\nArticle 74 : Le Comité Directeur de la Fédération décide de l’attribution des récompenses fédérales (certificats, diplômes, médailles)<br />\r\nLe Comité Directeur peut conférer des récompenses honorifiques à des personnalités ayant occupé des fonctions essentielles dans son sein (dirigeants, entraîneurs, cadres techniques, arbitres, joueurs, joueuses) ou qui se sont distinguées par leur dévouement, leurs travaux, leurs performances. Il peut également nommer membres d’honneur des personnalités ayant rendu des services particulièrement éminents à la cause de la Fédération et au Basket Ball.<br />\r\nArticle 75 : Les Ligues et les Sections doivent établir leurs Statuts et Règlements (Intérieur, Compétitions) respectifs et les faire parvenir au Comité Directeur de la Fédération dans un délai de 2 mois à partir de la date d’adoption des Statuts et du Règlement Intérieur de la FMBB.<br />\r\nToute modification de Règlement Intérieur doit être soumise à l’approbation de l’A.G.<br />\r\nEn dehors de la tenue de l’Assemblée Générale, le Président de la FMBB peut prendre des mesures exceptionnelles après avis du Comité Directeur.<br />\r\nToutefois, l’approbation de cette décision doit être présentée pour approbation à l’A.G la plus proche.<br />\r\nArticle 76 : Conflit de règlements.<br />\r\nEn cas de conflit de règlements, le Statut ou le Règlement Intérieur de la FMBB prévalent sur ce règlement.<br />\r\nArticle 77 : Le présent Règlement Intérieur de la Fédération Malagasy de Basket Ball (FMBB) entre en vigueur immédiatement dès son approbation par l’Assemblée Générale Ordinaire.<br />\r\nArticle 78 : Le respect intégral des dispositions contenues dans le présent Règlement Intérieur, dans leur esprit et dans leur lettre, est la condition première pour obtenir et maintenir l’affiliation à la Fédération.<br />\r\nLe Comité Directeur mettra tout en œuvre afin d’obtenir ce respect de l’esprit et de la lettre de la part des membres affiliés pendant l’exécution de son mandat. <br />\r\n<br />\r\n<br />\r\n							Fait à Antananarivo ; le 15 Mars 2003', 'Règlement,interieur,fmbb,2018', 0, '2018-06-25 08:25:53', '2018-06-26 05:18:49', 'Les règlements intérieur de la FMBB');

-- --------------------------------------------------------

--
-- Structure de la table `fmbb_structure`
--

CREATE TABLE `fmbb_structure` (
  `id` int(10) UNSIGNED NOT NULL,
  `noms` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonctions` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacts` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emails` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enservice` tinyint(1) NOT NULL DEFAULT '0',
  `avatarurl` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_system` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fmbb_structure`
--

INSERT INTO `fmbb_structure` (`id`, `noms`, `fonctions`, `contacts`, `emails`, `enservice`, `avatarurl`, `position_system`, `created_at`, `updated_at`) VALUES
(2, 'RABENARIVO Lionel', 'Vice-Président', '034 05 999 02', 'rlt.cesa@gmail.com', 0, 'default_avatar.png', 2, '2018-05-14 06:56:35', '2018-05-14 10:20:11'),
(3, 'RAMAROSONA Jean Michel', 'Président', '034 05 999 02', 'managing-tana@moov.mg', 0, 'default_avatar.png', 1, '2018-05-17 11:29:40', '2018-05-18 08:08:09');

-- --------------------------------------------------------

--
-- Structure de la table `fmbb_technique`
--

CREATE TABLE `fmbb_technique` (
  `id` int(10) UNSIGNED NOT NULL,
  `noms` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatarurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fmbb_technique`
--

INSERT INTO `fmbb_technique` (`id`, `noms`, `classification`, `validation`, `avatarurl`, `created_at`, `updated_at`) VALUES
(2, 'RAKOTONANDRASANA Ernest', 'National', '2ans', 'default_avatar.png', '2018-05-17 11:30:31', '2018-05-18 08:20:42');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `urlimages` text,
  `urlvideo` varchar(250) DEFAULT NULL,
  `options` varchar(200) DEFAULT NULL,
  `view` varchar(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `urlcouverturevideo` varchar(255) DEFAULT NULL,
  `imagereference` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `urlimages`, `urlvideo`, `options`, `view`, `created_at`, `updated_at`, `urlcouverturevideo`, `imagereference`) VALUES
(2, '1522677491-0.jpg|1522677491-1.jpg|1522677491-2.jpg|1522677491-3.jpg', 'https://www.youtube.com/embed/vbaDqD_eBug', NULL, '0', '2018-04-02 06:58:11', '2018-04-02 06:58:11', NULL, '1522677491-0.jpg'),
(3, '1522684696-1.jpg', 'https://www.youtube.com/embed/RnQSLseWxSI', NULL, '0', '2018-04-02 08:58:16', '2018-04-03 23:06:33', '1522821222-.jpg', NULL),
(4, '1523091203-0.jpg', NULL, NULL, '0', '2018-04-04 00:03:21', '2018-04-07 04:53:23', NULL, '1522825401-0.jpg'),
(5, '1522825401-0.jpg|1522825401-1.jpg|1522825401-2.jpg|1522825401-3.jpg', NULL, NULL, '0', '2018-04-04 00:03:21', '2018-04-04 00:03:21', NULL, '1522825401-0.jpg'),
(7, '1523090647-0.jpg', 'https://www.youtube.com/embed/vbaDqD_eBug', NULL, '0', '2018-04-04 00:07:42', '2018-04-07 04:44:07', '1522825662-.jpg', '1522825662-0.jpg'),
(8, '1522825706-1.jpg|1522825706-2.jpg', NULL, NULL, '0', '2018-04-04 00:08:26', '2018-04-07 04:03:07', NULL, '1522825706-0.jpg'),
(9, '1523089134-0.jpg', NULL, NULL, '0', '2018-04-04 00:10:10', '2018-04-07 04:18:55', NULL, '1522825810-0.jpg'),
(10, '1522825912-0.jpg|1522825912-1.jpg|1522825912-2.jpg', 'https://www.youtube.com/embed/vbaDqD_eBug', NULL, '0', '2018-04-04 00:11:52', '2018-04-04 00:11:52', '1522825912-.jpg', '1522825912-0.jpg'),
(11, '1522906801-0.jpg|1522906801-1.jpg', NULL, NULL, '0', '2018-04-04 22:40:01', '2018-04-04 22:40:01', NULL, '1522906801-0.jpg'),
(17, '1523082471-0.jpg', NULL, NULL, '0', '2018-04-07 02:27:51', '2018-04-07 02:27:51', NULL, '1523082471-0.jpg'),
(18, '1523083432-0.jpg|1523083433-1.jpg|1523083433-2.jpg|1523083433-3.jpg|1523083433-4.jpg', NULL, NULL, '0', '2018-04-07 02:43:53', '2018-04-07 02:43:53', NULL, '1523083432-0.jpg'),
(19, '1523084824-0.jpg|1523084825-1.jpg|1523084825-2.jpg|1523084825-3.jpg', NULL, NULL, '0', '2018-04-07 03:07:05', '2018-04-07 03:07:05', NULL, '1523084824-0.jpg'),
(20, '1523085567-0.jpg|1523085567-1.jpg|1523085567-2.jpg|1523085567-3.jpg|1523085567-4.jpg', NULL, NULL, '0', '2018-04-07 03:19:27', '2018-04-07 03:19:27', NULL, '1523085567-0.jpg'),
(21, '1523086768-0.jpg|1523086768-1.jpg|1523086769-2.jpg|1523086769-3.jpg', NULL, NULL, '0', '2018-04-07 03:39:29', '2018-04-07 03:39:29', NULL, '1523086768-0.jpg'),
(27, '1527168864-.png', NULL, 'cover', '1', '2018-05-24 10:34:24', '2018-05-24 10:40:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `favicon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`id`, `email`, `contact`, `titre`, `description`, `favicon`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'managing-tana@moov.mg', 'contact@oktobone.com', 'FMBB | Fédération Malagasy du Basketball - Madagascar', 'La fédération Malagasy du Basketball a pour objectif principal de promouvoir et de développer le basketball Malagasy en niveau national et international.', '1527598339-.ico', 'FMBB,fédération Malagasy du basketball,Antananarivo,Madagascar', '2018-05-29 08:24:24', '2018-05-29 09:52:19');

-- --------------------------------------------------------

--
-- Structure de la table `MATCHS`
--

CREATE TABLE `MATCHS` (
  `IDMATCH` int(11) NOT NULL,
  `IDEVENT` int(11) DEFAULT NULL,
  `IDPOINT` int(11) DEFAULT NULL,
  `IDCALENDRIER` int(11) NOT NULL,
  `IDPOULE` int(11) DEFAULT NULL,
  `EQUIPE_ID1` int(11) DEFAULT NULL,
  `EQUIPE_ID2` int(11) DEFAULT NULL,
  `STATUT` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `PHASE` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MATCHS`
--

INSERT INTO `MATCHS` (`IDMATCH`, `IDEVENT`, `IDPOINT`, `IDCALENDRIER`, `IDPOULE`, `EQUIPE_ID1`, `EQUIPE_ID2`, `STATUT`, `created_at`, `updated_at`, `PHASE`) VALUES
(10, 1, NULL, 29, NULL, 2, 7, 'Terminer', '2017-12-26 15:36:51', '2017-12-26 15:36:51', 'Match Amical'),
(11, 1, NULL, 30, 2, 4, 5, 'A venir', '2017-12-26 15:38:40', '2017-12-26 15:38:40', 'phase de groupe'),
(12, 1, NULL, 31, 3, 7, 8, 'Terminer', '2017-12-27 12:11:00', '2017-12-27 12:11:00', 'phase de groupe'),
(13, 2, 19, 32, 1, 1, 2, 'Terminer', '2018-01-02 08:06:47', '2018-04-25 02:37:34', 'phase de groupe'),
(16, 2, 25, 36, 2, 4, 5, 'Terminer', '2018-02-03 05:04:18', '2018-02-05 09:36:57', 'phase de groupe'),
(20, 2, NULL, 40, 1, 1, 3, NULL, '2018-02-05 12:10:42', '2018-02-05 12:10:42', 'phase de groupe'),
(21, 2, NULL, 41, 2, 4, 6, NULL, '2018-02-06 11:10:45', '2018-02-06 11:10:45', 'phase de groupe'),
(22, 6, NULL, 42, 9, 3, 5, NULL, '2018-02-14 12:08:11', '2018-02-14 12:08:11', 'phase de groupe');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_04_082421_add_column_lieu_to_events', 2),
(4, '2017_12_04_084739_add_columns_to_events', 3),
(5, '2017_12_08_201651_add_columns_to_events', 4),
(7, '2017_12_11_162001_add_columns_to_poules', 5),
(8, '2017_12_14_200051_add_column_to_matchs', 6),
(9, '2017_12_14_200349_add_columns_to_calendriers', 7),
(10, '2017_12_14_200903_add_columns_to_matchs', 7),
(11, '2017_12_07_223940_create_articles_table', 8),
(12, '2017_12_17_100712_fichiers', 8),
(13, '2017_12_26_094515_add_column_to_points', 9),
(14, '2018_02_01_171619_add_column_timestamp_to_resultat', 10),
(15, '2018_03_27_181330_add_columns_to_articles_table', 11),
(16, '2018_03_28_043642_add_columns_to_table_articles', 12),
(17, '2018_03_29_045706_add_columns_to_table_articles', 13),
(18, '2018_03_29_050021_add_columns_to_table_images', 14),
(19, '2018_03_29_084618_add_columns_to_tables_articles', 15),
(20, '2018_04_02_052010_add_columns_to_tables_articles', 16),
(21, '2018_04_10_114748_create_videos_table', 17),
(22, '2018_04_11_131342_add_columns_dimensions_to_video', 18),
(23, '2018_04_20_072338_add_post_to_table_videos', 19),
(24, '2018_04_26_113746_create_table_fmbb_history', 20),
(25, '2018_04_27_075355_add_tags_to_table_fmbb_history', 21),
(26, '2018_04_27_130657_add_columns_titre_to_fmbb_history', 22),
(27, '2018_04_28_101950_create_table_fmbb_structure', 23),
(28, '2018_05_03_122604_add_columns_to_table_fmbb_structure', 24),
(29, '2018_05_14_083909_add_post_system_to_fmbb_structure', 25),
(30, '2018_05_17_122530_create_table_fmbb_technique', 26),
(31, '2018_05_17_134938_add_avatarurl_to_fmbb_technique', 27),
(32, '2018_05_18_130758_add_column_president_to_regions', 28),
(33, '2018_05_19_155754_add_timestamps_to_region', 29),
(34, '2018_05_19_165102_add_table_mission', 30),
(35, '2018_05_19_170019_add_column_titre_to_fmbb_missions', 31),
(36, '2018_05_22_134307_create_table_config_landingpage', 32),
(37, '2018_05_23_133310_add_columns_description_to_config_landingpages', 33),
(38, '2018_05_24_100347_add_columns_view_to_images', 34),
(39, '2018_05_28_102222_add_table_informations_to_db', 35),
(40, '2018_05_29_085441_add_columns_tags_to_table_informations', 36),
(41, '2018_05_29_131112_add_table_socialmedias_to_db', 37),
(42, '2018_05_29_133011_add_column_to_socialmedias', 38),
(43, '2018_05_31_112612_add_columns_user_id_to_comments', 39),
(44, '2018_06_25_104447_add_table_fmbb_reglement_interieur', 40),
(45, '2018_06_25_112337_add_columns_titre_to_reglement_interieur', 41);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `POINTS`
--

CREATE TABLE `POINTS` (
  `id` int(11) NOT NULL,
  `idequipe` int(11) NOT NULL,
  `idmatch` int(11) NOT NULL,
  `quart1` int(11) DEFAULT NULL,
  `quart2` int(11) DEFAULT NULL,
  `quart3` int(11) DEFAULT NULL,
  `quart4` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `POINTS`
--

INSERT INTO `POINTS` (`id`, `idequipe`, `idmatch`, `quart1`, `quart2`, `quart3`, `quart4`, `total`, `created_at`, `updated_at`) VALUES
(18, 1, 13, 15, 32, 35, 43, 43, '2018-01-07 14:54:02', '2018-04-25 02:37:34'),
(19, 2, 13, 11, 23, 25, 40, 40, '2018-01-07 14:54:02', '2018-04-25 02:37:34'),
(24, 4, 16, 23, 34, NULL, NULL, NULL, '2018-02-03 05:04:24', '2018-03-28 01:52:11'),
(25, 5, 16, 12, 23, NULL, NULL, NULL, '2018-02-03 05:04:24', '2018-03-28 01:52:11');

-- --------------------------------------------------------

--
-- Structure de la table `POULES`
--

CREATE TABLE `POULES` (
  `IDPOULE` int(11) NOT NULL,
  `IDEVENT` int(11) NOT NULL,
  `LIBELLEPOULE` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `POULES`
--

INSERT INTO `POULES` (`IDPOULE`, `IDEVENT`, `LIBELLEPOULE`, `created_at`, `updated_at`) VALUES
(1, 1, 'A', '2017-12-19 05:24:34', '2017-12-19 05:24:34'),
(2, 1, 'B', '2017-12-19 05:24:34', '2017-12-19 05:24:34'),
(3, 1, 'C', '2017-12-19 05:24:34', '2017-12-19 05:24:34'),
(4, 2, 'A', '2018-01-02 08:05:07', '2018-01-02 08:05:07'),
(5, 2, 'B', '2018-01-02 08:05:07', '2018-01-02 08:05:07'),
(6, 2, 'C', '2018-01-02 08:05:07', '2018-01-02 08:05:07'),
(9, 6, 'A', '2018-02-14 12:07:02', '2018-02-14 12:07:02');

-- --------------------------------------------------------

--
-- Structure de la table `REGIONS`
--

CREATE TABLE `REGIONS` (
  `IDREGION` int(11) NOT NULL,
  `LIBELLE` varchar(45) DEFAULT NULL,
  `president` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `REGIONS`
--

INSERT INTO `REGIONS` (`IDREGION`, `LIBELLE`, `president`, `created_at`, `updated_at`) VALUES
(1, 'Antsinanana', 'RAKOTONIRINA Jean Marc', NULL, '2018-05-19 13:38:16'),
(2, 'Boeny', 'RAZAFINDRAIBE Jean Arnaud', NULL, '2018-05-19 13:38:33'),
(3, 'Analamanga', 'RASOLOMALALA Fidy Dera', NULL, '2018-05-19 13:37:49'),
(4, 'Vakinankaratra', 'RAZAFINDANDY Samson', NULL, '2018-05-19 13:38:48'),
(5, 'Diana', 'RAMAROSAHANINA Fréjus', NULL, '2018-05-19 13:39:05'),
(6, 'Amoron\'imania', 'RABEMANANTSOA André', NULL, '2018-05-19 13:39:19'),
(7, 'Haute Matsiatra', 'RALITERASON Bary', NULL, '2018-05-19 13:39:47'),
(8, 'Alaotra mangoro', 'RAZAFIMAHERY Hajanirina', '2018-05-19 13:05:10', '2018-05-19 13:37:19');

-- --------------------------------------------------------

--
-- Structure de la table `RESULTATS`
--

CREATE TABLE `RESULTATS` (
  `IDRESULTAT` int(11) NOT NULL,
  `IDEQUIPE` int(11) NOT NULL,
  `POULEID` int(11) NOT NULL,
  `V` int(11) DEFAULT NULL,
  `D` int(11) DEFAULT NULL,
  `POINTS` int(11) DEFAULT NULL,
  `SCOREENCAISSE` int(11) DEFAULT NULL,
  `SCORECUMULE` int(11) DEFAULT NULL,
  `DIFFERENCEPOINT` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `RESULTATS`
--

INSERT INTO `RESULTATS` (`IDRESULTAT`, `IDEQUIPE`, `POULEID`, `V`, `D`, `POINTS`, `SCOREENCAISSE`, `SCORECUMULE`, `DIFFERENCEPOINT`, `created_at`, `updated_at`) VALUES
(11, 1, 4, 1, 0, 3, 40, 43, 3, '2018-02-03 01:56:02', '2018-02-03 15:14:10'),
(12, 2, 4, 0, 1, 1, 43, 40, -3, '2018-02-03 01:56:02', '2018-02-03 15:14:10'),
(15, 4, 5, 0, 0, 0, 0, 0, 0, '2018-02-03 05:11:07', '2018-02-05 09:36:57'),
(16, 5, 5, 0, 0, 0, 0, 0, 0, '2018-02-03 05:11:07', '2018-02-05 09:36:57');

-- --------------------------------------------------------

--
-- Structure de la table `socialmedias`
--

CREATE TABLE `socialmedias` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `statut` tinyint(1) NOT NULL DEFAULT '0',
  `class` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `socialmedias`
--

INSERT INTO `socialmedias` (`id`, `libelle`, `link`, `statut`, `class`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/madagascarbasketball/', 1, NULL, '2018-05-29 11:00:38', '2018-05-29 11:12:38'),
(2, 'twitter', NULL, 0, NULL, '2018-05-29 11:00:38', '2018-05-29 11:12:38'),
(3, 'google-plus', NULL, 0, NULL, '2018-05-29 11:00:38', '2018-05-29 11:12:38'),
(4, 'youtube', NULL, 0, NULL, '2018-05-29 11:00:38', '2018-05-29 11:00:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rakotoarinia liantsoa', 'tsorakoto@gmail.com', '$2y$10$ndraXqEMMhbPqObZhQLDEO3t5W0BTi3m3ZrPP8ouFw6UhGZKU0ZMC', 'uWODr1b7iWShyjTeV9u50HOhIOzKJt511weZBTPIt7AkMn41rCux0sXhpDgW', '2018-03-27 13:10:28', '2018-03-27 13:49:38');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `lienvideo` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typevideo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `live` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `taille` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `lienvideo`, `typevideo`, `live`, `created_at`, `updated_at`, `taille`, `post`) VALUES
(1, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmadagascarbasketball%2Fvideos%2F1760988457281282%2F&width=500&show_text=false&height=280&appId\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 'facebook', 0, NULL, '2018-04-20 05:07:30', '500x280', 0),
(2, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmadagascarbasketball%2Fvideos%2F1760922170621244%2F&show_text=0&width=560\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 'facebook', 0, NULL, '2018-04-20 06:02:09', '500x280', 0),
(3, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmadagascarbasketball%2Fvideos%2F1760833100630151%2F&show_text=0&width=560\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 'facebook', 0, NULL, '2018-04-20 06:02:24', '500x280', 0),
(4, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmadagascarbasketball%2Fvideos%2F1759748270738634%2F&show_text=0&width=560\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 'facebook', 0, NULL, '2018-04-20 05:47:58', '560', 1),
(6, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmadagascarbasketball%2Fvideos%2F1768445439868917%2F&show_text=0&width=560\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 'facebook', 0, '2018-05-31 06:05:26', '2018-05-31 07:54:50', NULL, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_administrateurs_roles_idx` (`roles_id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- Index pour la table `CALENDRIERS`
--
ALTER TABLE `CALENDRIERS`
  ADD PRIMARY KEY (`IDCALENDRIER`);

--
-- Index pour la table `CATEGORIES`
--
ALTER TABLE `CATEGORIES`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Index pour la table `config_landingpages`
--
ALTER TABLE `config_landingpages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `EQUIPES`
--
ALTER TABLE `EQUIPES`
  ADD PRIMARY KEY (`IDEQUIPE`),
  ADD KEY `FK_ASSOCIATION_3` (`IDREGION`),
  ADD KEY `FK_ASSOCIATION_4` (`IDCATEGORIE`);

--
-- Index pour la table `EQUIPE_POULES`
--
ALTER TABLE `EQUIPE_POULES`
  ADD PRIMARY KEY (`IDPOULE`),
  ADD KEY `FK_ASSOCIATION_13` (`IDPOULE`);

--
-- Index pour la table `EVENTS`
--
ALTER TABLE `EVENTS`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `EVENTS_CATEGORIES`
--
ALTER TABLE `EVENTS_CATEGORIES`
  ADD PRIMARY KEY (`IDEVENT`,`IDCATEGORIE`);

--
-- Index pour la table `fmbb_missions`
--
ALTER TABLE `fmbb_missions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fmbb_presentation`
--
ALTER TABLE `fmbb_presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fmbb_reglement_interieur`
--
ALTER TABLE `fmbb_reglement_interieur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fmbb_structure`
--
ALTER TABLE `fmbb_structure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fmbb_technique`
--
ALTER TABLE `fmbb_technique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `MATCHS`
--
ALTER TABLE `MATCHS`
  ADD PRIMARY KEY (`IDMATCH`),
  ADD KEY `FK_ASSOCIATION_2` (`IDCALENDRIER`),
  ADD KEY `FK_ASSOCIATION_7` (`IDPOULE`),
  ADD KEY `FK_ASSOCIATION_9` (`IDPOINT`),
  ADD KEY `FK_ASSOCIATION_13` (`IDEVENT`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `POINTS`
--
ALTER TABLE `POINTS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ASSOCIATION_10` (`idequipe`),
  ADD KEY `FK_ASSOCIATION_8` (`idmatch`);

--
-- Index pour la table `POULES`
--
ALTER TABLE `POULES`
  ADD PRIMARY KEY (`IDPOULE`),
  ADD KEY `FK_ASSOCIATION_12` (`IDEVENT`);

--
-- Index pour la table `REGIONS`
--
ALTER TABLE `REGIONS`
  ADD PRIMARY KEY (`IDREGION`);

--
-- Index pour la table `RESULTATS`
--
ALTER TABLE `RESULTATS`
  ADD PRIMARY KEY (`IDRESULTAT`),
  ADD KEY `FK_ASSOCIATION_5` (`IDEQUIPE`),
  ADD KEY `FK_ASSOCIATION_POULES` (`POULEID`);

--
-- Index pour la table `socialmedias`
--
ALTER TABLE `socialmedias`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `CALENDRIERS`
--
ALTER TABLE `CALENDRIERS`
  MODIFY `IDCALENDRIER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `CATEGORIES`
--
ALTER TABLE `CATEGORIES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `config_landingpages`
--
ALTER TABLE `config_landingpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `EQUIPES`
--
ALTER TABLE `EQUIPES`
  MODIFY `IDEQUIPE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `EVENTS`
--
ALTER TABLE `EVENTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `fmbb_missions`
--
ALTER TABLE `fmbb_missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `fmbb_presentation`
--
ALTER TABLE `fmbb_presentation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `fmbb_reglement_interieur`
--
ALTER TABLE `fmbb_reglement_interieur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `fmbb_structure`
--
ALTER TABLE `fmbb_structure`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `fmbb_technique`
--
ALTER TABLE `fmbb_technique`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `MATCHS`
--
ALTER TABLE `MATCHS`
  MODIFY `IDMATCH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `POINTS`
--
ALTER TABLE `POINTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `POULES`
--
ALTER TABLE `POULES`
  MODIFY `IDPOULE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `REGIONS`
--
ALTER TABLE `REGIONS`
  MODIFY `IDREGION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `RESULTATS`
--
ALTER TABLE `RESULTATS`
  MODIFY `IDRESULTAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `socialmedias`
--
ALTER TABLE `socialmedias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `EQUIPES`
--
ALTER TABLE `EQUIPES`
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`IDREGION`) REFERENCES `REGIONS` (`IDREGION`),
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`IDCATEGORIE`) REFERENCES `CATEGORIES` (`id`);

--
-- Contraintes pour la table `EVENTS_CATEGORIES`
--
ALTER TABLE `EVENTS_CATEGORIES`
  ADD CONSTRAINT `FK_ASSOCIATION_14` FOREIGN KEY (`IDEVENT`) REFERENCES `EVENTS` (`id`);

--
-- Contraintes pour la table `MATCHS`
--
ALTER TABLE `MATCHS`
  ADD CONSTRAINT `FK_ASSOCIATION_13` FOREIGN KEY (`IDEVENT`) REFERENCES `EVENTS` (`id`),
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`IDCALENDRIER`) REFERENCES `CALENDRIERS` (`IDCALENDRIER`),
  ADD CONSTRAINT `FK_ASSOCIATION_7` FOREIGN KEY (`IDPOULE`) REFERENCES `POULES` (`IDPOULE`),
  ADD CONSTRAINT `FK_ASSOCIATION_9` FOREIGN KEY (`IDPOINT`) REFERENCES `POINTS` (`id`);

--
-- Contraintes pour la table `POINTS`
--
ALTER TABLE `POINTS`
  ADD CONSTRAINT `FK_ASSOCIATION_10` FOREIGN KEY (`idequipe`) REFERENCES `EQUIPES` (`IDEQUIPE`),
  ADD CONSTRAINT `FK_ASSOCIATION_8` FOREIGN KEY (`idmatch`) REFERENCES `MATCHS` (`IDMATCH`);

--
-- Contraintes pour la table `POULES`
--
ALTER TABLE `POULES`
  ADD CONSTRAINT `FK_ASSOCIATION_12` FOREIGN KEY (`IDEVENT`) REFERENCES `EVENTS` (`id`);

--
-- Contraintes pour la table `RESULTATS`
--
ALTER TABLE `RESULTATS`
  ADD CONSTRAINT `FK_ASSOCIATION_5` FOREIGN KEY (`IDEQUIPE`) REFERENCES `EQUIPES` (`IDEQUIPE`),
  ADD CONSTRAINT `FK_ASSOCIATION_POULES` FOREIGN KEY (`POULEID`) REFERENCES `POULES` (`IDPOULE`);
