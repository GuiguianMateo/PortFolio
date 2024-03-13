<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio-Profil</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-1500 text-white">
    <?php include('components/header.html') ?>

    <div>
        <div class="my-40 flex gap-20">
            <p class="hidden md:block ms-auto my-auto text-5xl font-extrabold italic">Présentation</p>
            <div class="md:me-auto md:w-1/3 mx-auto md:mx-0 w-3/4 h-auto bg-gray-500/50 border-white hover:border-sky-800 border-2 rounded-md p-4">
                Je suis un jeune developpeur encore en étude, j'expérimente au maximum les différents types de developpement pour conaitre celui qui me correspond.
                Découvrir de nouveaux langages et framework afin d'élargir mes connaissances              
            </div>
        </div>
        <div class="bg-gray-500/50 justify-center 
                    border-2 rounded-md border-white hover:border-sky-800
                    my-40 p-12 w-4/6 mx-auto">
                    
            <img src="assets/img/way.png" class="float-left my-auto mr-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati deleniti unde maiores facilis, dolor saepe? Cupiditate quae temporibus obcaecati minus fugiat dolorum natus. Quae nobis architecto repudiandae? A, facere esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis dolorem cupiditate obcaecati temporibus porro, commodi quisquam sequi enim, dolore laudantium deserunt quam quo repudiandae in. Quidem veniam doloremque non tempora?</p>
        </div>

        <div class="flex justify-center my-40 pb-10 gap-20">
            <div class="border border-sky-700"></div>
            <ul class="list-none border-2 border-blue-1500">
                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">Avril 2018</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">PSC1</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Obtention de ma certification à la formation du PSC1.
                        </p>
                    </div>
                </li>

                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">Juin 2019</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">Brevet des collèges</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Possession du diplôme avec mention.
                        </p>
                    </div>
                </li>

                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">Juin 2022</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">Baccalauréat</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Titulaire du Bac STI2D avec mention.
                        </p>
                    </div>
                </li>

                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">Juin 2024</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">Preparation BTS</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Préparation aux épreuves du BTS SIO option SLAM.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
 


        <div class="justyfy-center my-40 overflow-hidden">
            <p class="text-center text-3xl">Connaissances</p>
            <div class="flex gap-32 justify-center mt-32">
                <div class="flex float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
                <div class="flex float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
                <div class="flex float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
            </div>

            <div class="flex gap-32 justify-center mt-32">
                <div class="flex float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
                <div class="flex float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
                <div class="flex float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
            </div>

            <div class="lg:flex justify-center gap-8 xl:gap-32 mt-12 lg:mt-32">
                <div class="flex xl:float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
                <div class="flex xl:float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
                <div class="flex xl:float-left gap-6">
                    <img class="my-auto" src="./assets/img/github.png">
                    <div class="my-auto border-white rounded-md border-2 h-4 w-64">
                        <div class="w-1/2 bg-red-500"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center my-40">
            <div class="hover:translate-y-2 hover:duration-300 ease-in-out">
                <a class="flex justify-center items-center border-white hover:border-sky-800 p-3 rounded-md border-2 bg-gray-500/50" href="assets/download/CV.pdf" download>Mon CV ici</a>
            </div>
        </div>
    </div>

    <?php include('components/footer.html') ?>

</body>
</html>