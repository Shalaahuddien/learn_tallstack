<div class="w-full flex justify-between items-center p-5 rounded overflow-hidden shadow-lg">

    <span> Halaman <strong>{{$currentpage}}/{{$totalpage}}</strong></span>

    <div>

        <button wire:click='nextPage'>Next</button>
        <button wire:click='prevPage'>Previous</button>

    </div>

    {{-- Success is as dangerous as failure. --}}
</div>
