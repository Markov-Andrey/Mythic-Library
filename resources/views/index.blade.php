@extends('layouts.app')

@section('content')
<div>
    @if($worlds)
        <h1>All worlds:</h1>
        <ul>
        @foreach ($worlds as $world)
            <div class="flex-row m-4">
                <a href="{{ route('world', ['world_name_slug' => $world->world_name_slug]) }}" class="bg-slate-100 hover:bg-gray-300 block max-w-sm p-6 border border-gray-200 rounded-lg shadow">
                    <div class="relative">
                        <img class="rounded-lg" src="{{ asset('storage/b63f226701b364b26e47352632e44535.jpg') }}" alt="{{ $world->new_world }}">
                        <div class="absolute bottom-0 left-0 w-full h-full flex items-center justify-center">
                            <h1 class="font-bold text-shadow text-white text-5xl font-bold z-10">{{ $world->new_world }}</h1>
                        </div>
                    </div>
                    @if($world->tags)
                        <div class="flex flex-row py-2">
                            @foreach($world->tags as $tag)
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-1 mb-1">
                                    {{ $tag }}
                                </button>
                            @endforeach
                        </div>
                    @endif
                    <p class="bg-white border rounded-lg shadow p-2 font-normal text-gray-700 dark:text-gray-400">{{ $world->short_description }}</p>
                </a>
            </div>
        @endforeach
        </ul>
    @endif
</div>
@endsection
