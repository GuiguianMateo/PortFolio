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
            <div>
                <div class="ml-40">
                    <p>Context</p>
                    <div class="flex">
                        <p class="max-w-5xl border border-white rounded p-2">Durant la réalisation de cette application, je suis actuellement en stage au Chantiers de l'Atlantique à St Nazaire pour 7 semaines.
                           Etant une grosse société comportant plus de 3500 employers en interne et 2 fois plus externe, les Chantiers organise des séminaires pour leurs employers et notamment pour des croisières sur plusieurs jours.
                           Utilisant Excel comme support pour stocker des données sur les séminaires, la création de cette application m'a donc été destiné.
                        </p>
                        <img class="my-auto m-5 w-20 h-20" src="./assets/img/django.png">                        
                        <img class="my-auto m-5 w-20 h-20" src="./assets/img/django.png">                        
                    </div>
                </div>

                <div>
                    <p>Missions</p>
                    <div>
                        <p>Développement</p>
                        <img src="">                        
                    </div>
                </div>

                <div>
                    <p>Outils utilisés</p>
                    <div>
                        <p>Développement</p>
                        <img src="">                        
                    </div>
                </div>

                <div>
                    <p>Réalisation</p>
                    <div>
                        <p>Développement</p>
                        <img src="">                        
                    </div>
                </div>

                <div>
                    <p>Goût du jour</p>
                    <div>
                        <p>Développement</p>
                        <img src="">                        
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