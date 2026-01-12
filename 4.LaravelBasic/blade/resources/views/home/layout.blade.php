<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{$brand??'Brand Name'}}
        @yield('title')
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{@asset('assets/css/style.css')}}">
</head>

<body class="bg-white text-black min-h-screen flex flex-col">

<header class="bg-gray-100 p-4 flex justify-between items-center">
    <h1 class="text-3xl font-bold">{{$brand??'Brand Name'}}</h1>
    <nav class="space-x-4">
        <a href="/" class="hover:underline">Home</a>
        <a href="/about" class="hover:underline">About</a>
        <a href="/contact" class="hover:underline">Contact</a>
    </nav>
</header>

@yield('content')

<footer class="bg-gray-200 text-center p-4">
    <p class="text-sm">&copy; 2024 {{$brand??'Brand Name'}} Our Application. All rights reserved.</p>
</footer>

<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
