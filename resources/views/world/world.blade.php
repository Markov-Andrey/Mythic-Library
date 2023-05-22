@extends('layouts.app')

@section('content')
    <div class="flex-row m-4">
            <img src="{{ asset('storage/b63f226701b364b26e47352632e44535.jpg') }}" alt="{{ $world->new_world }}">
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $world->new_world }}</h1>
            @foreach($world->tags as $tag)
                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-1 mb-1">{{ $tag }}</button>
            @endforeach
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $world->short_description }}</p>
        </h1>
    </div>
@endsection
