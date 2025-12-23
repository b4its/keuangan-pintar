@extends('layouts.app')

@section('title', 'Laporan Keuangan - Keuangan Pintar')

@section('content')

    {{-- ================= HEADER HALAMAN ================= --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-[800] tracking-tight text-[#003344]">Laporan Keuangan</h1>
            <p class="text-gray-500 font-medium text-sm mt-1">Rekapitulasi keuangan harian dan bulanan.</p>
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

    <div class="w-full space-y-4">

        <div class="hidden md:flex px-6 text-sm font-bold text-gray-400 uppercase tracking-wider">
            <div class="w-16">#</div>
            <div class="flex-1">Nominal</div>
            <div class="w-32 text-center">Waktu</div>
            <div class="w-40 text-center">Tanggal</div>
            <div class="w-48 text-right">Keterangan</div>
        </div>

        @for ($i = 1; $i <= 8; $i++)

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
                        class="hidden sm:flex w-12 h-12 rounded-xl bg-gray-50 items-center justify-center text-[#003344] group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl text-[#003344] group-hover:text-[#209E43] transition-colors">
                            Rp {{ number_format(rand(100000, 5000000), 0, ',', '.') }}
                        </h3>
                        <p class="text-xs text-gray-400">ID: REP-2025-00{{ $i }}</p>
                    </div>
                </div>

                <div class="w-full md:w-32 flex md:justify-center mb-2 md:mb-0">
                    <div class="text-gray-600 font-semibold flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        12.00 PM
                    </div>
                </div>

                <div class="w-full md:w-40 flex md:justify-center mb-2 md:mb-0">
                    <div
                        class="px-3 py-1 rounded-full bg-[#F0FDF4] border border-[#209E43]/20 text-[#003344] text-sm font-semibold flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#209E43]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        01-02-25
                    </div>
                </div>

                <div class="w-full md:w-48 text-left md:text-right">
                    <span class="font-bold text-gray-500 group-hover:text-[#003344] transition-colors">
                        Pembayaran Vendor
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

    {{-- Pagination --}}
    <div class="mt-8 flex justify-center">
        <nav class="flex items-center gap-2">
            <button
                class="w-10 h-10 rounded-full flex items-center justify-center border border-gray-200 hover:bg-[#003344] hover:text-white transition">1</button>
            <button
                class="w-10 h-10 rounded-full flex items-center justify-center bg-[#003344] text-white font-bold">2</button>
            <button
                class="w-10 h-10 rounded-full flex items-center justify-center border border-gray-200 hover:bg-[#003344] hover:text-white transition">3</button>
        </nav>
    </div>

@endsection