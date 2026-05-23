<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing page - Local jQuery UI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">

<nav class="bg-white/90 backdrop-blur-md shadow-sm border-b border-gray-100 fixed w-full top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0">
                <a href="#home" class="text-xl font-extrabold text-gray-900 tracking-tight">My<span class="text-blue-600">Brand</span></a>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Home</a>
                <a href="#features" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Fitur</a>
                <a href="#cta" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Mulai</a>
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
            <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Home</a>
            <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Fitur</a>
            <a href="#cta" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Mulai</a>
        </div>
    </div>
</nav>

<section id="home" class="pt-28 pb-16 flex items-center justify-center min-h-screen bg-gradient-to-b from-gray-50 to-white px-4 overflow-hidden">
    <div class="text-center max-w-4xl mx-auto reveal-item opacity-0 translate-y-10 transition-all duration-1000 ease-out">
        <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 tracking-tight leading-tight">
            Level-Up Web dengan <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Local jQuery</span>
        </h1>
        <p class="mt-6 text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto">
            Skor Lighthouse hijau maksimal, interaksi UI mulus, tanpa mengorbankan kecepatan loading karena semua dirakit di lokal.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
            <a href="#features" class="px-8 py-3.5 bg-blue-600 text-white font-semibold rounded-full shadow-lg shadow-blue-200 hover:bg-blue-700 hover:scale-105 transition-all">
                Jelajahi Fitur
            </a>
            <a href="#cta" class="px-8 py-3.5 bg-white text-gray-700 font-semibold border-2 border-gray-200 rounded-full hover:bg-gray-50 hover:border-gray-300 transition-all">
                Test Animasi
            </a>
        </div>
    </div>
</section>

<section id="features" class="py-24 bg-white px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal-item opacity-0 translate-y-10 transition-all duration-700 ease-out">
            <h2 class="text-3xl font-bold text-gray-900">Performa Tanpa Kompromi</h2>
            <p class="mt-4 text-gray-600">Tiga pilar utama web super cepat.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal-item opacity-0 translate-y-10 delay-[100ms]">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 text-xl font-bold">🚀</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Vite Compiled</h3>
                <p class="text-gray-600">Hanya meload apa yang dibutuhkan. Tidak ada file raksasa yang menahan render halaman.</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal-item opacity-0 translate-y-10 delay-[300ms]">
                <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mb-6 text-xl font-bold">🎯</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Offline First</h3>
                <p class="text-gray-600">Semua dependency dari npm tersimpan di komputer. Bebas ngoding di cafe mana pun tanpa sinyal.</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal-item opacity-0 translate-y-10 delay-[500ms]">
                <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-6 text-xl font-bold">⚡</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">DOM Mastery</h3>
                <p class="text-gray-600">DOM dimanipulasi dengan lincah pakai jQuery tanpa mengganggu transisi mulus dari CSS Tailwind.</p>
            </div>
        </div>
    </div>
</section>

<section id="cta" class="py-24 bg-gradient-to-r from-blue-600 to-indigo-700 text-center px-4 overflow-hidden">
    <div class="max-w-4xl mx-auto reveal-item opacity-0 translate-y-10 transition-all duration-1000 ease-out">
        <h2 class="text-4xl font-bold text-white mb-6">Siap merakit project selanjutnya?</h2>
        <p class="text-blue-100 mb-10 text-lg">Waktunya uji Lighthouse lagi, lihat apakah nilainya masih bertahan di puncak.</p>
        <button class="px-10 py-4 bg-white text-blue-700 font-bold rounded-full shadow-2xl hover:scale-105 hover:bg-gray-50 transition-all">
            Gas Sekarang!
        </button>
    </div>
</section>

<footer class="bg-gray-900 text-gray-400 py-12 text-center">
    <p>&copy; 2026 Local First Setup. Built with Laravel, Vite & Tailwind v4.</p>
</footer>

</body>
</html>
