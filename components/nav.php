<!-- Navigation -->
<nav class="h-screen z-10 fixed w-full">
    <!-- Desktop Nav -->
    <div class="h-16 shadow-2xl bg-red-600 flex justify-center items-center">
        <div class="hidden lg:flex container mx-auto flex justify-between items-center px-3">
            <a href="/">
                <h1 class="text-3xl text-white transition duration-300 transform hover:scale-105"
                    style="font-family: 'Molle'">
                    Supra Tribute
                </h1>
            </a>

            <ul class="flex justify-center items-center">
                <a class="pr-2 transition duration-300 text-white transform hover:scale-110 hover:font-bold" href="/">
                    <li>Home</li>
                </a>
                <a class="px-2 transition duration-300 text-white transform hover:scale-110 hover:font-bold"
                    href="/gallery.php">
                    <li>Gallery</li>
                </a>
                <a class="px-2 transition duration-300 text-white transform hover:scale-110 hover:font-bold"
                    href="/models.php">
                    <li>Models</li>
                </a>
                <a class="pl-2 transition duration-300 text-white transform hover:scale-110 hover:font-bold"
                    href="/history.php">
                    <li>History</li>
                </a>
            </ul>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="h-full flex lg:hidden justify-between items-center w-full">
        <a class="hidden" href="#">
            <h1 class="text-3xl text-white transition duration-300 transform hover:scale-105"
                style="font-family: 'Molle'">
                Supra Tribute
            </h1>
        </a>
        <i class="hidden" id="mobile-menu-btn" class="fas fa-bars cursor-pointer text-3xl text-white border rounded-md px-2 py-1"></i>

        <ul class="h-full w-full flex flex-col justify-center items-center text-white bg-red-600">
            <li>
                <a class="hidden" href="#">
                    <h1 class="text-3xl text-white transition duration-300 transform hover:scale-105"
                        style="font-family: 'Molle'">
                        Supra Tribute
                    </h1>
                </a>
            </li>
            <li><a href="/">Home</a></li>
            <li><a href="/gallery.php">Gallery</a></li>
            <li><a href="/models.php">Models</a></li>
            <li><a href="/history.php">History</a></li>
        </ul>
    </div>

    <!-- Nav Script -->
    <script src="js/nav.js" defer></script>
</nav>