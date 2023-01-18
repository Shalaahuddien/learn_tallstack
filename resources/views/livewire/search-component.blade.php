<div class="search-container flex mb-5">

        <input wire:model.lazy='searchKey' type="text" class="w-full px-3 py-2 rounded-1" placeholder="search">

        {{-- <button x-on:click="getMovies($wire.searchKey)" class="px-3 py-2">
            <strong></strong> Klik
        {{-- </button> --}}

             <button wire:click="searchTrigger()" class="px-3 py-2">
            {{-- <strong></strong> --}}Klik
        </button>

        @if ($searchAction)

        <h1>search</h1>

        @else

        <h1>Redirect</h1>

        @endif

        <div x-init="$wire.on('search-trigger', params => { getMovies(params) })"></div>

    </div>
