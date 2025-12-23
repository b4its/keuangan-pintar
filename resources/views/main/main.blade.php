@extends('layouts.app')

@section('title', 'Dashboard - Keuangan Pintar')

@section('content')

    {{-- ================= HEADER HALAMAN ================= --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-[800] tracking-tight text-[#003344]">Dashboard</h1>
            <p class="text-gray-500 font-medium text-sm mt-1">Ringkasan aktivitas keuangan Anda hari ini.</p>
        </div>
        
        <div class="flex space-x-3">
            <button class="px-5 py-2.5 rounded-xl font-bold text-white bg-[#003344] hover:bg-[#002836] shadow-lg shadow-gray-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <span>Bulanan</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <button class="px-5 py-2.5 rounded-xl font-bold text-white bg-[#209E43] hover:bg-[#1a8538] shadow-lg shadow-green-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                <span>Unduh Laporan</span>
            </button>
        </div>
    </div>

    {{-- ================= GRID UTAMA ================= --}}
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6 mb-10">

        {{-- ================= KOLOM KIRI (GRAFIK & STATS) ================= --}}
        <div class="xl:col-span-9 space-y-6">

            {{-- 1. GRAFIK PENDAPATAN --}}
            <div class="bg-white rounded-2xl p-6 h-[400px] border border-transparent shadow-sm hover:shadow-xl transition-all duration-300 relative flex flex-col group">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-lg text-[#003344]">Pendapatan Perbulan</h3>
                    <div class="px-3 py-1 bg-[#F0FDF4] text-[#209E43] text-xs font-bold rounded-full border border-[#209E43]/20">
                        Live Overview
                    </div>
                </div>
                
                <div class="flex-1 flex items-end justify-between pl-2 pr-10 pb-2 relative">
                    {{-- Y-Axis --}}
                    <div class="absolute -right-8 top-0 bottom-6 flex flex-col justify-between text-xs font-bold text-gray-400 h-full py-2">
                        <span>10 jt</span><span>5 jt</span><span>0</span>
                    </div>

                    <div class="w-full flex justify-between items-end h-full pr-4 pl-2">
                        @foreach(['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'] as $bulan)
                            <div class="flex flex-col items-center justify-end h-full w-1/12 group/bar">
                                <div class="w-3/4 bg-[#003344] rounded-t-md relative transition-all duration-300 group-hover/bar:bg-[#209E43] group-hover/bar:shadow-lg group-hover/bar:shadow-green-500/30 group-hover/bar:scale-y-105" 
                                     style="height: {{ rand(20, 90) }}%">
                                </div>
                                <span class="text-xs font-bold text-gray-400 mt-2 group-hover/bar:text-[#003344] transition-colors">{{ $bulan }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- 2. BARIS KARTU KECIL (4 items) --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach([
                    ['title' => 'Laba kotor', 'val' => 'Rp 150.000.000'],
                    ['title' => 'Laba bersih', 'val' => 'Rp 95.000.000'],
                    ['title' => 'Total pendapatan', 'val' => 'Rp 245.000.000'],
                    ['title' => 'Arus kas bersih', 'val' => 'Rp 80.000.000'],
                ] as $stat)
                <div class="bg-white rounded-2xl p-5 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300 group cursor-default">
                    <p class="text-xs font-bold text-gray-400 mb-1 group-hover:text-[#209E43] transition-colors">{{ $stat['title'] }}</p>
                    <p class="text-sm lg:text-base font-[800] text-[#003344] truncate">{{ $stat['val'] }}</p>
                    <div class="flex items-center mt-2 text-[#209E43] text-xs font-bold bg-[#F0FDF4] px-2 py-0.5 rounded-md w-fit">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        <span>+ 12%</span>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- 3. BARIS PROFIT & KERUGIAN (MEDIUM) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Total profit ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">Rp XXX.xxx.xxx</h2>
                    <p class="text-sm font-bold mt-2 text-[#209E43] bg-[#F0FDF4] inline-block px-2 py-1 rounded-lg border border-[#209E43]/10">
                        + XX% Peningkatan
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-red-200 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Total kerugian ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">Rp XXX.xxx.xxx</h2>
                    <p class="text-sm font-bold mt-2 text-red-500 bg-red-50 inline-block px-2 py-1 rounded-lg border border-red-100">
                        + XX% Perlu Perhatian
                    </p>
                </div>
            </div>

            {{-- 4. BARIS STOK & KONVERSI (MEDIUM) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-between group">
                    <div>
                        <p class="font-bold mb-1 text-gray-500 group-hover:text-[#209E43] transition-colors">Stok barang</p>
                        <h2 class="text-3xl font-[800] text-[#003344]">XXXXX</h2>
                        <p class="text-xs font-bold mt-1 text-gray-400">Total item tersedia</p>
                    </div>
                    <div class="w-14 h-14 bg-[#F0FDF4] rounded-2xl flex items-center justify-center text-[#209E43] group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-between group">
                    <div>
                        <p class="font-bold mb-1 text-gray-500 group-hover:text-[#209E43] transition-colors">Tingkat konversi</p>
                        <h2 class="text-3xl font-[800] text-[#003344]">Rp XXX.xxx</h2>
                        <p class="text-xs font-bold mt-1 text-gray-400">Rata-rata per transaksi</p>
                    </div>
                    <div class="w-14 h-14 bg-[#F0FDF4] rounded-2xl flex items-center justify-center text-[#209E43] group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                </div>
            </div>

        </div>

        {{-- ================= KOLOM KANAN (PANEL AI) ================= --}}
        <div class="xl:col-span-3 space-y-6">

            {{-- 1. SARAN AI --}}
            <div class="bg-white rounded-2xl p-6 h-[420px] flex flex-col shadow-sm border border-transparent hover:shadow-xl transition-all duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded-full bg-[#003344] flex items-center justify-center text-white shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-bold text-lg text-[#003344]">Saran AI</h3>
                </div>
                
                <div class="space-y-3 overflow-y-auto no-scrollbar flex-1 pr-1">
                    @for($i=0; $i<4; $i++)
                    <div class="bg-gray-50 hover:bg-[#F0FDF4] border border-transparent hover:border-[#209E43]/20 rounded-xl p-3 transition-all cursor-pointer group">
                        <div class="flex justify-between items-start">
                            <p class="text-xs font-bold text-[#003344] mb-1 group-hover:text-[#209E43]">Insight Harian</p>
                            <span class="text-[10px] text-gray-400">Just now</span>
                        </div>
                        <p class="text-[11px] leading-relaxed text-gray-600 group-hover:text-[#003344]">Lorem ipsum dolor sit amet, analisis cashflow Anda menunjukkan tren positif.</p>
                    </div>
                    @endfor
                </div>
            </div>

            {{-- 2. KARTU RETENSI & CAC --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-4 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="text-[10px] font-bold text-gray-400 mb-1 leading-tight">Retensi</p>
                    <p class="text-xl font-[800] text-[#003344]">88%</p>
                    <p class="text-[10px] font-bold mt-1 text-[#209E43] bg-[#F0FDF4] inline-block px-1.5 py-0.5 rounded">+ 2.4%</p>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="text-[10px] font-bold text-gray-400 mb-1 leading-tight">CAC</p>
                    <p class="text-sm font-[800] text-[#003344]">Rp 45rb</p>
                    <p class="text-[10px] font-bold mt-1 text-[#209E43] bg-[#F0FDF4] inline-block px-1.5 py-0.5 rounded">- 1.2%</p>
                </div>
            </div>

            {{-- 3. KARTU CLV --}}
            <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                <p class="font-bold mb-2 text-gray-500">Nilai seumur hidup ( CLV )</p>
                <h2 class="text-2xl font-[800] text-[#003344]">Rp XXX.xxx.xxx</h2>
                
                <div class="w-full bg-gray-100 rounded-full h-2 mt-4 overflow-hidden">
                    <div class="bg-[#003344] h-2 rounded-full transition-all duration-1000" style="width: 75%"></div>
                </div>
                <p class="text-xs font-bold mt-2 text-gray-400 text-right">75% dari target</p>
            </div>

        </div>

    </div>
@endsection