<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SPW Sekolah</title>
    
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased min-h-screen flex flex-col items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-100">
        <!-- Header -->
        <div class="bg-blue-600 px-6 py-8 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/20 mb-4 shadow-sm">
                <i data-lucide="store" class="text-white w-8 h-8"></i>
            </div>
            <h1 class="text-2xl font-bold text-white tracking-tight">SPW<span class="text-blue-200">Sekolah</span></h1>
            <p class="text-blue-100 mt-2 text-sm">Masuk ke dashboard admin</p>
        </div>

        <!-- Form Section -->
        <div class="p-8">
            <form action="/dashboard-ui" method="GET" class="space-y-6">
                <!-- Username / Email -->
                <div>
                    <label for="username" class="block text-sm font-medium text-slate-700 mb-1.5">Username / Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-lucide="user" class="h-5 w-5 text-slate-400"></i>
                        </div>
                        <input type="text" id="username" name="username" class="block w-full pl-10 pr-3 py-2.5 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm transition-shadow placeholder-slate-400" placeholder="admin@kantin.com" required>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-lucide="lock" class="h-5 w-5 text-slate-400"></i>
                        </div>
                        <input type="password" id="password" name="password" class="block w-full pl-10 pr-3 py-2.5 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm transition-shadow placeholder-slate-400" placeholder="••••••••" required>
                    </div>
                    <div class="flex justify-end mt-1">
                        <a href="#" class="text-xs font-medium text-blue-600 hover:text-blue-500">Lupa password?</a>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    Masuk Sekarang
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-slate-500">
                Belum punya akun? 
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Daftar disini</a>
            </div>
        </div>
    </div>

    <!-- Initialize Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
