@extends('layouts.app')

@section('content')
    <div class="flex-row m-4">
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $world->new_world }}</h1>
            <p>{{ $world->tags }}</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $world->short_description }}</p>
        </h1>
    </div>
@endsection
