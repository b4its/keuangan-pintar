<nav class="bg-white shadow-[0_13px_30px_rgb(0,0,0,0.2)] w-full px-6 py-3 flex items-center sticky top-0 z-50">

    <a href="{{ route('main') }}">
        <div class="flex items-center shrink-0 mr-8">
            <img src="{{ asset('images/ke-pin-logo.png') }}" alt="Ke-Pin Logo" class="h-10 w-auto object-contain">
        </div>
    </a>

    <div class="hidden md:flex w-full max-w-md">
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="text"
                class="block w-full pl-11 pr-4 py-2.5 rounded-full bg-gray-100 border-transparent focus:bg-white focus:border-gray-300 focus:ring-0 text-sm transition-colors"
                placeholder="Search">
        </div>
    </div>

    <div class="flex items-center space-x-3 ml-auto">
        <div class="h-10 w-10 rounded-full bg-[#209E43] flex items-center justify-center text-white shadow-sm">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
        </div>
        <div class="hidden md:flex flex-col text-left leading-tight">
            <span class="text-sm font-bold text-[#003344]">User</span>
            <span class="text-xs text-[#003344]">Emailku@gmail.com</span>
        </div>
    </div>
</nav>