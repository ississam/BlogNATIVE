-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 05 sep. 2020 à 10:23
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blognative1`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `title`, `contenu`, `image`, `date`, `id_categorie`, `id_auteur`) VALUES
(31, 'Voyage au Maroc', 'Le Maroc, pays d\'Afrique du Nord sur le littoral de l\'Atlantique et de la Méditerranée, se distingue par ses influences berbères, arabes et européennes. La médina de Marrakech, quartier médiéval aux allures de labyrinthe, est un lieu animé, avec sa place Jemaa el-Fna et ses souks (marchés) vendant des céramiques, des bijoux et des lanternes en métal. La casbah des Oudayas à Rabat, la capitale, est un fort royal du XIIe siècle qui surplombe l\'océan.\r\nLes premières traces d\'une présence d\'hominidés sur le territoire marocain datent d\'environ 700 000 ans. De cette période dite acheuléenne, on a retrouvé un certain nombre d\'outils, notamment dans la plaine de la Chaouïa et plus précisément à proximité immédiate de l\'actuelle agglomération casablancaise. Outre l\'outillage, on a découvert un certain nombre de fragments humains notamment dans les carrières Thomas, près de Casablanca (mandibules, maxillaires et fragments crâniens d\'Homo erectus)22.\r\n\r\nDe l\'époque moustérienne (120 000 à 40 000 ans BP), le site le plus explicite est celui de Jbel Irhoud situé à mi-chemin entre les villes de Marrakech et de Safi et où ont été découverts deux crânes d\'hominidés, des outils associés à l\'industrie levalloiso-moustérienne ainsi que d\'importants restes d\'animaux aujourd\'hui disparus.\r\n\r\n\r\nExtension de la culture ibéromaurisienne.\r\nL\'époque atérienne (60 à 40 000 ans BP23) a apporté son lot d\'outils pédonculés retrouvés dans de nombreuses grottes situées sur le littoral atlantique (Dar Soltane 2)24. Néanmoins cette période a surtout été marquée par de profonds bouleversements climatiques ayant entraîné une désertification sans précédent du territoire marocain ainsi que la raréfaction voire la disparition d\'un grand nombre d\'espèces animales et végétales. Cette dynamique a cependant été contrecarrée par le rempart naturel que constituent les chaînes de', 'hamza-nouasria-6O8L1xeCK_w-unsplash.jpg', '2020-09-05 02:56:49', 35, 8),
(32, 'Ville Istanbul', 'Istanbul est une grande ville turque à cheval entre l\'Europe et l\'Asie, séparée par le détroit du Bosphore. Sa vieille ville reflète les influences culturelles des nombreux empires qui ont régné sur Istanbul. Dans le quartier de Sultanahmet, l\'hippodrome en plein air datant de l\'époque romaine a accueilli des courses de chars pendant plusieurs siècles, et des obélisques égyptiens sont toujours debout. L\'emblématique musée byzantin Sainte-Sophie comprend un imposant dôme du VIe siècle et des mosaïques chrétiennes rares.\r\nSituée en bordure de la mer de Marmara et de part et d’autre du détroit du Bosphore — donc à cheval sur deux continents, l’Europe et l’Asie — Istanbul est généralement considérée comme porte d\'entrée de l\'Europe parce que la ville historique est située sur la rive occidentale du détroit.\r\n\r\nAppelée officiellement ?stanbul depuis le 28 mars 1930, elle a porté d\'autres noms durant son histoire (encore parfois utilisés selon les contextes), notamment Byzance au moment de sa fondation, puis Constantinople (à partir du 11 mai 330 en l\'honneur de l\'empereur romain Constantin Ier).\r\n\r\nAppelée aussi la « Deuxième Rome », Istanbul appartint d\'abord à la Thrace, puis à l’Empire romain dont elle fut la seconde capitale après 395 (devenu l\'Empire romain d\'orient et appelé au xvie siècle « byzantin » par Hieronymus Wolfe), ensuite à l’Empire ottoman depuis le 29 mai 1453, et enfin, juste après la chute de celui-ci le 10 août 1920, à la République de Turquie, dont elle fut capitale jusqu\'au 13 octobre 1923, lorsque cette fonction administrative fut transférée à Ankara. Les anciens noms de la ville, Byzance puis Constantinople, témoignent de cette longue histoire. Seules quelques autres grandes villes ont eu trois noms au cours de leur histoire. Du point de vue historique, il est possible de considérer qu\'avec Athènes et Rome, Constantinople est l\'une des trois capitales antiques les plus importantes.', 'fatih-yurur-kNSREmtaGOE-unsplash.jpg', '2020-09-05 02:59:18', 35, 10),
(33, 'Technique de pêche àla mer', 'La pêche est l\'activité consistant à capturer des animaux aquatiques dans leur biotope. Elle est pratiquée par les pêcheurs, comme loisir ou profession. Les techniques et engins de pêche sont nombreux, dépendant de l\'espèce recherchée, du milieu, ou encore du bateau utilisé.\r\nLe poisson était l\'un des « dons du Nil »16 qui, frais ou séché, était un aliment de base pour une grande partie de la population. Différents modes de pêche et piégeage mis en œuvre par les égyptiens sont illustrés dans des scènes peintes dans les tombeaux ainsi que sur des papyrus. Certaines représentations semblent même faire allusion à une pêche conçue comme un loisir. En Inde, la dynastie Pandyas (royaume dravidien du Tamil) était connue pour la pêche perlière (au moins 100 ans av. J.-C., et dans des eaux assez profondes). Les Paravar (en) (ou Parathavar ou Paradavar), caste tamoule de la région de Tuticorin se sont aussi enrichis du commerce de la pêche de poissons et des perles.\r\n\r\nLes scènes de pêche sont rares dans les traces laissées par l\'Antiquité grecque, reflétant peut-être un faible statut social pour les pêcheurs, mais l\'auteur grec Oppien de Syrie laisse un traité majeur sur la pêche en mer (dit Halieulica ou Halieutika, composé entre 177 et 180 ; le plus ancien ayant survécu jusqu\'à nos jours). Les preuves picturales des pratiques romaines de la pêche sont rares, mais on en trouve dans les mosaïques17. Le trident de Neptune est a priori un engin de pêche, qui plus est le plus facile à utiliser là où le poisson est très abondant. Outre-Atlantique, les Amérindiens Moche du Pérou antique ont dépeint des pêcheurs sur leurs céramiques18.\r\n\r\nLe commerce de la morue séchée perdure dans la région de Lofoten, en Norvège, jusque vers le sud de l\'Europe, l\'Italie, l\'Espagne et le Portugal depuis la période Viking voire avant, c\'est-à-dire depuis plus de 1 000 ans. En dépit du déclin des morues, il reste important.', 'harris-vo-iwP2UhGvnJI-unsplash (1).jpg', '2020-09-05 03:02:37', 34, 9),
(34, 'Pique-nique en forêt', 'Comme je suis un grand amoureux de la nature, j’organise régulièrement des pique-niques en forêt avec ma famille et quelques amis dès que la météo me l’autorise. De plus comme j’habite dans une région forestière, les coins sympas ne manquent pas.\r\n\r\nLes panoplies du parfait pique-niqueur\r\nUn pique-nique réussi en forêt se prépare. Et pour que l’excursion se déroule dans de bonnes conditions, de nombreux accessoires vous seront indispensables. Ainsi vu que j’ai déjà à plusieurs reprises pique-niqué en forêt, je vous propose une liste exhaustive des articles que j’amène habituellement. D’abord les couverts, à savoir les couteaux, les verres, les fourchettes et autres. Pour leur côté pratique, je ne me sers que des assiettes jetables. Je privilégie d’ailleurs ceux en carton, pour leur biodégradabilité.\r\n\r\nNéanmoins, en respect de l’environnement, je ramasse tous les couverts usagés, particulièrement ceux en plastique pour ne pas polluer la forêt. Sinon pour m’asseoir douillettement sur le sol, je n’oublie pas la grande couverture et la petite nappe vichy. J’ai d’ailleurs une préférence pour les plaids pour leur légèreté et leur confort. Je me munis également de deux ou trois coussins pour la petite sieste.\r\n\r\nPar ailleurs comme l’excursion se déroule en forêt, les moustiques et autres insectes seront de la partie. C’est pourquoi il ne faut pas oublier sa crème solaire ainsi que sa lotion anti-moustique. Quant à moi, je choisis de porter un tee-shirt coton léger à manches longues. Et bien sûr, casquette ou panama, je ne me sépare jamais de mon couvre-chef.\r\nLes recettes de réussite d’un pique-nique en forêt\r\nIl n’y a rien de plus énervant lorsque l’on arrive sur les lieux et que s’apercevoir qu’on a oublié le tire-bouchon ou encore le décapsuleur. Seulement voilà, lorsque l’on se retrouve à une quarantaine ou une cinquantaine de kilomètres de son domicile, il n’est pas question de revenir à la maison pour récupérer l’accessoire. Ce petit oubli peut pourtant gâcher la journée.\r\n\r\nPour éviter de me retrouver dans cette situation, je fais méthodiquement une petite check-list de ce qu’il faut emmener deux heures avant le départ. Sinon, pour garder les boissons au frais, rien de tel qu’une glacière. Néanmoins, l’un des inconvénients de cet équipement est que ce dernier prend beaucoup de place dans le coffre de ma voiture. En alternative, je mets au congélateur mes bouteilles d’eau minérale et de thé glacé. Je les transporte par la suite dans les sacs isothermes, pour éviter que les glaces ne fondent rapidement. Enfin, pour occuper les enfants, les jeux de société, corde à saute, frisbee et ballon', 'svetlana-kuznetsova-VgItkeIq6Ek-unsplash.jpg', '2020-09-05 03:05:34', 34, 8),
(35, 'Recette tajine Marocain', 'Le tajine est un grand classique de la cuisine marocaine. Cette recette vous permet de préparer une cocotte marocaine pleine de saveurs, aux accents de chez nous.\r\nPréparation\r\nCoupez les oignons en rondelles. Épluchez les pommes de terre et les carottes et coupez en gros morceaux.\r\n\r\nCoupez grossièrement les tomates et l’aubergine. Ciselez finement l’ail.\r\n\r\nFaites revenir l’épaule d’agneau dans l’huile d’olive avec toutes les épices, l’oignon et l’ail. Ajoutez les morceaux de tomates et un filet d’eau.\r\n\r\nFermez le tajine et diminuez le feu au plus bas.\r\n\r\nAprès quelques minutes, ajoutez les morceaux de pommes de terre et de carottes. Laissez mijoter 10 minutes supplémentaires avant d’ajouter l’aubergine.\r\n\r\nAprès environ 15 min. de cuisson, ajoutez le citron coupé en morceaux.\r\n\r\nAttention à ce que le plat ne soit pas trop sec. Si c’est le cas, ajoutez un peu d’eau.\r\n\r\nLorsque tous les ingrédients sont bien cuits, retirez le tajine du feu et finissez avec du persil haché.', 'thiebaud-faix-KXTAn5FzDac-unsplash.jpg', '2020-09-05 03:09:20', 36, 10),
(36, 'Recette de Spaghetti', 'PRÉPARATION\r\n1Dans une casserole, faites chauffer l\'huile d\'olive et jetez-y les oignons détaillés. Faites-les cuire à feu doux le temps qu\'ils deviennent translucides. Ajoutez l\'ail détaillé à la fin juste le temps qu\'il dore très légèrement sans qu\'ils ne brûlent.\r\n2Mettez les tomates dans la casserole et portez sur feu moyen à fort. Laissez mijoter 20 minutes en ajoutant l\'origan, le basilic, le sel, le poivre, le piment de Cayenne et le sucre selon les goûts.\r\n\r\n3Baissez le feu en remuant pour faire réduire la sauce. Réservez.\r\n4Faites cuire la viande dans une poêle après l\'avoir assaisonnée. Pensez à bien retirer le jus de la viande.\r\nPour finir\r\nMélangez la viande à la sauce et mélangez le tout aux pâtes cuites al dente.\r\nLaver et couper les aubergines dans le sens de la longueur en épaisseur d\'environ 1/2 cm. Les déposer dans une passoire en parsemant de gros sel sur chacune des tranches. Poser une assiette puis un poids suffisamment lourd sur les aubergines et laisser reposer ainsi environ 60 mn. Cette opération sert à ôter l\'amertume de vos légumes.', 'mgg-vitchakorn-PLyJqEJVre0-unsplash.jpg', '2020-09-05 03:12:07', 36, 8);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `fullname`, `email`, `avatar`) VALUES
(8, 'Antoine Askar', 'a.askar@gmail.com', 'joseph-gonzalez-iFgRcqHznqg-unsplash.jpg'),
(9, 'Craig McKay', 'c.m@yahoo.com', 'craig-mckay-jmURdhtm7Ng-unsplash.jpg'),
(10, 'Aziz Acharki', 'aziz@achjari.com', 'aziz-acharki-53BbXnUiJaE-unsplash.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `name`, `image`) VALUES
(34, 'Nature', 'blake-richard-verdoorn-cssvEZacHvQ-unsplash.jpg'),
(35, 'Voyage', 'blake-guidry-p9vr45T2scg-unsplash.jpg'),
(36, 'Cuisine', 'kevin-mccutcheon-APDMfLHZiRA-unsplash.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `contenu_comm` varchar(200) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `nickname`, `contenu_comm`, `id_article`) VALUES
(54, 'antoine', 'J\'ai adoré cet article', 31),
(55, 'Alain', 'Merci pour cet article, avec ce beau temps, l\'article nous donne envie de picniquer.', 34),
(56, 'Issam', 'Conseiles trés utiles pour apprendre à pêcher, une bonne canne à pêche rendre les choses remarquables.', 34),
(57, 'cc', 'od', 33);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` varchar(250) NOT NULL DEFAULT 'user',
  `name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `role`, `name`, `user_email`, `user_avatar`, `password`) VALUES
(15, 'admin', 'aa@a.com', 'aa@a.com', NULL, '$2y$10$/C4jLXRSVAR55vLPMc4jl.6L9Rqc17d9eJ4Iwi5brWNBVbNBphspS'),
(16, 'admin', 'I', 'i@i.com', NULL, '$2y$10$/e6kNzwk4DEGUn/mE7I62egvQh.NpNZokZVRrRwI1qYYP5eK0A3om'),
(17, 'user', 'issam', 'issam@o.com', NULL, '$2y$10$rB5cGIIpYZtStE1rH8CP0e2Zi42ZiJgve3ys/3DcbMZpPmyeICax.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
