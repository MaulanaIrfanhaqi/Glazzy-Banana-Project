<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glazzy Banana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
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

    <!-- ✅ HERO BANNER -->
    <section class="bg-gradient-to-br from-yellow-50 to-white py-20 md:py-32">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                    Glazzy Banana
                </h1>
                
                <p class="text-2xl text-gray-700 mb-4 leading-relaxed">
                    Indonesia's Most Favorite Banana Chips.
                </p>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    Let's try it, then love it at the first bite and make you miss it so much.
                </p>
                
                <a href="{{ route('katalog') }}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold text-lg px-12 py-4 rounded-full transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    Search Now
                </a>
            </div>
        </div>
    </section>

 <!-- ✅ VARIETY OF FLAVOURS SECTION -->
<section class="bg-white py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-gray-900 mb-16">Our Product</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
            
            <!-- 1. Brown Chocolate -->
            <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-64 mb-4 flex items-center justify-center overflow-hidden rounded-xl bg-gray-100">
                        @if(file_exists(public_path('build/images/brown-chocolate.png')))
                            <img src="{{ asset('build/images/brown-chocolate.png') }}" alt="Brown Chocolate" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/brown-chocolate.png')))
                            <img src="{{ asset('images/brown-chocolate.png') }}" alt="Brown Chocolate" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🍫</div>
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Keripik Pisang</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Camilan tradisional yang terbuat dari irisan tipis pisang berkualitas yang digoreng hingga renyah. Teksturnya yang kres-kres bikin nagih dan cocok dinikmati kapan saja. Tersedia dalam berbagai varian rasa seperti original, coklat, keju, pedas, dan karamel. Tanpa pengawet dan pewarna, aman dikonsumsi sebagai cemilan sehat
                    </p>
                </div>
            </div>

            <!-- 2. Classy Spicy -->
            <div class="bg-gradient-to-br from-red-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-64 mb-4 flex items-center justify-center overflow-hidden rounded-xl bg-gray-100">
                        @if(file_exists(public_path('build/images/classy-spicy.png')))
                            <img src="{{ asset('build/images/classy-spicy.png') }}" alt="Classy Spicy" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/classy-spicy.png')))
                            <img src="{{ asset('images/classy-spicy.png') }}" alt="Classy Spicy" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🌶️</div>
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Susu pisang </h3>
                    <p class="text-gray-600 leading-relaxed">
                       Minuman segar dan bergizi yang memadukan kelembutan susu dengan manisnya pisang matang. Kaya akan kalsium, potasium, dan vitamin yang baik untuk kesehatan tulang dan pencernaan. Cocok untuk sarapan, camilan sehat, atau sebagai minuman penyegar di siang hari. Teksturnya creamy dan rasanya manis alami tanpa pemanis buatan.
                    </p>
                </div>
            </div>

            <!-- 3. Creamy Milk -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-64 mb-4 flex items-center justify-center overflow-hidden rounded-xl bg-gray-100">
                        @if(file_exists(public_path('build/images/creamy-milk.png')))
                            <img src="{{ asset('build/images/creamy-milk.png') }}" alt="Creamy Milk" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/creamy-milk.png')))
                            <img src="{{ asset('images/creamy-milk.png') }}" alt="Creamy Milk" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🥛</div>
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Pisang Goreng</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Jajanan favorit Indonesia yang terbuat dari pisang matang yang dibalut adonan tepung crispy lalu digoreng hingga keemasan. Tekstur luarnya renyah dengan bagian dalam yang lembut dan manis. Nikmat disajikan hangat dengan taburan keju, coklat, atau gula halus. Cocok sebagai teman ngopi atau cemilan sore hari.
                    </p>
                </div>
            </div>

            <!-- 4. Green Thai Tea -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-64 mb-4 flex items-center justify-center overflow-hidden rounded-xl bg-gray-100">
                        @if(file_exists(public_path('build/images/green-thai-tea.png')))
                            <img src="{{ asset('build/images/green-thai-tea.png') }}" alt="Green Thai Tea" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/green-thai-tea.png')))
                            <img src="{{ asset('images/green-thai-tea.png') }}" alt="Green Thai Tea" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🍵</div>
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Bolu Pisang</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Kue lembut dan moist yang terbuat dari pisang matang pilihan dengan tekstur yang empuk dan aroma harum khas pisang. Perpaduan sempurna antara kelembutan cake dengan rasa manis alami pisang. Cocok untuk hidangan penutup, camilan keluarga, atau oleh-oleh. Tahan hingga beberapa hari dalam kemasan tertutup.
                    </p>
                </div>
            </div>

            <!-- 5. Smoked Beef -->
            <div class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col items-center text-center">
                    <div class="w-full h-64 mb-4 flex items-center justify-center overflow-hidden rounded-xl bg-gray-100">
                        @if(file_exists(public_path('build/images/smoked-beef.png')))
                            <img src="{{ asset('build/images/smoked-beef.png') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @elseif(file_exists(public_path('images/smoked-beef.png')))
                            <img src="{{ asset('images/smoked-beef.png') }}" alt="Smoked Beef" class="w-full h-full object-cover">
                        @else
                            <div class="text-8xl">🥩</div>
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Pisang Coklat</h3>
                    <p class="text-gray-600 leading-relaxed">
                      Keripik pisang premium yang dibalut dengan coklat powder atau lapisan coklat lezat. Perpaduan renyahnya keripik pisang dengan manisnya coklat menciptakan sensasi rasa yang unik dan adiktif. Cocok untuk cemilan santai, teman nonton film, atau sebagai oleh-oleh khas yang istimewa. Dikemas higienis dan tahan lama hingga 2 bulan.
                    </p>
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

</body>
</html>