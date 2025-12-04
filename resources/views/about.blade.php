<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Glazzy Banana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    
    <!-- NAVBAR -->
    <nav class="bg-white w-full border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto flex justify-between items-center py-5 px-6">
            <a href="{{ route('home') }}" class="font-bold text-2xl text-gray-800 flex items-center hover:text-yellow-600 transition">
                Glazzy Banana
            </a>
            <div class="flex gap-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-yellow-600 font-medium transition duration-200">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-gray-900 hover:text-yellow-600 font-semibold transition duration-200">
                    About
                </a>
                <a href="{{ route('katalog') }}" class="text-gray-600 hover:text-yellow-600 font-medium transition duration-200">
                    Katalog
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO TITLE SECTION -->
    <section class="bg-gradient-to-br from-yellow-50 to-white py-20">
        <div class="container mx-auto px-6">
            <h1 class="text-6xl md:text-7xl font-bold text-gray-900 mb-4">
                Glazzy Banana<br/>
                Story
            </h1>
        </div>
    </section>

    <!-- TIMELINE SECTION -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-6xl">
            
            <!-- Tentang Kami -->
            <div class="mb-32 flex flex-col md:flex-row items-center gap-12">
                <!-- Text Kiri -->
                <div class="md:w-1/2">
                    <h2 class="text-5xl font-bold text-gray-900 mb-6">Tentang Kami</h2>
                    <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                        Glazzy Banana adalah produsen camilan pisang premium yang berlokasi di Jember, Indonesia. 
                        Kami berkomitmen untuk menghadirkan camilan berkualitas tinggi dengan cita rasa yang unik dan memukau.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Setiap produk kami dibuat dengan bahan pilihan dan proses produksi yang higienis, 
                        menjadikan Glazzy Banana pilihan tepat untuk camilan sehat dan lezat.
                    </p>
                </div>
                
                <!-- Gambar Kanan -->
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="transform rotate-3 bg-white shadow-2xl p-4 rounded-lg">
                   @if(file_exists(public_path('public/images/product-hero.jpg')))
                            <img src="{{ asset('public/images/product-hero.jpg') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/product-hero.jpg')))
                            <img src="{{ asset('images/product-hero.jpg') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🥩</div>
                        @endif
                        </div>
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-yellow-400 rounded-full opacity-50"></div>
                    </div>
                </div>
            </div>

            <!-- Visi Kami -->
            <div class="mb-32 flex flex-col md:flex-row-reverse items-center gap-12">
                <!-- Text Kanan -->
                <div class="md:w-1/2">
                    <h2 class="text-5xl font-bold text-gray-900 mb-6">Visi Kami</h2>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Menjadi produsen keripik pisang terkemuka di Indonesia yang dikenal dengan kualitas produk, 
                        inovasi rasa, dan kepuasan pelanggan. Kami ingin mengangkat citra camilan tradisional Indonesia 
                        ke kancah internasional dengan standar kualitas yang tinggi.
                    </p>
                </div>
                
                <!-- Gambar Kiri (product-2014.jpg) -->
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="transform -rotate-3 bg-white shadow-2xl p-4 rounded-lg">
                          @if(file_exists(public_path('public/images/product-2014.jpg')))
                            <img src="{{ asset('public/images/product-2014.jpg') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/product-2014.jpg')))
                            <img src="{{ asset('images/product-2014.jpg') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🥩</div>
                        @endif
                        </div>
                        <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-yellow-400 rounded-full opacity-50"></div>
                    </div>
                </div>
            </div>

            <!-- Misi Kami -->
            <div class="mb-32 flex flex-col md:flex-row items-center gap-12">
                <!-- Text Kiri -->
                <div class="md:w-1/2">
                    <h2 class="text-5xl font-bold text-gray-900 mb-6">Misi Kami</h2>
                    <ul class="text-lg text-gray-700 space-y-3 leading-relaxed">
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">✓</span>
                            <span>Menghasilkan produk keripik pisang berkualitas tinggi dengan bahan baku pilihan</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">✓</span>
                            <span>Berinovasi dalam menciptakan varian rasa yang unik dan menarik</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">✓</span>
                            <span>Memberikan pelayanan terbaik kepada pelanggan dan mitra bisnis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">✓</span>
                            <span>Memberdayakan petani lokal dengan bermitra secara berkelanjutan</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Gambar Kanan (founder.photo) -->
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="transform rotate-3 bg-white shadow-2xl p-4 rounded-lg">
                         @if(file_exists(public_path('public/images/founder-photo.jpg')))
                            <img src="{{ asset('build/images/founder-photo.jpg') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/founder-photo.jpg')))
                            <img src="{{ asset('images/founder-photo.jpg') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🥩</div>
                        @endif
                        </div>
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-yellow-400 rounded-full opacity-50"></div>
                    </div>
                </div>
            </div>

            <!-- Keunggulan Kami -->
            <div class="mb-20 flex flex-col md:flex-row-reverse items-center gap-12">
                <!-- Text Kanan -->
                <div class="md:w-1/2">
                    <h2 class="text-5xl font-bold text-gray-900 mb-6">Keunggulan Kami</h2>
                    <ul class="text-lg text-gray-700 space-y-3 leading-relaxed">
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">★</span>
                            <span><strong>Bahan Berkualitas:</strong> Menggunakan pisang pilihan dengan kematangan sempurna</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">★</span>
                            <span><strong>Proses Higienis:</strong> Produksi dengan standar kebersihan tinggi dan izin PIRT</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">★</span>
                            <span><strong>Rasa Unik:</strong> Berbagai varian rasa inovatif yang tidak pasaran</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-3">★</span>
                            <span><strong>Kemasan Menarik:</strong> Dikemas dengan desain modern dan praktis</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Gambar Kiri (product-hero) -->
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="transform -rotate-3 bg-white shadow-2xl p-4 rounded-lg">
                             @if(file_exists(public_path('public/images/product-hero.png')))
                            <img src="{{ asset('build/images/product-hero.png') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/product-hero.png')))
                            <img src="{{ asset('images/product-hero.png') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🥩</div>
                        @endif
                        </div>
                        <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-yellow-400 rounded-full opacity-50"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

  
    <!-- ✅ FOOTER (TANPA Form, Layout Simple) -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-6">
            
            <!-- Info Kontak (Centered) -->
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold text-yellow-400 mb-8">Feel Free to Contact Us</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-300">
                    <!-- Email -->
                    <div>
                        <h3 class="text-white font-semibold text-lg mb-2">📧 Email</h3>
                        <a href="mailto:admin@glazzybanana.com" class="hover:text-yellow-400 transition">
                            admin@glazzybanana.com
                        </a>
                    </div>
                    
                    <!-- Whatsapp -->
                    <div>
                        <h3 class="text-white font-semibold text-lg mb-2">💬 WhatsApp</h3>
                        <a href="https://wa.me/6287845158601" class="hover:text-yellow-400 transition" target="_blank">
                            +62 878-4515-8601
                        </a>
                    </div>
                    
                    <!-- Office -->
                    <div>
                        <h3 class="text-white font-semibold text-lg mb-2">📍 Office</h3>
                        <p class="text-sm leading-relaxed">
                            CV Glazzy <br/>
                            Jalan sumatra No. 396<br/>
                            Sumbersari<br/>
                            Jember, Indonesia
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="text-center text-gray-400 pt-8 border-t border-gray-800">
                <p class="text-lg">© 2025 <span class="text-yellow-400 font-semibold">Glazzy Banana</span>. All Rights Reserved.</p>
            </div>
            
        </div>
    </footer>

