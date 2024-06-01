<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/logo/favicon.ico">
</head>
<body class="bg-blue-1500 text-white">
    <?php include('components/header.html') ?>

    <div class="text-center my-40 text-5xl font-semibold">
            <p>Expériences Professionelles</p>
    </div>

    <div>
        <section class="mx-auto grid grid-cols-1 md:grid-cols-2 my-40 gap-20 md:gap-0">
            <div>
                <h1 class="flex justify-center text-3xl mb-20">Saisons d'été</h1>   
                <section class="mx-auto grid grid-cols-1 gap-20 md:gap-32">
                    <div class="mx-auto w-8/12 h-auto bg-gray-500/50 hover:border-sky-800 border-2 rounded-md p-4">
                        <h1 class="text-center text-lg font-bold p-1">Le Duc d'Aiguillon</h1>
                        <p>Le relais du Duc d'Aiguillon est une crêperie cotée dans le centre du Croisic, j'y ai travaillé durant toute la saison d'été précédent mon BTS (2022).
                            Durant cette période, j'ai pu établir ma propre approche à la clientèle, ainsi qu'étudier la demande du client et la traiter au mieux pour satisfaire ses besoins.
                        </p> 
                    </div>

                    <div class="mx-auto w-8/12 h-auto bg-gray-500/50 hover:border-sky-800 border-2 rounded-md p-4">
                        <h1 class="text-center text-lg font-bold p-1">Les Albatros</h1>
                        <p>L'année suivante, durant deux mois et demi, j'ai travaillé en tant que serveur / runneur aux Albatros, c'est un restaurant de plage à la Baule. 
                            Ayant une très bonne réputation, ils sont en partenariat avec le cinéma de la Baule et accueillent pendant une semaine plusieurs acteurs / réalisateurs connus en France.
                        </p> 
                    </div>
                </section>
            </div>
 
            <div>
                <h1 class="flex justify-center text-3xl mb-20">Stages</h1>
                <section class="mx-auto grid grid-cols-1 gap-20 md:gap-32">
                    <div class="mx-auto w-8/12 h-auto bg-gray-500/50 hover:border-sky-800 border-2 rounded-md p-4">
                        <h1 class="text-center text-lg font-bold p-1">Les chantiers de l'atlantique </h1>
                        <p>Lors de ma première année de BTS, j'ai réalisé un stage de sept semaines dans la société des chantiers de l'Atlantique. 
                            J'ai dû effectuer une application interne afin d'organiser les séminaires pour les employés, afin de réduire la perte de temps consacrée à la gestion de cette dernière.
                        </p> 
                    </div>

                    <div class="mx-auto w-8/12 h-auto bg-gray-500/50 hover:border-sky-800 border-2 rounded-md p-4">
                        <h1 class="text-center text-lg font-bold p-1">A vos soins</h1>
                        <p>Ensuite, pour ma seconde année de BTS, j'ai effectué mon stage dans une association de santé nommée À vos soins.
                            Chez À vos soins, j'ai dû aider le développeur à réaliser des maintenances et des mises à jours sur l'application principale de l'association durant cinq semaines.
                        </p> 
                    </div>
                </section>
            </div>
        </section>

        <div id="project" class="text-center text-5xl font-semibold">
            <p>Projets</p>
        </div>

        <section class="w-fit mx-auto my-20 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-8 md:gap-20">
            <div class="duration-300">
                <div class="max-w-80 border rounded">
                    <img class="m-auto" src="./assets/img/chantiers.png">
                    <p class="flex justify-center my-2 text-xl">EventApp</p>
                    <p class="ml-2">Application intene pour l'aide à la gestion de séminaire pour la "Communication"</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center text-md font-bold p-1 ml-2 bg-red-500 rounded">Html</p>
                        <p class="text-center text-md font-bold p-1 bg-blue-500 rounded">Css</p>
                        <p class="text-center text-md font-bold p-1 bg-green-500 rounded">Django/Python</p>
                    </div>
                </div>
                <a href="detail.php?nom=EventApp" class="flex justify-center text-gray-500 m-2 hover:text-white">Voir plus</a>
            </div>

            <div class="duration-300">
                <div class="max-w-80 border rounded">
                    <img class="m-auto" src="./assets/img/laravelcms.png">
                    <p class="flex justify-center my-2 text-xl">CMS Gestion</p>
                    <p class="ml-2">Application web permettant la gestion d'un site</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center text-md font-bold p-1 ml-2 bg-red-500 rounded">Html</p>
                        <p class="text-center text-md font-bold p-1 bg-blue-500 rounded">Css</p>
                        <p class="text-center text-md font-bold p-1 bg-red-500 rounded">php/Laravel</p>

                    </div>
                </div>
                <a href="detail.php?nom=CmsGestion" class="flex justify-center text-gray-500 m-2 hover:text-white">Voir plus</a>
            </div>
                        
            <div class="duration-300">
                <div class="max-w-80 border rounded">
                    <img class="m-auto" src="./assets/img/avs.png">
                    <p class="flex justify-center my-2 text-xl">Marsoins</p>
                    <p class="ml-2">Application mobile qui centralise des actions et les manipule</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center text-md font-bold p-1 ml-2 bg-sky-950 rounded">Java Android</p>
                    </div>
                </div>
                <a href="detail.php?nom=Marsoins" class="flex justify-center text-gray-500 m-2 hover:text-white">Voir plus</a>
            </div>
   
            <div class="duration-300">
                <div class="max-w-80 border rounded">
                    <img class="m-auto" src="./assets/img/chatDevops.png">
                    <p class="flex justify-center my-2 text-xl">ChatDevops</p>
                    <p class="ml-2">Chat public en direct avec une protection contre les cyber-attaques</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center text-md font-bold p-1 ml-2 bg-red-500 rounded">Html</p>
                        <p class="text-center text-md font-bold p-1 bg-blue-500 rounded">Css</p>
                        <p class="text-center text-md font-bold p-1 bg-yellow-500 rounded">Javascript</p>
                        <p class="text-center text-md font-bold p-1 bg-red-500 rounded">php/Laravel</p>
                    </div>
                </div>
                <a href="detail.php?nom=ChatDevops" class="flex justify-center text-gray-500 m-2 hover:text-white">Voir plus</a>
            </div>

            <div class="duration-300">
                <div class="max-w-80 border rounded">
                    <img class="m-auto" src="./assets/img/megacasting.jpg">
                    <p class="flex justify-center my-2 text-xl">MégaCasting</p>
                    <p class="ml-2">Application lourde pour la gestion et la création de casting</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center text-md font-bold p-1 ml-2 bg-purple-500 rounded">C#</p>
                    </div>
                </div>
                <a href="detail.php?nom=MegaCasting" class="flex justify-center text-gray-500 m-2 hover:text-white">Voir plus</a>
            </div>

            
            <div class="duration-300">
                <div class="max-w-80 border rounded">
                    <img class="m-auto" src="./assets/img/formulairejs.png">
                    <p class="flex justify-center my-2 text-xl">Formulaire Validation</p>
                    <p class="ml-2">Formulaire de validation et de vérification complet</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center text-md font-bold p-1 ml-2 bg-red-500 rounded">Html</p>
                        <p class="text-center text-md font-bold p-1 bg-blue-500 rounded">Css</p>
                        <p class="text-center text-md font-bold p-1 bg-yellow-500 rounded">Javascript</p>
                    </div>
                </div>
                <a href="detail.php?nom=FormJs" class="flex justify-center text-gray-500 m-2 hover:text-white">Voir plus</a>
            </div>

        </section>
    </div>

    <?php include('components/footer.html') ?>
</body>
</html>