@extends('layouts.app')

@section('title', 'Analitik - Keuangan Pintar')

@section('content')

    {{-- ================= HEADER HALAMAN ================= --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
        <div>
            <h1 class="text-3xl font-[800] tracking-tight text-[#003344]">Analitik</h1>
            <p class="text-gray-500 font-medium text-sm mt-1">Halo, User</p>
        </div>
        
        <div class="flex-1 text-center hidden md:block">
            <h2 class="text-2xl font-[800] text-[#003344]">Prediksi Dalam 5 Tahun Kedepan</h2>
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex space-x-3">
            <button class="px-6 py-2.5 rounded-xl font-bold text-white bg-[#003344] hover:bg-[#002836] shadow-lg shadow-gray-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                <span>Unduh Laporan</span>
            </button>
            <button class="px-6 py-2.5 rounded-xl font-bold text-white bg-[#004d66] hover:bg-[#003344] shadow-lg shadow-cyan-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                <span>Prediksi Ulang</span>
            </button>
        </div>
    </div>

    <div class="md:hidden text-center mb-6">
        <h2 class="text-xl font-[800] text-[#003344]">Prediksi Dalam 5 Tahun Kedepan</h2>
    </div>

    {{-- ================= GRID UTAMA ================= --}}
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6 mb-10">

        {{-- ================= KOLOM KIRI (GRAFIK & STATS) ================= --}}
        <div class="xl:col-span-9 space-y-6">

            {{-- 1. GRAFIK PENDAPATAN --}}
            <div class="bg-white rounded-2xl p-6 h-[400px] border border-transparent shadow-sm hover:shadow-xl transition-all duration-300 relative flex flex-col group">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-lg text-[#003344]">Pendapatan Perbulan</h3>
                    <div class="px-3 py-1 bg-[#F0FDF4] text-[#209E43] text-xs font-bold rounded-full">Live Data</div>
                </div>
                
                {{-- Area Grafik --}}
                <div class="flex-1 flex items-end justify-between pl-2 pr-4 pb-2 relative">
                    {{-- Y-Axis --}}
                    <div class="flex flex-col justify-between text-xs font-bold text-gray-400 h-full py-2 absolute right-0 top-0 bottom-6">
                        <span>10 jt</span><span>5 jt</span><span>0</span>
                    </div>

                    {{-- Bars --}}
                    <div class="w-full flex justify-between items-end h-full pr-10 pl-2">
                        @foreach(['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'] as $index => $bulan)
                            <div class="flex flex-col items-center justify-end h-full w-1/12 group/bar">
                                <div class="w-3/4 bg-[#003344] rounded-t-md relative transition-all duration-300 group-hover/bar:bg-[#209E43] group-hover/bar:scale-y-105" 
                                     style="height: {{ rand(30, 90) }}%">
                                </div>
                                <span class="text-xs font-bold text-gray-400 mt-2 group-hover/bar:text-[#003344]">{{ $bulan }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- 2. BARIS KARTU KECIL (4 items) --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach([
                    ['title' => 'Laba kotor', 'val' => 'Rp 150.000.000', 'up' => true],
                    ['title' => 'Laba bersih', 'val' => 'Rp 95.000.000', 'up' => true],
                    ['title' => 'Total pendapatan', 'val' => 'Rp 245.000.000', 'up' => true],
                    ['title' => 'Arus kas bersih', 'val' => 'Rp 80.000.000', 'up' => true],
                ] as $stat)
                <div class="bg-white rounded-2xl p-5 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300 group cursor-default">
                    <p class="text-xs font-bold text-gray-400 mb-1 group-hover:text-[#209E43] transition-colors">{{ $stat['title'] }}</p>
                    <p class="text-sm lg:text-base font-[800] text-[#003344] truncate">{{ $stat['val'] }}</p>
                    <div class="flex items-center mt-2 text-[#209E43] text-xs font-bold">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        <span>+ 12%</span>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- 3. BARIS PROFIT & RUGI --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Total profit ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">Rp 450.000.000</h2>
                    <p class="text-sm font-bold mt-2 text-[#209E43] bg-[#F0FDF4] inline-block px-2 py-1 rounded-lg">+ 24% dari bulan lalu</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-red-200 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Total kerugian ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">Rp 12.000.000</h2>
                    <p class="text-sm font-bold mt-2 text-red-500 bg-red-50 inline-block px-2 py-1 rounded-lg">+ 2% (Perlu perhatian)</p>
                </div>
            </div>

            {{-- 4. BARIS STOK & KONVERSI --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-between">
                    <div>
                        <p class="font-bold mb-1 text-gray-500">Stok barang</p>
                        <h2 class="text-3xl font-[800] text-[#003344]">1,240</h2>
                        <p class="text-xs font-bold mt-1 text-[#209E43]">+ 5% Restock</p>
                    </div>
                    <div class="w-12 h-12 bg-[#F0FDF4] rounded-xl flex items-center justify-center text-[#209E43]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-between">
                    <div>
                        <p class="font-bold mb-1 text-gray-500">Tingkat konversi</p>
                        <h2 class="text-3xl font-[800] text-[#003344]">Rp 35.000</h2>
                        <p class="text-xs font-bold mt-1 text-[#209E43]">+ 8.5% Optimal</p>
                    </div>
                    <div class="w-12 h-12 bg-[#F0FDF4] rounded-xl flex items-center justify-center text-[#209E43]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                </div>
            </div>

        </div>

        {{-- ================= KOLOM KANAN (PANEL AI) ================= --}}
        <div class="xl:col-span-3 space-y-6">

            {{-- 1. SARAN AI (Modern List) --}}
            <div class="bg-white rounded-2xl p-6 h-[400px] flex flex-col shadow-sm border border-transparent hover:shadow-xl transition-all duration-300">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-[#003344] flex items-center justify-center text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-bold text-lg text-[#003344]">Saran AI</h3>
                </div>
                
                <div class="space-y-3 overflow-y-auto no-scrollbar flex-1 pr-1">
                    @for($i=0; $i<4; $i++)
                    <div class="bg-gray-50 hover:bg-[#F0FDF4] border border-transparent hover:border-[#209E43]/20 rounded-xl p-3 transition-colors cursor-pointer group">
                        <p class="text-xs font-bold text-[#003344] mb-1 group-hover:text-[#209E43]">Strategi Efisiensi</p>
                        <p class="text-[11px] leading-relaxed text-gray-600">Disarankan untuk mengurangi stok barang kategori B sebesar 10% untuk optimalisasi cashflow.</p>
                    </div>
                    @endfor
                </div>
            </div>

            {{-- 2. KARTU RETENSI & CAC --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-4 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="text-[10px] font-bold text-gray-400 mb-1">Retensi</p>
                    <p class="text-xl font-[800] text-[#003344]">85%</p>
                    <p class="text-[10px] font-bold mt-1 text-[#209E43]">+ 2%</p>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="text-[10px] font-bold text-gray-400 mb-1">CAC</p>
                    <p class="text-sm font-[800] text-[#003344]">Rp 45rb</p>
                    <p class="text-[10px] font-bold mt-1 text-[#209E43]">- 5%</p>
                </div>
            </div>

            {{-- 3. KARTU CLV --}}
            <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                <p class="font-bold mb-2 text-gray-500">Nilai seumur hidup ( CLV )</p>
                <h2 class="text-2xl font-[800] text-[#003344]">Rp 2.500.000</h2>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mt-3">
                    <div class="bg-[#003344] h-1.5 rounded-full" style="width: 70%"></div>
                </div>
                <p class="text-xs font-bold mt-2 text-gray-400 text-right">Target 70% tercapai</p>
            </div>

        </div>

    </div>

@endsection