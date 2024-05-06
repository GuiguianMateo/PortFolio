<!DOCTYPE html>
<html lang="fr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Projet</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/logo/favicon.ico">


</head>
<body class="bg-blue-1500 text-white">
    <?php include('components/header.html') ?>

    <div class="text-sm m-5 md:text-lg flex justify-between">
        <a href="experience.php#project" class="hover:bg-gray-500/50 px-3 py-1 rounded md:px-5 py-3">Retour</a>
        <?php
        $nom = $_REQUEST['nom'];
        
            if($nom == "CmsGestion"){
            ?>
                <a href="https://github.com/GuiguianMateo/Laravel-10-Blanc" target="_blank" class="hover:bg-gray-500/50 px-3 py-1 rounded md:px-5 py-3">Répertoir Github</a>
            <?php  
            }elseif($nom == "FormJs"){
            ?>
                <a href="https://github.com/GuiguianMateo/formulaire_JS" target="_blank" class="hover:bg-gray-500/50 px-3 py-1 rounded md:px-5 py-3">Répertoir Github</a>
            <?php  
            }elseif($nom == "MegaCasting"){
            ?>
                <a href="https://github.com/NathanLegrand57/MegaCasting" target="_blank" class="hover:bg-gray-500/50 px-3 py-1 rounded md:px-5 py-3">Répertoir Github</a>
            <?php  
            }elseif($nom == "ChatDevops"){
            ?>
                <a href="https://github.com/GuiguianMateo/devops" target="_blank" class="hover:bg-gray-500/50 px-3 py-1 rounded md:px-5 py-3">Répertoir Github</a>
            <?php  
            }else{
            ?>
                <a href="detail.php?nom=EventApp" class="hover:bg-gray-500/50 px-3 py-1 rounded md:px-5 py-3">Répertoir Privé</a>
            <?php
            }
        ?>
    </div>

    <?php        
        if($nom == "EventApp"){
        ?>
            <p class="text-center text-5xl font-semibold my-20">Event-App</p>
            <section class="w-fit mx-auto grid grid-cols-1 gap-8 md:gap-28">
                <div>
                    <p class="text-3xl m-5">Contexte</p>
                    <div class="xl:flex gap-6">
                        <p class="max-w-4xl text-lg border rounded p-2">Durant la réalisation de cette application, j'étais en <b>stage aux Chantiers de l'Atlantique</b> à St Nazaire.
                           Etant une société importante comportant plus de 3500 employés en interne et 2 fois plus externe, les Chantiers <b>organisent des séminaires pour leurs employés</b>, notamment des croisières.
                        </p>
                        <img class="rounded-md mx-auto my-5 w-80" src="./assets/img/chantiers-logo.png">                                               
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Missions</p>
                    <div class="xl:flex gap-40">
                        <img class="rounded-md w-96" src="./assets/img/trello.png">
                        <ol class="max-w-4xl mx-auto my-5 pl-8 xl:pl-0 text-lg list-decimal">
                            <li>Formation sur Django Python</li>
                            <li>Création d'une Base de Données</li>
                            <li>Mise en place d'une authentification</li>
                            <li>Ajout des rôles (Admin / COM / Gestionaires)</li>
                            <li>Création de maquettes</li>
                            <li>Réalisation du CRUD pour les Invités / Groupes / Evenements</li>
                            <li>Mise en place du css -> Maquettes</li>
                        </ol>       
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Outils utilisés</p>
                    <div class="xl:flex">
                        <ul class="max-w-4xl mx-auto my-5 xl:my-auto pl-8 xl:pl-0 text-lg list-disc">
                            <li>Laguage: Python</li>
                            <li>FrameWork: Django</li>
                            <li>Base de Donné: PostgreSQL</li>
                        </ul>
                        <img class="rounded-md mx-auto xl:my-auto my-5 w-40" src="./assets/img/django.png">                        
                        <img class="rounded-md mx-auto xl:my-auto my-5 w-40" src="./assets/img/postgresql.png">                      
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Réalisation</p>
                    <div class="xl:flex gap-40">
                        <img class="rounded-md w-96" src="./assets/img/umlet.png">
                        <ul class="max-w-4xl mx-auto xl:my-auto my-5 pl-8 xl:pl-0 text-lg list-disc">
                            <li>Mission 1: Imposé par l'entreprise / durée d'une semaine</li>
                            <li>Mission 2: 3 versions / mise en commun -> modification -> validation</li>
                            <li>Mission 3: Module implanté dans django "contrib.auth" / Difficulté: moyenne</li>
                            <li>Mission 4: Identification des rôles utiles -> initialisation -> application aux groupes</li>
                            <li>Mission 5: Création de 3 maquettes -> 1/2 jours / présentation oral à la COM</li>
                            <li>Mission 6: 1er framework / relation par formulaire avec db -> Difficile</li>
                            <li>Mission 7: Suivis des maquettes validées / style simple</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Bilan</p>
                    <div class="xl:flex mb-20">
                        <p class="max-w-4xl text-lg border rounded p-2">Sur ce stage de 7 semaines je n'ai pas pu terminer mon projet, aujoud'hui l'application à été reprise par une autre société, je n'ai donc pas la version finale du projet.
                            D'après mon avancée dans le projet ainsi que les fonctionalités ajoutées, mon maître de stage était satisfait de mon travail et correspondait à ses attentes.  
                        </p>
                    </div>
                </div>
        </section>

        <?php  
        }elseif($nom == "CmsGestion"){
        ?>
            <p class="text-center text-5xl font-semibold my-20">Cms-Gestion</p>
            <section class="w-fit mx-auto grid grid-cols-1 gap-8 md:gap-28">
                <div>
                    <p class="text-3xl m-5">Contexte</p>
                    <div class="xl:flex gap-6">
                        <p class="max-w-4xl text-lg my-auto">Cette application à été réalisée en <b>3 grandes parties</b> pour les évaluations de laravel, d'octobre jusqu'à décembre nous avons reçu des sujets différents.
                            Pour ma part c'était de <b>créer un CMS</b> (système de gestionaire de contenu) avec différentes spécificités.
                        </p>
                        <img class="rounded-md mx-auto w-80" src="./assets/img/cms.jpg">                                               
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Missions</p>
                    <div class="xl:flex gap-40">
                        <img class="rounded-md h-56" src="./assets/img/menucms.png">
                        <ol class="max-w-4xl mx-auto my-5 pl-8 xl:pl-0 text-lg list-decimal">
                            <li>Création d'une Base de Données</li>
                            <li>Mise en place du CRUD (Menus/Sous-menus/Pages) + repository</li>
                            <li>Ajout de breeze et de tinker</li>
                            <li>Mise en place du système de langue Anglais/Français</li>
                            <li>Création du système d'envoie de mail</li>
                            <li>Optimisation du code avec des components</li>
                            <li>Ajout des tests unitaires (test de toutes les fonctionalitées)</li>
                        </ol>       
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Outils utilisés</p>
                    <div class="xl:flex">
                        <ul class="max-w-4xl mx-auto my-5 xl:my-auto pl-8 xl:pl-0 text-lg list-disc">
                            <li>Laguage: Php</li>
                            <li>FrameWork: Laravel</li>
                            <li>Base de Donné: mySQL</li>
                            <li>Simulateur: Wamp Serveur</li>
                        </ul>
                        <img class="rounded-md mx-auto xl:my-auto my-5 w-40" src="./assets/img/laravel.png">                        
                        <img class="rounded-md mx-auto xl:my-auto my-5 w-40" src="./assets/img/wamp.png">                      
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Réalisation</p>
                    <div class="xl:flex gap-40">
                        <img class="rounded-md w-96" src="./assets/img/code.png">
                        <ul class="max-w-4xl mx-auto xl:my-auto my-5 pl-8 xl:pl-0 text-lg list-disc">
                            <li>Mission 1: Cahier des Charges -> choix libre pour le reste / 1 version</li>
                            <li>Mission 2: Prise en main d'un framework avec MVC -> Base de l'appli</li>
                            <li>Mission 3: Différent de Django -> système d'auth auto / Rôles facile d'utilisation</li>
                            <li>Mission 4: Manuellement ajout mot pour mot en anglais et traduction / bouton switch</li>
                            <li>Mission 5: Simulateur de boite mail (MailTrap) -> bloque son adresse / envoie de mail auto</li>
                            <li>Mission 6: Formulaire / button écrits plusieurs fois / components -> écrit 1 fois avec variable</li>
                            <li>Mission 7: Vérifie tout le site (Permissions / fonctions / accessibilité) -> renvoie le resultat</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Bilan</p>
                    <div class="xl:flex mb-20">
                        <p class="max-w-4xl text-lg border rounded p-2">Avec les conditions données, le projet est actuellement terminé, avec une durée totale de 3 mois réalisée par période. 
                            Pour chaque nouvelle évaluation, nous utilisions la version finie de la précédente, de plus si cette dernière n'était pas terminée dans les temps, nous devions la finaliser avant la prochaine évaluation.
                        </p>
                    </div>
                </div>
        </section>

        <?php    

        }elseif($nom == "Marsoins"){
        ?>
            <p>maroins</p>

        <?php

        }elseif($nom == "ChatDevops"){
        ?>
            <p>Chat dev</p>

        <?php

        }elseif($nom == "MegaCasting"){
        ?>
            <p>casting</p>

        <?php

        }elseif($nom == "FormJs"){
        ?>
            <p>FormJs</p>

        <?php
        }
    ?>

    <?php include('components/footer.html') ?>

</body>
</html> 