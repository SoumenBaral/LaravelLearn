@extends('home.layout')

@section('content')
<main class="flex-grow p-6 text-center">
    <p class="text-lg mb-4">This is the home page of our application.</p>
    <h2 class="text-2xl font-semibold mb-2">{{$name ?? 'Home'}}</h2>
    <p class="text-base">Explore our features and services. We're glad to have you here!</p>
    <h3 class="text-2xl my-4 bg-orange-300 rounded-2xl py-1">Skills</h3>
    <ul class="flex flex-wrap justify-center gap-4">

        @foreach($skills as $skill)
            <li class="px-3 py-1 border rounded text-sm">{{$skill}}</li>
        @endforeach
    </ul>

    <div class="mx-w-[500px] mx-auto mt-6">
        <img  src="{{asset('assets/images/todo.jpg')}}" alt="Home Image" class="w-full h-auto rounded-lg shadow-md">

    </div>
</main>
@endsection
