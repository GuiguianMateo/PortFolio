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

    <div>
        <a href="experience.php#project">Back</a>
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
            <p>eventapp</p>
        <?php
        }elseif($nom == "Marsoins"){
        ?>
            <p>maroins</p>
        <?php
        }elseif($nom == "CmsGestion"){
        ?>
            <p>maroins</p>
        <?php
        }
    ?>

    <?php include('components/footer.html') ?>

</body>
</html> 