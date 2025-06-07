<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'NG-CDF Portal' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4 py-3">
            <a href="{{ url('/') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/ngcdf-logo.png') }}" alt="NG-CDF Logo" class="h-10 w-auto">
                <span class="text-xl font-bold text-green-700">NG-CDF Portal</span>
            </a>


            <nav class="space-x-6 text-sm font-medium hidden md:flex">
                <a href="{{ url('/') }}" class="hover:text-green-700">Home</a>
                <a href="{{ url('/services') }}" class="hover:text-green-700">Services</a>
                <a href="{{ url('/projects') }}" class="hover:text-green-700">Projects</a>
                <a href="{{ url('/bursary') }}" class="text-green-800 font-semibold">Bursary Application</a>
                <a href="{{ url('/contact') }}" class="hover:text-green-700">Contact</a>
            </nav>

            <div class="md:flex items-center space-x-3 hidden">
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-green-700">Login</a>
                <a href="{{ route('register') }}" class="text-sm bg-green-600 text-white px-4 py-1 rounded hover:bg-green-700">
                    Register
                </a>
            </div>

            <!-- Mobile toggle -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-600 focus:outline-none" x-data="{ open: false }">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden bg-white border-t border-gray-200 px-4 py-2">
            <a href="{{ url('/bursary') }}" class="block py-2 text-green-800 font-semibold">Bursary Application</a>
            <a href="{{ route('login') }}" class="block py-2 text-gray-600">Login</a>
            <a href="{{ route('register') }}" class="block py-2 text-green-600 font-medium">Register</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4 text-sm text-gray-600">
        &copy; {{ date('Y') }} NG-CDF. All rights reserved.
    </footer>

</body>
</html>