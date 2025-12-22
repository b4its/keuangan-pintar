@extends('layouts.app')

@section('title', 'Dashboard - Keuangan Pintar')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
        <div>
            <h1 class="text-4xl font-[700] text-theme">Dashboard</h1>
            <p class="text-theme font-medium text-lg mt-1">Halo, User</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-[#003344] text-white px-5 py-2.5 rounded-lg font-bold flex items-center space-x-2 text-sm">
                <span>Bulanan</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <button class="bg-[#003344] text-white px-5 py-2.5 rounded-lg font-bold text-sm">
                Unduh Laporan
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">

        {{-- ================= KOLOM KIRI (GRAFIK & STATS UTAMA) ================= --}}
        <div class="xl:col-span-9 space-y-6">

            {{-- 1. GRAFIK PENDAPATAN --}}
            <div class="bg-white border-theme p-6 h-[350px] relative flex flex-col">
                <h3 class="font-bold text-lg mb-6 text-theme">Pendapatan Perbulan</h3>
                
                <div class="flex-1 flex items-end justify-between pl-2 pr-10 pb-6 relative">
                    <div class="absolute -right-8 top-0 bottom-6 flex flex-col justify-between text-xs font-bold text-gray-500 h-full py-2">
                        <span>10 jt</span><span>3 jt</span><span>1 jt</span><span>0 rb</span>
                    </div>

                    {{-- Bars --}}
                    <div class="w-1/12 mx-1 bg-[#003344] h-[40%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Jan</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[30%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Feb</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[45%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Mar</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[30%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Apr</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[60%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Mei</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[45%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Jun</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[30%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Jul</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[45%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Ags</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[50%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Sep</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[20%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Okt</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[38%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Nov</span></div>
                    <div class="w-1/12 mx-1 bg-[#003344] h-[30%] relative group rounded-sm"><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-bold text-theme">Des</span></div>
                </div>
            </div>

            {{-- 2. BARIS KARTU KECIL (4 items) --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white border-theme p-4">
                    <p class="text-xs font-bold mb-1 text-theme">Laba kotor</p>
                    <p class="text-base font-bold text-theme">Rp XXX.xxx.xxx</p>
                    <p class="text-xs font-bold mt-1 text-theme">+ XX%</p>
                </div>
                <div class="bg-white border-theme p-4">
                    <p class="text-xs font-bold mb-1 text-theme">Laba bersih</p>
                    <p class="text-base font-bold text-theme">Rp XXX.xxx.xxx</p>
                    <p class="text-xs font-bold mt-1 text-theme">+ XX%</p>
                </div>
                <div class="bg-white border-theme p-4">
                    <p class="text-xs font-bold mb-1 text-theme">Total pendapatan</p>
                    <p class="text-base font-bold text-theme">Rp XXX.xxx.xxx</p>
                    <p class="text-xs font-bold mt-1 text-theme">+ XX%</p>
                </div>
                <div class="bg-white border-theme p-4">
                    <p class="text-xs font-bold mb-1 text-theme">Arus kas bersih</p>
                    <p class="text-base font-bold text-theme">Rp XXX.xxx.xxx</p>
                    <p class="text-xs font-bold mt-1 text-theme">+ XX%</p>
                </div>
            </div>

            {{-- 3. BARIS PROFIT & RUGI --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white border-theme p-6">
                    <p class="font-bold mb-2 text-theme">Total profit ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-theme">Rp XXX.xxx.xxx</h2>
                    <p class="text-sm font-bold mt-2 text-theme">+ XX%</p>
                </div>
                <div class="bg-white border-theme p-6">
                    <p class="font-bold mb-2 text-theme">Total kerugian ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-theme">Rp XXX.xxx.xxx</h2>
                    <p class="text-sm font-bold mt-2 text-theme">+ XX%</p>
                </div>
            </div>

            {{-- 4. BARIS STOK & KONVERSI --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white border-theme p-6">
                    <p class="font-bold mb-2 text-theme">Stok barang</p>
                    <h2 class="text-3xl font-[800] text-theme">XXXXX</h2>
                    <p class="text-sm font-bold mt-2 text-theme">+ XX%</p>
                </div>
                <div class="bg-white border-theme p-6">
                    <p class="font-bold mb-2 text-theme">Tingkat konversi</p>
                    <h2 class="text-3xl font-[800] text-theme">Rp XXX.xxx.xxx</h2>
                    <p class="text-sm font-bold mt-2 text-theme">+ XX%</p>
                </div>
            </div>

        </div>

        {{-- ================= KOLOM KANAN (PANEL AI & LAINNYA) ================= --}}
        <div class="xl:col-span-3 space-y-6">

            {{-- 1. SARAN AI --}}
            <div class="bg-white border-theme p-5 h-[420px] flex flex-col">
                <h3 class="font-bold text-lg mb-4 text-theme">Saran AI</h3>
                <div class="space-y-3 overflow-y-auto no-scrollbar flex-1">
                    <div class="bg-[#E5E7EB] rounded-lg p-3">
                        <p class="text-xs font-bold text-theme mb-1">Contoh</p>
                        <p class="text-[10px] leading-tight text-gray-700">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="bg-[#E5E7EB] rounded-lg p-3">
                        <p class="text-xs font-bold text-theme mb-1">Contoh</p>
                        <p class="text-[10px] leading-tight text-gray-700">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="bg-[#E5E7EB] rounded-lg p-3">
                        <p class="text-xs font-bold text-theme mb-1">Contoh</p>
                        <p class="text-[10px] leading-tight text-gray-700">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="bg-[#E5E7EB] rounded-lg p-3">
                        <p class="text-xs font-bold text-theme mb-1">Contoh</p>
                        <p class="text-[10px] leading-tight text-gray-700">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>

            {{-- 2. KARTU RETENSI & CAC --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white border-theme p-3">
                    <p class="text-[10px] font-bold mb-1 leading-tight text-theme">Retensi pelanggan</p>
                    <p class="text-base font-bold text-theme">XX%</p>
                    <p class="text-[10px] font-bold mt-1 text-theme">+ XX%</p>
                </div>
                <div class="bg-white border-theme p-3">
                    <p class="text-[10px] font-bold mb-1 leading-tight text-theme">Biaya akusisi (CAC)</p>
                    <p class="text-sm font-bold text-theme">Rp XXX.xxx.xxx</p>
                    <p class="text-[10px] font-bold mt-1 text-theme">+ XX%</p>
                </div>
            </div>

            {{-- 3. KARTU CLV --}}
            <div class="bg-white border-theme p-6">
                <p class="font-bold mb-2 text-theme">Nilai seumur hidup ( CLV )</p>
                <h2 class="text-2xl font-[800] text-theme">Rp XXX.xxx.xxx</h2>
                <p class="text-sm font-bold mt-2 text-theme">+ XX%</p>
            </div>

        </div>

    </div>
@endsection