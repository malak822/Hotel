<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hôtel - Luxe & Confort')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="public/images" href="{{ asset('images/Screenshot 2025-12-06 224749.png') }}">
    <style>


    </style>
</head>
<body>
   <body class="bg-gray-900 text-white">

    <!-- Navbar ثابت في كل الصفحات -->
    <nav class="fixed top-0 w-full bg-black bg-opacity-40 backdrop-blur z-50">
        <div class="container mx-auto px-6 py-5 flex justify-between items-center">
            <a href="/" class="text-3xl font-bold">HÔTEL Hyatt Centric Jumeirah </a>
            <div class="space-x-8 text-lg">
                <a href="/" class="hover:text-amber-400">Accueil</a>
                <a href="/chambres" class="hover:text-amber-400">Chambres</a>
                <a href="/services" class="hover:text-amber-400">Services</a>
                <a href="/contact" class="hover:text-amber-400">Contact</a>
                <a href="/reservation" class="bg-amber-500 text-black px-8 py-4 rounded-full font-bold">Réserver</a>
            </div>
        </div>
    </nav>

    <!-- مسافة عشان الـ navbar الثابت -->
    <div class="pt-20">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-black py-12 text-center mt-20">
        <p>© {{ date('Y') }} Hôtel Hyatt Centric Jumeirah - Tous droits réservés</p>
    </footer>  
</body>
</html>