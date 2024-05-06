<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/logo/favicon.ico">
</head>
<body class="bg-blue-1500 text-white">

    <?php include('components/header.html') ?>

        <div class="w-full">
            <div class="sm:flex justify-center">
                <p class="flex justify-center py-12 sm:m-auto font-serif text-3xl lg:text-5xl xl:text-7xl 2xl:text-9xl italic">Mon</p>
                <img src="./assets/img/bateau" class="w-full sm:w-1/2">
            </div>
            <div class="sm:flex justify-center">
                <img src="./assets/img/bateau" class="hidden sm:block w-1/2">
                <p class="flex justify-center py-12 sm:m-auto font-serif text-3xl lg:text-5xl xl:text-7xl 2xl:text-9xl italic">Portfolio</p>
            </div>
        </div>

    <?php include('components/footer.html') ?>

</body>
</html> 