<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Ke-Pin | Keuangan Pintar')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        
        .text-theme { color: #003344; }
        .bg-theme { background-color: #003344; }
        
        .border-theme {
            border: 2px solid #003344;
            border-radius: 0.75rem; /* rounded-xl */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>

<body class="font-['Inter'] antialiased text-[#003344] bg-[#FBFFEE] min-h-screen flex flex-col">

    @include('partials.navbar.dashboard')

    <div class="flex flex-1 relative max-w-[1920px] mx-auto w-full">
        @if(!isset($hideSidebar)) 
            @include('partials.sidebar')
        @endif

        <main class="flex-1 p-6 lg:p-8 overflow-hidden">
            @yield('content')
        </main>

    </div>

</body>
</html>