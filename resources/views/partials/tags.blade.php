<div class="flex flex-row py-2">
    @foreach($tags as $tag)
    <button data-tooltip-target="{{ $loop->iteration }}" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-1 mb-1">
        {{ $tag->title }}
    </button>
    <div id="{{ $loop->iteration }}" role="tooltip" class="max-w-xs absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
        {{ $tag->short_description }}
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    @endforeach
</div>
