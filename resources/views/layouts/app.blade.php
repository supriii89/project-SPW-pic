<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPW Sekolah - @yield('title', 'Dashboard')</title>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#2563eb', // Blue-600
                        secondary: '#1e40af', // Blue-800
                        light: '#f3f4f6',
                    }
                }
            }
        }
    </script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased overflow-x-hidden">

    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-slate-200 flex-shrink-0 hidden md:flex flex-col shadow-sm">
            <!-- Sidebar Header -->
            <div class="h-16 flex items-center px-6 border-b border-slate-100">
                <i data-lucide="store" class="text-primary w-6 h-6 mr-3"></i>
                <span class="font-bold text-lg text-slate-800 tracking-tight">SPW<span class="text-primary">Sekolah</span></span>
            </div>
            
            <!-- Sidebar Navigation -->
            <div class="p-4 flex-1 overflow-y-auto">
                <ul class="space-y-1.5">
                    <li>
                        <a href="/dashboard-ui" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-700 hover:bg-blue-50 hover:text-primary group transition-colors">
                            <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3 text-slate-400 group-hover:text-primary transition-colors"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="pt-2 pb-1">
                        <p class="px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider">Manajemen</p>
                    </li>
                    <li>
                        <a href="/produk" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-700 hover:bg-blue-50 hover:text-primary group transition-colors">
                            <i data-lucide="package" class="w-5 h-5 mr-3 text-slate-400 group-hover:text-primary transition-colors"></i>
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="/transaksi" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-700 hover:bg-blue-50 hover:text-primary group transition-colors">
                            <i data-lucide="shopping-cart" class="w-5 h-5 mr-3 text-slate-400 group-hover:text-primary transition-colors"></i>
                            Transaksi Kasir
                        </a>
                    </li>
                    <li class="pt-2 pb-1">
                        <p class="px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider">Laporan</p>
                    </li>
                    <li>
                        <a href="/laporan" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-700 hover:bg-blue-50 hover:text-primary group transition-colors">
                            <i data-lucide="bar-chart-3" class="w-5 h-5 mr-3 text-slate-400 group-hover:text-primary transition-colors"></i>
                            Laporan Penjualan
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Sidebar Footer -->
            <div class="p-4 border-t border-slate-200">
                <a href="/login-ui" class="flex items-center px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                    <i data-lucide="log-out" class="w-5 h-5 mr-3"></i>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <div class="flex-1 flex flex-col w-full">
            
            <!-- Top Navbar -->
            <header class="h-16 bg-white border-b border-slate-200 shadow-sm flex items-center justify-between px-6">
                <!-- Mobile menu button -->
                <button class="md:hidden text-slate-500 hover:text-slate-700 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>

                <div class="flex-1 md:flex-none">
                    <!-- Page Title / Breadcrumb (Optional) -->
                </div>

                <!-- Right Side -->
                <div class="flex items-center space-x-4">
                    <button class="text-slate-400 hover:text-slate-600 transition-colors">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                    </button>
                    
                    <!-- Profile Dropdown -->
                    <div class="flex items-center cursor-pointer">
                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-primary font-bold mr-2">
                            A
                        </div>
                        <span class="text-sm font-medium text-slate-700 hidden sm:block">Admin SPW</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 ml-1 text-slate-400"></i>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
            
        </div>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
    
    @yield('scripts')
</body>
</html>
