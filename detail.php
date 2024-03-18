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
        
        if($nom == "FormJs"){
        ?>
            <p>FormJs</p>
        <?php       
        }elseif($nom == "ChatDevops"){
        ?>
            <p>Chat dev</p>
        <?php
        }elseif($nom == "MegaCasting"){
        ?>
            <p>casting</p>
        <?php
        }elseif($nom == "EventApp"){
        ?>
            <div class="">
                <p class="text-center text-5xl text-white">Event-App</p>
                <div class="">

                </div>
            </div>
        <?php
        }elseif($nom == "Marsoins"){
        ?>
            <p>maroins</p>
        <?php
        }elseif($nom == "CmsGestion"){
        ?>
            <p>CmsGestion</p>
        <?php
        }
    ?>

    <?php include('components/footer.html') ?>

</body>
</html> 