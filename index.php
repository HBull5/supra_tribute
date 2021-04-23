<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include './components/head.php';?>
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/home.css">
    <!-- Custom JS -->
    <script src="js/home.js" defer></script>
    <title>Supra Tribute | Home</title>
</head>

<body>

    <!-- Navigation -->
    <?php include './components/nav.php';?>

    <!-- Showcase -->
    <section id="showcase" class="h-screen">
        <div class="h-5/6 overflow-hidden container mx-auto flex flex-col sm:flex-row justify-center items-center px-5">
            <!-- Logo + Text + Buttons -->
            <div class="h-full w-4/6 flex flex-col justify-center items-center">
                <img class="mb-3 animate__animated animate__fadeInUp" src="/img/supra_logo.svg" alt="" />
                <div
                    class="flex flex-col justify-center items-center animate__animated animate__fadeInDown animate__delay-1s">
                    <p class="mb-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur expedita nostrum asperiores?
                        Reiciendis suscipit est explicabo autem, nam sint, ad cumque nesciunt error similique aliquid
                        nemo
                        modi nobis vel quae delectus iusto voluptatibus porro! Enim iure et dolore, aliquam quod optio
                        vitae
                        esse deserunt provident, ab beatae repudiandae corrupti! Praesentium since 1978.
                    </p>
                    <div class="flex">
                        <a href="/history.php"
                            class="px-5 py-1 mx-4 bg-red-600 text-white cursor-pointer transition duration-300 transform hover:scale-105">
                            History
                        </a>
                        <a href="#stats"
                            class="px-5 py-1 mx-4 bg-red-600 text-white cursor-pointer transition duration-300 transform hover:scale-105">
                            Stats
                        </a>
                    </div>
                </div>
            </div>
            <!-- Supra -->
            <div
                class="h-full w-2/6 hidden lg:flex justify-center items-center p-3 animate__animated animate__fadeInRight">
                <img id="car" class="cursor-pointer transition duration-300 transform hover:scale-110"
                    src="/img/supra.png" alt="" />
            </div>
        </div>
        <!-- Scroll Down -->
        <div
            class="h-1/6 flex flex-col justify-end items-center pb-3 animate__animated animate__fadeIn animate__delay-2s text-xl">
            <i class="fas fa-chevron-down"></i>
            <p>Scroll Down</p>
        </div>
    </section>

    <!-- Stats -->
    <section id="stats" class="bg-red-600 text-white text-center text-3xl">
        <div class="container mx-auto flex flex-col justify-center items-center py-28">
            <div class="flex w-full justify-between items-center mb-5">
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Top Speed</h3>
                    <p class="counter" data-max="244">0</p>
                </div>
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Weight</h3>
                    <p class="counter" data-max="3300">0</p>
                </div>
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Quarter Mile</h3>
                    <p class="counter" data-max="6">0</p>
                </div>
            </div>

            <div class="flex w-full justify-between items-center mb-5">
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Horsepower</h3>
                    <p class="counter" data-max="2500">0</p>
                </div>
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Cylinders</h3>
                    <p class="counter" data-max="6">0</p>
                </div>
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Boost</h3>
                    <p class="counter" data-max="4000000">0</p>
                </div>
            </div>

            <div class="flex w-full justify-between items-center">
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Units Sold</h3>
                    <p class="counter" data-max="160488">0</p>
                </div>
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Price</h3>
                    <p class="counter" data-max="56378">0</p>
                </div>
                <div class="w-1/3">
                    <h3 style="font-family: 'Molle'">Generations</h3>
                    <p class="counter" data-max="5">0</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include './components/footer.php';?>

</body>

</html>