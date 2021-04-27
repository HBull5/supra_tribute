<nav class="z-10 fixed top-0 right-0 w-full flex">
    <!-- Desktop Nav -->
    <div class="hidden lg:flex h-16 w-full shadow-2xl bg-red-600 justify-center items-center animate__animated animate__fadeInDown">
        <div class="lg:flex container mx-auto flex justify-between items-center px-3">
            <a href="/">
                <h1 class="text-3xl text-white roboto-thick transition duration-300 transform hover:scale-105">
                    Supra Tribute
                </h1>
            </a>

            <ul class="flex justify-center items-center">
                <a class="roboto-thick pr-2 transition duration-300 text-white transform hover:scale-110 hover:font-extrabold" href="/">
                    <li>Home</li>
                </a>
                <a class="roboto-thick px-2 transition duration-300 text-white transform hover:scale-110 hover:font-extrabold"
                    href="/gallery.php">
                    <li>Gallery</li>
                </a>
                <a class="roboto-thick px-2 transition duration-300 text-white transform hover:scale-110 hover:font-extrabold"
                    href="/models.php">
                    <li>Models</li>
                </a>
                <a class="roboto-thick pl-2 transition duration-300 text-white transform hover:scale-110 hover:font-extrabold"
                    href="/history.php">
                    <li>History</li>
                </a>
            </ul>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="flex lg:hidden w-full">
        <!-- Mobile Nav Collapse -->
        <div id="mobile-nav-collapsed"
            class="h-16 flex justify-between items-center bg-red-600 justify-between items-center w-full px-3">
            <a href="#">
                <h1 class="text-3xl roboto-thick text-white transition duration-300 transform hover:scale-105">
                    Supra Tribute
                </h1>
            </a>
            <i id="mobile-open-btn" class="fas fa-bars cursor-pointer text-3xl text-white rounded-md px-2 py-1"></i>
        </div>

        <!-- Mobile Nav Expanded -->
        <div id="mobile-nav-expanded" class="hidden h-screen w-full transition duration-300">
            <ul class="h-full w-full flex flex-col justify-center items-center text-white bg-red-600">
                <li>
                    <i id="mobile-close-btn" class="fas fa-times text-white text-3xl mb-5"></i>
                </li>
                <li class="text-xl mb-5 roboto-thick"><a href="/">Home</a></li>
                <li class="text-xl mb-5 roboto-thick"><a href="/gallery.php">Gallery</a></li>
                <li class="text-xl mb-5 roboto-thick"><a href="/models.php">Models</a></li>
                <li class="text-xl mb-5 roboto-thick"><a href="/history.php">History</a></li>
            </ul>
        </div>
    </div>

    <!-- Nav Script -->
    <script src="js/nav.js" defer></script>
</nav>