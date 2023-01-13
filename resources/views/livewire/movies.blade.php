<div x-data="movies" class="py-3" >

    <div x-init="getMovies()"></div>

    <!-- grid wripper -->
    <div class="grid grid-cols-3 gap-3">

    <!-- grid item -->
    <livewire:movies-item />
    <livewire:movies-item />
    <livewire:movies-item />

    </div>

</div>
