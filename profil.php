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
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis dolorem cupiditate obcaecati temporibus porro, commodi quisquam sequi enim, dolore laudantium deserunt quam quo repudiandae in. Quidem veniam doloremque non tempora?
            </div>
        </div>
        <div class="bg-gray-500/50 justify-center 
                    border-2 rounded-md border-white hover:border-sky-800
                    my-40 p-12 w-4/6 mx-auto">
                    
            <img src="assets/img/way.png" class="float-left my-auto mr-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati deleniti unde maiores facilis, dolor saepe? Cupiditate quae temporibus obcaecati minus fugiat dolorum natus. Quae nobis architecto repudiandae? A, facere esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis dolorem cupiditate obcaecati temporibus porro, commodi quisquam sequi enim, dolore laudantium deserunt quam quo repudiandae in. Quidem veniam doloremque non tempora?</p>
        </div>
        <div class="flex justify-center my-40 pb-10">
            <ul class="list-none border-2 border-blue-1500">
                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">21st Jun 2019</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">What Is Lorem Ipsum?</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </li>

                <li class="p-5 relative cursor-pointer hover:bg-gray-500/50">
                    <span class="display-block bg-sky-800 rounded-3xl px-0.5 py-1.5 text-base align-center">21st Jun 2019</span>
                    <div class="content">
                        <h3 class="color-blue-500 text-lg pt-1.5">What Is Lorem Ipsum?</h3>
                        <p class="pt-1.5 pb-4 text-lg">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
 


        <div class="flex justyfy-center my-40 overflow-hidden gap-8
                    sm:gap-20">
            <div class="justyfy-center ms-auto sm:w-52 w-auto h-auto mb-10 bg-gray-500/50 border-white border-2 rounded-md p-4">
            <h1 class="text-center"> Compétences</h1>
            <ul class="text-left justify-center">
                    <li>DEBOOKIEZ</li>
                    <li>FASCINENT</li>
                    <li>REEGARAIS</li>
                    <li>DEBOSSEUR</li>
                    <li>BIPINNEES</li>
                </ul>
            </div>
            
            <div class="justyfy-center me-auto sm:w-52 w-auto h-auto mb-10 bg-gray-500/50 border-white border-2 rounded-md p-4">
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

        <div class="flex justify-center items-center my-40">
            <div class="hover:translate-y-2 hover:duration-300 ease-in-out">
                <a class="flex justify-center items-center border-white hover:border-sky-800 p-3 rounded-md border-2 bg-gray-500/50" href="assets/download/CV.pdf" download>Mon CV ici</a>
            </div>
        </div>
    </div>

    <?php include('components/footer.html') ?>

</body>
</html>