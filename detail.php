<!DOCTYPE html>
<html lang="fr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="bg-blue-1500 text-white">
    <?php include('components/header.html') ?>

    <div class="text-sm m-5 md:text-lg">
        <a href="experience.php#project" class="hover:bg-gray-500/50 px-3 py-1 rounded md:px-5 py-3">Retour</a>
    </div>

    <?php
        $nom = $_REQUEST['nom'];
        
        if($nom == "EventApp"){
        ?>
            <p class="text-center text-5xl font-semibold my-20">Event-App</p>
            <section class="w-fit mx-auto grid grid-cols-1 gap-8 md:gap-20">
                <div>
                    <p class="text-3xl m-5">Context</p>
                    <div class="xl:flex gap-6">
                        <p class="max-w-4xl text-lg border rounded p-2">Durant la réalisation de cette application, je suis actuellement en <b>stage au Chantiers de l'Atlantique</b> à St Nazaire.
                           Etant une grosse société comportant plus de 3500 employés en interne et 2 fois plus externe, les Chantiers <b>organise des séminaires pour leurs employés</b>, notamment des croisières.
                        </p>
                        <img class="m-auto w-80" src="./assets/img/chantiers-logo.png">                                               
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Missions</p>
                    <div class="xl:flex gap-40">
                        <img class="w-96" src="./assets/img/trello.png">
                        <ul class="max-w-4xl m-auto text-lg list-disc">
                            <li>Formation sur Django Python</li>
                            <li>Création d'une Base de Donné</li>
                            <li>Mise en place d'une authentification</li>
                            <li>Ajout de rôles (Admin / COM / Employé)</li>
                            <li>Réalisation du CRUD pour les Employés / Groupes / Evenements</li>
                            <li>fref</li>
                            <li>fref</li>
                        </ul>
                                                
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Outils utilisés</p>
                    <div class="xl:flex">
                        <ul class="max-w-4xl m-auto text-lg list-disc">
                            <li>Laguage: Python</li>
                            <li>FrameWork: Django</li>
                            <li>Base de Donné: PostgreSQL</li>
                        </ul>
                        <img class="m-auto w-40" src="./assets/img/django.png">                        
                        <img class="m-auto w-40" src="./assets/img/postgresql.png">                      
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Réalisation</p>
                    <div class="xl:flex">
                        <p class="max-w-4xl text-lg border rounded p-2">Durant la réalisation de cette application, je suis actuellement en stage au Chantiers de l'Atlantique à St Nazaire pour 7 semaines.
                           Etant une grosse société comportant plus de 3500 employés en interne et 2 fois plus externe, les Chantiers organise des séminaires pour leurs employés et notamment pour des croisières sur plusieurs jours.
                           Utilisant Excel comme support pour stocker des données sur les séminaires, la création de cette application m'a donc été destiné.
                        </p>
                        <img class="m-auto w-40" src="./assets/img/django.png">                        
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Goût du jour</p>
                    <div class="xl:flex">
                        <p class="max-w-4xl text-lg border rounded p-2">Durant la réalisation de cette application, je suis actuellement en stage au Chantiers de l'Atlantique à St Nazaire pour 7 semaines.
                           Etant une grosse société comportant plus de 3500 employés en interne et 2 fois plus externe, les Chantiers organise des séminaires pour leurs employés et notamment pour des croisières sur plusieurs jours.
                           Utilisant Excel comme support pour stocker des données sur les séminaires, la création de cette application m'a donc été destiné.
                        </p>
                    </div>
                </div>

            </div>
        <?php  
        }elseif($nom == "CmsGestion"){
        ?>
            <p>CmsGestion</p>

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