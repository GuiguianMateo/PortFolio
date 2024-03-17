<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio-Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="bg-blue-1500 text-white">
    <?php include('components/header.html') ?>

    <div>
        <div class="my-40">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim laboriosam officia, totam dolorum magni ipsam voluptatum, adipisci necessitatibus consectetur veritatis beatae provident sint. Laboriosam necessitatibus asperiores numquam commodi vitae sit.</p>
        </div>

        <section class="mx-auto grid grid-cols-1 md:grid-cols-2 my-40 gap-20 md:gap-0">
            <div class="mx-auto w-8/12 h-auto bg-gray-500/50 border-white hover:border-sky-800 border-2 rounded-md p-4">
                <h1 class="text-center">Le Duc d'Aiguillon</h1>
                <p>Le relais du Duc d'Aiguillon une crèperie coté dans le centre du croisic, j'y ai travailler durant toute la saison d'été precédent mon BTS (2022).
                   Durant cette periode j'ai pu établir mon propre rapport à la clientelle, "En gros il me donnais des truc à faire et je trouvais le meilleurs moyens d'accèder à leurs requete + mise dans une bonne situation/à l'aise"
                </p> 
            </div>
            
            <div class="mx-auto w-8/12 h-auto bg-gray-500/50 border-white hover:border-sky-800 border-2 rounded-md p-4">
                <h1 class="text-center">Les Albatros</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta similique quia fuga nihil vel quae assumenda nesciunt doloribus, nobis aspernatur nulla? Ex, rem odit odio quidem quae minima voluptatem neque.</p> 
            </div>
        </section>

        <div id="project" class="flex justify-center bg-red-500">
            <p>projets</p>
        </div>

        <section class="w-fit mx-auto my-20 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-8 md:gap-20">
            <div class="mx-auto duration-300">
                <div class="max-w-80 border-2 rounded">
                    <img class="my-2" src="./assets/img/bateau.jpg">
                    <p class="flex justify-center my-2">Formulaire Validation</p>
                    <p class="ml-2">Formulaire de validation complet</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center bg-red-500 rounded">Html</p>
                        <p class="text-center bg-blue-500 rounded">Css</p>
                        <p class="text-center bg-yellow-500 rounded">Java Script</p>
                    </div>
                </div>
                <a href="detail.php?nom=FormJs" class="flex justify-center text-gray-500/50 m-2 hover:text-white">Voir plus</a>
            </div>
   
            <div class="mx-auto duration-300">
                <div class="max-w-80 border-2 rounded">
                    <img class="mx-auto my-2" src="./assets/img/bateau.jpg">
                    <p class="flex justify-center my-2">ChatDevops</p>
                    <p class="ml-2">Chat public en direct avec une protection contre les cyber-attaques</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center bg-red-500 rounded">Html</p>
                        <p class="text-center bg-blue-500 rounded">Css</p>
                        <p class="text-center bg-yellow-500 rounded">Java Script</p>
                        <p class="text-center bg-red-500 rounded">php/Laravel</p>
                    </div>
                </div>
                <a href="detail.php?nom=ChatDevops" class="flex justify-center text-gray-500/50 m-2 hover:text-white">Voir plus</a>
            </div>

            <div class="mx-auto duration-300">
                <div class="max-w-80 border-2 rounded">
                    <img class="mx-auto my-2" src="./assets/img/bateau.jpg">
                    <p class="flex justify-center my-2">MégaCasting</p>
                    <p class="ml-2">Application lourd pour la gestion et la création de casting</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center bg-purple-500 rounded">C#</p>
                    </div>
                </div>
                <a href="detail.php?nom=MegaCasting" class="flex justify-center text-gray-500/50 m-2 hover:text-white">Voir plus</a>
            </div>

            <div class="mx-auto duration-300">
                <div class="max-w-80 border-2 rounded">
                    <img class="mx-auto my-2" src="./assets/img/bateau.jpg">
                    <p class="flex justify-center my-2">EventApp</p>
                    <p class="ml-2">Application intener pour l'aide à la gestion de séminaire pour la "Communication"</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center bg-red-500 rounded">Html</p>
                        <p class="text-center bg-blue-500 rounded">Css</p>
                        <p class="text-center bg-green-500 rounded">Django/Python</p>
                    </div>
                </div>
                <a href="detail.php?nom=EventApp" class="flex justify-center text-gray-500/50 m-2 hover:text-white">Voir plus</a>
            </div>

            <div class="mx-auto duration-300">
                <div class="max-w-80 border-white border-2 rounded">
                    <img class="mx-auto my-2" src="./assets/img/bateau.jpg">
                    <p class="flex justify-center my-2">Marsoins</p>
                    <p class="ml-2">Application mobile qui centralise leurs actions et les manipules</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center bg-sky-950 rounded">Java Android</p>
                    </div>
                </div>
                <a href="detail.php?nom=Marsoins" class="flex justify-center text-gray-500/50 m-2 hover:text-white">Voir plus</a>
            </div>

            <div class="mx-auto duration-300">
                <div class="max-w-80 border-white border-2 rounded">
                    <img class="mx-auto my-2" src="./assets/img/bateau.jpg">
                    <p class="flex justify-center my-2">CMS Gestion</p>
                    <p class="ml-2">Application web permettant la gestion d'un site</p>
                    <hr>
                    <div class="flex justify-start gap-4 my-2">
                        <p class="text-center bg-red-500 rounded">Html</p>
                        <p class="text-center bg-blue-500 rounded">Css</p>
                        <p class="text-center bg-red-500 rounded">php/Laravel</p>

                    </div>
                </div>
                <a href="detail.php?nom=CmsGestion" class="flex justify-center text-gray-500/50 m-2 hover:text-white">Voir plus</a>
            </div>
        </section>
            
        <!-- <div class="max-w-xl mx-auto my-20">
            <div id="default-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative h-96  rounded-lg border-2 border-white hover:border-sky-700">
                    
                    <div class="flex duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/.png" class="block absolute w-full h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href="detail.php?nom=FormJS" class="mx-auto mt-80 text-xl z-0 ">Voir Plus</a>
                    </div>
              
                    <div class="flex duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/.jpg" class="block absolute w-full h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href="detail.php?nom=ChatDevops" class="mx-auto mt-80 text-xl z-0 ">Voir Plus</a>
                    </div>

                    <div class="flex duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/.jpg" class="block absolute w-full h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href="detail.php?nom=MegaCasting" class="mx-auto mt-80 text-xl z-0 ">Voir Plus</a>
                    </div>
              
                    <div class="flex duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/.jpg" class="block absolute w-full h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href="detail.php?nom=EventApp" class="mx-auto mt-80 text-xl z-0 ">Voir Plus</a>
                    </div>
              
                    <div class="flex duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/.jpg" class="block absolute w-full h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href="detail.php?nom=Marsoins" class="mx-auto mt-80 text-xl z-0 ">Voir Plus</a>
                    </div>

                    <div class="flex duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/.jpg" class="block absolute w-full h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href="detail.php?nom=CmsGestion" class="mx-auto mt-80 text-xl z-0 ">Voir Plus</a>
                    </div>

                </div>

                <div class="flex absolute bottom-5 left-1/2 z-30 sapce-x-3 -translate-x-1/2">
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-1" data-carousel-slite-to="0"></button>
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-2" data-carousel-slite-to="1"></button>
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-3" data-carousel-slite-to="2"></button>
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-4" data-carousel-slite-to="3"></button>
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-5" data-carousel-slite-to="4"></button>
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-6" data-carousel-slite-to="5"></button>
                </div>

                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center
                    items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 
                                    bg-white-30 group-focus:ring-4 group-focus:white group-focus:outline-none ">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" file="none" stroke="currentColor"
                             viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path stroke-linecap="round"
                             stroke-linejoint="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Precedent</span>
                    </span>
                </button>

                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center
                    items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 
                                bg-white-30 group-focus:ring-4 group-focus:white group-focus:outline-none ">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" file="none" stroke="currentColor"
                             viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path stroke-linecap="round"
                             stroke-linejoint="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Suivant</span>
                    </span>
                </button>
            </div>
        </div> -->
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

    <?php include('components/footer.html') ?>
</body>
</html>