<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page')</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah di-compile -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

   <!-- resources/views/partials/navbar.blade.php -->
<nav class="bg-gradient-to-r from-blue-500 to-teal-500 shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="text-white font-bold text-xl">
                    <svg class="h-8 w-8 text-white mr-2 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                    </svg>
                    BrandLogo
                </a>
            </div>

            <!-- Primary Navbar items (desktop) -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-white text-lg hover:text-gray-200 transition duration-300">Home</a>
                <a href="#about" class="text-white text-lg hover:text-gray-200 transition duration-300">About</a>
                <a href="#services" class="text-white text-lg hover:text-gray-200 transition duration-300">Services</a>
                <a href="#contact" class="text-white text-lg hover:text-gray-200 transition duration-300">Contact</a>
            </div>

            <!-- Secondary Navbar items (desktop) -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="bg-white text-blue-500 py-2 px-4 rounded-lg font-semibold hover:bg-gray-200 transition duration-300">Sign Up</a>
                <a href="#" class="bg-transparent border border-white text-white py-2 px-4 rounded-lg font-semibold hover:bg-white hover:text-blue-500 transition duration-300">Log In</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu (hidden by default) -->
    <div class="mobile-menu hidden md:hidden bg-gradient-to-r from-blue-500 to-teal-500">
        <a href="#home" class="block py-2 px-4 text-white text-center hover:bg-blue-600 transition duration-300">Home</a>
        <a href="#about" class="block py-2 px-4 text-white text-center hover:bg-blue-600 transition duration-300">About</a>
        <a href="#services" class="block py-2 px-4 text-white text-center hover:bg-blue-600 transition duration-300">Services</a>
        <a href="#contact" class="block py-2 px-4 text-white text-center hover:bg-blue-600 transition duration-300">Contact</a>
        <div class="py-2 px-4 text-center">
            <a href="#" class="block py-2 px-4 text-blue-500 bg-white rounded-lg font-semibold hover:bg-gray-200 transition duration-300">Sign Up</a>
            <a href="#" class="mt-2 block py-2 px-4 text-white border border-white rounded-lg font-semibold hover:bg-white hover:text-blue-500 transition duration-300">Log In</a>
        </div>
    </div>
</nav>

<script>
    document.querySelector('.mobile-menu-button').addEventListener('click', () => {
        document.querySelector('.mobile-menu').classList.toggle('hidden');
    });
</script>


    <main>
        @yield('content')
    </main>

</body>
</html>
