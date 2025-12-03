<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col h-screen">
    <header>
        <x-header.a route="home">Home</x-header.a>
        <x-header.a route="country.index">Country</x-header.a>
        <x-header.a route="page2">Page2</x-header.a>
        {{-- <x-header.a route="sdfsdf">Login</x-header.a> --}}
        <button>Register</button>
    </header>
    <main class="flex-grow">
        {{ $slot }}
    </main>
    <footer class="text-center">
        &copy 2025
    </footer>
</body>
</html>
