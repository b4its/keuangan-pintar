<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Keuangan Pintar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .custom-dashed {
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='30' ry='30' stroke='%23003344' stroke-width='10' stroke-dasharray='15%2c 35' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
            border-radius: 30px;
        }
    </style>
</head>

<body class="bg-[#FBFFEE] min-h-screen flex flex-col">

    @include('partials.navbar.dashboard')

    <main class="flex-grow flex flex-col items-center justify-start pt-16 px-4">

        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-[700] text-[#003344] mb-2">
                Upload File <span class="text-[#209E43]">Keuangan Anda</span>
            </h1>
            <p class="text-[#003344] font-medium text-sm md:text-base">
                Drag and drop atau klik tombol <span class="font-bold">Upload file</span>
            </p>
        </div>

        <div class="w-full max-w-5xl h-80 custom-dashed flex flex-col items-center justify-center bg-transparent relative">
            
            <button class="flex items-center space-x-2 bg-gradient-to-r from-[#A5D836] to-[#209E43] hover:from-[#B1E442] hover:to-[#2AAF4F] text-white font-bold text-lg px-8 py-3 rounded-full shadow-lg transition-transform transform hover:-translate-y-1 relative z-10">
                <div class="bg-white/20 rounded-full p-0.5 mr-1">
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <span>Upload File</span>
            </button>

            <p class="text-[#003344] font-medium text-sm mt-4 relative z-10">
                Drag and drop File kesini atau klik tombol <span class="font-bold">Upload file</span>
            </p>

            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
        </div>

    </main>

</body>
</html>