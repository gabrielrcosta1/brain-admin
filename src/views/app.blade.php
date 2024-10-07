<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Usuários - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md dark:bg-gray-800">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
                <a href="#" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="Logo" />
                    <span class="text-xl font-semibold dark:text-white">Gerenciamento de Usuários</span>
                </a>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:hover:bg-gray-700 focus:outline-none">Log in</a>
                    <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none">Get started</a>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>