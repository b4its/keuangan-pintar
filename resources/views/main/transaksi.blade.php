@extends('layouts.app') {{-- sesuaikan dengan layout utama kamu --}}

@section('content')
<div class="p-6 min-h-screen">

    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-[#0B3C49]">Transaksi</h1>
            <p class="text-sm text-gray-600">Halo, User</p>
        </div>

        <div class="flex gap-3">
            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow flex items-center gap-2">
                🗑 Hapus
            </button>
            <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg shadow flex items-center gap-2">
                ✏ Edit
            </button>
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow flex items-center gap-2">
                ➕ Tambah
            </button>
        </div>
    </div>

    {{-- Tabel Wrapper --}}
    <div class=" rounded-xl p-4">
        <h2 class="text-white text-center font-semibold mb-4">
            Tabel Transaksi
        </h2>

        {{-- Table --}}
        <div class="space-y-3">
            @for ($i = 1; $i <= 8; $i++)
            <div class="grid grid-cols-[60px_1fr_160px_120px_200px] items-center bg-white rounded-xl overflow-hidden shadow">
                
                {{-- Nomor --}}
                <div class="bg-[#0B3C49] text-white text-center py-3 font-bold">
                    {{ $i }}
                </div>

                {{-- Nama Barang --}}
                <div class="px-4 py-3 font-medium text-[#0B3C49]">
                    Nama barang
                </div>

                {{-- Tanggal --}}
                <div class="px-4 py-3 text-center text-gray-700">
                    01-01-25
                </div>

                {{-- Qty --}}
                <div class="px-4 py-3 text-center text-gray-700">
                    5 pcs
                </div>

                {{-- Harga --}}
                <div class="px-4 py-3 text-right font-semibold text-[#0B3C49]">
                    Rp XX.xxx.xxx
                </div>
            </div>
            @endfor
        </div>
    </div>

</div>
@endsection
