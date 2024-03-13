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

    <?php
        $nom = $_REQUEST['nom'];
        $type = ""; 

        if($nom == "Chantiers"){
            $nom = "Chantiers de l'atlantique";
            $type = "entreprise";
        } elseif($nom == "AvosSoins"){
            $nom = "A vos Soins";
            $type = "assossiation";
        }
    ?>
    <div>
        <p>Bonsoir je vous présente l'<?php echo $type . " " . $nom ?> </p>
    </div>

    <?php include('components/footer.html') ?>

</body>
</html>