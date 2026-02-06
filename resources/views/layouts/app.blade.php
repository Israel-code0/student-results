<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset
            <nav class="bg-gray-800 text-white px-8 py-4">
                <div x-data="{ open: false }" class="flex items-center">

                    <!-- Mobile menu button -->
                    <button @click="open = !open" class="md:hidden mr-4">
                        ☰
                    </button>

                    <!-- Navigation links -->
                    <div :class="open ? 'block' : 'hidden'" class="md:flex items-center gap-10 w-full">
                        <a href="/students"
                           class="px-4 py-2 rounded
               {{ request()->is('students*') ? 'bg-gray-700 font-bold' : 'hover:bg-gray-700' }}">
                            Students
                        </a>

                        <a href="/courses"
                           class="px-4 py-2 rounded
               {{ request()->is('courses*') ? 'bg-gray-700 font-bold' : 'hover:bg-gray-700' }}">
                            Courses
                        </a>

                        <a href="/results/create"
                           class="px-4 py-2 rounded
               {{ request()->is('results*') ? 'bg-gray-700 font-bold' : 'hover:bg-gray-700' }}">
                            Add Results
                        </a>

                        <a href="/dashboard"
                           class="px-4 py-2 rounded
               {{ request()->is('dashboard') ? 'bg-gray-700 font-bold' : 'hover:bg-gray-700' }}">
                            Dashboard
                        </a>

                        <!-- Dark mode toggle -->
                        <button onclick="toggleDarkMode()" class="px-4 py-2 hover:bg-gray-700 rounded">
                            🌙
                        </button>

                        <!-- Logout -->
                        <a href="/logout"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="ml-auto px-4 py-2 bg-red-600 rounded hover:bg-red-700">
                            Logout
                        </a>
                    </div>

                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </nav>








            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            function toggleDarkMode() {
                document.documentElement.classList.toggle('dark');
                localStorage.setItem(
                    'theme',
                    document.documentElement.classList.contains('dark') ? 'dark' : 'light'
                );
            }

            if (localStorage.getItem('theme') === 'dark') {
                document.documentElement.classList.add('dark');
            }
        </script>

    </body>
</html>
