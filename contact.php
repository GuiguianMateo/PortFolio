<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio-Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50">
    <?php include('components/header.html') ?>
    <div class=" lg:mt-8 mb-8 p-4 mx-auto">
        <div class="justify-center text-center">
            <h1 class="text-3xl font-semibold">Vous souhaitez me contacter?</h1><br>
            <h1 class="text-xl">Voici tous les renseignements que <br>vous avez besoin ci-dessous</h1>
        </div>

        <div class="lg:flex justify-center gap-40 mt-20 bg-white border-black border-2 rounded-md">
            <div >
                <img src="MA GUEULE" class="rounded-full w-80 h-80">
            </div>

            <div class="flex my-auto bg-orange-50">
                <div class="">
                    <a  href="tel:0659086613"
                        class="lg:flex p-5 m-5 bg-yellow-500 rounded-md">
                        <img src="assets/img/call.png" class="mr-4 my-auto">
                        0659086613
                    </a>
                    <a  href="mailto:mateoggn04@gmail.com"
                        class="lg:flex p-5 m-5 bg-red-500 rounded-md">
                        <img src="assets/img/email.png" class="mr-4 my-auto">
                        mateoggn04@gmail.com
                    </a>
                </div>                                                      
          
                <div>
                    <a  href="https://www.google.com/maps?q=iia+st+nazaire&FORM=HDRSC6&cp=47.252261%7E-2.258434&lvl=16.9"
                        class="lg:flex p-5 m-5 bg-red-500 rounded-md">
                        <img src="assets/img/maps-and-flags.png" class="mr-4 my-auto">
                        IIA St Nazaire    
                   </a>
                    <a  href="https://www.google.com/maps?q=st+reine+de+bratagne+france&FORM=HDRSC6&cp=47.440591%7E-2.193845&lvl=13.6"
                        class="lg:flex p-5 m-5 bg-red-500 rounded-md">
                        <img src="assets/img/map.png" class="mr-4 my-auto">
                        Ste Reine de Bretagne
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php include('components/footer.html') ?>
</body>
</html>