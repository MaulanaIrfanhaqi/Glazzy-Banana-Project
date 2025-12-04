<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Glazzy Banana</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Navbar Admin -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo/Brand -->
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-gray-800"> Glazzy Banana - Admin Panel</h1>
                </div>
                
                <!-- User Info & Logout -->
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-700">
                        Halo, <strong>{{ Auth::user()->name }}</strong>
                    </span>
                    
                    <!-- ✅ TOMBOL LOGOUT -->
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        
        <!-- Alert Success -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Welcome Message -->
        <div class="bg-white shadow-sm rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                Selamat Datang di Dashboard Admin! 👋
            </h2>
            <p class="text-gray-600">
                Kelola produk, kategori, dan konten website Glazzy Banana dari sini.
            </p>
        </div>

        <!-- Dashboard Cards (Statistics) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            
            <!-- Card Total Produk -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Total Produk
                                </dt>
                                <dd class="text-3xl font-bold text-gray-900">
                                    {{ \App\Models\Produk::count() }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-3">
                    <a href="{{ route('admin.produk.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                        Lihat semua produk →
                    </a>
                </div>
            </div>

            <!-- Card Total Kategori -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Total Kategori
                                </dt>
                                <dd class="text-3xl font-bold text-gray-900">
                                    {{ \App\Models\Kategori::count() }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-3">
                    <a href="{{ route('admin.kategori.index') }}" class="text-sm text-green-600 hover:text-green-800 font-medium">
                        Lihat semua kategori →
                    </a>
                </div>
            </div>

       <!-- Quick Actions Menu -->
<div class="md:col-span-2 bg-white shadow-sm rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-900 mb-4">Menu Aksi Cepat</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Kelola Produk -->
        <a href="{{ route('admin.produk.index') }}" 
           class="flex flex-col items-center justify-center bg-blue-500 hover:bg-blue-600 text-white p-6 rounded-lg font-medium transition duration-200 shadow-sm hover:shadow-md min-h-[140px]">
            <svg class="h-10 w-10 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
            <span class="text-sm">Kelola Produk</span>
        </a>

        <!-- Kelola Kategori -->
        <a href="{{ route('admin.kategori.index') }}" 
           class="flex flex-col items-center justify-center bg-green-500 hover:bg-green-600 text-white p-6 rounded-lg font-medium transition duration-200 shadow-sm hover:shadow-md min-h-[140px]">
            <svg class="h-10 w-10 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            <span class="text-sm">Kelola Kategori</span>
        </a>

        <!-- Lihat Website -->
        <a href="{{ route('home') }}" target="_blank"
           class="flex flex-col items-center justify-center bg-gray-500 hover:bg-gray-600 text-white p-6 rounded-lg font-medium transition duration-200 shadow-sm hover:shadow-md min-h-[140px]">
            <svg class="h-10 w-10 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-sm">Lihat Website</span>
        </a>

        <!-- Tambah Produk -->
        <a href="{{ route('admin.produk.create') }}" 
           class="flex flex-col items-center justify-center bg-yellow-500 hover:bg-yellow-600 text-white p-6 rounded-lg font-medium transition duration-200 shadow-sm hover:shadow-md min-h-[140px]">
            <svg class="h-10 w-10 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <span class="text-sm">Tambah Produk</span>
        </a>

    </div>
</div>

