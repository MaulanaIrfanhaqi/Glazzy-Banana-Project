<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Glazzy Banana</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-yellow-50 to-white min-h-screen flex items-center justify-center">
    
    <div class="w-full max-w-md px-6">
        <!-- Logo -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Glazzy Banana</h1>
            <p class="text-gray-600">Panel Admin</p>
        </div>

        <!-- Card Login -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            {{ $slot }}
        </div>

        <!-- Back to Home -->
        <div class="mt-6 text-center">
            <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-yellow-600 transition">
                ← Kembali ke Beranda
            </a>
        </div>
    </div>

</body>
</html>
