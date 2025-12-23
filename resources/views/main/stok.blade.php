@extends('layouts.app')

@section('title', 'Stok Barang - Keuangan Pintar')

@section('content')

    {{-- ================= HEADER HALAMAN ================= --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-[800] tracking-tight text-[#003344]">Stok Barang</h1>
            <p class="text-gray-500 font-medium text-sm mt-1">Kelola ketersediaan barang masuk dan keluar.</p>
        </div>

        <div class="flex space-x-3">
            <button
                class="px-5 py-2.5 rounded-xl font-bold text-white bg-red-500 hover:bg-red-600 shadow-lg shadow-red-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                </svg>
                <span>Hapus</span>
            </button>
            <button
                class="px-5 py-2.5 rounded-xl font-bold text-white bg-[#FFB020] hover:bg-yellow-500 shadow-lg shadow-yellow-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                    </path>
                </svg>
                <span>Edit</span>
            </button>
            <button
                class="px-5 py-2.5 rounded-xl font-bold text-white bg-[#209E43] hover:bg-green-600 shadow-lg shadow-green-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Tambah</span>
            </button>
        </div>
    </div>

    {{-- ================= BAGIAN KARTU CONTROLLER (STOCK CARDS) ================= --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        @for($i = 1; $i <= 3; $i++)
            <div
                class="bg-white rounded-2xl p-6 border border-gray-100 hover:border-[#003344]/30 shadow-sm hover:shadow-xl transition-all duration-300 group relative overflow-hidden">

                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-[#F0FDF4] rounded-full group-hover:scale-150 transition-transform duration-500">
                </div>

                <div class="relative z-10 flex flex-col items-center">
                    <h3 class="text-xl font-bold text-[#003344] mb-4 w-full text-left">Nama Barang {{ $i }}</h3>

                    <div
                        class="w-20 h-20 bg-[#F0FDF4] rounded-2xl flex items-center justify-center text-[#003344] mb-6 shadow-inner group-hover:bg-[#003344] group-hover:text-white transition-colors duration-300">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>

                    <div class="flex items-center justify-between w-full bg-gray-50 rounded-xl p-1 border border-gray-200">
                        <button
                            class="w-10 h-10 rounded-lg bg-white text-[#003344] hover:bg-red-100 hover:text-red-600 shadow-sm font-bold text-xl transition flex items-center justify-center">-</button>
                        <span class="text-xl font-[800] text-[#003344]">10 PCS</span>
                        <button
                            class="w-10 h-10 rounded-lg bg-[#003344] text-white hover:bg-[#209E43] shadow-md font-bold text-xl transition flex items-center justify-center">+</button>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-bold text-[#003344]">Daftar Inventaris</h2>

        <div class="flex space-x-2">
            <button
                class="px-4 py-2 rounded-lg text-sm font-bold text-white bg-red-500 hover:bg-red-600 shadow-md flex items-center gap-1">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                </svg>
                Hapus
            </button>
            <button
                class="px-4 py-2 rounded-lg text-sm font-bold text-white bg-[#FFB020] hover:bg-yellow-500 shadow-md flex items-center gap-1">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                    </path>
                </svg>
                Edit
            </button>
            <button
                class="px-4 py-2 rounded-lg text-sm font-bold text-white bg-[#209E43] hover:bg-green-600 shadow-md flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah
            </button>
        </div>
    </div>

    {{-- ================= LIST STOK BARANG MODERN (Pengganti Tabel) ================= --}}
    <div class="w-full space-y-4">

        <div class="hidden md:flex px-6 text-sm font-bold text-gray-400 uppercase tracking-wider">
            <div class="w-16">#</div>
            <div class="flex-1">Nama Barang</div>
            <div class="w-32 text-center">Jumlah</div>
            <div class="w-40 text-center">Harga Satuan</div>
            <div class="w-48 text-right">Keterangan</div>
        </div>

        @for ($i = 1; $i <= 4; $i++)

            <div
                class="group flex flex-col md:flex-row md:items-center bg-white rounded-2xl p-4 md:px-6 md:py-5 border border-transparent hover:border-[#209E43]/50 shadow-sm hover:shadow-xl hover:shadow-green-900/5 transition-all duration-300 cursor-pointer relative overflow-hidden">

                <div
                    class="absolute left-0 top-0 bottom-0 w-1 bg-[#209E43] opacity-0 group-hover:opacity-100 transition-all duration-300">
                </div>

                <div class="w-full md:w-16 mb-2 md:mb-0 flex items-center">
                    <div
                        class="w-8 h-8 rounded-full bg-[#F0FDF4] text-[#003344] font-bold flex items-center justify-center text-sm border border-[#209E43]/20 group-hover:bg-[#003344] group-hover:text-white transition-colors">
                        {{ $i }}
                    </div>
                </div>

                <div class="flex-1 flex items-center gap-4 mb-2 md:mb-0">
                    <div
                        class="hidden sm:flex w-10 h-10 rounded-lg bg-gray-50 items-center justify-center text-[#003344] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-[#003344] group-hover:text-[#209E43] transition-colors">Nama Barang
                            Item</h3>
                        <p class="text-xs text-gray-400">SKU: STK-00{{ $i }}</p>
                    </div>
                </div>

                <div class="w-full md:w-32 flex md:justify-center mb-2 md:mb-0">
                    <div
                        class="px-4 py-1.5 rounded-full bg-[#F0FDF4] border border-[#209E43]/30 text-[#003344] font-bold text-sm">
                        10 Pcs
                    </div>
                </div>

                <div class="w-full md:w-40 flex md:justify-center mb-2 md:mb-0">
                    <span class="font-bold text-gray-600">Rp 50.000</span>
                </div>

                <div class="w-full md:w-48 text-left md:text-right">
                    <span class="text-sm font-semibold text-gray-500 bg-gray-100 px-3 py-1 rounded-md">
                        Barang Masuk
                    </span>
                </div>

                <div
                    class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity hidden lg:block">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>

            </div>
        @endfor

    </div>

    <div class="mt-8 flex justify-center">
        <nav class="flex items-center gap-2">
            <button
                class="w-10 h-10 rounded-full flex items-center justify-center border border-gray-200 hover:bg-[#003344] hover:text-white transition">1</button>
            <button
                class="w-10 h-10 rounded-full flex items-center justify-center bg-[#003344] text-white font-bold">2</button>
        </nav>
    </div>

@endsection