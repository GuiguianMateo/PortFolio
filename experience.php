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

        <div class="flex justyfy-center my-40 overflow-hidden gap-5 sm:gap-20">
            <div class="justyfy-center float-left ms-auto w-5/12 sm:w-1/3 h-auto bg-gray-500/50 border-white hover:border-sky-800 border-2 rounded-md p-4">
            <h1 class="text-center">Duc d'aiguillon</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta similique quia fuga nihil vel quae assumenda nesciunt doloribus, nobis aspernatur nulla? Ex, rem odit odio quidem quae minima voluptatem neque.</p> 
            </div>
            
            <div class="justyfy-center float-left me-auto w-5/12 sm:w-1/3 h-auto bg-gray-500/50 border-white hover:border-sky-800 border-2 rounded-md p-4">
                <h1 class="text-center">Les Albatros</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta similique quia fuga nihil vel quae assumenda nesciunt doloribus, nobis aspernatur nulla? Ex, rem odit odio quidem quae minima voluptatem neque.</p> 
            </div>
        </div>

        <div class="max-w-xl mx-auto my-40">
            <div id="default-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative h-56 rounded-lg border-2 border-white sm:h-64 xl:h-80 2xl:h-96">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>

                        <img src="" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        
                        <img src="" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        <a class="justify-center flex" href="detail.php?nom=AvosSoins">Voir plus A</a>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>

                        <img src="" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        <a class="justify-center flex" href="detail.php?nom=Chantiers">Voir plus C</a>
                    </div>
                </div>

                <div class="flex absolute bottom-5 left-1/2 z-30 sapce-x-3 -translate-x-1/2">
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-1" data-carousel-slite-to="0"></button>
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-2" data-carousel-slite-to="1"></button>
                    <button class="w-3 h-3 rounded-md" aria-current="false" aria-label="Slide-3" data-carousel-slite-to="2"></button>
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
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

    <?php include('components/footer.html') ?>
</body>
</html>