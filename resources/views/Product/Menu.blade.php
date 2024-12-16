<x-head>
    @section('content')
        <div class="flex-col">
            <h1 class="text-xl font-bold ">Pizza's</h1>
            <article class="grid grid-cols-5 gap-4 w-grow p-4 mb-10">
                @foreach ($products['pizzas'] as $Pizza)
                    <x-pizza_wiget :pizza="$Pizza" />
                @endforeach
            </article>

            <h1 class="text-xl font-bold ">Drankjes</h1>
            <article class="grid grid-cols-5 gap-4 w-grow p-4 mb-10">
                @foreach ($products['drinks'] as $Drank)
                    <x-drank_wiget :drank="$Drank" />
                @endforeach
            </article>
        </div>
    @endsection

</x-head>