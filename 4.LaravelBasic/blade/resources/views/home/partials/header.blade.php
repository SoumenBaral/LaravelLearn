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
@include('home.partials.nav')
