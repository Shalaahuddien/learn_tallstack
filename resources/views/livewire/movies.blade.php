<div x-data="movies" class="py-3" >

    <div x-init="getMovies('marvel')"></div>

    <livewire:search-component />

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
