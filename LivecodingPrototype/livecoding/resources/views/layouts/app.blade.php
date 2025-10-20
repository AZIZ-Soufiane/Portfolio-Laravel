<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - @yield('title', 'Accueil')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4">
            <h1 class="text-2xl font-bold text-indigo-600">My Portfolio</h1>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-6 py-10">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">© {{ date('Y') }} - Developer Portfolio</p>
        </div>
    </footer>

</body>
</html>
