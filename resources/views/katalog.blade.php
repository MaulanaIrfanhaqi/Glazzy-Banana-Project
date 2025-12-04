@extends('layouts.katalog')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-yellow-50 to-white py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                Katalog Produk
            </h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                Temukan berbagai varian Glazzy Banana favorit Anda
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="bg-white py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-4 mb-8">
            <!-- Kategori Dropdown -->
            <div class="flex-1">
                <form action="{{ route('katalog') }}" method="GET" id="filterForm">
                    <select name="kategori" id="kategori" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent" 
                        onchange="document.getElementById('filterForm').submit()">
                        <option value="">Semua Kategori</option>
                        @foreach($kategoris as $kat)
                            <option value="{{ $kat->id }}" {{ request('kategori') == $kat->id ? 'selected' : '' }}>
                                {{ $kat->nama }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>

            <!-- Search Bar -->
            <div class="flex-1">
                <form action="{{ route('katalog') }}" method="GET" class="flex gap-2">
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                    <input type="text" name="search" value="{{ request('search') }}" 
                        placeholder="Cari produk..." 
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                         Cari
                    </button>
                </form>
            </div>
        </div>

        <!-- Pills Kategori -->
        <div class="mb-6 flex flex-wrap gap-2">
            <a href="{{ route('katalog') }}" 
                class="px-4 py-2 rounded-full {{ !request('kategori') ? 'bg-yellow-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }} transition">
                Semua
            </a>
            @foreach($kategoris as $kat)
                <a href="{{ route('katalog', ['kategori' => $kat->id]) }}" 
                    class="px-4 py-2 rounded-full {{ request('kategori') == $kat->id ? 'bg-yellow-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }} transition">
                    {{ $kat->nama }}
                </a>
            @endforeach
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($produks as $produk)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <!-- Image -->
                <div class="h-48 bg-gray-200 overflow-hidden">
                    @if($produk->gambar)
                        <img src="{{ asset('storage/' . $produk->gambar) }}" 
                            alt="{{ $produk->nama }}" 
                            class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-400">
                            No Image
                        </div>
                    @endif
                </div>

                <!-- Content -->
                <div class="p-4">
                    <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full mb-2">
                        {{ $produk->kategori->nama ?? 'Tanpa Kategori' }}
                    </span>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $produk->nama }}</h3>
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                        {{ Str::limit($produk->deskripsi, 100) }}
                    </p>
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-xl font-bold text-yellow-600">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                        <span class="text-sm text-gray-500">Stok: {{ $produk->stok }}</span>
                    </div>
                    <button onclick="alert('{{ $produk->nama }}\nRp {{ number_format($produk->harga, 0, ',', '.') }}\nStok: {{ $produk->stok }}')" 
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition">
                         Lihat Detail
                    </button>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 text-lg">Tidak ada produk yang ditemukan.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $produks->links() }}
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-yellow-400 mb-8">Feel Free to Contact Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-300">
                <div>
                    <h3 class="text-white font-semibold text-lg mb-2">📧 Email</h3>
                    <a href="mailto:admin@glazzybanana.com" class="hover:text-yellow-400 transition">admin@glazzybanana.com</a>
                </div>
                <div>
                    <h3 class="text-white font-semibold text-lg mb-2">📱 WhatsApp</h3>
                    <a href="https://wa.me/6287845158601" class="hover:text-yellow-400 transition" target="_blank">+62 878-4515-8601</a>
                </div>
                <div>
                    <h3 class="text-white font-semibold text-lg mb-2">📍 Office</h3>
                    <p class="text-sm">CV Glazzy<br>Jalan Sumatra No. 396<br>Sumbersari, Jember</p>
                </div>
            </div>
        </div>
        <div class="text-center border-t border-gray-700 pt-8">
            <p class="text-gray-400">© 2025 <span class="text-yellow-400 font-semibold">Glazzy Banana</span>. All Rights Reserved.</p>
        </div>
    </div>
</footer>
@endsection
