<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Keuangan Pintar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen relative overflow-hidden">

    <div
        class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-green-200/40 rounded-full blur-[100px] pointer-events-none z-0">
    </div>
    <div
        class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-green-300/30 rounded-full blur-[100px] pointer-events-none z-0">
    </div>

    <img src="{{ asset('images/dashboard-1.png') }}" alt="Ilustrasi Dashboard"
        class="hidden lg:block w-[9000px] bottom-[-380px] left-[-270px] absolute bottom-0 left-0 opacity-40 drop-shadow-2xl pointer-events-none z-0">

    <div class="w-full min-h-screen grid grid-cols-1 lg:grid-cols-2 relative z-10 px-6 lg:px-20">

        <div class="hidden lg:flex flex-col h-full justify-start pt-[20vh]">
            <p class="text-[#003344] font-semibold text-lg mb-2">
                Keuangan Pintar
            </p>

            <h1 class="text-5xl xl:text-7xl font-[650] text-[#003344] leading-tight tracking-tight whitespace-nowrap">
                Mengatur keuangan
            </h1>

            <h1
                class="text-5xl xl:text-7xl font-[650] text-[#2E7D32] leading-tight tracking-tight mt-2 whitespace-nowrap">
                Menggunakan AI
            </h1>
        </div>

        <div class="flex items-center justify-center lg:justify-end w-full h-full pb-10 lg:pb-0">

            <div
                class="bg-white rounded-[2.5rem] shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] w-full max-w-[480px] p-8 md:p-12 border-[3px] border-[#023A4B] backdrop-blur-sm relative">

                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/ke-pin-logo.png') }}" alt="Logo" class="h-12 w-auto object-contain">
                </div>

                <div class="text-center mb-8">
                    <h2 class="text-3xl font-[800] text-[#003344]">Create</h2>
                    <h2 class="text-3xl font-[800] text-[#003344]">Account</h2>
                </div>

                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf

                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-[#2E7D32] transition-colors"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="text" name="name" required placeholder="Full Name"
                            class="w-full pl-12 pr-6 py-4 rounded-full border border-gray-300 text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-[#A5D836] focus:border-transparent transition-all placeholder-gray-400 shadow-sm font-medium">
                    </div>

                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-[#2E7D32] transition-colors"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="email" name="email" required placeholder="Email address"
                            class="w-full pl-12 pr-6 py-4 rounded-full border border-gray-300 text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-[#A5D836] focus:border-transparent transition-all placeholder-gray-400 shadow-sm font-medium">
                    </div>

                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-[#2E7D32] transition-colors"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                        </div>
                        <input type="password" name="password" id="password" required placeholder="Password"
                            class="w-full pl-12 pr-12 py-4 rounded-full border border-gray-300 text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-[#A5D836] focus:border-transparent transition-all placeholder-gray-400 shadow-sm font-medium">

                        <div class="absolute inset-y-0 right-0 pr-5 flex items-center cursor-pointer"
                            onclick="togglePassword()">
                            <svg id="eye-icon" class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-[#A5D836] to-[#209E43] hover:from-[#B1E442] hover:to-[#2AAF4F] text-white font-bold text-lg py-4 rounded-full shadow-[0_10px_20px_rgba(32,158,67,0.25)] transition-all duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_25px_rgba(32,158,67,0.35)] mt-4">
                        Sign Up
                    </button>
                </form>

                <div class="mt-8 text-center">
                    <p class="text-gray-500 font-medium text-sm">
                        Sudah punya akun?
                        <a href="{{ route('login') }}"
                            class="text-[#209E43] font-bold hover:underline hover:text-[#1a7f36]">log in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.add('text-[#209E43]');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('text-[#209E43]');
            }
        }
    </script>
</body>

</html>