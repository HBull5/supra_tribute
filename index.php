<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include './components/head.php';?>
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/home.css">
    <!-- Custom JS -->
    <script src="js/home.js" defer></script>
    <title>Home | Supra Tribute</title>
</head>

<body class="roboto-thin">

    <!-- Navigation -->
    <?php include './components/nav.php';?>

    <!-- Showcase -->
    <section id="showcase" class="h-screen">
        <div class="h-5/6 overflow-hidden container mx-auto flex flex-col sm:flex-row justify-center items-center px-5 relative top-16">
            <!-- Logo + Text + Buttons -->
            <div class="h-full w-1/2 flex flex-col justify-center items-center">
                <img class="mb-3 animate__animated animate__fadeInUp" src="/img/supra_logo.svg" alt="" />
                <div
                    class="flex flex-col justify-center items-center animate__animated animate__fadeInDown animate__delay-1s">
                    <p class="roboto-thin mb-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur expedita nostrum asperiores?
                        Reiciendis suscipit est explicabo autem, nam sint, ad cumque nesciunt error similique aliquid
                        nemo
                        modi nobis vel quae delectus iusto voluptatibus porro! Enim iure et dolore, aliquam quod optio
                        vitae
                        esse deserunt provident, ab beatae repudiandae corrupti! Praesentium since 1978.
                    </p>
                    <div class="flex">
                        <a href="/history.php"
                            class="px-5 py-1 mx-4 bg-red-600 text-white cursor-pointer transition duration-300 transform hover:scale-125">
                            History
                        </a>
                        <a href="#stats"
                            class="px-5 py-1 mx-4 bg-red-600 text-white cursor-pointer transition duration-300 transform hover:scale-125">
                            Stats
                        </a>
                    </div>
                </div>
            </div>
            <!-- Supra -->
            <div
                class="h-full w-1/2 hidden lg:flex justify-center items-center p-3 animate__animated animate__fadeInRight animate__delay-2s">
                <img id="car" class="cursor-pointer transition duration-300 transform hover:scale-110"
                    src="/img/supra.png" alt="" />
            </div>
        </div>
        <!-- Scroll Down -->
        <div
            class="h-1/6 hidden md:flex flex-col justify-end items-center pb-3 animate__animated animate__fadeIn animate__delay-3s text-xl">
            <i class="fas fa-chevron-down"></i>
            <p class="roboto-thin">Scroll Down</p>
        </div>
    </section>

    <!-- Stats -->
    <section id="stats" class="bg-red-600 text-white text-center text-xl md:text-3xl">
        <div class="container mx-auto flex flex-col justify-center items-center py-10 md:py-28">
            <div class="flex w-full justify-between items-center mb-5">
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Top Speed</h3>
                    <p class="counter" data-max="244">0</p>
                </div>
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Weight</h3>
                    <p class="counter" data-max="3300">0</p>
                </div>
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Quarter Mile</h3>
                    <p class="counter" data-max="6">0</p>
                </div>
            </div>

            <div class="flex w-full justify-between items-center mb-5">
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Horsepower</h3>
                    <p class="counter" data-max="2500">0</p>
                </div>
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Cylinders</h3>
                    <p class="counter" data-max="6">0</p>
                </div>
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Boost</h3>
                    <p class="counter" data-max="44">0</p>
                </div>
            </div>

            <div class="flex w-full justify-between items-center">
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Units Sold</h3>
                    <p class="counter" data-max="160488">0</p>
                </div>
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Price</h3>
                    <p class="counter" data-max="56378">0</p>
                </div>
                <div class="w-1/3 mb-3">
                    <h3 class="roboto-thick">Generations</h3>
                    <p class="counter" data-max="5">0</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include './components/footer.php';?>

</body>

</html>