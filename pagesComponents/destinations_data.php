<?php

/*
Wheather <=> inputClimat corrrespondance :
1 = Froid
2 = Chaud
3 = Tempéré
4 = Polaire
5 = Humide
6 = Aride
*/

$destinations = [
    'London' => [
        'image' => "<img src='../images/destinations_images/London.jpeg/200/300'>",
        'costByDay' => 130,
        'changeOfScenery' => 1,
        'wheather' => "Humide",
        'description' => "<p>Venez visiter les attractions d’envergure internationale de Londres, ainsi que ses magasins et ses restaurants, et venez vibrer au rythme des spectacles extraordinaires et des pièces de théâtre, sans oublier les concerts, les expositions d’art, etc. Découvrez avec nous ce que Londres a de mieux à vous proposer.</p>",
    ],

    'Berlin' => [
        'image' => "<img src='../images/destinations_images/Berlin.jpeg/200/300'>",
        'costByDay' => 100,
        'changeOfScenery' => 2,
        'wheather' => "Froid",
        'description' => "<p>Malgré ses déboires fiscaux chroniques, la capitale allemande s'est imposée comme la référence en matière de mode, d'art, de design et de musique. Les créateurs y affluent du monde entier, la transformant en un creuset culturel rappelant le New York des années 1980. Tous sont attirés par le climat d'ouverture et d'expérimentation qui donne à cette ville “éternellement inachevée” son identité profondément urbaine. Et puis, les loyers sont très bon marché…</p>",
    ],

    'Barcelona' => [
        'image' => "<img src='../images/destinations_images/Barcelona.jpeg/200/300'>",
        'costByDay' => 80,
        'changeOfScenery' => 1,
        'wheather' => "Chaud",
        'description' => "<p>Barcelone propose une multitude d’activités de loisirs qui invitent ses visiteurs à y venir plus d’une fois. Ouverte sur la mer Méditerranée et célèbre pour Gaudí et son architecture moderniste, Barcelone est l’une des capitales européennes les plus trendy.</p>",
    ],

    'Lisbone' => [
        'image' => "<img src='../images/destinations_images/Lisboa.jpeg/200/300'>",
        'costByDay' => 70,
        'changeOfScenery' => 1,
        'wheather' => "Chaud",
        'description' => "<p>Nichée au milieu de sept collines, cette immense ville piétonne offre une alternative enchanteresse aux capitales les plus populaires d’Europe. Avec une vie nocturne animée, des marchés festifs et des musées dynamiques, Lisbonne offre de nombreuses options pour prendre quelques verres de porto, une généreuse portion de bacalhau et une bonne quantité de pastéis de nata.</p>",
    ],

    'Paris' => [
        'image' => "<img src='../images/destinations_images/Paris.jpeg/200/300'>",
        'costByDay' => 160,
        'changeOfScenery' => 1,
        'wheather' => "Humide",
        'description' => "<p>Capitale mondiale du tourisme, Paris attire chaque année des millions de visiteurs venus du monde entier, y compris de France. Il faut dire que peu de villes rivalisent avec son patrimoine historique, architectural, gastronomique et culturel. Chaque quartier possède son âme propre, tantôt bourgeoise, tantôt bohème. En prenant le temps de découvrir la ville lumière telle qu’elle est aujourd’hui, vous êtes sûr de trouver de la poésie dans ses rues pavées, ses quais de Seine, ses troquets populaires.</p>",
    ],

    'Toulouse' => [
        'image' => "<img src='../images/destinations_images/Toulouse.jpeg/200/300'>",
        'costByDay' => 90,
        'changeOfScenery' => 1,
        'wheather' => "Chaud",
        'description' => "<p>Toulouse est la capitale de l’Occitanie. Chaleureuse, spontanée, passionnée, elle vous accueille dans son écrin de briques orangées, façonné par 2 000 ans d’histoire. Grands monuments et lieux dédiés à la culture aéronautique et spatiale s’y côtoient avec bonheur. Le soleil, le sens de la fête, la douceur de vivre s’y mélangent, pour en faire la ville où beaucoup de Français rêvent de venir s’installer.</p>",
    ],

    'Dublin' => [
        'image' => "<img src='../images/destinations_images/Dublin.jpeg/200/300'>",
        'costByDay' => 50,
        'changeOfScenery' => 2,
        'wheather' => "Humide",
        'description' => "<p>Que vous soyez à la recherche d’une bonne bière brune, d’un véritable fish & chips ou bien d’une expérience très irlandaise, Dublin est la ville où s’arrêter. Il est recommandé d’y passer bien plus qu’une journée, afin d’avoir l’opportunité de cerner l’ensemble de la cité.</p>",
    ],

    'Tokyo' => [
        'image' => "<img src='../images/destinations_images/Tokyo.jpeg/200/300'>",
        'costByDay' => 200,
        'changeOfScenery' => 3,
        'wheather' => "Tempéré",
        'description' => "<p>La capitale du Japon est la ville la plus peuplée au monde. Tokyo est immense et offre de nombreuses possibilités de découvertes que ce soit gustatives, culturelles ou historiques. Ses 23 arrondissements sont arrivés à garder un esprit villageois au sein de cette mégalopole gigantesque. A n'importe quelle heure du jour et de la nuit, vous vous sentirez en sécurité et pourrez vous balader à pied bien que les distances soient conséquentes.</p>",
    ],

    'Pekin' => [
        'image' => "<img src='../images/destinations_images/Pekin.jpeg/200/300'>",
        'costByDay' => 90,
        'changeOfScenery' => 3,
        'wheather' => "Tempéré",
        'description' => "<p>Lors de votre visite à Pékin, vous pourrez entrer dans la Cité Interdite, la forteresse depuis laquelle les empereurs ont régné pendant plus de 500 ans, et d'autres sites historiques tels que le Palais d'Été et le Temple du Ciel. Pékin est aussi le point de départ idéal pour découvrir l'une des sept merveilles du monde, la Grande Muraille de Chine.</p>",
    ],

    'Sydney' => [
        'image' => "<img src='../images/destinations_images/Sydney.jpeg/200/300'>",
        'costByDay' => 150,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "<p>Non, Sydney n'est pas la capitale de l'Australie, mais elle est à coup sûr le ville la plus attractive du pays : pour son site, ses plages, son activité, son ambiance et sa dimension culturelle, Sydney reste l'étape incontournable de tout voyage australien.</p>",
    ],

    'Moscou' => [
        'image' => "<img src='../images/destinations_images/Moscov.jpeg/200/300'>",
        'costByDay' => 90,
        'changeOfScenery' => 2,
        'wheather' => "Polaire",
        'description' => "<p>Un séjour dans la capitale russe est également un voyage entre la Russie des Tsars, la période communiste et la Russie contemporaine, qui a accroché le wagon de l’économie capitaliste au début des années 90. Pourquoi visiter Moscou ? Car elle se visite au fil de ses musées et de son architecture typique !</p>",
    ],

    'Tarkov' => [
        'image' => "<img src='../images/destinations_images/Tarkov.jpeg/200/300'>",
        'costByDay' => 0,
        'changeOfScenery' => 3,
        'wheather' => "Humide",
        'description' => "<p>Tarkov est une ville du nord-ouest de la Russie, une entité municipale de la région de Norvinsk et l'une des deux principales villes de la zone économique spéciale de Norvinsk. Les habitants, aussi appelés 'Scav', sont plutôt rustre mais ne manquerons jamais de trinquer avec vous !</p>",
    ],

    'Rio' => [
        'image' => "<img src='../images/destinations_images/Rio.jpeg/200/300'>",
        'costByDay' => 50,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "<p>Avec près de 13 millions d'habitants dans son agglomération, Rio de Janeiro est l'une des villes les plus importantes du continent américain, et c'est la vitrine du Brésil. Ville la plus visitée du Brésil, Rio est surnommée la Cidade Maravilhosa, notamment pour sa situation dans un cadre naturel superbe. D'un côté l'Océan Atlantique, les plages d'Ipanema, de Copacabana, le Pain de Sucre et la baie de Guanabara, de l'autre la montagne du Corcovado et son Christ Rédempteur. La cité carioca est festive et animée, et il est difficile de s'y ennuyer !</p>",
    ],

    'Los Angeles' => [
        'image' => "<img src='../images/destinations_images/Los_Angeles.jpeg/200/300'>",
        'costByDay' => 250,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "<p>Elle porte en elle une bonne part du rêve américain. Symbole de la Conquête de l’Ouest, elle est le point d’arrivée de la Route 66. Avec 320 jours de soleil par an au compteur, il y fait presque toujours un temps radieux !</p>",
    ],

    'Cuba' => [
        'image' => "<img src='../images/destinations_images/Cuba.jpeg/200/300'>",
        'costByDay' => 30,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "<p>Cuba, c’est mode de vie unique au Nouveau Monde ! Ses kilomètres de plages bordées de récifs coralliens ont la couleur de la nacre, ses chaînes de montagnes se teintent du vert profond des forêts tropicales, ses villes se parent d’une architecture hispano-coloniale aux couleurs souvent débridées, et son peuple, comme aspiré dans une parenthèse temporelle, entre belles américaines et carrioles à cheval, ne lasse pas de séduire...</p>",
    ],

    'Rome' => [
        'image' => "<img src='../images/destinations_images/Roma.jpeg/200/300'>",
        'costByDay' => 150,
        'changeOfScenery' => 1,
        'wheather' => "Tempéré",
        'description' => "<p>Rome est connue comme la 'Ville Éternelle' puisque le temps semble s'être arrêté il y a des siècles de cela. Ses monuments et ses vestiges d'édifices imposants transforment une promenade dans ses rues en un voyage dans le temps jusqu'à l'époque de grande splendeur de la capitale.</p>",
    ],

    'Bruxelle' => [
        'image' => "<img src='../images/destinations_images/Bruxelle.jpeg/200/300'>",
        'costByDay' => 100,
        'changeOfScenery' => 1,
        'wheather' => "Humide",
        'description' => "<p>Bruxelles la belle, capitale de la Belgique et siège des institutions européennes, constitue la destination idéale pour un city-break ou des vacances plus longues. Enclave francophone et wallonne en territoire flamand, elle accueille également 30% d'étrangers qui y ont posé leurs valises à l'année.</p>",
    ],

    'Rabat' => [
        'image' => "<img src='../images/destinations_images/Rabat.jpeg/200/300'>",
        'costByDay' => 40,
        'changeOfScenery' => 2,
        'wheather' => "Aride",
        'description' => "<p>Envie de découvrir Rabat ? Il y a mille et une façons de le vivre. Une ville côtière, son littoral déroule près de 60 kilomètres de côtes où se succèdent criques rocheuses ou plages de sable fin et son arrière-pays offre une diversité écologique idéale pour les randonnées.</p>",
    ],

    'Johannesburg' => [
        'image' => "<img src='../images/destinations_images/Johannesbourg.jpeg/200/300'>",
        'costByDay' => 170,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "<p>Comment ne pas être séduit par l'énergie qui se dégage des rues de Johannesburg. La jeunesse apporte un nouveau souffle aux quartiers en développant une scène artistique dynamique dans de nombreux domaines, que ce soit la mode, la photographie ou la musique. </p>",
    ],

    'Le Caire' => [
        'image' => "<img src='../images/destinations_images/Le_Caire.jpeg/200/300'>",
        'costByDay' => 30,
        'changeOfScenery' => 2,
        'wheather' => "Aride",
        'description' => "<p>Partez à la découverte de la terre des pharaons en vous offrant un vol vers Le Caire. Mystères, mythes et légendes se mélangent dans cette capitale résolument moderne. Souks et sarcophages, papyrus et pyramides, momies et musées, vous n'avez pas fini de découvrir tous les aspects de cette grande ville, la plus grande d'Égypte et du Moyen Orient!</p>",
    ],

    'Ouagadougou' => [
        'image' => "<img src='../images/destinations_images/Ouagadougou.jpeg/200/300'>",
        'costByDay' => 10,
        'changeOfScenery' => 2,
        'wheather' => "Aride",
        'description' => "<p>Ouagadougou se présente comme un véritable phare de la culture africaine, dressé en plein centre du Burkina Faso. Pourtant, son intérêt est limité pour le voyageur car il y a peu à visiter. Le charme de Ouagadougou réside dans son atmosphère de capitale africaine affairée et bruyante.</p>",
    ],

    'Bangkok' => [
        'image' => "<img src='../images/destinations_images/Bangkok.jpeg/200/300'>",
        'costByDay' => 15,
        'changeOfScenery' => 3,
        'wheather' => "Chaud",
        'description' => "<p>Bangkok ne dort jamais, c'est l'une des villes les plus visitées au monde et elle est très facilement accessible en avion, dont le billet est de moins en moins cher. Il n'est pas étonnant que le voyageur arrive la valise vide pour y faire ses achats de vêtements comme d'électroniques.</p>",
    ],

    'Pyongyang' => [
        'image' => "<img src='../images/destinations_images/Pyongyang.jpeg/200/300'>",
        'costByDay' => 10,
        'changeOfScenery' => 3,
        'wheather' => "Humide",
        'description' => "<p>Pays difficile d’accès et peu engageant au premier abord, la Corée du Nord a pourtant un potentiel touristique. Venez le découvrir !</p>",
    ],

    'Seoul' => [
        'image' => "<img src='../images/destinations_images/Seoul.jpeg/200/300'>",
        'costByDay' => 120,
        'changeOfScenery' => 3,
        'wheather' => "Tempéré",
        'description' => "<p>Comme toutes les villes d'Asie, Séoul cultive un équilibre particulier entre passé et modernité. Si la capitale de la Corée du Sud et ses immenses buildings témoignent du formidable dynamisme économique du pays depuis trente ans, elle a gardé l'empreinte de son histoire et possède une culture très riche qui sait séduire quand on prend le temps de la découvrir.</p>",
    ],

    'New-York' => [
        'image' => "<img src='../images/destinations_images/NewYork.jpeg/200/300'>",
        'costByDay' => 150,
        'changeOfScenery' => 2,
        'wheather' => "Tempéré",
        'description' => "<p>New York est une ville composée de 5 arrondissements à l'embouchure du fleuve Hudson et de l'océan Atlantique. En son centre se trouve Manhattan, un arrondissement densément peuplé faisant partie des principaux centres commerciaux, financiers et culturels du monde. Ses sites incontournables comprennent des gratte-ciel comme l'Empire State Building et l'immense Central Park.</p>",
    ],

    'Anse Boileau Mahe' => [
        'image' => "<img src='../images/destinations_images/AnseBoileauMahe.jpeg/200/300'>",
        'costByDay' => 200,
        'changeOfScenery' => 3,
        'wheather' => "Chaud",
        'description' => "<p>L’Anse Boileau est une longue baie sinueuse dans le sud-ouest de Mahé, près de l’Anse à la Mouche et de l’Anse Louis. La localité du même nom se situe juste à côté de la plage et dispose de quelques infrastructures tels que des boutiques et supermarchés, une station de police, une école et des restaurants dont le très célèbre “Chez Plume”, qui a la réputation d’être l’un des meilleurs de l’île.</p>",
    ],

    'Venise' => [
        'image' => "<img src='../images/destinations_images/venise.jpeg/200/300'>",
        'costByDay' => 100,
        'changeOfScenery' => 3,
        'wheather' => "Humide",
        'description' => "<p>Venise, capitale de la région de la Vénétie au nord de l'Italie, occupe plus de 100 petites îles dans un lagon de la mer Adriatique. La ville ne comprend aucune route, uniquement des canaux, dont le Grand Canal, bordé de palais gothiques et Renaissance. Au centre, la place Saint-Marc abrite la basilique Saint-Marc, recouverte de mosaïques byzantines, et le campanile de Saint-Marc, avec vue sur les toits rouges de Venise.</p>",
    ],

    'Quebec' => [
        'image' => "<img src='../images/destinations_images/Quebec.jpeg/200/300'>",
        'costByDay' => 120,
        'changeOfScenery' => 3,
        'wheather' => "Froid",
        'description' => "<p>Le Québec est une province majoritairement francophone à l'est du Canada. Elle comprend 2 villes dynamiques au sud, reliées par le chemin du Roy, route qui longe le Saint-Laurent. La métropole de Montréal doit son nom au mont Royal, colline aux trois sommets située au cœur de la ville.</p>",
    ],

    'Tasilaq' => [
        'image' => "<img src='../images/destinations_images/Tasilaq.jpeg/200/300'>",
        'costByDay' => 30,
        'changeOfScenery' => 3,
        'wheather' => "Polaire",
        'description' => "<p>La ville a été fondée en 1894 lorsque Gustav Holm y fonde un comptoir2. Elle était auparavant connue sous le nom d'Ammassalik. Le premier Danois y résidant est le missionnaire Rüttel qui s'y installe dès 1894 avec sa femme, première européenne vue par les Ammassalimiut3. Les premières sages-femmes arrivent vers 1925 et la première infirmière vers 19354.</p>",
    ],

    'Chinguetti' => [
        'image' => "<img src='../images/destinations_images/Mauritanie.jpeg/200/300'>",
        'costByDay' => 100,
        'changeOfScenery' => 3,
        'wheather' => "Aride",
        'description' => "<p>Chinguetti est une ville du centre-ouest de la Mauritanie, située sur les plateaux désertiques de l'Adrar. Avec d'autres villes anciennes fortifiées (ksour) de Mauritanie, la ville est sur la liste du patrimoine mondial de l'UNESCO depuis 1996. La ville est séparée en deux par un oued qui, aujourd'hui, est asséché. D'un côté, il y a la vieille ville, et de l'autre la nouvelle.</p>",
    ],

    'Ghardaia' => [
        'image' => "<img src='../images/destinations_images/Ghardaia.jpeg/200/300'>",
        'costByDay' => 120,
        'changeOfScenery' => 3,
        'wheather' => "Aride",
        'description' => "<p>Ghardaïa est une commune de la wilaya de Ghardaïa en Algérie, dont elle est le chef-lieu, située à 600 km au sud d'Alger, elle est la capitale de la Vallée du Mzab. Ghardaïa fait partie du patrimoine mondial et elle est considérée comme site touristique d'importance majeure en Algérie, de par son architecture et son histoire,. La ville comprend une communauté mozabite importante.</p>",
    ],

    'Huacachina' => [
        'image' => "<img src='../images/destinations_images/Huacachina.jpeg/200/300'>",
        'costByDay' => 140,
        'changeOfScenery' => 3,
        'wheather' => "Aride",
        'description' => "<p>Huacachina: c'est une superbe oasis à la périphérie d'Ica avec d'immenses dunes sur lesquelles on peut se balader ou glisser...</p>",
    ],

    'Montauban' => [
        'image' => "<img src='../images/destinations_images/Montauban.jpeg/200/300'>",
        'costByDay' => 45,
        'changeOfScenery' => 1,
        'wheather' => "Froid",
        'description' => "<p>Montauban est une commune française du Quercy, chef-lieu du département de Tarn-et-Garonne en région Occitanie. Montauban est la commune la plus peuplée du département de Tarn-et-Garonne et la sixième plus peuplée d'Occitanie. En 2016 la commune compte 60 444 habitants, appelés les Montalbanais.</p>",
    ],

    'Helsinki' => [
        'image' => "<img src='../images/destinations_images/Helsinki.jpeg/200/300'>",
        'costByDay' => 70,
        'changeOfScenery' => 1,
        'wheather' => "Polaire",
        'description' => "<p>Au sud de la Finlande, la capitale Helsinki occupe une péninsule du golfe de Finlande. Son avenue centrale, Mannerheimintie, regroupe différentes institutions parmi lesquelles le musée national qui retrace l'histoire du pays, de l'âge de pierre à nos jours. Elle compte également l'imposant Parlement et le musée d'Art contemporain Kiasma. Toute de briques rouges, richement décorée, la cathédrale Ouspenski surplombe le port.</p>",
    ],

    'Tudela' => [
        'image' => "<img src='../images/destinations_images/Bardenas-reales.jpeg/200/300'>",
        'costByDay' => 60,
        'changeOfScenery' => 1,
        'wheather' => "Aride",
        'description' => "<p>Le parc naturel des Bardenas Reales, également appelé désert des Bardenas, se situe dans la province de Navarre en Espagne, à la limite de la province d’Aragon. Ces paysages du nord de l’Espagne sont surprenants pour l’Europe. A mi-chemin entre les paysages du Nevada ou de l’Arizona, les Bardenas ne pourront que vous plaire si vous êtes amateur de nature, de paysages et de grands espaces. Étendu sur plus de 40 000 hectares.</p>",
    ],

];
