<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wines')->delete();
        
        \DB::table('wines')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Nom' => 'DOMAINE BAUMANN 2014',
                'Description' => 'Présente une grande richesse et de concentration, avec des arômes intenses de pétales de rose mêlant librement avec des fruits exotiques ',
                'Degre_alcool' => 13.5,
                'Image' => 'vins/DOMAINE_BAUMANN_2014',
                'type_id' => 1,
                'producteur_id' => 1,
                'Prix_vin' => 18.99,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            1 => 
            array (
                'id' => 2,
                'Nom' => 'DOMAINE BAUMANN 2013',
                'Description' => 'Attaque grasse et vive empreinte d\'un agréable fruité sans lourdeur ',
                'Degre_alcool' => 13.5,
                'Image' => 'vins/DOMAINE_BAUMANN_2013',
                'type_id' => 1,
                'producteur_id' => 1,
                'Prix_vin' => 14.99,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            2 => 
            array (
                'id' => 3,
                'Nom' => 'Arthur Metz Chardonnay - Crémant d\'Alsace',
                'Description' => 'Les Crémants d’Alsace Arthur Metz se caractérisent par une grande finesse et une folle élégance à la fraîcheur fruitée et à la délicate effervescence. Les raisins sont récoltésmanuellement plus tôt que les autres afin de préserver la jeunesse et la fraîcheur au traversd’arômes portés vers les agrumes et les fleurs blanches.',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Crémant_Alsace',
                'type_id' => 1,
                'producteur_id' => 2,
                'Prix_vin' => 9.29,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            3 => 
            array (
                'id' => 4,
                'Nom' => 'Arthur Metz D de Colmar - Crémant d\'Alsace Rosé',
                'Description' => 'Crémant de grande qualité à consommer lors desapéritifs, cocktails et réceptions. ',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Cremant_Alsace_Rose',
                'type_id' => 3,
                'producteur_id' => 2,
                'Prix_vin' => 7.99,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            4 => 
            array (
                'id' => 5,
                'Nom' => 'Château Chêne de Margot 2015 Blaye - Vin rouge de bordeaux',
                'Description' => 'Graves et sables grossiers, sous-sols graves argileuse ',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Château_ChêneMargot_2015_Blaye_rouge',
                'type_id' => 2,
                'producteur_id' => 3,
                'Prix_vin' => 5.99,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            5 => 
            array (
                'id' => 6,
                'Nom' => 'Château Beauséjour,2010',
                'Description' => 'Reconnu dès l’origine du classement des vins de Saint-Émilion, en tant que Premier Grand Cru Classé, le Château Beauséjour héritiers Duffau-Lagarrosse appartient à la famille depuis 1847. Depuis sept générations, les Héritiers Duffau-Lagarrosse ont eu à cœur de pérenniser ce vignoble, joyau de sept hectares, enraciné sur le coteau, offert au vent et au soleil, pour lui conserver sa renommée.',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Chateau_Beausejour',
                'type_id' => 2,
                'producteur_id' => 4,
                'Prix_vin' => 365.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            6 => 
            array (
                'id' => 7,
                'Nom' => 'Château Valandraud, 2015',
                'Description' => 'Le Château Valandraud est le fruit du travail considérable d\'un couple passionné par le vin, Jean-Luc Thunevin et Murielle Andraud. Après un franc succès dans le Saint-Émilionnais en tant que négociant, leur vœu était de posséder leur vignoble et d\'y faire leur propre vin',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Chateau_Valandraud',
                'type_id' => 2,
                'producteur_id' => 4,
                'Prix_vin' => 225.2,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            7 => 
            array (
                'id' => 8,
                'Nom' => 'Auca 2016 Périgord - Vin blanc du Sud Ouest',
                'Description' => '',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Périgord_blanc',
                'type_id' => 4,
                'producteur_id' => 5,
                'Prix_vin' => 3.66,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            8 => 
            array (
                'id' => 9,
                'Nom' => 'Auca 2016 Périgord - Vin rouge du Sud Ouest',
                'Description' => '',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Périgord_rouge',
                'type_id' => 5,
                'producteur_id' => 5,
                'Prix_vin' => 3.66,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            9 => 
            array (
                'id' => 10,
                'Nom' => 'Auca Oie en Occitan Périgord - Vin rosé du Sud-Ouest',
                'Description' => '',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Périgord_rosé',
                'type_id' => 6,
                'producteur_id' => 5,
                'Prix_vin' => 3.66,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            10 => 
            array (
                'id' => 11,
                'Nom' => 'Chénas Les Journets Domaine Saint-Cyr 2018',
                'Description' => 'Dans son domaine de Saint-Cyr, au sud du Beaujolais sur la commune d\'Anse, Raphaël Saint-Cyr représente la quatrième génération de vignerons de la famille. C\'est aussi lui qui a agrandi le domaine en achetant quelques parcelles situées dans les crus du nord de l\'appellation. C\'est ici un beaujolais de Chénas qu\'il nous propose ici. ',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Chénas_2018',
                'type_id' => 2,
                'producteur_id' => 6,
                'Prix_vin' => 22.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            11 => 
            array (
                'id' => 12,
                'Nom' => 'Chénas Chassignol Paul-Henri Thillardon 2019',
                'Description' => 'Chassignol est tout bonnement le fleuron du domaine de Jean-Paul Thillardon. Elle provient du lieu-dit éponyme constitué d\'une parcelle pentue au sol de granit et de quartz. Particulièrement difficile à cultiver, la mécanisation du travail est impossible. Ce vin dévoile de superbes arômes de fruits rouges et noirs, rehaussés de nuances florales et épicées. La bouche est ample et profonde. Le grain de tanin est fin et une minéralité assure un bel équilibre à l\'ensemble.',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Chénas_2019',
                'type_id' => 2,
                'producteur_id' => 6,
                'Prix_vin' => 29.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            12 => 
            array (
                'id' => 13,
                'Nom' => 'Domaine du Gueret 2015 Moulin à Vent - Vin rouge de Bourgogne - Bio',
                'Description' => 'subtilement épicée, tout en finesse, bonne longueur ',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/',
                'type_id' => 2,
                'producteur_id' => 7,
                'Prix_vin' => 7.49,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            13 => 
            array (
                'id' => 14,
                'Nom' => 'Grands-Echezeaux Domaine d\'Eugénie 2013',
                'Description' => 'Découvrez le Echezeaux Grand Cru Domaine d\'Eugénie 2013, ce vin rouge saura vous faire apprécier les vins de la région Bourgogne et tout particulièrement les vins de l\'appellation Echezeaux.En bouche c’est de la dentelle, l’attaque est délicate, le milieu de bouche est plein mais avec une structure extrêmement fine, les tanins sont présents mais profonds et avec du grain, l’équilibre général est très délicat, caressant.',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Echezeaux_2013',
                'type_id' => 2,
                'producteur_id' => 8,
                'Prix_vin' => 430.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            14 => 
            array (
                'id' => 15,
                'Nom' => 'Domaine d\'Eugénie, Grands-Echezeaux, 2016',
                'Description' => 'Cuvée issue de vignes de 25 ans en moyenne, avec certains ceps de 60 ans, conduites en biodynamie et plantées sur des sols moyennement profonds de type calcaires argileux. La parcelle de 0.50 hectare se situe juste au-dessus de la partie Sud-Est du Clos Vougeot, elle marque le début de l\'appellation Grands Echezeaux. Vinification: 10 jours de macération avec quelques pigeages en début de fermentation, entonnage, fermentation malolactique en fûts de chêne français dont 70% neufs, 15 mois d\'élevage. Mise en bouteille début 2019. ',
                'Degre_alcool' => 13.5,
                'Image' => 'vins/Echezeaux_2016',
                'type_id' => 2,
                'producteur_id' => 8,
                'Prix_vin' => 453.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            15 => 
            array (
                'id' => 16,
                'Nom' => 'Olivier Leflaive Santenay Blanc 2013 ',
                'Description' => 'Issu du négoce, ce santenay ne laisse pas indifférent. Au nez, un boisé soutenu mais élégant, toasté et vanillé, accompagne le citron vert et le sureau. Le palais est gras, riche, dense, mais aussi plein de fraîcheur, sous-tendu par une belle minéralité et de beaux amers en finale. Un peu de garde apportera à cette bouteille une réelle harmonie. ',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Santenay_blanc_2013',
                'type_id' => 1,
                'producteur_id' => 9,
                'Prix_vin' => 72.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            16 => 
            array (
                'id' => 17,
                'Nom' => 'Olivier Leflaive Santenay Blanc 2015 ',
                'Description' => 'Le nez de ce Santenay Olivier Leflaive est très représentatif de la terre qui l\'a porté, mais qui reste frais, et qui se traduit par des notes fruitées au palais. L\'intensité équilibrée en bouche se traduit par une harmonie complète de ce vin en longueur.',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Santenay_blanc_2015',
                'type_id' => 1,
                'producteur_id' => 9,
                'Prix_vin' => 77.85,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            17 => 
            array (
                'id' => 18,
                'Nom' => 'Joseph Drouhin Santenay Rouge 2013 ',
                'Description' => 'Léger, fruité et de belles notes de fruits rouges',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Santenay_2013',
                'type_id' => 2,
                'producteur_id' => 9,
                'Prix_vin' => 66.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            18 => 
            array (
                'id' => 19,
                'Nom' => 'Louis Roederer : Hommage à Camille "Charmont" 2018',
                'Description' => 'Fondée en 1776 à Reims, Louis Roederer est une Maison de Champagne ayant su demeurer familiale et indépendante. Après plus de 200 ans d’existence, la Maison Louis Roederer est toujours entre les mains de la même famille. Aujourd’hui dirigée par Frédéric Rouzaud, qui incarne la septième génération de la lignée, la Maison Louis Roederer incarne l’excellence des vins de Champagne à travers le monde grâce à des cuvées élaborées à la manière d’une œuvre d’art.',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Camille_2018',
                'type_id' => 2,
                'producteur_id' => 10,
                'Prix_vin' => 160.0,
                'created_at' => '2022-06-11 13:29:46',
                'updated_at' => '2022-06-11 13:29:46',
            ),
            19 => 
            array (
                'id' => 20,
                'Nom' => 'Bonnet-Ponson 2018',
                'Description' => 'Suite à une macération de 17 jours avec 21% de grappes entières, la fermentation est accompagnée de pigeages réguliers. L’élevage, d’une durée de 14 mois, est réalisé en barriques de chêne français.',
                'Degre_alcool' => 11.5,
                'Image' => 'vins/vignes_2018',
                'type_id' => 1,
                'producteur_id' => 10,
                'Prix_vin' => 43.7,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            20 => 
            array (
                'id' => 21,
                'Nom' => 'Coteaux de Coiffy Rouge',
                'Description' => 'Des notes de sureau et de brioche accompagnent les fruits rouges et noirs pour composer une olfaction délicate. En bouche, le vin se révèle franc, droit, solide, sans manquer de chair ni de rondeur. L\'équilibre est là. ',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Coiffy_rouge',
                'type_id' => 5,
                'producteur_id' => 11,
                'Prix_vin' => 5.55,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            21 => 
            array (
                'id' => 22,
                'Nom' => 'Coteaux de Coiffy Blanc',
            'Description' => 'des reflets verts animent la robe paille de ce vin floral (fleurs blanches) nuancé de touches d\'épices et d\'agrumes. La fraîcheur du palais souligne le fruité. ',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Coiffy_blanc',
                'type_id' => 4,
                'producteur_id' => 11,
                'Prix_vin' => 5.4,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            22 => 
            array (
                'id' => 23,
                'Nom' => 'Coteaux de Coiffy Rosé',
            'Description' => 'des reflets verts animent la robe paille de ce vin floral (fleurs blanches) nuancé de touches d\'épices et d\'agrumes. La fraîcheur du palais souligne le fruité. ',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Coiffy_rosé',
                'type_id' => 6,
                'producteur_id' => 11,
                'Prix_vin' => 5.35,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            23 => 
            array (
                'id' => 24,
                'Nom' => 'Vin Haute-Marne blanc',
                'Description' => 'Ce Chardonnay a des reflets verts, arômes de fleurs blanches, quelques notes de vanille et d’agrumes pour donner un vin blanc avec rondeur et fraîcheur. Un bel accord avec vos salades composées et vos poissons, très apprécié aussi à l’apéritif.',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Vin_Haute_Marne_blanc',
                'type_id' => 4,
                'producteur_id' => 12,
                'Prix_vin' => 13.0,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            24 => 
            array (
                'id' => 25,
                'Nom' => 'Vin haute-Marne rosé',
                'Description' => 'Avec un vin de base rosé à partir de Pinot Noir, vient ensuite une 2e fermentation en bouteille et un élevage sur lattes. Il a une bulle légère et fine, il pourra accompagner un apéritif, un repas ou un dessert',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Vin_Haute_Marne_rosé',
                'type_id' => 6,
                'producteur_id' => 12,
                'Prix_vin' => 8.5,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            25 => 
            array (
                'id' => 26,
                'Nom' => 'Vin Haute-Marne rouge',
                'Description' => 'Vin rouge grenat, avec des arômes complexes de griottes et d’épices. Avec une bouche longue, soyeuse et une pointe tannique, ce vin rouge se mariera parfaitement sur des viandes en sauce et fromages de notre région…',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Vin_Haute_Marne_rouge',
                'type_id' => 5,
                'producteur_id' => 12,
                'Prix_vin' => 12.0,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            26 => 
            array (
                'id' => 27,
                'Nom' => 'Château Sainte Anne, Cuvée Collection, 1999',
                'Description' => '',
                'Degre_alcool' => 14.0,
                'Image' => 'vins/SaintAnne_rouge',
                'type_id' => 5,
                'producteur_id' => 13,
                'Prix_vin' => 80.0,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            27 => 
            array (
                'id' => 28,
                'Nom' => 'Château Saint-Anne 2020',
                'Description' => '',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/SaintAnne_rosé',
                'type_id' => 6,
                'producteur_id' => 13,
                'Prix_vin' => 26.1,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            28 => 
            array (
                'id' => 29,
                'Nom' => 'Porto Vecchio, Domaine Zuria, 2018',
                'Description' => 'Christian Zuria et son épouse Nadine, producteurs de clémentines vers Aléria, ont planté entre 2013 et 2019 onze hectares de vignes à proximité de Bonifacio. A dominante de sciaccarellu, les vins rouges laissent entrevoir un énorme potentiel de garde.',
                'Degre_alcool' => 14.0,
                'Image' => 'vins/Vecchio_rouge',
                'type_id' => 5,
                'producteur_id' => 14,
                'Prix_vin' => 40.6,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            29 => 
            array (
                'id' => 30,
                'Nom' => 'Domaine Vecchio IGP Ile de Beauté blanc 2019',
            'Description' => 'Une cuvée fruité et assez aromatique aux d’agrumes (pamplemousse, zeste de citron, cedrats), fleurs blanches poire accacia tilleul , ainsi qu’une pointe de fumé , du gras en bouche sur une note iodée.',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Vecchio_blanc',
                'type_id' => 4,
                'producteur_id' => 14,
                'Prix_vin' => 12.5,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            30 => 
            array (
                'id' => 31,
                'Nom' => 'Berger des Abeilles 2013 Merlot Méditerranée - Vin rouge du Languedoc Roussillon',
                'Description' => 'Vin d’une belle couleur grenat avec des reflets brillants. ',
                'Degre_alcool' => 11.5,
                'Image' => 'vins/Mediterranée',
                'type_id' => 5,
                'producteur_id' => 15,
                'Prix_vin' => 3.6,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            31 => 
            array (
                'id' => 32,
                'Nom' => 'Castelmaure, Frontiere Frontera, 2017',
            'Description' => 'Le Corbières Frontière Fontera de la cave d\'Embres et Castelmaure est un rouge ample et charnu, avec une belle trame dense et de la profondeur. S\'il se montre bien mûr, il offre cependant de l\'acidité et de la fraîcheur. Tout le savoir-faire de cette coopérative d\'élite s\'illustre dans ce vin savoureux et équilibré, remarquablement à l\'aise à table. Faites confiance à ce rouge Fontière Frontera d\'Embres et Castelmaure (le frontière entre pays catalans et pays d\'Oc passait par les Corbières....) pour plaire à tous les convives.',
                'Degre_alcool' => 13.5,
                'Image' => 'vins/Frontera',
                'type_id' => 2,
                'producteur_id' => 16,
                'Prix_vin' => 8.4,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            32 => 
            array (
                'id' => 33,
                'Nom' => 'Vin de Pays de l\'Ariège',
                'Description' => 'Vignerons Indépendants, engagés dans la préservation de l’environnement depuis 1988 et certifiés « Haute Valeur Environnementale ». un vin tout en délicatesse et discrétion. ',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Ariège_blanc',
                'type_id' => 4,
                'producteur_id' => 17,
                'Prix_vin' => 10.2,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            33 => 
            array (
                'id' => 34,
                'Nom' => 'Rosé "09" cuvée 2020',
                'Description' => 'Ce vin rosé vous surprendra par sa longueur aromatique et sa frîcheur en bouche.La bouche est douce et ronde, franchement aromatique, à peine acidulée. A boire bien frais à 12°C/13°C. Un rosé bien gourmand.',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Ariège_rosé',
                'type_id' => 6,
                'producteur_id' => 17,
                'Prix_vin' => 4.5,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            34 => 
            array (
                'id' => 35,
                'Nom' => 'Les clos Château de vaux rouge 2020',
                'Description' => 'Le Château de Vaux Pinot Noir Les Clos est un vin très coloré, d’un rouge violacé. Le nez est puissant et complexe : cacao, torréfaction laissent très rapidement la place aux notes d\'épices douce, cannelle... La bouche offre une matière raffinée, aux tannins soyeux, la densité de ce vin est exceptionnelle.',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Moselle_rouge',
                'type_id' => 5,
                'producteur_id' => 18,
                'Prix_vin' => 19.0,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            35 => 
            array (
                'id' => 36,
                'Nom' => 'Vin pinot noir rosé AOC Moselle',
                'Description' => 'C\'est dans les vignes mosellanes du domaine que ce surprenant pinot noir rosé est produit. La robe rouge légèrement rosée de ce vin d\'exception vous donnera envie. Au nez, vous y découvrirez des notes de fruits rouges. En bouche, ce sont les arômes de framboise et de fraise qui dominent. Ce vin souple et fruité se conserve trois ans. Il se sert bien frais, à 10° et est idéal en été grâce à la fraicheur de ses arômes. Vous pourrez vous délecter de ses subtils arômes parfumés en l\'accompagnant de grillades ou de brochettes. Il ira également très bien avec les tourtes et la tarte au thon ou aux courgettes. À l\'apéritif, il se mariera à merveille avec les préparations à base de fromage de chèvre, de tomate ou d\'aubergine.',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Moselle_rosé',
                'type_id' => 6,
                'producteur_id' => 18,
                'Prix_vin' => 9.7,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            36 => 
            array (
                'id' => 37,
                'Nom' => 'Jo Landron, Amphibolite nature, 2019',
                'Description' => 'Avec des arômes d’agrumes citronnés, ce Muscadet exprime une pureté cristalline. Le fruit d’agrume éclate en bouche avec une sensation de fraîcheur et de richesse équilibrée par la minéralité saline et iodée puisée dans le terroir. L’élégance et la persistance de ce vin émanent d’une complexité harmonieuse. Avec 2019, l’Amphibolite atteint un niveau exceptionnel.',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Muscadet_blanc',
                'type_id' => 1,
                'producteur_id' => 19,
                'Prix_vin' => 16.2,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            37 => 
            array (
                'id' => 38,
                'Nom' => 'IGP Puy de Dôme - Saint VERNY',
                'Description' => 'Ce vin blanc issu d\'une récolte en terre volcanique se caractérise par ses arômes de poires et de fruits jaunes. Le Chardonnay se déguste idéalement à l\'apéritif et se déguste également avec des salades, poissons ou volailles. A servir frais L\'abus d\'alcool est dangereux pour la santé.',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Puy_Dome_blanc',
                'type_id' => 4,
                'producteur_id' => 20,
                'Prix_vin' => 8.9,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            38 => 
            array (
                'id' => 39,
                'Nom' => 'Puy de Dôme IGP : vin rouge d\'Auvergne – Le Pinot Noir',
                'Description' => 'Ce vin cultive sa personnalité sur une terre volcanique unique au monde. Belle couleur profonde aux arômes de mûres et de cerises noires …',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Puy_Dome_rouge',
                'type_id' => 5,
                'producteur_id' => 20,
                'Prix_vin' => 8.4,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            39 => 
            array (
                'id' => 40,
                'Nom' => 'Vin Rosé Pinot Cchio - IGP Puy-de-Dôme 75 cl - La Tour de Pierre',
                'Description' => 'Voilà un nom original pour un vin rosé issu de cépages 100% Pinot-Gris ! Ne vous fiez pas à sa couleur rose pâle aux reflets argentés, cette cuvée est idéale pour accompagner un repas : nez délicat, arômes nets de framboise, de fraise et de pêche et bouche structurée. Tchin !',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Puy_Dome_rosé',
                'type_id' => 6,
                'producteur_id' => 20,
                'Prix_vin' => 7.0,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            40 => 
            array (
                'id' => 41,
                'Nom' => 'Château Minuty, Cuvée Prestige, 2020',
                'Description' => 'Domaine Château Minuty',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Provence_blanc',
                'type_id' => 1,
                'producteur_id' => 21,
                'Prix_vin' => 38.0,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            41 => 
            array (
                'id' => 42,
                'Nom' => 'Clos la Neuve 2016 Sainte Victoire - Vin rosé des Côtes de Provence',
                'Description' => 'Vin tranquille à consommer entre 8 et 12 °C',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/Provence_rosé',
                'type_id' => 3,
                'producteur_id' => 21,
                'Prix_vin' => 12.5,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            42 => 
            array (
                'id' => 43,
                'Nom' => 'IGP Alpes Maritimes - Cuvée du Pressoir Romain blanc 2020',
                'Description' => 'Au nez, un sentiment de fraîcheur de printemps développe parfaitement des arômes de raisin. C’est plus la finesse, le fond et le bel équilibre qui séduisent et donnent une certaine amplitude, riche en bouche. ',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/AlpesMaritimes_blanc',
                'type_id' => 4,
                'producteur_id' => 22,
                'Prix_vin' => 20.95,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            43 => 
            array (
                'id' => 44,
                'Nom' => 'IGP Alpes Maritimes - Cuvée Saint Lambert rouge 2017',
                'Description' => 'Une robe grenat aux reflets pourpres pare cette cuvée. Le premier nez est sur le pruneau, la cerise, la figue et le cuir. L’attaque chaude, riche et gourmande bascule rapidement sur une fraicheur équilibrée par une opulente structure tannique, dont la générosité n’a d’égale que la finesse. La persistance de cette aromatique est surprenante, orientée sur les petits fruits noirs et la griotte au kirsch. Le point d’orgue est une finale généreuse, ronde et suave. ',
                'Degre_alcool' => 13.5,
                'Image' => 'vins/AlpesMaritimes_rouge',
                'type_id' => 5,
                'producteur_id' => 22,
                'Prix_vin' => 98.9,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            44 => 
            array (
                'id' => 45,
                'Nom' => 'Côteaux Varois - Cuvée Reine Marie blanc 2021',
                'Description' => 'Belle robe à reflets verts encore voilée. Nez expressif mêlant des arômes de fruits mûrs, banane et d\'agrumes, mandarine. Attaque en bouche franche. Bonne fraîcheur, finale sur le pamplemousse.',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/Var_blanc',
                'type_id' => 4,
                'producteur_id' => 23,
                'Prix_vin' => 6.9,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            45 => 
            array (
                'id' => 46,
                'Nom' => 'Côteaux Varois - Cuvée Reine Marie rosé 2020',
                'Description' => 'Belle robe rubis. Nez de fruits noirs et épices. Attaque franche. Bouche aux tannins souples.',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/Var_rosé',
                'type_id' => 6,
                'producteur_id' => 23,
                'Prix_vin' => 6.6,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            46 => 
            array (
                'id' => 47,
                'Nom' => 'Luz-Garrigue 2016 Luberon -Vin rosé des Côtes du Rhône',
                'Description' => 'Nez délicat se distingue par des notes de framboise écrasée et de groseille. Délicatesse et finesse en bouche, un vin frais, précis avec une jolie acidité en finale ',
                'Degre_alcool' => 12.5,
                'Image' => 'vins/LuizGarrigue_rosé',
                'type_id' => 6,
                'producteur_id' => 24,
                'Prix_vin' => 10.49,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            47 => 
            array (
                'id' => 48,
                'Nom' => 'Luz Garrigue 2016 Lubéron - Vin blanc du Lubéron',
                'Description' => 'Nez délicat sur la pêche de vigne et la verveine. Bouche : L\'attaque est franche et évolue vers un vin d\'une belle minéralité. Finale longue et fraîche',
                'Degre_alcool' => 12.0,
                'Image' => 'vins/LuizGarrigue_blanc',
                'type_id' => 4,
                'producteur_id' => 24,
                'Prix_vin' => 7.49,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            48 => 
            array (
                'id' => 49,
                'Nom' => 'Luz Garrigue 2015 Vignobles Paul Dubrule Luberon - Vin rouge de la Vallée du Rhône',
                'Description' => 'Le nez évoque la mûre et la truffe. En bouche , ce vin séduit par son équilibre et sa fraicheur ',
                'Degre_alcool' => 13.0,
                'Image' => 'vins/LuizGarrigue_rouge',
                'type_id' => 5,
                'producteur_id' => 24,
                'Prix_vin' => 7.49,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
            49 => 
            array (
                'id' => 50,
                'Nom' => 'Le Pigeoulet - Vaucluse 2017',
                'Description' => 'Vin de pays, vin quotidien, vin de plaisir. Sa robe d’un pourpre peu soutenu invite à la dégustation, un nez fruité entre cerise, fraise mais aussi du cassis le tout relevé par quelques épices de garrigue et des arômes de poivre',
                'Degre_alcool' => 13.5,
                'Image' => 'vins/Vaucluse_rouge',
                'type_id' => 5,
                'producteur_id' => 25,
                'Prix_vin' => 13.0,
                'created_at' => '2022-06-11 13:29:47',
                'updated_at' => '2022-06-11 13:29:47',
            ),
        ));
        
        
    }
}