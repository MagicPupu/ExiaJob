<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Software dev';
        $offer->city = 'Bordeaux';
        $offer->duration = 4;
        $offer->price = 500;
        $offer->add_date = Carbon::now();
        $offer->offer_description = "Nous recherchons un développeur full stack pour travailler principalement sur notre comparateur cloud et sur notre logiciel de création de diagrammes.

Vous serez :
– Travailler sur le front-end de nos produits et faire des suggestions de design
– Participer au développement d’un outil d’analyse automatique des catalogues des fournisseurs de cloud
– Supprimez les catalogues de fournisseurs de cloud supplémentaires pour collecter de nouveaux prix et offres
– Étendre l'API REST interne
– Assistance pour tester et déployer le système de surveillance des journaux
– Implémenter des API SSO aux services des fournisseurs de cloud
Plus important encore, si vous êtes intéressé par la technologie cloud et que vous souhaitez avoir un impact, nous sommes la bonne personne pour vous !

Tout projet de codage personnel est très apprécié.";
        $offer->skill1 = 'Développement objet';
        $offer->skill2 = 'Base de données';
        $offer->skill3 = 'Méthode SCRUM';
        $offer->idCompany = 1;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Web designer';
        $offer->city = 'Paris';
        $offer->duration = 8;
        $offer->price = 1000;
        $offer->add_date = Carbon::now();
        $offer->offer_description = "En lien avec nos développeurs web, vous participerez à la création d'éléments graphiques ainsi que visuels sur l'ensemble des supports de communication print et digital pour l'ensemble des branches du Groupe.
•	Conception des newsletters
•	Visuels d’animation des réseaux sociaux : post Facebook, post Instagram
•	Participer à la rédaction de contenus optimisés
•	Stratégie SEO, force de proposition
•	Création Design pour les sites de nos clients
Profil recherché
•	Vous êtes créatif(ve), sérieux(se), passionné(e) par le web";
        $offer->skill1 = 'Design';
        $offer->skill2 = 'Figma';
        $offer->skill3 = 'Frontend';
        $offer->idCompany = 2;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Administrateur';
        $offer->city = 'Paris';
        $offer->duration = 6;
        $offer->price = 1100;
        $offer->add_date = Carbon::now();
        $offer->offer_description = "Vos missions
•	Traiter les demandes de support de 1er et 2ème niveau de l'ensemble de notre personnel à l'échelle internationale dans nos 6 pays d'implantation ;
•	Installer et configurer le réseau, les logiciels, les accès et le matériel des nouveaux arrivants ;
•	Résoudre les problèmes et intervenir sur les pannes de nos réseaux locaux ;
•	Assurer la protection de notre réseau et nos données en veillant au contrôle des accès et à la mise en place de mesures de sécurité du réseau telles que les pare-feu ;
•	Automatiser les tâches récurrentes afin de gagne en efficience ;
•	Identifier les fournisseurs de matériel informatique pertinents afin de mettre en place un système d'assistance à l'échelle groupe.";
        $offer->skill1 = 'Database';
        $offer->skill2 = 'SQL';
        $offer->skill3 = 'Backend';
        $offer->idCompany = 3;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Cloud Engineer';
        $offer->city = 'Marseilles';
        $offer->duration = 8;
        $offer->price = 600;
        $offer->add_date = Carbon::now();
        $offer->offer_description = "Missions principales 
Participe à la conception, au développement et à la maintenance des applications, modules ou services (back end, Cloud) qui permettent de traiter, visualiser, éditer et valider des données, en prenant en compte les besoins des utilisateurs ainsi que les contraintes techniques (faisabilité au développement) et celles liées à l’offre logicielle de la société. Activités et Tâches • Analyser / Concevoir : ∝ Participer à l’analyse des besoins fonctionnels et techniques ∝ Participer à la définition des spécifications générales de la solution et de son environnement ∝ Concevoir des solutions nécessitant l’utilisation de technologies Cloud, Data et Machine Learning pour répondre à des cas d’usages métiers et à la feuille de route Produit ∝ Travailler en collaboration pour soutenir le développement de nouvelles fonctionnalités • Développer : ∝ Développer la solution (API, logiciel Web, application, système) en conformité avec les bonnes pratiques de développement ∝ Développer et tester des flux d’ingestion de données de Data Lake et de traitement des données ∝ Déployer, optimiser et industrialiser au quotidien des pipelines de données dans le Cloud ";
        $offer->skill1 = 'Cloud';
        $offer->skill2 = 'Réseaux';
        $offer->skill3 = 'Systèmes';
        $offer->idCompany = 4;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Chef de projet';
        $offer->city = 'Bordeaux';
        $offer->duration = 8;
        $offer->price = 750;
        $offer->add_date = Carbon::now();
        $offer->offer_description = "Les missions suivantes te seront confiées :

Recueillir les besoins du client et rédiger un cahier des charges,
Établir, en collaboration avec le client, un planning de réalisation du projet,
Coordonner et superviser les projets avec les équipes Création et Développement et les accompagner tout au long du projet,
Procéder régulièrement à l’intégration de contenus sur des sites Prestashop/Wordpress et à l’ajout de modules,
Organiser les réunions internes, les réunions avec les clients et rédiger des reportings,
Recetter les différents sites internet avant livraison,
Réaliser les étapes SEO (Search Consol, Tag Manager, Balises Méta title et méta description, Google Analytics…),
S’assurer de la bonne réalisation des livrables à temps et garantir la qualité de chaque projet livré.";
        $offer->skill1 = 'Méthode Agile';
        $offer->skill2 = 'PERT/GANTT';
        $offer->skill3 = 'SCRUM';
        $offer->idCompany = 5;
        $offer->save();
    }
}
