
@extends('home.layout')

@section('content')
<!-- This pushes footer to bottom -->
<main class="flex-grow p-6">
    <p class="text-lg mb-4">This is the home page of our application.</p>
    <h2 class="text-2xl font-semibold mb-2">{{$name ?? 'Contact'}}</h2>
    <p class="text-base">Explore our features and services. We're glad to have you here!</p>
</main>
@endsection
@section("title")
    - Contact
@endsection

