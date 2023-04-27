<div>
    @if($worlds)
        <h1>All worlds:</h1>
        <ul>
        @foreach ($worlds as $world)
            <li>
                <h1 class="text-3xl">{{ $world->new_world }}</h1>
                <p>{{ $world->short_description }}</p>
                <p>{{ $world->tags }}</p>
            </li>
        @endforeach
        </ul>
    @endif
</div>
