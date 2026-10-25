
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Hidden World')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-black text-white">

    <header class="border-b border-gray-500">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="/" class="text-xl font-bold tracking-widest">
                HIDDEN<span class="text-emerald-500">.</span>WORLD
            </a>

            <a href="#explore"
               class="rounded-full border border-gray-500 px-5 py-2 text-sm transition hover:bg-white hover:text-black">
                Explore places
            </a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-border-gray-500 px-6 py-8 text-center text-sm text-gray-400">
        Hidden World — Discover places beyond the ordinary.
    </footer>

</body>
</html>
