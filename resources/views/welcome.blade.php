@extends('layouts.guest')

@section('title', 'Selamat Datang - Keuangan Pintar')

@section('content')
    {{-- ========================================== --}}
    {{-- BAGIAN 1: HERO SECTION --}}
    {{-- ========================================== --}}
    <div class="min-h-screen relative overflow-hidden flex flex-col justify-between bg-white">
        @include('partials.navbar')
        <div
            class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-green-200/40 rounded-full blur-[100px] pointer-events-none">
        </div>
        <div
            class="container max-w-[1300px] mx-auto px-4 lg:px-12 pt-28 md:pt-32 relative z-10 flex-grow flex items-center">

            <div class="relative flex flex-col md:block w-full items-center">

                <div
                    class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 z-0 w-full md:w-7/12 lg:w-6/12 h-full items-center justify-end pointer-events-none">
                    <img src="{{ asset('images/dashboard-1.png') }}" alt="Ilustrasi Laptop"
                        class="w-full h-auto max-w-[130%] object-contain drop-shadow-xl translate-x-10">
                </div>


                <div class="w-full md:w-8/12 lg:max-w-3xl mb-10 md:mb-0 text-left relative z-10 md:pt-20">
                    <p class="text-[20px] font-bold text-[#023A4B] mb-1">
                        Keuangan Pintar
                    </p>

                    <h1 class="text-[52px] md:text-[64px] font-[800] leading-[1.1] text-[#023A4B] tracking-tight">
                        Mengatur keuangan
                    </h1>
                    <h1 class="text-[52px] md:text-[64px] font-[800] leading-[1.1] text-[#2E7D32] tracking-tight mt-1">
                        Menggunakan AI
                    </h1>

                    <p class="text-[#546E7A] text-[17px] font-medium mt-6 mb-10 max-w-lg leading-relaxed">
                        Dengan kemampuan AI ( artificial intelegance ) anda mampu mengembangkan bisnis anda dengan sesuai
                        tujuan
                    </p>

                    <a href="{{ route('auth') }}"
                        class="inline-flex items-center justify-center
                                                                    bg-gradient-to-r from-[#A5D836] to-[#209E43]
                                                                    hover:from-[#B1E442] hover:to-[#2AAF4F]
                                                                    text-white font-bold text-[17px] py-3.5 px-12 rounded-full 
                                                                    shadow-[0_10px_25px_rgba(32,158,67,0.35)] 
                                                                    transition-all duration-300 transform hover:-translate-y-1">
                        Mulai
                        <svg xmlns="http://www.w3.org/2000/svg" class="h- w-5 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <div
                    class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 z-0 w-full md:w-9/12 lg:w-8/12 h-full items-center justify-end pointer-events-none">
                    <img src="{{ asset('images/dashboard-1.png') }}" alt="Ilustrasi Laptop"
                        class="w-full h-auto max-w-[160%] lg:max-w-[170%] object-contain drop-shadow-xl translate-x-10 lg:translate-x-20">
                </div>
            </div>
        </div>

        {{-- Tombol Scroll ke Visi Misi --}}
        <div class="w-full text-center pb-8 md:pb-12 z-20 relative">
            <a href="#visi-misi" class="inline-flex items-center 
                                                        bg-gradient-to-r from-[#A5D836] to-[#209E43]
                                                        hover:from-[#B1E442] hover:to-[#2AAF4F]
                                                        text-white font-bold text-[17px] py-3 px-10 rounded-full 
                                                        shadow-[0_10px_25px_rgba(32,158,67,0.3)] 
                                                        transition-all duration-300 transform hover:-translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                Visi & Misi
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </div>


    {{-- ========================================== --}}
    {{-- BAGIAN 2: VISI & MISI --}}
    {{-- ========================================== --}}
    <section id="visi-misi"
        class="bg-[#003344] min-h-screen flex flex-col justify-center items-center py-20 px-4 relative scroll-mt-0">

        <div class="text-center mb-16 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Visi & Misi Kami</h1>
            <p class="text-gray-300 text-lg">
                Kami Berkomitmen untuk memajukan bisnis indonesia agar menuju indonesia emas
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl w-full mb-16">

            <div
                class="bg-[#f0fdf4] border-[6px] border-[#bbf7d0] rounded-[2.5rem] p-8 text-center flex flex-col items-center hover:-translate-y-2 transition-transform duration-300 shadow-xl">
                <h3 class="text-2xl font-bold text-[#003344] mb-6">Otomatisasi</h3>
                <div class="mb-6 text-[#003344]">
                    <img src="\images\Otomatisasi.png" alt="Ikon Otomatisasi" class="h-20 w-20 object-contain">
                </div>
                <p class="text-sm font-semibold text-[#003344] leading-relaxed">
                    Menyediakan sistem pencatatan keuangan yang real-time, transparan, dan minim kesalahan manusia (human
                    error)
                </p>
            </div>

            <div
                class="bg-[#f0fdf4] border-[6px] border-[#bbf7d0] rounded-[2.5rem] p-8 text-center flex flex-col items-center hover:-translate-y-2 transition-transform duration-300 shadow-xl">
                <h3 class="text-2xl font-bold text-[#003344] mb-6">Prediksi</h3>
                <div class="mb-6 text-[#003344]">
                    <img src="\images\Prediksi.png" alt="Ikon Prediksi" class="h-20 w-20 object-contain">
                </div>
                <p class="text-sm font-semibold text-[#003344] leading-relaxed">
                    Menyediakan sistem pencatatan keuangan yang real-time, transparan, dan minim kesalahan manusia (human
                    error)
                </p>
            </div>

            <div
                class="bg-[#f0fdf4] border-[6px] border-[#bbf7d0] rounded-[2.5rem] p-8 text-center flex flex-col items-center hover:-translate-y-2 transition-transform duration-300 shadow-xl">
                <h3 class="text-2xl font-bold text-[#003344] mb-6">Efisiensi</h3>
                <div class="mb-6 text-[#003344]">
                    <img src="\images\Efisiensi.png" alt="Ikon Efisiensi" class="h-20 w-20 object-contain">
                </div>
                <p class="text-sm font-semibold text-[#003344] leading-relaxed">
                    Menyediakan sistem pencatatan keuangan yang real-time, transparan, dan minim kesalahan manusia (human
                    error)
                </p>
            </div>
        </div>

        <div class="mt-8">
            <a href="#fitur-section"
                class="bg-[#f0fdf4] text-[#003344] px-8 py-3 rounded-full font-bold flex items-center gap-3 hover:bg-white hover:scale-105 transition transform shadow-lg cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-bounce" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                Fitur
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-bounce" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- BAGIAN 3: FITUR YANG DI DAPAT (SESUAI GAMBAR) --}}
    {{-- ========================================== --}}
    <section id="fitur-section"
        class="py-24 bg-gradient-to-br from-[#E6F4EA] to-[#F1F8E9] text-[#003344] scroll-mt-0 relative overflow-hidden">

        {{-- Efek Glow Latar Belakang --}}
        <div
            class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-green-100/50 to-transparent pointer-events-none">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-[800] text-[#003344] tracking-tight">Fitur yang di dapat</h2>
            </div>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-start max-w-6xl mx-auto">

                {{-- KOTAK KIRI (HARGA) --}}
                <div class="w-full lg:w-1/3">
                    <div
                        class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100 text-center relative overflow-hidden group hover:scale-[1.02] transition-transform duration-300">
                        <div class="absolute top-0 left-0 w-full h-2 bg-[#66BB6A]"></div>

                        <p class="text-[#003344] font-semibold text-lg mb-4">Mulai dari....</p>

                        <div class="flex items-baseline justify-center text-[#003344] mb-2">
                            <span class="text-2xl font-bold mr-1">Rp</span>
                            <span class="text-6xl font-[900]">XX</span>
                            <span class="text-2xl font-bold">.xxx</span>
                        </div>
                        <p class="text-[#003344] font-medium mb-8">Perbulan</p>

                        <a href="{{ route('auth') }}"
                            class="inline-flex items-center justify-center bg-gradient-to-r from-[#A5D836] to-[#209E43] hover:from-[#B1E442] hover:to-[#2AAF4F] text-white font-bold text-[17px] py-3.5 px-12 rounded-full shadow-[0_10px_25px_rgba(32,158,67,0.35)] transition-all duration-300 transform hover:-translate-y-1">
                            Daftar
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- KOTAK KANAN (LIST FITUR) --}}
                <div class="w-full lg:w-2/3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-8">
                        {{-- Kolom 1 --}}
                        <ul class="space-y-5">
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Laba kotor
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Biaya akusisi pelanggan
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Tingkat keberhasilan
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Laba bersih
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Tingkat konversi
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Langkah yang perlu di lakukan
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Stok barang
                            </li>
                        </ul>

                        {{-- Kolom 2 --}}
                        <ul class="space-y-5">
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Total pendapatan
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Nilai seumur hidup
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Total profit
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Tingkat retensi pelanggan
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Arus kas bersih operasi
                            </li>
                            <li class="flex items-center text-[#003344] text-lg font-medium">
                                <svg class="w-6 h-6 text-[#003344] mr-3 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Total kerugian
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- FOOTER SECTION (MODERN & SEAMLESS) --}}
    {{-- ========================================== --}}
    <footer class="relative bg-[#003344] text-white pt-20 pb-10 mt-[-2px]">
        <div class="container mx-auto px-6 relative z-20 pt-12 md:pt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                {{-- KOLOM 1: BRANDING --}}
                <div class="space-y-6">
                    <a href="/" class="flex items-center gap-2">
                        {{-- Ganti src dengan logo putih jika ada, atau gunakan filter brightness --}}
                        <img src="{{ asset('images/ke-pin-logo.png') }}" alt="Ke-Pin Logo"
                            class="h-10 w-auto brightness-0 invert">
                    </a>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Platform pencatatan keuangan pintar berbasis AI untuk membantu bisnis Anda tumbuh lebih cepat,
                        efisien, dan terprediksi.
                    </p>
                    {{-- Social Media Icons --}}
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#A5D836] hover:text-[#003344] transition-all duration-300">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#A5D836] hover:text-[#003344] transition-all duration-300">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#A5D836] hover:text-[#003344] transition-all duration-300">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- KOLOM 2: QUICK LINKS --}}
                <div>
                    <h3 class="text-lg font-bold text-white mb-6 relative inline-block">
                        Menu Pintas
                        <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-[#A5D836] rounded-full"></span>
                    </h3>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="#"
                                class="hover:text-[#A5D836] transition-colors duration-300 flex items-center gap-2"><span
                                    class="text-[#A5D836] text-xs">➤</span> Beranda</a></li>
                        <li><a href="#visi-misi"
                                class="hover:text-[#A5D836] transition-colors duration-300 flex items-center gap-2"><span
                                    class="text-[#A5D836] text-xs">➤</span> Visi & Misi</a></li>
                        <li><a href="#fitur-yang-didapat"
                                class="hover:text-[#A5D836] transition-colors duration-300 flex items-center gap-2"><span
                                    class="text-[#A5D836] text-xs">➤</span> Fitur</a></li>
                        <li><a href="{{ route('auth') }}"
                                class="hover:text-[#A5D836] transition-colors duration-300 flex items-center gap-2"><span
                                    class="text-[#A5D836] text-xs">➤</span> Login / Register</a></li>
                    </ul>
                </div>

                {{-- KOLOM 3: KONTAK --}}
                <div>
                    <h3 class="text-lg font-bold text-white mb-6 relative inline-block">
                        Hubungi Kami
                        <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-[#A5D836] rounded-full"></span>
                    </h3>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-[#A5D836] flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jl. Jendral Sudirman No. 88, Jakarta Pusat, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#A5D836] flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>support@ke-pin.id</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#A5D836] flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+62 812 3456 7890</span>
                        </li>
                    </ul>
                </div>

                {{-- KOLOM 4: NEWSLETTER --}}
                <div>
                    <h3 class="text-lg font-bold text-white mb-6 relative inline-block">
                        Berlangganan
                        <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-[#A5D836] rounded-full"></span>
                    </h3>
                    <p class="text-gray-400 text-sm mb-4">Dapatkan info terbaru tentang fitur dan promo menarik.</p>
                    <form class="flex flex-col gap-3">
                        <input type="email" placeholder="Masukkan email Anda"
                            class="px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:outline-none focus:border-[#A5D836] focus:ring-1 focus:ring-[#A5D836] transition-all">
                        <button type="button"
                            class="px-4 py-3 rounded-xl bg-gradient-to-r from-[#A5D836] to-[#209E43] text-white font-bold hover:shadow-[0_0_15px_rgba(165,216,54,0.4)] transition-all duration-300">
                            Langganan
                        </button>
                    </form>
                </div>

            </div>

            {{-- COPYRIGHT BAR --}}
            <div
                class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500">
                <p>© {{ date('Y') }} <span class="text-white font-bold">Ke-Pin</span>. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.getElementById('main-navbar');
            const visiMisiSection = document.getElementById('visi-misi');

            function handleScroll() {
                if (!visiMisiSection) return;

                const triggerPoint = visiMisiSection.offsetTop - 100;
                const currentScroll = window.scrollY;

                if (currentScroll >= triggerPoint) {
                    navbar.classList.add('-translate-y-full');
                } else {
                    navbar.classList.remove('-translate-y-full');
                }
            }

            window.addEventListener('scroll', handleScroll);
        });
    </script>

@endsection

@push('styles')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
@endpush