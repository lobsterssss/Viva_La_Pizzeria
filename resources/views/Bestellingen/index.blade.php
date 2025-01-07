<x-head>
    @section('content')
        <div class="flex-col w-grow">
            <h1 class="text-xl font-bold ">Pizza's</h1>
            <article class="grid grid-cols-3 gap-4 w-grow p-4 mb-10">
                @foreach ($products['pizzas'] as $Pizza)
                    <livewire:pizza-bestelling :pizza="$Pizza"/>
                @endforeach
            </article>
            <h1 class="text-xl font-bold ">Drankjes</h1>
            <article class="grid grid-cols-3 gap-4 w-grow p-4 mb-10">
                @foreach ($products['drinks'] as $Drank)
                    <x-drank_wiget :drank="$Drank" />
                @endforeach
            </article>

        </div>

        <livewire:bestellingen/>

    @endsection

</x-head>