<div>
    @if($worlds)
        <h1>All worlds:</h1>
        <ul>
        @foreach ($worlds as $world)
            <div class="flex-row m-4">
                <a href="/{{ $world->world_name_slug }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $world->new_world }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $world->short_description }}</p>
                    <p>{{ $world->tags }}</p>
                </a>
            </div>
        @endforeach
        </ul>
    @endif
</div>
