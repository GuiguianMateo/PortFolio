<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio-Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50">
    <?php include('components/header.html') ?>

    <div class="">
        <div class="my-8 flex gap-20">
            <p class="hidden md:block ms-auto my-auto text-5xl font-extrabold italic">Présentation</p>
            <div class="md:me-auto md:w-1/3 mx-auto md:mx-0 w-1/2 h-auto bg-blue-200 border-black border-2 rounded-md p-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis dolorem cupiditate obcaecati temporibus porro, commodi quisquam sequi enim, dolore laudantium deserunt quam quo repudiandae in. Quidem veniam doloremque non tempora?
            </div>
        </div>
        <div class="bg-white justify-center 
                    border-2 rounded-md border-black
                    my-12 p-12 w-2/3 mx-auto">
                    
            <img src="assets/img/way.png" class="float-left my-auto mr-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati deleniti unde maiores facilis, dolor saepe? Cupiditate quae temporibus obcaecati minus fugiat dolorum natus. Quae nobis architecto repudiandae? A, facere esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis dolorem cupiditate obcaecati temporibus porro, commodi quisquam sequi enim, dolore laudantium deserunt quam quo repudiandae in. Quidem veniam doloremque non tempora?</p>
        </div>

        <div class="flex justyfy-center overflow-hidden gap-8
                    sm:gap-20">
            <div class="justyfy-center ms-auto sm:w-52 w-auto h-auto mb-10 bg-blue-200 border-black border-2 rounded-md p-4">
            <h1 class="text-center"> Compétences</h1>
            <ul class="text-left justify-center">
                    <li>DEBOOKIEZ</li>
                    <li>FASCINENT</li>
                    <li>REEGARAIS</li>
                    <li>DEBOSSEUR</li>
                    <li>BIPINNEES</li>
                </ul>
            </div>
            
            <div class="justyfy-center me-auto sm:w-52 w-auto h-auto mb-10 bg-blue-200 border-black border-2 rounded-md p-4">
                <h1 class="text-center">Passion</h1>
                <ul class="text-left justify-center">
                    <li>DEBOOKIEZ</li>
                    <li>FASCINENT</li>
                    <li>REEGARAIS</li>
                    <li>DEBOSSEUR</li>
                    <li>BIPINNEES</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include('components/footer.html') ?>

</body>
</html>