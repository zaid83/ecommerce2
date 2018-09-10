-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 02 Septembre 2018 à 17:07
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fromagerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `nom_categories` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `nom_categories`) VALUES
(1, 'Lait de Vache'),
(2, 'Lait de Brebis'),
(3, 'Lait de Chèvre');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `img_client` text COLLATE utf8_unicode_ci NOT NULL,
  `nom_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel_client` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mdp_client` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_client` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cp_client` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ville_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `img_client`, `nom_client`, `prenom_client`, `mail_client`, `tel_client`, `mdp_client`, `adresse_client`, `cp_client`, `ville_client`) VALUES
(1, 'https://smhttp-ssl-33667.nexcesscdn.net/manual/wp-content/uploads/2017/03/jake-gyllenhaal-quiff-2.jpg', 'Alexis', 'Specimen', 'belgiqueenforce@frite.fr', '0874784578', '86077f1397b6cd8ae45edf3e6b87b31c5930b38aeac798f7586eee76870dbd6d6544e58970c28fd20e88e6b799e69fc373a7b8b54bfe14ba064726f6d3166e5c', 'rue de Caroline Fourest', '90784', 'Choux de Bruxelles'),
(23, 'https://www.elaee.com/wp-content/uploads/Pinocchio.png', 'Mythos', 'Felix', 'admin@mythomane.fr', '0648487841', 'c12d0f82023778a5fbc839ff89490d81af663f5344631816505ad70992abd457f8785cf900935d40ebded81862a4d67cca0e54d80d19964207a47aca8531c429', 'rue de la forteresse', '06500', 'Menton'),
(24, 'https://www.lavantgardiste.com/11579-thickbox_default/masque-licorne.jpg', 'Etchebest', 'Gregory', 'commandant@cuistot.fr', '0666666666', 'e458e5817a5c7c5a5f1f95973bb67171a0bd5d98153eadb1a4e3d3db51835b10f5c828529a66a1ac7686f1d7c3150b52810a0a048af7fac773229cea66954aed', 'Rue de la Licorne', '13000', 'Licorne city'),
(29, 'http://via.placeholder.com/300', 'Ademo', 'Nos', 'pnl@naha.com', '0644848484', '87362641d5873836f853892c5b30abcd2051af50623cc3614673c87d68f273a72dba1f1a7559bbea7fb04fd99f65e8cf02966dcf6280a1c722bd32f3c9575240', '8 RUE DU IENCLI', '78484', 'PARIS'),
(30, 'http://via.placeholder.com/300', 'Borloo', 'Jean Louis', 'jl@poivrot.fr', '0484848787', 'b9602d35a8dbfc9f2d6c5fd1b00ee2fc546f798b779b21d09bcb19c4ef91c989a2bfbd735bfbd17b32cf6c9aae309a0c60ae165125dfd6b787e8f93ad441550f', 'rue de la pontoise', '74000', 'fermiere'),
(31, 'http://via.placeholder.com/300', 'Fromage', 'Debrebis', 'fromage@frais.fr', '0678488484', '1378ac792280051ff6831323a54c2ce98f288276d30cae96080e76f95773adbd53ceee0c4ec51561baa11f5e53cda413fb1e4a49d06b0664f787c82a99ac7508', '49 rue du RIES', '13000', 'Marseille'),
(32, 'http://via.placeholder.com/300', 'josiane', 'balasko', 'jo@ba.fr', '0784181819', 'cab5c8a7b684214ff21c23a5165be849b461cd8df3fdbde449ee33e871aea2ba81305f6bcf727c7d100e48c5676e7ba503c8dc51f7f368f43f5a63b1bc5f11ad', 'cklnckldnjkdnjs', '78489', 'frejus'),
(33, 'http://via.placeholder.com/300', 'zaazda', 'dazdad', 'fromage@fraise.fr', '0784841811', 'cab5c8a7b684214ff21c23a5165be849b461cd8df3fdbde449ee33e871aea2ba81305f6bcf727c7d100e48c5676e7ba503c8dc51f7f368f43f5a63b1bc5f11ad', 'zadbhbjhajbda', '07116', 'uizhfuizif');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_commande` int(11) NOT NULL,
  `date_commande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prix_total` float NOT NULL,
  `id_client` int(11) NOT NULL,
  `adresse_livraison` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cp_livraison` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ville_livraison` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel_livraison` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id_commande`, `date_commande`, `prix_total`, `id_client`, `adresse_livraison`, `cp_livraison`, `ville_livraison`, `tel_livraison`) VALUES
(1, '2018-09-01 14:32:01', 45, 31, '49 rue jean jaures', '78481', 'marseille', '0754548494');

-- --------------------------------------------------------

--
-- Structure de la table `commande_articles`
--

