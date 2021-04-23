<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include './components/head.php';?>

<body class="overflow-x-hidden" style="font-family: 'Roboto'">

    <!-- Navigation -->
    <?php include './components/nav.php';?>

    <!-- Showcase -->
    <section class="h-screen container mx-auto flex justify-center items-center px-5">
        <div class="h-full w-4/6 flex flex-col justify-center items-center">
            <img class="mb-3 animate__animated animate__fadeInUp" src="/img/supra_logo.svg" alt="" />
            <div
                class="flex flex-col justify-center items-center animate__animated animate__fadeInDown animate__delay-1s">
                <p class="mb-4 text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Excepturi quaerat nisi accusantium optio corrupti
                    obcaecati aliquam, illum molestias since 1978.
                </p>
                <div class="flex">
                    <button
                        class="px-5 py-1 mx-4 bg-red-600 text-white transform transition duration-300 hover:bg-red-700 hover:scale-105">
                        History
                    </button>
                    <a href="/models.php"
                        class="px-5 py-1 mx-4 bg-red-600 text-white transform transition duration-300 hover:scale-105 hover:bg-red-700">
                        Models
                    </a>
                </div>
            </div>
        </div>
        <div
            class="h-full w-2/6 flex flex-col justify-center items-center p-3 animate__animated animate__fadeInRight animate__delay-2s">
            <img id="car" class="cursor-pointer transition duration-300 transform hover:scale-110" src="/img/supra.png"
                alt="" />
        </div>
    </section>

    <!-- Footer -->
    <?php include './components/footer.php';?>

</body>

</html>