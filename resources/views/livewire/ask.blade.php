<div class="container">
    @if($response)
        <h1 class="text-3xl font-bold">Response</h1>
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <p class="font-medium">{{ $response }}</p>
        </div>
    @endif
    <form wire:submit.prevent="ask">
        <label for="input-group-1" class="text-3xl font-bold">Your Ask</label>
        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                <label for="comment" class="sr-only">Your comment</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 left-0 flex items-start py-4 pl-3 pointer-events-none">
                        <img src="/image/icon/logo_mini.png" height="32px" width="32px" alt="logo">
                    </div>
                    <textarea wire:model="prompt" type="text" cols="30" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-14 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
            </div>
            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Send</button>
            </div>
        </div>
    </form>
</div>