CREATE TABLE `commande_articles` (
  `id_client` int(11) NOT NULL,
  `date_commande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_fromage` int(11) NOT NULL,
  `qtite_articles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `commande_articles`
--

INSERT INTO `commande_articles` (`id_client`, `date_commande`, `id_fromage`, `qtite_articles`) VALUES
(31, '2018-09-01 14:32:01', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `fromage`
--

CREATE TABLE `fromage` (
  `id_fromage` int(11) NOT NULL,
  `nom_fromage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_fromage` text COLLATE utf8_unicode_ci NOT NULL,
  `descrip_fromage` text COLLATE utf8_unicode_ci NOT NULL,
  `details_fromage` text COLLATE utf8_unicode_ci NOT NULL,
  `prix_fromage` float NOT NULL,
  `id_pays` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fromage`
--

INSERT INTO `fromage` (`id_fromage`, `nom_fromage`, `img_fromage`, `descrip_fromage`, `details_fromage`, `prix_fromage`, `id_pays`, `id_categories`) VALUES
(1, 'Serra ', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/portugal-cheese-serra-da-estrela.png?resize=245%2C186&ssl=1', 'L’histoire du fromage Serra da Estrela remonte au 16ème siècle et est étroitement liée à l’histoire des villes de montagne, des bergers et de la vie de montagne. Avec une pâte à la fois sèche et huileuse, une couleur jaune et une saveur intense, le fromage Serra da Estrela est fabriqué exclusivement avec du lait de brebis Bordaleira.', ' La production de ce fromage appétisant doit respecter des règles rigoureuses. Principalement réalisé entre novembre et mars, il doit maturer pendant au moins trente jours. La texture de la pâte varie en fonction de l’âge, d’un semi-liquide très doux quand il est jeune, jusqu’à un solide plus tranchant lorsqu’il est plus vieux. Vous devriez certainement l’essayer : le Serra da Estrela est délicieux avec un morceau de pain.', 15, 1, 2),
(2, 'Manchego', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/spain-cheese-manchego.png?resize=245%2C186&ssl=1', 'La région de La Mancha en Espagne n’est pas seulement celle du héros littéraire Don Quichotte, mais aussi celle d’où est originaire un légendaire fromage espagnol. Le Manchego est en Espagne ce qu’est le cheddar en Angleterre, ou le camembert en France – la coqueluche à la fois des connaisseurs et des novices. ', 'Fabriqué à partir du lait de mouton Manchego, qui paissent sur les plaines du centre-sud de l’Espagne, sa texture et sa saveur varient en fonction de sa durée de maturation : du demi-curado salé et lisse à un curado cristallisé et épicé. Il est souvent servi seul, en triangles coupés fins, ce qui permet de faire ressortir sa saveur pure. Les amoureux de l’histoire apprécieront : on pense qu’une version semblable de ce fromage était produite dès l’âge de bronze à partir de la même race de moutons. Des milliers d’années plus tard, le Manchego est devenu le fromage espagnol le plus célèbre dans le pays comme à l’étranger.', 17, 3, 2),
(4, 'Camembert', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/france-cheese-camembert.png?resize=245%2C186&ssl=1', 'Charles de Gaulle se plaignit de la difficulté d’être Président français : “Mais comment voulez-vous gouverner un pays où il existe 258 variétés de fromage ?” Il faut lui reconnaîre qu’il n’avait pas tout à fait tort : la France abrite une grande variété de fromages et souvent décrite comme le “pays des fromages qui puent”. Voici donc un vrai dilemme : choisir l’un d’entre eux comme référence est très controversé. Pour éviter les ennuis avec la mafia corse ou basque, nous allons donc opter pour le fromage le plus consensuel !', 'Le Camembert, ce célèbre fromage au lait de vache doux et crémeux. D’origine normande, le Camembert se compose en fait de diacétyle, de méthylbutanal, de méthional, de octén, d’acétate de phéthyle, d’undécanone, de décalactone, d’acide butyrique et d’acide isovalérique … Eh bien, si vous n’êtes pas scientifique : goûtez-le simplement avec une baguette française, et ça fera l’affaire !', 15, 2, 1),
(5, 'Skyr', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/iceland-cheese-skyr.png?resize=245%2C186&ssl=1', 'Avec une population de plus de 300 000 habitants, l’Islande consomme plus de fromage, de beurre et de lait que bien d’autres pays occidentaux. Les Islandais apprécient en particulier le Skyr, une sorte de yaourt légèrement aromatisé. Le Skyr est arrivé en Islande depuis la Norvège il y a plus de 1100 ans, et bien qu’il ait disparu dans la plupart des autres pays scandinaves...', ' Le skyr a survécu dans la culture islandaise, où il est traditionnellement servi froid avec du lait et un peu de sucre. Le Skyr est mentionné dans un certain nombre de sources islandaises médiévales, y compris les Sagas d’Egil et de Grettis. Il peut être utilisé dans un plat traditionnel islandais appelé hræringur (qui veut dire “agité” ou “fait par agitation”) que l’on cuisine avec approximativement les mêmes quantités de skyr et de porridge. Il est souvent mélangé avec de la confiture ou des fruits pour un dessert, des poissons préparés pour le dîner ou des céréales pour le petit-déjeuner.', 5, 4, 3),
(6, 'Dubliner', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/ireland-cheese-dubliner1.png?resize=245%2C186&ssl=1', 'Pourriez-vous me nommer un fromage qui porte le nom d’une ville, mais qui vient en fait d’une autre ? Allez, j’imagine que vous avez déjà compris… Le fromage Dubliner est nommé d’après la ville de Dublin, bien qu’il soit ironiquement fabriqué à Cork. ', 'Le fromage préféré de l’Irlande combine la netteté du Cheddar mature avec la douceur de Parmigiano. Contrairement à un cheddar fort, le Dubliner mature pendant 12 mois. Il a une texture dure et une saveur robuste, avec une pointe de noisette – un goût qui ne peut venir que d’un fromage naturel fabriqué à partir du lait de vaches de pâturage. Reconnu pour son secteur laitier de haute qualité, ses pâturages vierges et son air propre, l’Irlande est une destination naturelle pour la fabrication de fromages de qualité supérieure.', 25, 5, 1),
(7, 'Cheddar', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/united-kingdom-cheese-cheddar.png?resize=245%2C186&ssl=1', 'C’est probablement le fromage le plus populaire au monde ; au Royaume-Uni, il représente 51% du marché. Ce fromage relativement dur, blanc cassé ou orange, parfois fort, serait apparu au Somerset vers la fin du 12ème siècle et tiendrait son nom des grottes de la ville de Cheddar où le produit était entreposé. Ne le dîtes pas aux Britanniques, mais certains historiens pensent que ce sont les Romains qui auraient apporté la recette sur l’île en s’inspirant du Cantal français.', 'For God’s Sake! Joseph Harding décrivait en 1864 la qualité idéale du Cheddar original de Somerset : “une texture ferme, mais un caractère moelleux, une tendance à fondre dans la bouche, une saveur pleine et fine, qui rappelle le goût de la noisette“. Plus récemment, on raconte que le président américain Andrew Jackson aurait organisé une fête pour les portes ouvertes de la Maison-Blanche lors de laquelle il aurrait fait servir un bloc de Cheddar de près de 640 kilogrammes. De quoi apprécier la visite !', 49, 6, 3),
(8, 'Brunost', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/norway-cheese-brunost.png?resize=245%2C186&ssl=1', 'Le Brunost est fabriqué en Norvège depuis des siècles et, comme la plupart des plats traditionnels norvégiens, il remonte à une époque où le pays était relativement pauvre. Habituellement, le petit-lait est considéré comme un sous-produit de la fabrication du fromage à proprement parlé, non propre à la consommation humaine, mais des Norvégiens rusés ont trouvé une tout autre utilité : une source alternative de protéines.', 'C’est un fromage brun et dense de petit-lait dont la couleur et la texture s’obtiennent par un processus de mijotage lent qui permet aux sucres de lait de caraméliser. Il est possible d’obtenir une variante faible en graisse en augmentant la proportion de petit-lait et de crème. Pour les non-initiés, le goût du Brunost peut surprendre. Il a une saveur légèrement salée et étonnamment sucrée – avec juste un soupçon de fromage de chèvre.', 18, 7, 2),
(9, 'Västerbottensost', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/sweden-cheese-vc3a4sterbottensost.png?resize=245%2C186&ssl=1', 'Selon une certaine légende, le fromage Västerbottensost a été inventé dans les années 1870 par une laitière, Eleonora Lindström. On dit qu’elle était en train de préparer du lait caillé pour faire un fromage traditionnel lorsque son amant l’aurait interrompue, donnant ainsi naissance quelques temps plus tard au Västerbottensost (ainsi qu’à un marmot)… De nos jours, l’interlude amoureuse est tout à fait facultative pour préparer ce fromage, mais il est par contre essentiel de chauffer et remuer alternativement le lait en coagulation pour produir un bon Västerbottensost, lequel pourrait encore donner quelques montées de chaleur à certains…', 'Le Västerbottensost, nommé d’après la région de Västerbotten en Suède d’où il est originaire, est un fromage au lait de vache dur avec de minuscules petits trous et une texture ferme et granulaire. Beaucoup de Suédois le considèrent comme le roi des fromages où la demande dépasse bien souvant l’offre disponible. D’ailleurs, le Västerbottensost est environ deux fois plus cher que les autres types de vieux fromage', 40, 8, 1),
(10, 'Leipäjuusto', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/finland-cheese-leipc3a4juusto.png?resize=245%2C186&ssl=1', 'Voici un fromage qui couine dans la bouche quand vous le mâchez ! C’est d’ailleurs pourquoi on l’appelle en français : “le fromage qui couine”. Le Leipäjuusto est un fromage frais très doux, fait à partir de lait d’une vache qui a récemment vêlé. Il peut tout aussi bien être fabriqué à partir de lait de rennes ou même de chèvre. Les Finlandais aiment le servir avec du café et de l’ananas, ou coupés en plusieurs morceaux et trempé dans une tasse de café. Ils l’apprecient aussi sur un morceau de pain avec des cornichons d’aneth et du jambon.', 'Leipäjuusto veut littéralement dire pain de “fromage” et on l’appelle parfois Juustoleipa (fromage grillé) puisqu’il est “grillé” lors de sa préparation. Il contient généralement environ 20 à 22% de matière grasse, tandis que les versions plus légères en contiennent environ 12%. Traditionnellement, les Finlandais ont l’habitude de laisser leur Leipäjuusto complètement sécher, de sorte qu’ils peuvent le stocker pendant plusieurs années.', 25, 9, 3),
(11, 'Danablu', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/denmark-cheese-danablu.png?resize=245%2C186&ssl=1', 'Hum… “Danablu“… “Danablu“… Quel nom étrange pour un fromage à la fois populaire et audacieux ! En toute logique, le nom est en fait l’abbréviation de ‘Danish Blue Cheese’, une contraction faite par son créateur, le pionnier du fromage danois, Hanne Nielsen, qui ouvrit une des premières usines de production de fromage dans les années 1850 pour confectionner le Danablu en s’inspirant du Roquefort français. Il lui fallut bien un peu plus de dix ans d’expérimentations en moule et en pasteurisation du lait pour pouvoir enfin trouver la recette finale, en 1874. ', ' Le résultat est un fromage bleu danois unique – lisse, crémeux, mais aussi ferme afin de pouvoir être coupé. Le Danablu a une belle apparence avec des veines bleues-vertes régulières parcourant la pâte blanche. Le goût est délicieux, piquant et salé, sans être toutefois aussi fort que son lointain cousin, le Roquefort ou le Gorgonzola.', 35, 10, 1),
(12, 'Gouda', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/the-netherlands-cheese-gouda1.png?resize=245%2C186&ssl=1', 'Gouda\r\n\r\nAux Pays-Bas, vous êtes susceptibles de trouver du fromage Gouda au menu du matin, du midi et du soir. Le Gouda est le fromage le plus populaire des Pays-Bas et le plus exporté. Il est connu pour sa saveur douce et presque sucrée. C’est aussi l’un des fromages les plus polyvalents du monde entier, nommé d’après la ville de Gouda dans le sud de la Hollande – une de ces villes qui, au Moyen Âge, avait acquis le droit exclusif sur le production et la vente de son fromage.', '. Une petite précision, le mot ‘Gouda‘ ne se prononce en fait pas “goo-da” en néerlandais. Le “g” néerlandais est un objet délicat : c’est un son gutural qui ressemble au bruit que l’on fait lorsqu’on se racle la gorge (quelle classe !) ; ou, si cela ne fonctionne pas bien, remplacez le “g” gutural par un “h” plus doux. Pour le “ou“, pensez “ouw! Je me suis cassé un ongle !” Le “da”, enfin, se pronce “da”, pardi ! Maintenant essayez tout ensemble : “(G) h-ouw-da!”. (De préférence, la bouche pleine).', 20, 11, 1),
(13, 'Maredsous', 'http://europeisnotdead.com/gusto/ingredients-of-europe/european-cheeses/belgium-cheese-maredsous/', 'La Wallonie a maintenu des pratiques traditionnelles de production de fromage à travers les âges. Ce sont les moines qui ont grandement contribué au caractère spécial du fromage belge : comme pour la bière belge, ils en ont été les plus grands artisans. Au Moyen Age, les moines et les religieuses ont développé des produits pour se nourrir et les vendre sur le marché afin de subvenir aux besoins de leurs monastères. Comme la plupart d’entre eux avaient leurs propres vaches, chèvres et moutons, le fromage était un produit évident à developper. La plupart de ces fromages, mais pas tous, étaient à base de lait de vache, doux ou semi-doux, et lavé ou frotté avec de la saumure ou de l’alcool.', 'Dans leur version originale, ces fromages ont un goût assez fort, mais leurs versions commerciales ont maintenant tendance à être plus douces, voire fades. L’abbaye Maredsous participe de cette tradition depuis 1953. Son fromage mature dans les caves de l’abbaye à une température uniforme de 12 ° C.', 22, 12, 1),
(14, 'Tilsiter', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/germany-cheese-tilsiter.png?resize=245%2C186&ssl=1', 'Souriez et dites “Käse” ! Nos cousins germains aiment le fromage et ont tendance à en consommer sous toutes ses formes et venant de toute l’Europe. Mais si vous cherchez un authentique fromage allemand, il suffit d’aller titiller vos papilles avec un certain Tilsiter. C’est l’un de ces fromages allemands originaire de l’ancienne province de la Prusse orientale. Il a été confectionné au milieu du 19ème siècle par des colons prussien-suisses, de la famille Westphal venant de la vallée de l’Emmental.', 'Comme ces Suisses n’avaient pas accès exactement aux mêmes ingrédients que ceux qu’ils utilisaient à la maison, et que le fromage était colonisé par des bactéries différentes, soumis à un climat plus humide, le Tilsiter est devenu un fromage à part entière, plus riche en saveurs. Principalement produit dans le nord de l’Allemagne, le Tilsiter possède une texture à moitié ferme, avec des trous ou des fissures irrégulières, un intérieur crémeux et une saveur douce et spécifique. Certaines marques de Tilsiter contiennent également des graines d’herbes, de poivre et de carvi.', 16, 13, 1),
(15, 'Bergkäse', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/austria-cheese-bergkc3a4se.png?resize=245%2C186&ssl=1', 'La famille des Bergkäse, ou “fromages de montagne”, bénéficie d’un avantage crucial : les vaches qui y passent leurs étés sur les plus beaux pâturages d’Europe produisent le meilleur des laits. Chaque région autrichienne offre ses propres spécialités, souvent basées sur des recettes centenaires et adaptées à l’esprit de l’époque. Le fromage semi-dur est le style de fromage qui caractérise la plupart des Bergkäse.', 'Ils peuvent toutefois variés de  fermes à moelleux, de forts en bouche à aromatisés. Le fromage semi-dur bénéficie de savoir-faires séculaires en Autriche. En conséquence, la fabrication est répandue dans tout le pays et a souvent une forte base régionale. Cela se reflète dans le nom des fromages : “Dachsteiner”, “Arlberger” ou “Gmundner“. Les fromages semi-durs sont des fromages dont la maturation n’est pas uniforme avec une consistance parfois ferme et parfois lisse et de petits trous en forme de fente ou de grain.', 17, 15, 1),
(16, 'Emmentaler', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/switzerland-cheese-emmentaler.png?resize=245%2C186&ssl=1', 'Quoi d’autre ? C’est évidemment le fromage populaire par excellence – l’un des meilleurs de Suisse – et celui que vous apprécierez le mieux ! Parmi la riche variété de fromages suisses, nous ne pouvions évidemment pas choisir un autre fromage que celui dont le nom vient de la vallée de l’Emme dans le canton de Berne.', 'Il est produit depuis le 13ème siècle – et chaque kilo nécessite environ douze litres de lait. La caractéristique principale de l’Emmentaler réside probablement dans ses trous. Ils sont de la taille de petites cerises ou de noix, et apparaissent pendant le processus de maturation. Le diamètre de la meule oscille entre 80 à 100 cm, sa hauteur est de 16 à 27 cm et le fromage pèse tout de même entre 75 et 120 kg.', 22, 14, 1),
(17, 'Parmigiano reggiano', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/italy-cheese-parmigiano-reggiano.png?resize=245%2C186&ssl=1', 'C’est sans aucun doute le “Roi de tous les fromages”, comme le disent clairement les Italiens (tiens, nous avons déjà entendu ça quelque part) ! Outre son goût délicieux et crémeux, les origines du Parmigiano reggiano méritent bien un petit arrêt sur l’histoire. La production de ce fromage iconique remonte au 12ème siècle, lorsque les moines bénédictins vivant dans la région de Emilia Romagna commencèrent à produire de grandes quantités de lait et avaient besoin de trouver un moyen de le conserver.', ' Ils ont commencé à fabriquer un gros fromage dur dont la particularité était que, plus il vieillissait, plus son goût et son odeur s’amélioraient. Neuf siècles plus tard, le Parmigiano reggiano est toujours produit dans la même région en utilisant la même technique.', 35, 16, 1),
(18, 'Ġbejna', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/malta-cheese-c4a1bejna.png?resize=245%2C186&ssl=1', 'Qu’est-ce qui est petit, rond, salé et fait à partir de moutons maltais ? Vous l’aurrez compris : ça ne peut-être autre chose que le célèbre Ġbejna, le fromage maltais par excellence ! Ce petit fromage tout mignon est si important dans la culture culinaire maltaise que la plupart du lait de brebis produite à Malte est utilisé pour sa production. ', 'Traditionnellement, le lait à Malte était vendu juste après la traite des chèvres dans les rues. Ce lait non pasteurisé a été l’une des causes de la propagation de la brucellose (“Deni Irqiq” ou “La fièvre de Malte”) à la fin du XIXe siècle et au début du XXe siècle. Mais David Bruce et Sir Themistocles Zammit sont devenus célèbres pour avoir stopper la pandémie en améliorant leur fromage bien-aimé. Le Ġbejna est façonné dans un haie de fromage traditionnellement faite de roseaux séchés (on utilise davantage des plastiques aujourd’hui), et séchés dans de petites pièces ventilées, avec des fenêtres protégées par une moustiquaire spéciale. Les Maltais affirment que, par le passé, l’eau de mer, plutôt que la présure, était utilisée comme agent de coagulation. On trouve maintenant le fromage en lait pasteurisé et en lait non pasteurisé.', 25, 18, 3),
(19, 'Olomoucké sýrečky', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/czech-republic-cheese-olomouckc3a9-sc3bdrec48dky.png?resize=245%2C186&ssl=1', 'D’abord, vous devrez être capable de prononcer son nom. Ensuite vous serez en mesure d’apprécier son goût … Les fromages Olomoucké sýrečky, également connus sous le nom de Olomoucké tvarůžky, sont soit aimés, soit detestés. Tout dépend de comment vous appréciez les fromages forts. Partie intégrante et inévitable de la cuisine tchèque, ce fromage fétide est connu pour son arôme fort, certains diront même piquant, certains diront même puant. La première référence écrite relative à ce fromage remonte au 15ème siècle, lorsque le Olomoucké sýrečky était un mets apprécié de l’empereur romain Rudolf II.', 'Il a été produit dans les villages entourant Olomouc jusqu’au 19ème siècle, mais il était alors largement considéré comme un mets paysan. Le fromage peut être mangé frais, ou battu et frit et est fabriqué à partir de lait de vache écrémé sans présure, de colorants, d’aromatisants ou de stabilisateurs. Il est meilleur accompagné d’une bonne bière. Certains apprécieront : il est très peu gras.', 25, 19, 1),
(20, 'Bryndza', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/slovakia-cheese-bryndza.png?resize=245%2C186&ssl=1', 'A première vue, le mot peut sembler slovaque, mais le nom de Bryndza vient en fait du Wallachian où il est simplement le mot roumain pour “fromage”. Alors que la plupart des fromages au monde est fabriqué à partir de lait de vache, le Bryndza, lui, est fait à partir de lait de brebis. Il est très populaire dans plusieurs pays montagneux de l’Europe de l’Est, en particulier la Slovaquie et la Pologne.', 'Sa texture, sa saveur et sa couleur dépendent de la façon dont il est préparé. Lorsqu’il est fait directement avec du sel, le fromage est friable; mais certains producteurs ajoutent une solution saline alternative pour rendre sa texture plus douce et mouelleuse. Dans tous les cas, le Bryndza est de couleur blanche ou grise, il est piquant et légèrement liquide. Le Bryndza est l’ingrédient principal du bryndzové halušky, le plat préféré des Slovaques. Si vous êtes fan du fromage au lait de brebis, celui-ci est fait pour vous !\r\n\r\nPologne', 20, 20, 1),
(21, 'Oscypek', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/poland-cheese-oscypek.png?resize=245%2C186&ssl=1', 'Vous êtes à la recherche d’un fromage de brebis fumé, décoré de manière traditionnel en forme de fuseau ? L’Oscypek polonais est fait pour vous ! C’est également un véritable produit européen : l’Oscypek est produit dans les montagnes Tatra depuis le quatorzième siècle, au moment où les agriculteurs de la province roumaine du sud de la Valachie commencèrent à exporter leur production laitière dans la partie polonaise des Carpates', ' Ce fromage fumé et dur est particulier en ce qu’il prend la forme d’une sorte de broche avec une bande décorative incrusté sur sa circonférence. Pour donner au fromage cette forme inhabituelle, le fromager travaille lentement le lait caillé entre ses mains habiles, ajoutant de l’eau chaude de temps en temps pour garder le lait caillé doux. Les fromages diffèrent selon le ratio de leurs ingrédients et les différentes étapes de son processus de fabrication. Si vous voyagez en Pologne, n’oubliez pas que l’Oscypek est un fromage que l’on offre volontiers à ses amis dans de nombreux pays européens.', 25, 21, 2),
(22, 'Varškės Sūris', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/lithuania-cheese-varc5a1kc497s-sc5abris.png?resize=245%2C186&ssl=1', 'La Lituanie est connue depuis longtemps pour ses produits laitiers : vous de trouverez le Varškės sūris nulle part ailleurs ! Ce fromage blanc est fabriqué à partir de lait aigre – qui est chauffé, caillé et placé dans de petits sacs triangulaires puis pressé avec une presse à fromage spéciale. Les Lituaniens y ajoutent parfois des graines de cumin ou de coquelicot et presque toujours du sel, pour les rendre encore plus savoureux.', 'Considéré comme un aliment sain, le fromage blanc peut soit être consommé sur du pain fait maison, soit avec du miel ou toute une série de confitures rouges. Si ce n’est pas tant botre goût, vous pouvz tout aussi bien le laisser sécher – ce qui, de manière assez inhabituelle, en fait un très bon casse-croûte froid. On pense que la production de fromage au lait caillé remonte dans le pays au Moyen Âge. En dehors de la Lituanie, vous pouvez trouver d’authentiques fromages au lait caillé dans les magasins d’alimentation lituaniens ou d’Europe de l’Est.', 20, 22, 1),
(23, 'Jāņi Cheese', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/latvia-cheese-jc481c586i1.png?resize=245%2C186&ssl=1', 'Comme un blogueur le dit : “Le fromage en Lettonie ressemble un peu à la météo au Royaume-Uni. Toujours un peu fade, souvent un peu décevant, même si, de temps à autre, c’est une expérience vraiment merveilleuse qui vous fera oublier toutes les mauvaises fois… même si ce sera juste pour un jour ou deux”. Si vous voulez découvrir un vrai fromage letton, vous devriez opter pour Jāņi – un fromage au lait aigre, mangé traditionnellement pour Jāņi, la célébration lettonne du solstice d’été.', 'Le fromage est fabriqué en chauffant du lait entier, en ajoutant du quark, puis en cuisinant le mélange jusqu’à ce que le lait caillé soit séparé du petit-lait clair. Le petit-lait est éliminé lorsque la masse du fromage atteint une température de 72 à 77 ° C. À ce stade, le lait caillé est placé dans une poêle normale ou une poêle à frire, et mélangé avec une garniture traditionnelle composée d’oeufs, de beurre, de sel et de graines de carvi. Généralement, le fromage est préparé quelques jours avant d’être mangé, après avoir été maturé dans un endroit frais.', 15, 23, 2),
(24, 'Kohupiim', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/estonia-cheese-kohupiim1.png?resize=245%2C186&ssl=1', 'Chaque pays européen a sa propre version du Quark. Mais en Estonie, le Kohupiim, ou fromage au lait râpé, gagne les faveurs des gourmets comme des amateurs. C’est du fromage rapé au goût sucré. Il est égouttée mais pas pressée et contient donc encore du petit-lait. Vous pouvez l’acheter nature ou assaisonné à la vanille ou aux raisins secs. Les enfants adorent les barres de Kohupiim recouvertes de chocolat – une bonne source de calcium et de protéines.', 'En général, le lait caillé est un ingrédient important de la cuisine estonienne et le sõir, un plat traditionnel des régions isolées du pays, est l’une des meilleures choses que vous pouvez faire avec du lait caillé. En dehors de kohuke, le dessert qui vous rendrait fou, le sõir est une substance semblable à celle du fromage, qui contient le meilleur que vous pouvez extraire des produits laitiers – des ferments, des protéines, de la crême… Vous pouvez le servir comme encas, coupé en fines tranches et mises sur du bon pain.', 25, 24, 1),
(25, 'клинковый (Klinkovy)', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/belarus-cheese-klinkovy.png?resize=245%2C186&ssl=1', 'Les principaux produits laitiers en Biélorussie sont une sorte de fromage blanc frais appelé “тварог“ et de la crème aigre appelée “смятана“, largement utilisée à la fois en cuisine et en accompagnement. Les Biélorusses ont dû attendre jusqu’au milieu du 19ème siècle pour faire l’expérience du fromage fermenté venant des Pays-Bas et de Suisse, où la version locale de l’Edam devint vite très populaire dans l’Empire russe. Mais si nous devions nommer un fromage biélorusse en particulier, ce serait le fromage Klinkovy. ', 'Traditionnellement, ce fromage était fabriqué à la maison à partir d’un lait aigre caillé, que l’on laissait égoutter dans un sac en étamine sous une presse. Comme ce type de sac en étamine est connu sous le nom de klinok en biélorusse, le fromage s’est vite retrouvé affublé du nom klinkovy. Ce type de fromage peut être soit acide, crémeux ou aromatisé avec des graines de carvi, même si, historiquement, il était autrefois toujours sec.', 23, 25, 2),
(26, 'сирники (Syrniki)', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/ukraine-cheese-syrniki.png?resize=245%2C186&ssl=1', 'Oui, je sais, ce n’est pas tout à fait un fromage comme vous seriez tentés de le définir normalement. Mais qui sommes-nous pour définir les termes d’adhésion à la grande famille des fromages européens ? Et celui-ci est certainement fabriqué à partir de fromage – comme son nom, dérivé du mot ukrainien сир, c’est-à-dire “fromage” l’indique. Donc pas de raison de se plaindre !', 'Le Syrniki, donc, est en fait à partir de fromage à la crème, mélangé à de la farine, des œufs et du sucre, avec parfois un extrait de vanille. Le mélange sucré est façonné en galettes, qui sont frites, généralement dans de l’huile végétale. L’extérieur devient croustillant, tandis que le centre reste chaud et onctueux. Les Syrniki sont sucrés et servis pour le petit-déjeuner ou le dessert. Leur simplicité et leur goût savoureux les ont rendus très populaires en Europe de l’Est. Simple mais délicieux!', 25, 26, 3),
(27, 'Telemea', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/romania-cheese-telemea.png?resize=245%2C186&ssl=1', 'Vous adorerez ce fromage roumain traditionnel et savoureux à base de lait de brebis ! Très similaire à la Feta, le Telemea est un fromage doux et blanc avec une texture crémeuse et un arrière-goût fort. Lorsqu’on le laisse maturer plus longtemps, il devient plus croquant et aromatisé. Les Roumaines le consomment comme fromage de table pour les encas, les salades et les plats variés.', 'Comme le Telemea est conservé avec de la saumure, il devient plus salé avec l’âge. La technique de fabrication du fromage et ses outils suivent des règles ancestrales. La période de maturation du fromage est une étape importante qui conclut le processus de fabrication et dure pendant au moins 20 jours. A l’origine, le fromage n’était produit qu’en Roumanie, jusqu’à ce que la population de Vlach commence à migrer en dehors de son pays d’origine. Depuis 2005, le nom Telemea est une appellation d’origine protégée.', 30, 27, 0),
(28, 'Bryndza', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/moldova-cheese-bryndza.png?resize=245%2C186&ssl=1', 'Ca a une odeur forte et un goût tout aussi prononcé… mais qu’attendez-vous au juste d’un fromage ? Le Bryndza est blanc, fort, friable et légèrement humide. Il présente une odeur et une saveur inimitable pour son arrière-goût d’acide butyrique. Lorsque vous le goûtez, vous avez d’abord l’impression d’un légèreté qui monte ensuite en puissance, pour finir sur une dernière touche salée…  bref, une sensation imbattable !', 'Le mot Bryndza a d’abord été enregistré en 1370 sous le terme de brençe, décrit comme “Fromage Vlach”, dans le port croate de Dubrovnik. Le Bryndza en tant que tel arrive pour la première fois dans le Royaume de Hongrie, en 1470 et dans le Podhale polonais adjacent en 1527. On pense que la version moderne du Bryndza a été développé en Slovaquie occidentale vers la fin du 18ème siècle et popularisé durant la Monarchie autrichienne des Habsbourg. Un fromage véritablement européen, donc! Un peu comme s’il avait fait l’Erasmus de la laiterie.', 15, 28, 0),
(29, 'Trappista', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/hungary-cheese-trappista.png?resize=245%2C186&ssl=1', 'C’est probablement le fromage le plus populaire de Hongrie. Fabriqué par des moines trappistes, il est doux et fond dans la bouche. Les origines du fromage Trappista remontent aux moines du 18ème siècle de l’abbaye de Notre Dame de Port-du-Salut. Sa recette secrète, d’origine française, a trouvé son chemin vers la Hongrie en passant par le monastère bosniaque de Mariastern (la recette française originale existe d’ailleurs toujours et est commercialisée aujourd’hui, sous le nom de Port-Salut).', ' Le fromage Trappista a une couleur jaune pâle et présente des trous inégaux de 3 à 5 mm. Il est généralement emballé dans une feuille de plastique rouge, quel que soit le fabricant. Vous pouvez le trouver en meules, en briques ou en tranches. Ce fromage se consomme bien avec des fruits, du vin ou une sauce faite de légumes chauds ou de viande. Il peut être mangé tel quel, en sandwich ou incorporé dans des recettes comme les croissants au jambon hongrois, connus sous le nom de Sonkás Kifli.', 27, 29, 0),
(30, 'Trnič', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/slovenia-cheese-trnic48d.png?resize=245%2C186&ssl=1', 'Voici peut-être le fromage le plus romantique de cette liste. Romantique, voire quand même un peu suspect. Le Trnič est un fromage dur en forme de poire fabriqué dans les Alpes de Kamnik-Savinja dont la forme rappelle celle… d’une poitrine de dame. Il est fait de fromage cottage, de crème et de sel et est décoré avec de petits motifs spéciaux. En raison de sa saveur naturelle spéciale, le Trnič râpé est parfait pour varier les saveurs de plats différents, même les desserts. ', 'Selon la tradition, les bergers offrait un Trnič à leurs fiancées et leurs amies à la fin de la saison des pâturages en automne comme signe d’amour et de fidélité, mais aussi comme promesse de mariage. Si la fille acceptait le fromage, cela signifiait qu’elle consentait à la parade du berger. Le Trnič est donc l’expression de l’amour d’un homme pour une fille et de leur engagement à se promettre fidélité. Certains offrent des fleurs ou des anneaux, les Slovènes eux, offrent des fromages…', 20, 30, 0),
(31, 'Paški sir', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/croatia-cheese-pac5a1ki-sir.png?resize=245%2C186&ssl=1', 'L’un des fromages les plus connus de l’île croate de Pag, Paški sir, est produit à partir d’une race unique de petits moutons, les Paska Ovca – connus pour leur production limitée de lait intensément salée. Comme la Croatie n’autorise pas la production de présure animale, le Paški sir est fabriqué à l’aide de présure microbienne, ce qui en fait un fromage végétarien.', 'Au début du 20ème siècle, les habitants de Pag avaient leurs propres cabanes en pierre sèche dans lesquelles ils traitaient les moutons et faisaient du fromage Pag. Au fil du temps, le fromage Paški sir a lentement mais sûrement gagné de l’importance non seulement comme nourriture pour les habitants, mais aussi comme marchandise sur les marchés croates, et, de fait, le Paški sir est rapidement devenu une source importante de revenus pour les villageois. Paški sir a meilleur goût lorsqu’il est servi avec des fruits frais, du prosciutto, du miel de fleurs sauvages ou de l’huile d’olive.', 30, 31, 0),
(32, 'Pule', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/serbia-cheese-pule.png?resize=245%2C186&ssl=1', 'Sortez vos portefeuilles ! Il est temps de vous présenter le fromage le plus cher au monde! Produit distinctif de la cuisine serbe, le fromage Pule coûterait au bas mot près de 1000 euros le kilogramme. S’il est si cher, vous l’aurez compris, c’est parce qu’il est rare : il n’existe qu’une centaine d’ânes originaire des Balkans dont la traite permettrait de fabriquer du Pule. Chacun de ses ânes serait d’ailleurs traît à la main trois fois par jour. Il faut 25 litres de lait pour fabriquer un kilo de fromage et le fromage est ensuite fumé.', 'Pour remettre tout cela en perspective, un kilogramme de cheddar n’a besoin, en comparaison, que de 9,5 litres de lait (ce qui coûte environ 30 cent). Si on oublie son prix et sa rareté une seconde, il est à noter que le Pule a pour avantage d’être très bénéfique pour la santé. Il contient un taux exceptionnellement élevé d’acides gras protéinés, de calcium et d’oméga 3 – tous essentiels pour maintenir une bonne santé cardiovasculaire. Il contient également des anti-allergéniques et 60 fois plus de vitamine C que le lait de vache !', 1000, 32, 0),
(33, 'Livanjski sir', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/bosnia-cheese-livanjski-sir.png?resize=245%2C186&ssl=1', 'Le Livanjski sir est le fromage le plus célèbre et le produit le plus vendu en Bosnie-Herzégovine. Le Livanjski sir a d’abord été produit au 19ème siècle dans la région de Livno, sur la base de la technologie française de fabrication du Gruyère. À l’origine, il était fabriqué à partir de lait de brebis même si aujourd’hui il est principalement un mélange de lait de brebis et de vache.', 'Sa période de maturation dure entre 60 et 66 jours dans un environnement contrôlé. Le Livanjski sir  a un goût robuste, et plus il vieillit, plus son goût est fort. Il a une forme régulière, principalement cylindrique. On ne retrouve presque pas cette peau mince et typiquement jaune clair dans les autres fromages de Bosnie. C’est quelque chose dont les producteurs sont très fiers. La pâte de fromage est également jaune, avec de petits trous irréguliers, ad’où le surnom de l\'”Emmental des Balkans” pour le Livanjski sir.', 25, 33, 0),
(34, 'Njeguški sir ', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/montenegro-cheese-njeguc5a1ki-sir.png?resize=245%2C186&ssl=1', 'Le Monténégro est peut-être un petit pays. Mais il possèbe un fromage incroyable : le Njeguški sir. Ce fromage, fabriqué uniquement dans les environs de Njeguši, est une véritable hymne à la cuisine monténégrine. Il est conservé dans de l’huile dans des pièces aérées jusqu’à 3 mois avant sa consommation', 'Séché et riche en graisses du lait, c’est tout simplement un fromage exquis. Avec son altitude d’environ 900m au-dessus du niveau de la mer, la région de Njegusi jouit d’un air remarquable où deux climats se croisent. C’est aussi une région vierge, presque sans industrie, qui a vu naître les personnes célèbres du pays qui ont joué un rôle important dans l’histoire de l’état monténégrin. L’environnement naturel (la qualité des terres, des pâturages, des communes et de l’eau) a permis le développement traditionnel et respectueux de l’agriculture et de l’élevage.', 27, 34, 0),
(35, 'Шарски сир (Šarski sir)', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/kosovo-cheese-c5a1arski-sir.png?resize=245%2C186&ssl=1', 'Le fromage Šar est un fromage tsar au Kosovo! Les caractéristiques de ce fromage, fabriqué dans les montagnes de Šar du Kosovo, sont sa teneur en sel et le fait que c’est un régal pour n’importe quel moment de la journée ou de l’année. Il est fait à partir de lait de mouton et de vache, et on le déguste habituellement en salade ou avec les plats principaux, pitas, servi avec du pain ou seul. La tradition de la production du fromage Šar a été transmise de génération en génération pendant des siècles.', 'Traditionnellement, le fromage Šar était produit à partir du lait de brebis – notamment en raison du fait que les vaches n’étaient pas capables de grimper dans les hautes terres et d’atteindre l’herbe qui donnent au fromage Šar ses principales caractéristiques. Au Kosovo, les quantités de fromage Šar consommées par mois varient de 2-3 à 10 kg!', 18, 35, 0),
(36, 'Kaçkavalli', 'https://i2.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/albania-cheese-kac3a7kavalli.png?resize=245%2C186&ssl=1', 'Nous ne pouvons pas dire si les Albanais sont les plus souriants du monde, mais on peut certainement affirmer qu’ils aiment le bon fromage. Ils en consomment même environ 11,5 kg de fromage par habitant par an ! Certains soutiennent que le Kaçkavalli est produit depuis 1800. Les Tchams albanais sont censés avoir été les premiers à se rendre de Grèce au sud du pays, important avec euxla tradition de feta et de Kaçkavalli.', 'C’est un type de fromage jaune fait à partir de lait de vache, de lait de brebis ou des deux que l’on peut trouver en Albanie, en Bulgarie, en République de Macédoine, en Serbie et en Roumanie. Le nom de Kaçkavalli vient du latin caseus (fromage) et caballus (cheval). L’explication largement acceptée de l’origine du mot “cavallo” (cheval en français) provient du fait que le fromage était traditionnellement séché avec une corde en attachant deux boules en forme de gourde et en les accrochant à un poteau en bois comme si elles étaient placées sur le dos d’un cheval.', 26, 36, 0),
(37, 'сирене (Sirene)', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/bulgaria-cheese-sirene.png?resize=245%2C186&ssl=1', 'Le fromage blanc bulgare est une variété de fromage feta. Le goût unique du sirene est dû à une bactérie tolérante au lactose spécifique qui convertit le lait en yaourt, puis en fromage. En général, le sirene bulgare est fait à partir de lait de chèvre, de brebis ou de vache, et peut être apprécié comme accompagnement ou en tant que partie intégrante du repas', 'Il est doux, humide et friable, avec une teneur en matières grasses d’environ 44 à 48%. Il a une texture légèrement granuleuse avec un goût de citron frais. Ce savoureux fromage est servi avec des soupes et des salades, comme un fromage à la table et également utilisé dans la cuisson. Il est originaire de la péninsule balkanique dans une région appelée Trakia, qui constitue aujourd’hui la Bulgarie du Sud. ', 15, 37, 0),
(38, 'Urdă', 'https://i0.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/macedonia-cheese-urdc483.png?resize=245%2C186&ssl=1', 'Comme la ricotta, le Urdă est fabriqué avec du petit lait de fromage et est relativement élevé en protéines et faible en graisse. Le Urdă est produit en chauffant le petit-lait résultant du drainage de tout type de fromage. Il est souvent mis en moules pour prendre la forme d’une demi-sphère. La pâte est finement grenaillée, soyeuse et savoureuse.', 'Le Urdă contient 18 grammes de protéines par 100 grammes. En Macédoine, la recette du fromage Urdă a été transmise de génération en génération dans la plupart des ménages. Comme pour le Telemea, il est mangé frais et considéré comme une douceur, bien que sa texture fine et friable sèche ne soit pas universellement appréciée. Il est souvent mangé dans des puddings ou avec de la compote de fruits, plutôt que seul.', 16, 38, 0),
(39, 'Feta', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/greece-cheese-feta.png?resize=245%2C186&ssl=1', 'Le fromage Feta a une place unique dans l’histoire culinaire et culturelle grecque (et européenne). Il date même du voyage d’Homère, lorsque le poète a décrit dans son Odyssée comment le Polyphemus géant en faisait avec du lait de chèvre et de brebis. Son histoire est donc aussi ancienne que l’humanité elle-même, et est reliée à la domestication des animaux, il y a près de 10 000 ans. Certains affirment que sa découverte était complètement accidentelle, et qu’on le doit au transport du lait dans les estomacs de jeunes animaux. ', 'La Feta est utilisée comme fromage de table, ainsi que dans les salades et les pâtisseries. Le plus remarquable est son utilisation dans les plats populaires à base de filo tels que la spanakopita (“tarte aux épinards”) et la tyropita (“tarte au fromage”), ou servi avec de l’huile d’olive ou des olives et saupoudré d’herbes aromatiques telles que l’origan. Il peut également être servi cuit ou grillé, dans le cadre d’un sandwich, dans des omelettes, ou en alternative salée à d’autres fromages dans certains plats.', 15, 39, 0),
(40, 'χαλλούμι (Halloumi)', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/cyprus-cheese-halloumi.png?resize=245%2C186&ssl=1', 'J’espère que vous avez déjà essayé au moins une fois l’Halloumi! Ce délicieux fromage blanc a une texture distincte, semblable à de la mozzarella mais plus salée. Il est stocké dans des jus naturels avec de l’eau salée et peut se conserver jusqu’à un an s’il reste à une température inférieure à -18 ° C. ', ' L’Halloumi traditionnel est fabriqué à partir de lait de brebis ou de chèvre non pasteurisé. Il est souvent accompagné de menthe, une pratique basée sur la conviction que l’Halloumi s’améliore et reste plus frais et plus savoureux lorsqu’il est enveloppé de feuilles de menthe. Conformément à cette tradition, de nombreux paquets d’Halloumi contiennent encore des fragments de feuilles de menthe à la surface du fromage. L’Halloumi peut facilement être frit ou grillé.', 14, 40, 0),
(41, 'Beyaz Peynir', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/turkey-cheese-beyaz-peynir.png?resize=245%2C186&ssl=1', 'Le fromage le plus populaire et le plus largement consommé en Turquie, le Beyaz peynir (c’est-à-dire le fromage blanc), est produit à partir de lait de chèvre, de brebis ou de vache selon la région d’où il vient. Ce fromage similaire à la feta est doux, semi-doux ou dur. Il a une apparence granuleuse et, selon son origine, peut être soit très faible, soit très élevé en matières grasses. ', 'Pour le fabriquer, du lait caillé est pressé pendant plusieurs heures, puis grossièrement hachés et drainés, parfois dans des moules en bois ou tissés. Après avoir retiré le liquide, le Beyaz peynir est coupé en tranches avant d’être salé et recouvert de saumure. Il est généralement stocké pendant plus de six mois et trempé dans de l’eau froide ou du lait avant consommation, pour éliminer l’excès de sel. Le Beyaz peynir fait parti de ces produits ayant une riche variété, allant du fromage frais caillé au fromage mature assez fort. ', 20, 41, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom_pays` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_pays`) VALUES
(1, 'Portugal'),
(2, 'France'),
(3, 'Espagne'),
(4, 'Islande'),
(5, 'Irlande'),
(6, 'Royaume Uni'),
(7, 'Norvege'),
(8, 'Suede'),
(9, 'Finlande'),
(10, 'Danemark'),
(11, 'Pays Bas'),
(12, 'Belgique'),
(13, 'Allemagne'),
(14, 'Autriche'),
(15, 'Suisse'),
(16, 'Italie'),
(17, 'Malte'),
(18, 'République Cheque'),
(19, 'Slovaquie '),
(20, 'Pologne'),
(21, 'Lithuanie');

-- --------------------------------------------------------

--
-- Structure de la table `pays_fromage`
--

CREATE TABLE `pays_fromage` (
  `id_categories` int(11) NOT NULL,
  `id_fromage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `commandes_client0_FK` (`id_client`);

--
-- Index pour la table `commande_articles`
--
ALTER TABLE `commande_articles`
  ADD KEY `id_fromage` (`id_fromage`);

--
-- Index pour la table `fromage`
--
ALTER TABLE `fromage`
  ADD PRIMARY KEY (`id_fromage`),
  ADD KEY `fromage_pays0_FK` (`id_pays`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Index pour la table `pays_fromage`
--
ALTER TABLE `pays_fromage`
  ADD PRIMARY KEY (`id_categories`,`id_fromage`),
  ADD KEY `provenir_fromage1_FK` (`id_fromage`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `fromage`
--
ALTER TABLE `fromage`
  MODIFY `id_fromage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_client0_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `pays_fromage`
--
ALTER TABLE `pays_fromage`
  ADD CONSTRAINT `provenir_categories0_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`),
  ADD CONSTRAINT `provenir_fromage1_FK` FOREIGN KEY (`id_fromage`) REFERENCES `fromage` (`id_fromage`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
