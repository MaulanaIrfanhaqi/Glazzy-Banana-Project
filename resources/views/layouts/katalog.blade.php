<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog - Glazzy Banana</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    <!-- Navbar Public -->
    <body class="bg-gray-50">
    
    <!-- ✅ NAVBAR -->
    <nav class="bg-white w-full border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto flex justify-between items-center py-5 px-6">
            <a href="{{ route('home') }}" class="font-bold text-2xl text-gray-800 flex items-center hover:text-yellow-600 transition">
                Glazzy Banana
            </a>
            
            <div class="flex gap-8">
                <a href="{{ route('home') }}" class="text-gray-900 hover:text-yellow-600 font-semibold transition duration-200">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-yellow-600 font-medium transition duration-200">
                    About
                </a>
                <a href="{{ route('katalog') }}" class="text-gray-600 hover:text-yellow-600 font-medium transition duration-200">
                    Katalog
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>
