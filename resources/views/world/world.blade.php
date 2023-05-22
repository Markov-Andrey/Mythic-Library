@extends('layouts.app')

@section('content')
    <div class="flex-row m-4">
        <img src="{{ asset('storage/b63f226701b364b26e47352632e44535.jpg') }}" alt="{{ $world->new_world }}">
        <h1 class="mb-2 text-6xl font-bold tracking-tight text-gray-900">{{ $world->new_world }}</h1>
        @if($world->tags)
            @include('partials.tags', ['tags' => $world->tags])
        @endif
        <p class="font-normal text-gray-700">{{ $world->long_description }}</p>
    </div>
@endsection
