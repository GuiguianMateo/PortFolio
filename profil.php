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
                Je suis un jeune developpeur encore en étude, j'expérimente au maximum les différents types de développement pour connaître celui qui me correspond.
                Découvrir de nouveaux langages et framework afin d'élargir mes connaissances.     
            </div>
        </div>
        <div class="bg-gray-500/50 justify-center 
                    border-2 rounded-md border-white hover:border-sky-800
                    my-40 p-12 w-4/6 mx-auto">
                    
            <img src="assets/img/way.png" class="float-left my-auto mr-8">
            <p>Mon parcours éducatif a débuté au collège La fontaine à Missillac où j'ai exploré diverses matières. Réalisant ma seconde générale à Savenay, je me suis dirigé au lycée Aristide Briand à St Nazaire pour passer en Bac techno STI2D,
                 j'ai approfondi mes connaissances, notamment dans les matières scientifiques. Actuellement étudiant en 2ème années de BTS SIO au campus IIA à St Nazaire, je me spécialise en développement informatique.</p>
        </div>

        <div class="flex justify-center my-40 pb-10 gap-20">
            <div class="border border-sky-700 hidden sm:block"></div>
            <ul class="list-none border-2 border-blue-1500">
                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">Juin 2024</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">Preparation BTS</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Préparation aux épreuves du BTS SIO option SLAM.
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
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">Juin 2019</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">Brevet des collèges</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Possession du diplôme avec mention.
                        </p>
                    </div>
                </li>

                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">Avril 2018</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">PSC1</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Obtention de ma certification à la formation du PSC1.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
 


        <section class="w-fit mx-auto grid grid-cols-1 xl:grid-cols-3 md:grid-cols-2 gap-8 md:gap-32 mt-10 mb-5">
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/html.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-red-500 h-full rounded-md absolute top-0 left-0" style="width: 85%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/css-3.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-blue-500 h-full rounded-md absolute top-0 left-0" style="width: 85%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/laravel.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-gray-500 h-full rounded-md absolute top-0 left-0" style="width: 75%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/js.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-yellow-300 h-full rounded-md absolute top-0 left-0" style="width: 50%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/python.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-yellow-500 h-full rounded-md absolute top-0 left-0" style="width: 60%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/csharp.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-purple-400 h-full rounded-md absolute top-0 left-0" style="width: 20%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/java.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-sky-950 h-full rounded-md absolute top-0 left-0" style="width: 40%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/wordpress.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-sky-700 h-full rounded-md absolute top-0 left-0" style="width: 35%;"></div>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="my-auto" src="./assets/img/serveur-sql.png">
                <div class="my-auto rounded-md border h-4 w-64 relative">
                    <div class="bg-gray-200 h-full rounded-md absolute top-0 left-0" style="width: 85%;"></div>
                </div>
            </div>                
        </section>

        <div class="flex justify-center items-center my-40">
            <div class="hover:translate-y-2 hover:duration-300 ease-in-out">
                <a class="flex justify-center items-center border-white hover:border-sky-800 p-3 rounded-md border-2 bg-gray-500/50" href="assets/download/CV_BTS_Guiguian_Mateo.pdf" download>Mon CV ici</a>
            </div>
        </div>
    </div>

    <?php include('components/footer.html') ?>

</body>
</html>