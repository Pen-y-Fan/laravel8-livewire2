<div>
    {{--    original:                                       --}}
    {{--    <div style="text-align: center">                --}}
    {{--        <button wire:click="increment">+</button>   --}}
    {{--        <h1>{{ $count }}</h1>                       --}}
    {{--    </div>                                          --}}
    <div class="mb-4 text-center">
        <button class="btn btn-warning" wire:click="increment">
            <!-- "increment" is the method 'public function increment()' in the Counter class -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                 viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </button>
        <!-- {{ $count }} is the property 'public $count = 0;' in the Counter class -->
        <h2>{{ $count }}</h2>
    </div>
    <div>
        <blockquote class="blockquote">
            <p>In general, something as trivial as this "counter" is more suited for something like AlpineJS, however
                it's one of the best ways to easily understand the way Livewire works.</p>
            <footer class="blockquote-footer"><cite title="Source Title"><a
                        href="https://laravel-livewire.com/docs/2.x/quickstart">Livewire - Quickstart documentation</a></cite></footer>
        </blockquote>
    </div>
</div>
