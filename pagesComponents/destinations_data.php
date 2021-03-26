<?php
/*
adding a city:
    To adding a city, copy/paste ,the code bellow, following the end of $destinations array and replace values by your city information.
    And add your picture in the 'images/destinations_images/' directory, and named it like 'Your City.jpeg'.
    
    [   'name'=> "your city",
        'image' => "src='images/destinations_images/Yourcity.jpeg>",
        'costByDay' => xx,
        'changeOfScenery' => 1,2 or 3,
        'wheather' => 'Chaud','Tempéré','Froid','Humide','Aride' or 'Polaire',
        'description' => " little description of your destination ",
    ],

    existing : london , berlin , barcelone , lisboa , paris , Toulouse , dublin , tokyo , pekin , Sydney , moscov , tarkov , rio , los angeles , cuba ,
    roma , bruxelle , rabat , johannesbourg , le caire , ouagadougou , bangkok , pyongyang , seoul , new york , Anse Boileau Mahe , venise , quebec ,
    tasilac , chinguetti , ghardaïa , huacachina , montauban , helsinki , tudela , glasgow , manchester , montevideo , oulan bator , petrolina ,stockhoilm
*/


$destinations = [
    [
        'name' => "London",
        'image' => "src='../images/destinations_images/London.jpeg'",
        'costByDay' => 130,
        'changeOfScenery' => 1,
        'wheather' => "Humide",
        'description' => "Venez visiter les attractions d’envergure internationale de Londres, ainsi que ses magasins et ses restaurants, et venez vibrer au rythme des spectacles extraordinaires et des pièces de théâtre, sans oublier les concerts, les expositions d’art, etc. Découvrez avec nous ce que Londres a de mieux à vous proposer.",
    ],

    [
        'name' => "Berlin",
        'image' => "src='../images/destinations_images/Berlin.jpeg'",
        'costByDay' => 100,
        'changeOfScenery' => 2,
        'wheather' => "Froid",
        'description' => "Malgré ses déboires fiscaux chroniques, la capitale allemande s'est imposée comme la référence en matière de mode, d'art, de design et de musique. Les créateurs y affluent du monde entier, la transformant en un creuset culturel rappelant le New York des années 1980. Tous sont attirés par le climat d'ouverture et d'expérimentation qui donne à cette ville “éternellement inachevée” son identité profondément urbaine. Et puis, les loyers sont très bon marché…",
    ],

    [
        'name' => "Barcelone",
        'image' => "src='../images/destinations_images/Barcelona.jpeg'",
        'costByDay' => 80,
        'changeOfScenery' => 1,
        'wheather' => "Chaud",
        'description' => "Barcelone propose une multitude d’activités de loisirs qui invitent ses visiteurs à y venir plus d’une fois. Ouverte sur la mer Méditerranée et célèbre pour Gaudí et son architecture moderniste, Barcelone est l’une des capitales européennes les plus trendy.",
    ],

    [
        'name' => "Lisbone",
        'image' => "src='../images/destinations_images/Lisboa.jpeg'",
        'costByDay' => 70,
        'changeOfScenery' => 1,
        'wheather' => "Chaud",
        'description' => "Nichée au milieu de sept collines, cette immense ville piétonne offre une alternative enchanteresse aux capitales les plus populaires d’Europe. Avec une vie nocturne animée, des marchés festifs et des musées dynamiques, Lisbonne offre de nombreuses options pour prendre quelques verres de porto, une généreuse portion de bacalhau et une bonne quantité de pastéis de nata.",
    ],

    [
        'name' => "Paris",
        'image' => "src='../images/destinations_images/Paris.jpeg'",
        'costByDay' => 160,
        'changeOfScenery' => 1,
        'wheather' => "Humide",
        'description' => "Capitale mondiale du tourisme, Paris attire chaque année des millions de visiteurs venus du monde entier, y compris de France. Il faut dire que peu de villes rivalisent avec son patrimoine historique, architectural, gastronomique et culturel. Chaque quartier possède son âme propre, tantôt bourgeoise, tantôt bohème. En prenant le temps de découvrir la ville lumière telle qu’elle est aujourd’hui, vous êtes sûr de trouver de la poésie dans ses rues pavées, ses quais de Seine, ses troquets populaires.",
    ],

    [
        'name' => "Toulouse",
        'image' => "src='../images/destinations_images/Toulouse.jpeg'",
        'costByDay' => 90,
        'changeOfScenery' => 1,
        'wheather' => "Chaud",
        'description' => "Toulouse est la capitale de l’Occitanie. Chaleureuse, spontanée, passionnée, elle vous accueille dans son écrin de briques orangées, façonné par 2 000 ans d’histoire. Grands monuments et lieux dédiés à la culture aéronautique et spatiale s’y côtoient avec bonheur. Le soleil, le sens de la fête, la douceur de vivre s’y mélangent, pour en faire la ville où beaucoup de Français rêvent de venir s’installer.",
    ],
    [
        'name' => "Dublin",
        'image' => "src='../images/destinations_images/Dublin.jpeg'",
        'costByDay' => 50,
        'changeOfScenery' => 2,
        'wheather' => "Humide",
        'description' => "Que vous soyez à la recherche d’une bonne bière brune, d’un véritable fish & chips ou bien d’une expérience très irlandaise, Dublin est la ville où s’arrêter. Il est recommandé d’y passer bien plus qu’une journée, afin d’avoir l’opportunité de cerner l’ensemble de la cité.",
    ],

    [
        'name' => "Tokyo",
        'image' => "src='../images/destinations_images/Tokyo.jpeg'",
        'costByDay' => 200,
        'changeOfScenery' => 3,
        'wheather' => "Tempéré",
        'description' => "La capitale du Japon est la ville la plus peuplée au monde. Tokyo est immense et offre de nombreuses possibilités de découvertes que ce soit gustatives, culturelles ou historiques. Ses 23 arrondissements sont arrivés à garder un esprit villageois au sein de cette mégalopole gigantesque. A n'importe quelle heure du jour et de la nuit, vous vous sentirez en sécurité et pourrez vous balader à pied bien que les distances soient conséquentes.",
    ],

    [
        'name' => "Pékin",
        'image' => "src='../images/destinations_images/Pekin.jpeg'",
        'costByDay' => 90,
        'changeOfScenery' => 3,
        'wheather' => "Tempéré",
        'description' => "Lors de votre visite à Pékin, vous pourrez entrer dans la Cité Interdite, la forteresse depuis laquelle les empereurs ont régné pendant plus de 500 ans, et d'autres sites historiques tels que le Palais d'Été et le Temple du Ciel. Pékin est aussi le point de départ idéal pour découvrir l'une des sept merveilles du monde, la Grande Muraille de Chine.",
    ],

    [
        'name' => "Sydney",
        'image' => "src='../images/destinations_images/Sydney.jpeg'",
        'costByDay' => 150,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "Non, Sydney n'est pas la capitale de l'Australie, mais elle est à coup sûr le ville la plus attractive du pays : pour son site, ses plages, son activité, son ambiance et sa dimension culturelle, Sydney reste l'étape incontournable de tout voyage australien.",
    ],

    [
        'name' => "Moscou",
        'image' => "src='../images/destinations_images/Moscov.jpeg'",
        'costByDay' => 90,
        'changeOfScenery' => 2,
        'wheather' => "Polaire",
        'description' => "Un séjour dans la capitale russe est également un voyage entre la Russie des Tsars, la période communiste et la Russie contemporaine, qui a accroché le wagon de l’économie capitaliste au début des années 90. Pourquoi visiter Moscou ? Car elle se visite au fil de ses musées et de son architecture typique !",
    ],

    [
        'name' => "Rio",
        'image' => "src='../images/destinations_images/Rio.jpeg'",
        'costByDay' => 50,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "Avec près de 13 millions d'habitants dans son agglomération, Rio de Janeiro est l'une des villes les plus importantes du continent américain, et c'est la vitrine du Brésil. Ville la plus visitée du Brésil, Rio est surnommée la Cidade Maravilhosa, notamment pour sa situation dans un cadre naturel superbe. D'un côté l'Océan Atlantique, les plages d'Ipanema, de Copacabana, le Pain de Sucre et la baie de Guanabara, de l'autre la montagne du Corcovado et son Christ Rédempteur. La cité carioca est festive et animée, et il est difficile de s'y ennuyer !",
    ],

    [
        'name' => "Los Angeles",
        'image' => "src='../images/destinations_images/Los_Angeles.jpeg'",
        'costByDay' => 250,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "Elle porte en elle une bonne part du rêve américain. Symbole de la Conquête de l’Ouest, elle est le point d’arrivée de la Route 66. Avec 320 jours de soleil par an au compteur, il y fait presque toujours un temps radieux !",
    ],

    [
        'name' => "Cuba",
        'image' => "src='../images/destinations_images/Cuba.jpeg'",
        'costByDay' => 30,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "Cuba, c’est mode de vie unique au Nouveau Monde ! Ses kilomètres de plages bordées de récifs coralliens ont la couleur de la nacre, ses chaînes de montagnes se teintent du vert profond des forêts tropicales, ses villes se parent d’une architecture hispano-coloniale aux couleurs souvent débridées, et son peuple, comme aspiré dans une parenthèse temporelle, entre belles américaines et carrioles à cheval, ne lasse pas de séduire...",
    ],

    [
        'name' => "Rome",
        'image' => "src='../images/destinations_images/Roma.jpeg'",
        'costByDay' => 150,
        'changeOfScenery' => 1,
        'wheather' => "Tempéré",
        'description' => "Rome est connue comme la 'Ville Éternelle' puisque le temps semble s'être arrêté il y a des siècles de cela. Ses monuments et ses vestiges d'édifices imposants transforment une promenade dans ses rues en un voyage dans le temps jusqu'à l'époque de grande splendeur de la capitale.",
    ],

    [
        'name' => "Bruxelles",
        'image' => "src='../images/destinations_images/Bruxelle.jpeg'",
        'costByDay' => 100,
        'changeOfScenery' => 1,
        'wheather' => "Humide",
        'description' => "Bruxelles la belle, capitale de la Belgique et siège des institutions européennes, constitue la destination idéale pour un city-break ou des vacances plus longues. Enclave francophone et wallonne en territoire flamand, elle accueille également 30% d'étrangers qui y ont posé leurs valises à l'année.",
    ],

    [
        'name' => "Rabat",
        'image' => "src='../images/destinations_images/Rabat.jpeg'",
        'costByDay' => 40,
        'changeOfScenery' => 2,
        'wheather' => "Aride",
        'description' => "Envie de découvrir Rabat ? Il y a mille et une façons de le vivre. Une ville côtière, son littoral déroule près de 60 kilomètres de côtes où se succèdent criques rocheuses ou plages de sable fin et son arrière-pays offre une diversité écologique idéale pour les randonnées.",
    ],

    [
        'name' => "Johannesburg",
        'image' => "src='../images/destinations_images/Johannesbourg.jpeg'",
        'costByDay' => 170,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "Comment ne pas être séduit par l'énergie qui se dégage des rues de Johannesburg. La jeunesse apporte un nouveau souffle aux quartiers en développant une scène artistique dynamique dans de nombreux domaines, que ce soit la mode, la photographie ou la musique. ",
    ],

    [
        'name' => "Le Caire",
        'image' => "src='../images/destinations_images/Le_Caire.jpeg'",
        'costByDay' => 30,
        'changeOfScenery' => 2,
        'wheather' => "Aride",
        'description' => "Partez à la découverte de la terre des pharaons en vous offrant un vol vers Le Caire. Mystères, mythes et légendes se mélangent dans cette capitale résolument moderne. Souks et sarcophages, papyrus et pyramides, momies et musées, vous n'avez pas fini de découvrir tous les aspects de cette grande ville, la plus grande d'Égypte et du Moyen Orient!",
    ],

    [
        'name' => "Ouagadougou",
        'image' => "src='../images/destinations_images/Ouagadougou.jpeg'",
        'costByDay' => 10,
        'changeOfScenery' => 2,
        'wheather' => "Aride",
        'description' => "Ouagadougou se présente comme un véritable phare de la culture africaine, dressé en plein centre du Burkina Faso. Pourtant, son intérêt est limité pour le voyageur car il y a peu à visiter. Le charme de Ouagadougou réside dans son atmosphère de capitale africaine affairée et bruyante.",
    ],

    [
        'name' => "Bangkok",
        'image' => "src='../images/destinations_images/Bangkok.jpeg'",
        'costByDay' => 15,
        'changeOfScenery' => 3,
        'wheather' => "Chaud",
        'description' => "Bangkok ne dort jamais, c'est l'une des villes les plus visitées au monde et elle est très facilement accessible en avion, dont le billet est de moins en moins cher. Il n'est pas étonnant que le voyageur arrive la valise vide pour y faire ses achats de vêtements comme d'électroniques.",
    ],

    [
        'name' => "Séoul",
        'image' => "src='../images/destinations_images/Seoul.jpeg'",
        'costByDay' => 120,
        'changeOfScenery' => 3,
        'wheather' => "Tempéré",
        'description' => "Comme toutes les villes d'Asie, Séoul cultive un équilibre particulier entre passé et modernité. Si la capitale de la Corée du Sud et ses immenses buildings témoignent du formidable dynamisme économique du pays depuis trente ans, elle a gardé l'empreinte de son histoire et possède une culture très riche qui sait séduire quand on prend le temps de la découvrir.",
    ],

    [
        'name' => "New York",
        'image' => "src='../images/destinations_images/NewYork.jpeg'",
        'costByDay' => 150,
        'changeOfScenery' => 2,
        'wheather' => "Tempéré",
        'description' => "New York est une ville composée de 5 arrondissements à l'embouchure du fleuve Hudson et de l'océan Atlantique. En son centre se trouve Manhattan, un arrondissement densément peuplé faisant partie des principaux centres commerciaux, financiers et culturels du monde. Ses sites incontournables comprennent des gratte-ciel comme l'Empire State Building et l'immense Central Park.",
    ],

    [
        'name' => "Anse Boileau Mahé",
        'image' => "src='../images/destinations_images/AnseBoileauMahe.jpeg'",
        'costByDay' => 200,
        'changeOfScenery' => 3,
        'wheather' => "Chaud",
        'description' => "L’Anse Boileau est une longue baie sinueuse dans le sud-ouest de Mahé, près de l’Anse à la Mouche et de l’Anse Louis. La localité du même nom se situe juste à côté de la plage et dispose de quelques infrastructures tels que des boutiques et supermarchés, une station de police, une école et des restaurants dont le très célèbre “Chez Plume”, qui a la réputation d’être l’un des meilleurs de l’île.",
    ],

    [
        'name' => "Venise",
        'image' => "src='../images/destinations_images/venise.jpeg'",
        'costByDay' => 100,
        'changeOfScenery' => 3,
        'wheather' => "Humide",
        'description' => "Venise, capitale de la région de la Vénétie au nord de l'Italie, occupe plus de 100 petites îles dans un lagon de la mer Adriatique. La ville ne comprend aucune route, uniquement des canaux, dont le Grand Canal, bordé de palais gothiques et Renaissance. Au centre, la place Saint-Marc abrite la basilique Saint-Marc, recouverte de mosaïques byzantines, et le campanile de Saint-Marc, avec vue sur les toits rouges de Venise.",
    ],

    [
        'name' => "Québec",
        'image' => "src='../images/destinations_images/Quebec.jpeg'",
        'costByDay' => 120,
        'changeOfScenery' => 3,
        'wheather' => "Froid",
        'description' => "Le Québec est une province majoritairement francophone à l'est du Canada. Elle comprend 2 villes dynamiques au sud, reliées par le chemin du Roy, route qui longe le Saint-Laurent. La métropole de Montréal doit son nom au mont Royal, colline aux trois sommets située au cœur de la ville.",
    ],

    [
        'name' => "Tasilaq",
        'image' => "src='../images/destinations_images/Tasilaq.jpeg'",
        'costByDay' => 30,
        'changeOfScenery' => 3,
        'wheather' => "Polaire",
        'description' => "La ville a été fondée en 1894 lorsque Gustav Holm y fonde un comptoir2. Elle était auparavant connue sous le nom d'Ammassalik. Le premier Danois y résidant est le missionnaire Rüttel qui s'y installe dès 1894 avec sa femme, première européenne vue par les Ammassalimiut3. Les premières sages-femmes arrivent vers 1925 et la première infirmière vers 19354.",
    ],

    [
        'name' => "Chinguetti",
        'image' => "src='../images/destinations_images/Mauritanie.jpeg'",
        'costByDay' => 100,
        'changeOfScenery' => 3,
        'wheather' => "Aride",
        'description' => "Chinguetti est une ville du centre-ouest de la Mauritanie, située sur les plateaux désertiques de l'Adrar. Avec d'autres villes anciennes fortifiées (ksour) de Mauritanie, la ville est sur la liste du patrimoine mondial de l'UNESCO depuis 1996. La ville est séparée en deux par un oued qui, aujourd'hui, est asséché. D'un côté, il y a la vieille ville, et de l'autre la nouvelle.",
    ],

    [
        'name' => "Ghardaia",
        'image' => "src='../images/destinations_images/Ghardaia.jpeg'",
        'costByDay' => 120,
        'changeOfScenery' => 3,
        'wheather' => "Aride",
        'description' => "Ghardaïa est une commune de la wilaya de Ghardaïa en Algérie, dont elle est le chef-lieu, située à 600 km au sud d'Alger, elle est la capitale de la Vallée du Mzab. Ghardaïa fait partie du patrimoine mondial et elle est considérée comme site touristique d'importance majeure en Algérie, de par son architecture et son histoire,. La ville comprend une communauté mozabite importante.",
    ],

    [
        'name' => "Huacachina",
        'image' => "src='../images/destinations_images/Huacachina.jpeg'",
        'costByDay' => 140,
        'changeOfScenery' => 3,
        'wheather' => "Aride",
        'description' => "Huacachina: c'est une superbe oasis à la périphérie d'Ica avec d'immenses dunes sur lesquelles on peut se balader ou glisser...",
    ],

    [
        'name' => "Montauban",
        'image' => "src='../images/destinations_images/Montauban.jpeg'",
        'costByDay' => 45,
        'changeOfScenery' => 1,
        'wheather' => "Froid",
        'description' => "Montauban est une commune française du Quercy, chef-lieu du département de Tarn-et-Garonne en région Occitanie. Montauban est la commune la plus peuplée du département de Tarn-et-Garonne et la sixième plus peuplée d'Occitanie. En 2016 la commune compte 60 444 habitants, appelés les Montalbanais.",
    ],

    [
        'name' => "Helsinki",
        'image' => "src='../images/destinations_images/Helsinki.jpeg'",
        'costByDay' => 70,
        'changeOfScenery' => 1,
        'wheather' => "Polaire",
        'description' => "Au sud de la Finlande, la capitale Helsinki occupe une péninsule du golfe de Finlande. Son avenue centrale, Mannerheimintie, regroupe différentes institutions parmi lesquelles le musée national qui retrace l'histoire du pays, de l'âge de pierre à nos jours. Elle compte également l'imposant Parlement et le musée d'Art contemporain Kiasma. Toute de briques rouges, richement décorée, la cathédrale Ouspenski surplombe le port.",
    ],

    [
        'name' => "Tudela",
        'image' => "src='../images/destinations_images/Bardenas-reales.jpeg'",
        'costByDay' => 60,
        'changeOfScenery' => 1,
        'wheather' => "Aride",
        'description' => "Le parc naturel des Bardenas Reales, également appelé désert des Bardenas, se situe dans la province de Navarre en Espagne, à la limite de la province d’Aragon. Ces paysages du nord de l’Espagne sont surprenants pour l’Europe. A mi-chemin entre les paysages du Nevada ou de l’Arizona, les Bardenas ne pourront que vous plaire si vous êtes amateur de nature, de paysages et de grands espaces. Étendu sur plus de 40 000 hectares.",
    ],

    [
        'name' => "Glasgow",
        'image' => "src='images/destinations_images/Glasgow.jpeg'",
        'costByDay' => 90,
        'changeOfScenery' => 1,
        'wheather' => "Froid",
        'description' => "Plus grande ville d'Écosse, Glasgow est connue pour sa culture, son shopping et ses habitants. Passez la journée à explorer les fascinants musées et galeries dont l'entrée est gratuite, les meilleures boutiques en dehors de Londres et profitez des conseils des habitants pour découvrir des trésors cachés de la ville.",
    ],

    [
        'name' => "Manchester",
        'image' => "src='images/destinations_images/Manchester.jpeg'",
        'costByDay' => 80,
        'changeOfScenery' => 1,
        'wheather' => "Humide",
        'description' => "Bienvenue dans la ville de Norman Foster: Manchester. Nous ne le disons pas parce que c’est là que plusieurs bâtiments ont été conçu par cet architecte de renommée mondiale, mais parce que c’est sa ville natale. La même chose peut être dite du groupe Oasis: les frères Gallagher ont vu la lumière ici pour la première fois.",
    ],

    [
        'name' => "Oulan Bator",
        'image' => "src='images/destinations_images/Oulan-Bator.jpeg'",
        'costByDay' => 30,
        'changeOfScenery' => 3,
        'wheather' => "Humide",
        'description' => "Oulan Bator (Ulaanbaatar) n’a pas toujours bonne presse aux yeux des voyageurs étrangers qui préfèrent, et on le comprend bien, s’attarder sur les merveilles naturelles que compte la steppe. Pourtant, le voyageur patient et disposant d’un peu de temps devant lui découvrira dans la capitale mongole de très beaux sites où il est agréable de flâner.",
    ],

    [
        'name' => "Montevideo",
        'image' => "src='images/destinations_images/Montevideo.jpeg'",
        'costByDay' => 50,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "Montevideo est la capitale du petit pays qu'est l'Uruguay. La ville se trouve à l'embouchure du fleuve Rio de la Plata et juste en face de Buenos Aires. Montevideo est une destination immanquable lors de votre voyage en Uruguay. En effet, la ville est un mélange d'architecture coloniale et nouvelle et ses nombreux quartiers offrent chacun une ambiance différente. Il est très agréable de se balader dans la rue car contrairement aux autres capitales d'Amérique du Sud, la circulation et la pollution n'est pas aussi présente.",
    ],

    [
        'name' => "Petrolina",
        'image' => "src='images/destinations_images/Petrolina.jpeg'",
        'costByDay' => 70,
        'changeOfScenery' => 2,
        'wheather' => "Chaud",
        'description' => "Petrolina est localisée dans l'État du Pernambouc, au nord-est du Brésil.
        Ce sont les activités agricoles qui ont contribué à la notoriété de la ville : on y produit parmi les meilleurs vins et fruits tropicaux du pays, malgré un climat aride. Petrolina est d'ailleurs communément surnommée la « Californie brésilienne » ou la « terre des impossibles ».",
    ],

    [
        'name' => "Stockholm",
        'image' => "src='images/destinations_images/Stockholm.jpeg'",
        'costByDay' => 100,
        'changeOfScenery' => 1,
        'wheather' => "Polaire",
        'description' => "Stockholm est la capitale de la Suède, une grande dame nordique surplombant le continent européen. Cette métropole sublime comptant près d'un million d'habitants se distingue par sa position géographique originale. En effet, elle est située sur un vaste archipel baignant dans la mer Baltique et comptant une quinzaine d'îles principales. Ses quartiers sont reliés les uns aux autres par une cinquantaine de ponts différents ! On peut les découvrir par voie terrestre, en tirant parti du vélo, véritable star de cette agglomération propre et éco-responsable. Mais il est aussi possible d'utiliser les lignes de bateaux remplaçant avantageusement les transports en commun terrestres !",
    ],
];
