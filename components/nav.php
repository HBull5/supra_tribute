<!-- Navigation -->
<nav class="h-screen z-10 fixed w-full flex">
    <!-- Desktop Nav -->
    <div class="hidden h-16 shadow-2xl bg-red-600 flex justify-center items-center">
        <div class="lg:flex container mx-auto flex justify-between items-center px-3">
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
    <div class="h-full flex lg:hidden w-full">
        <!-- Mobile Nav Collapse -->
        <div id="mobile-nav-collapsed"
            class="h-16 flex justify-between items-center bg-red-600 justify-between items-center w-full px-3">
            <a href="#">
                <h1 class="text-3xl text-white transition duration-300 transform hover:scale-105"
                    style="font-family: 'Molle'">
                    Supra Tribute
                </h1>
            </a>
            <i id="mobile-open-btn" class="fas fa-bars cursor-pointer text-3xl text-white rounded-md px-2 py-1"></i>
        </div>

        <!-- Mobile Nav Expanded -->
        <div id="mobile-nav-expanded" class="hidden w-full transition duration-300">
            <ul class="h-full w-full flex flex-col justify-center items-center text-white bg-red-600">
                <li>
                    <i id="mobile-close-btn" class="fas fa-times text-white text-3xl mb-5"></i>
                </li>
                <li class="text-xl mb-5"><a href="/">Home</a></li>
                <li class="text-xl mb-5"><a href="/gallery.php">Gallery</a></li>
                <li class="text-xl mb-5"><a href="/models.php">Models</a></li>
                <li class="text-xl mb-5"><a href="/history.php">History</a></li>
            </ul>
        </div>
    </div>

    <!-- Nav Script -->
    <script src="js/nav.js" defer></script>
</nav>