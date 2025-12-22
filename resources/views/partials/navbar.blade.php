<nav id="main-navbar"
    class="bg-white fixed top-0 w-full z-50 transition-transform duration-500 ease-in-out shadow-[0_13px_30px_rgb(0,0,0,0.2)]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-12">
        <div class="flex justify-between items-center h-[90px]">

            <div class="flex-shrink-0 flex items-center cursor-pointer">
                <a href="/">
                    <img src="{{ asset('images/ke-pin-logo.png') }}" alt="Ke-Pin Logo" class="h-10 w-auto">
                </a>
            </div>

            <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-10 lg:space-x-14">
                <a href="#"
                    class="text-[17px] font-bold text-[#023A4B] hover:text-[#78C840] transition duration-300">Beranda</a>
                <a href="#visi-misi"
                    class="text-[17px] font-bold text-[#023A4B] hover:text-[#78C840] transition duration-300">Visi &
                    Misi</a>
                <a href="#fitur-section"
                    class="text-[17px] font-bold text-[#023A4B] hover:text-[#78C840] transition duration-300">Fitur</a>
            </div>

            <div class="hidden md:flex items-center">
                <a href="{{ route('login') }}"
                    class="inline-flex items-center bg-gradient-to-r from-[#A5D836] to-[#209E43] hover:from-[#B1E442] hover:to-[#2AAF4F] text-white font-bold text-[14px] py-3 px-10 rounded-full shadow-[0_10px_25px_rgba(32,158,67,0.3)] transition-all duration-300 transform hover:-translate-y-0.5">
                    Login
                </a>
            </div>

            <div class="-mr-2 flex items-center md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>