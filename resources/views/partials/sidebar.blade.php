<aside class="hidden lg:block w-64 pt-8 px-6 sticky top-20 h-[calc(100vh-80px)] overflow-y-auto">
    <ul class="space-y-3">
        
        {{-- 1. DASHBOARD --}}
        <li>
            <a href="{{ route('main') }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-lg transition 
               {{ request()->routeIs('main') ? 'bg-[#D3D8CC] font-bold text-[#003344]' : 'hover:bg-green-100 font-semibold text-[#003344]' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span>Dashboard</span>
            </a>
        </li>
        
        {{-- 2. TRANSAKSI --}}
        <li>
            <a href="{{ route('transaksi') }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-lg transition
               {{ request()->routeIs('transaksi') ? 'bg-[#D3D8CC] font-bold text-[#003344]' : 'hover:bg-green-100 font-semibold text-[#003344]' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span>Transaksi</span>
            </a>
        </li>

        {{-- 3. LAPORAN KEUANGAN --}}
        <li>
            <a href="{{ route('laporan') }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-lg transition
               {{ request()->routeIs('laporan') ? 'bg-[#D3D8CC] font-bold text-[#003344]' : 'hover:bg-green-100 font-semibold text-[#003344]' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span>Laporan Keuangan</span>
            </a>
        </li>

        {{-- 4. PREDIKSI AI --}}
        <li>
            <a href="{{ route('prediksi') }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-lg transition
               {{ request()->routeIs('prediksi') ? 'bg-[#D3D8CC] font-bold text-[#003344]' : 'hover:bg-green-100 font-semibold text-[#003344]' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                <span>Prediksi AI</span>
            </a>
        </li>

        {{-- 5. STOK BARANG --}}
        <li>
            <a href="{{ route('stok') }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-lg transition
               {{ request()->routeIs('stok') ? 'bg-[#D3D8CC] font-bold text-[#003344]' : 'hover:bg-green-100 font-semibold text-[#003344]' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                <span>Stok barang</span>
            </a>
        </li>

        {{-- 6. ANALITIK --}}
        <li>
            <a href="{{ route('analitik') }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-lg transition
               {{ request()->routeIs('analitik') ? 'bg-[#D3D8CC] font-bold text-[#003344]' : 'hover:bg-green-100 font-semibold text-[#003344]' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                <span>Analitik</span>
            </a>
        </li>
    </ul>
</aside>