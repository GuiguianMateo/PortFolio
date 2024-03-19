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
            <section class="w-fit mx-auto grid grid-cols-1 gap-8 md:gap-28">
                <div>
                    <p class="text-3xl m-5">Context</p>
                    <div class="xl:flex gap-6">
                        <p class="max-w-4xl text-lg border rounded p-2">Durant la réalisation de cette application, je suis actuellement en <b>stage au Chantiers de l'Atlantique</b> à St Nazaire.
                           Etant une grosse société comportant plus de 3500 employés en interne et 2 fois plus externe, les Chantiers <b>organise des séminaires pour leurs employés</b>, notamment des croisières.
                        </p>
                        <img class="mx-auto my-5 w-80" src="./assets/img/chantiers-logo.png">                                               
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Missions</p>
                    <div class="xl:flex gap-40">
                        <img class="w-96" src="./assets/img/trello.png">
                        <ol class="max-w-4xl mx-auto my-5 pl-8 xl:pl-0 text-lg list-decimal">
                            <li>Formation sur Django Python</li>
                            <li>Création d'une Base de Données</li>
                            <li>Mise en place d'une authentification</li>
                            <li>Ajout de rôles (Admin / COM / Gestionaires)</li>
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
                        <img class="mx-auto xl:my-auto my-5 w-40" src="./assets/img/django.png">                        
                        <img class="mx-auto xl:my-auto my-5 w-40" src="./assets/img/postgresql.png">                      
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Réalisation</p>
                    <div class="xl:flex gap-40">
                        <img class="w-96" src="./assets/img/umlet.png">
                        <ul class="max-w-4xl mx-auto xl:my-auto my-5 pl-8 xl:pl-0 text-lg list-disc">
                            <li>Mission 1: </li>
                            <li>Mission 2: </li>
                            <li>Mission 3: </li>
                            <li>Mission 4: </li>
                            <li>Mission 5: </li>
                            <li>Mission 6: </li>
                            <li>Mission 7: </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <p class="text-3xl m-5">Bilan</p>
                    <div class="xl:flex">
                        <p class="max-w-4xl text-lg border rounded p-2">Sur ce stage de 7 semaine je n'ai pas pu terminer mon developpement, aujoud'hui l'application à été reprise par une autre sociétée, je n'ai donc pas la version final du projet.
                            D'après mon avancer dans le projet ainsi que les fonctionalitées ajouter, mon maître de stage était satisfait de mon travail et rentrait dans ses attentes.  
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