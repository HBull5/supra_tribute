<!-- Navigation -->
<nav class="h-16 shadow-2xl bg-red-600 flex justify-center items-center z-10 fixed w-full">
    <!-- Desktop Nav -->
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

    <!-- Mobile Nav -->
    <div class="flex lg:hidden justify-between items-center px-3 w-full">
        <a href="#">
            <h1 class="text-3xl text-white transition duration-300 transform hover:scale-105"
                style="font-family: 'Molle'">
                Supra Tribute
            </h1>
        </a>
        <i class="fas fa-bars text-3xl text-white border rounded-md px-2 py-1"></i>
    </div>

    <!-- Nav Script -->
    <script src="js/nav.js" defer></script>
</nav>