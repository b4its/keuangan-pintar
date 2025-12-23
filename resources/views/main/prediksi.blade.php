@extends('layouts.app')

@section('title', 'Prediksi AI - Keuangan Pintar')

@section('content')

    {{-- ================= HEADER HALAMAN ================= --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-[800] tracking-tight text-[#003344]">Prediksi AI</h1>
            <p class="text-gray-500 font-medium text-sm mt-1">Analisis dan proyeksi keuangan masa depan.</p>
        </div>
        <div>
            <button class="bg-[#003344] hover:bg-[#002836] text-white px-6 py-2.5 rounded-xl font-bold text-sm shadow-lg shadow-gray-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                <span>Unduh Laporan</span>
            </button>
        </div>
    </div>

    {{-- ================= GRID UTAMA (GRAFIK & STATISTIK) ================= --}}
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6 mb-10">

        {{-- ================= KOLOM KIRI (GRAFIK & KARTU STATS) ================= --}}
        <div class="xl:col-span-9 space-y-6">

            {{-- 1. GRAFIK PENDAPATAN --}}
            <div class="bg-white rounded-2xl p-6 h-[400px] border border-transparent shadow-sm hover:shadow-xl transition-all duration-300 relative flex flex-col group">
                 <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-lg text-[#003344]">Pendapatan Perbulan</h3>
                    <div class="px-3 py-1 bg-[#F0FDF4] text-[#209E43] text-xs font-bold rounded-full">Proyeksi</div>
                </div>
                
                <div class="flex-1 flex items-end justify-between pl-2 pr-10 pb-6 relative">
                    <div class="absolute -right-8 top-0 bottom-6 flex flex-col justify-between text-xs font-bold text-gray-400 h-full py-2">
                        <span>10 jt</span><span>5 jt</span><span>0</span>
                    </div>

                    <div class="w-full flex justify-between items-end h-full pr-4 pl-2">
                         @foreach(['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'] as $bulan)
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

            {{-- 2. BARIS KARTU KECIL (Laba/Rugi) --}}
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
                    <div class="flex items-center mt-2 text-[#209E43] text-xs font-bold">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        <span>+ XX%</span>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- 3. BARIS PROFIT & KERUGIAN --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Total profit ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">Rp XXX.xxx.xxx</h2>
                     <p class="text-sm font-bold mt-2 text-[#209E43] bg-[#F0FDF4] inline-block px-2 py-1 rounded-lg">+ XX%</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-red-200 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Total kerugian ( bulan ini )</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">Rp XXX.xxx.xxx</h2>
                    <p class="text-sm font-bold mt-2 text-red-500 bg-red-50 inline-block px-2 py-1 rounded-lg">+ XX%</p>
                </div>
            </div>

            {{-- 4. BARIS STOK & KONVERSI --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Stok barang</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">XXXXX</h2>
                     <p class="text-sm font-bold mt-2 text-[#209E43] bg-[#F0FDF4] inline-block px-2 py-1 rounded-lg">+ XX%</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="font-bold mb-2 text-gray-500">Tingkat konversi</p>
                    <h2 class="text-3xl font-[800] text-[#003344]">Rp XXX.xxx.xxx</h2>
                     <p class="text-sm font-bold mt-2 text-[#209E43] bg-[#F0FDF4] inline-block px-2 py-1 rounded-lg">+ XX%</p>
                </div>
            </div>

        </div>

        {{-- ================= KOLOM KANAN (PANEL AI & STATS TAMBAHAN) ================= --}}
        <div class="xl:col-span-3 space-y-6">

            {{-- 1. SARAN AI --}}
            <div class="bg-white rounded-2xl p-6 h-[420px] flex flex-col shadow-sm border border-transparent hover:shadow-xl transition-all duration-300">
                 <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-[#003344] flex items-center justify-center text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-bold text-lg text-[#003344]">Saran AI</h3>
                </div>
                
                <div class="space-y-3 overflow-y-auto no-scrollbar flex-1 pr-1">
                    {{-- Loop Item Saran AI --}}
                    @for($i=0; $i<4; $i++)
                    <div class="bg-gray-50 hover:bg-[#F0FDF4] border border-transparent hover:border-[#209E43]/20 rounded-xl p-3 transition-colors cursor-pointer group">
                        <p class="text-xs font-bold text-[#003344] mb-1 group-hover:text-[#209E43]">Contoh Saran</p>
                        <p class="text-[11px] leading-tight text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    @endfor
                </div>
            </div>

            {{-- 2. KARTU RETENSI & CAC --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-4 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="text-[10px] font-bold text-gray-400 mb-1 leading-tight">Retensi</p>
                    <p class="text-base font-[800] text-[#003344]">XX%</p>
                    <p class="text-[10px] font-bold mt-1 text-[#209E43]">+ XX%</p>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                    <p class="text-[10px] font-bold text-gray-400 mb-1 leading-tight">CAC</p>
                    <p class="text-sm font-[800] text-[#003344]">Rp XXX.xxx</p>
                    <p class="text-[10px] font-bold mt-1 text-[#209E43]">+ XX%</p>
                </div>
            </div>

            {{-- 3. KARTU CLV --}}
            <div class="bg-white rounded-2xl p-6 border border-transparent hover:border-[#209E43]/30 shadow-sm hover:shadow-lg transition-all duration-300">
                <p class="font-bold mb-2 text-gray-500">Nilai seumur hidup ( CLV )</p>
                <h2 class="text-2xl font-[800] text-[#003344]">Rp XXX.xxx.xxx</h2>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mt-3">
                    <div class="bg-[#003344] h-1.5 rounded-full" style="width: 70%"></div>
                </div>
                <p class="text-xs font-bold mt-2 text-gray-400 text-right">Target tercapai</p>
            </div>

        </div>

    </div>

    <div class="w-full text-center">
        <h2 class="text-3xl font-[800] text-[#003344] mb-6">Prediksi</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <button class="bg-[#003344] hover:bg-[#002836] text-white py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 border border-transparent hover:border-[#209E43]/50">
                Prediksi 5 Tahun Kedepan
            </button>
            <button class="bg-[#003344] hover:bg-[#002836] text-white py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 border border-transparent hover:border-[#209E43]/50">
                Prediksi 10 Tahun Kedepan
            </button>
            <button class="bg-[#003344] hover:bg-[#002836] text-white py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 border border-transparent hover:border-[#209E43]/50">
                Prediksi 15 Tahun Kedepan
            </button>
        </div>
    </div>

@endsection