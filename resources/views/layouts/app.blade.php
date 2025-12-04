<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo (Kiri) - Clickable -->
                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold text-gray-800 hover:text-yellow-500 transition">
                     Glazzy Banana
                    </a>
                </div>
                
                <!-- Navigation Links (Kanan) -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('home') }}" 
                       class="text-gray-700 hover:text-yellow-500 text-sm font-medium transition">
                        Katalog
                    </a>
                    <a href="{{ route('admin.kategori.index') }}" 
                       class="text-gray-700 hover:text-yellow-500 text-sm font-medium transition {{ request()->routeIs('admin.kategori.*') ? 'text-yellow-500 font-bold' : '' }}">
                        Admin Kategori
                    </a>
                    <a href="{{ route('admin.produk.index') }}" 
                       class="text-gray-700 hover:text-yellow-500 text-sm font-medium transition {{ request()->routeIs('admin.produk.*') ? 'text-yellow-500 font-bold' : '' }}">
                        Admin Produk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="py-8">
        @yield('content')
    </main>
</body>
</html>
