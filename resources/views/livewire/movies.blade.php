<div x-data="movies" class="py-3" >

    <div x-init="getMovies('marvel')"></div>

    <div class="search-container flex mb-5">

        <input wire:model='searchKey' type="text" class="w-full px-3 py-2 rounded-1" placeholder="search">

        {{-- <button x-on:click="getMovies($wire.searchKey)" class="px-3 py-2">
            <strong></strong> Klik
        {{-- </button> --}}

             <button wire:click="searchTrigger()" class="px-3 py-2">
            {{-- <strong></strong> --}}Klik
        </button>

        <div x-init="$wire.on('search-trigger', params => { getMovies(params) })"></div>

    </div>

    <div x-show="isLoading" class="w-full bg-red-500 p-5 rounded overflow-hidden">
        <strong class="text-white">loading</strong>
    </div>

    <!-- grid wripper -->
    <div x-show="!isLoading" class="grid grid-cols-3 gap-3">


    {{-- <livewire:movies-item /> --}}
    {{-- <livewire:movies-item /> --}}

    <template x-for="(item, index) in listMovies">

        <!-- grid item -->
    <livewire:movies-item />

    </template>

    </div>

</div>
