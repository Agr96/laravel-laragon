<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sewa Drone Seluruh Bali.</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">

//wa component
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="floating_btn">
    <a target="_blank" href="https://wa.me/+6285739198865">
        <div class="contact_icon">
            <i class="fa fa-whatsapp my-float"></i>
        </div>
    </a>
</div>

<nav class="bg-white/90 backdrop-blur-md shadow-sm border-b border-gray-100 fixed w-full top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <div class="flex-shrink-0">
                <a href="#home" class="text-xl font-extrabold text-gray-900 tracking-tight">AeroRental.Bali<span class="text-blue-600">.Bali</span></a>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                <a href="#features" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Harga</a>
                <a href="#cta" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Testimoni</a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-600 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden bg-white border-t border-gray-100 md:hidden">
        <div class="px-4 pt-2 pb-4 space-y-1 shadow-lg">
            <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Beranda</a>
            <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Harga</a>
            <a href="#cta" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Testimoni</a>
        </div>
    </div>
</nav>

<section id="home" class="pt-28 pb-16 flex items-center justify-center min-h-screen bg-gradient-to-b from-gray-50 to-white px-4 overflow-hidden">
    <div class="text-center max-w-4xl mx-auto reveal-item opacity-0 translate-y-10 transition-all duration-1000 ease-out">
        <img src="{{ asset('images/1.png') }}" alt="Logo" style="display: block; margin: 0 auto;">
        <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 tracking-tight leading-tight">
            Aerorental.Bali <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Melayani sewa drone seluruh bali</span>
        </h1>
        <p class="mt-6 text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto">

        </p>
        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
            <a href="#features" class="px-8 py-3.5 bg-blue-600 text-white font-semibold rounded-full shadow-lg shadow-blue-200 hover:bg-blue-700 hover:scale-105 transition-all">
                Booking Sekarang
            </a>
            <a href="#cta" class="px-8 py-3.5 bg-white text-gray-700 font-semibold border-2 border-gray-200 rounded-full hover:bg-gray-50 hover:border-gray-300 transition-all">
                Cek Sampel Hasil Gratis
            </a>
        </div>
    </div>
</section>

<section id="features" class="py-24 bg-white px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal-item opacity-0 translate-y-10 transition-all duration-700 ease-out">
            <h2 class="text-3xl font-bold text-gray-900">Daftar Jasa Kami</h2>
            <p class="mt-4 text-gray-600">Kualitas Up To 4k 60fps - Guaranted 100%.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal-item opacity-0 translate-y-10 delay-[100ms]">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Konten Rekreasi</h3>
                <p class="text-gray-600"></p>
                <div class="counter" data-countto="1" data-duration="2000">0</div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal-item opacity-0 translate-y-10 delay-[300ms]">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mapping Batas Lahan</h3>
                <p class="text-gray-600"></p>
                <div class="counter" data-countto="7" data-duration="3000">0</div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal-item opacity-0 translate-y-10 delay-[500ms]">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Konten Promosi</h3>
                <p class="text-gray-600"></p>
                <div class="counter" data-countto="5" data-duration="4000">0</div>
            </div>
        </div>
    </div>
</section>

<section id="cta" class="py-24 bg-gradient-to-r from-blue-600 to-indigo-700 text-center px-4 overflow-hidden">
    <div class="max-w-4xl mx-auto reveal-item opacity-0 translate-y-10 transition-all duration-1000 ease-out">
        <h2 class="text-4xl font-bold text-white mb-6">Jadwal Terbatas</h2>
        <p class="text-blue-100 mb-10 text-lg">Hubungi Kami Via Whatsapp untuk info selengkapnya</p>
        <button class="px-10 py-4 bg-white text-blue-700 font-bold rounded-full shadow-2xl hover:scale-105 hover:bg-gray-50 transition-all">
            Gas Sekarang!
        </button>
    </div>
</section>

<footer class="bg-gray-900 text-gray-400 py-12 text-center">
    <p>Copyright 2026 All right reserved.</p>
</footer>

</body>
</html>
