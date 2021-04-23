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

<body style="font-family: 'Roboto'">

    <!-- Navigation -->
    <?php include './components/nav.php';?>

    <!-- Showcase -->
    <section
        class="overflow-hidden h-screen container mx-auto flex flex-col sm:flex-row justify-center items-center px-5">
        <!-- Logo + Text + Buttons -->
        <div class="h-full w-4/6 flex flex-col justify-center items-center">
            <img class="mb-3 animate__animated animate__fadeInUp" src="/img/supra_logo.svg" alt="" />
            <div
                class="flex flex-col justify-center items-center animate__animated animate__fadeInDown animate__delay-1s">
                <p class="mb-4 text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur expedita nostrum asperiores?
                    Reiciendis suscipit est explicabo autem, nam sint, ad cumque nesciunt error similique aliquid nemo
                    modi nobis vel quae delectus iusto voluptatibus porro! Enim iure et dolore, aliquam quod optio vitae
                    esse deserunt provident, ab beatae repudiandae corrupti! Praesentium since 1978.
                </p>
                <div class="flex">
                    <a href="/history.php"
                        class="px-5 py-1 mx-4 bg-red-600 text-white cursor-pointer transition duration-300 transform hover:scale-105">
                        History
                    </a>
                    <a href="/models.php"
                        class="px-5 py-1 mx-4 bg-red-600 text-white cursor-pointer transition duration-300 transform hover:scale-105">
                        Models
                    </a>
                </div>
            </div>
        </div>
        <!-- Supra -->
        <div class="h-full w-2/6 hidden lg:flex justify-center items-center p-3 animate__animated animate__fadeInRight">
            <img id="car" class="cursor-pointer transition duration-300 transform hover:scale-110" src="/img/supra.png"
                alt="" />
        </div>
    </section>

    <!-- Footer -->
    <?php include './components/footer.php';?>

</body>

</html>