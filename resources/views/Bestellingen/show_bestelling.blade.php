<x-head>
    @section('content')

    <div class="{{"color_" . $order->Status}}">
        {{$order->status}}
    </div>

    <div class="flex-col w-grow">
        <h1 class="text-xl font-bold ">Pizza's</h1>
        <article class="grid grid-cols-4 gap-4 w-grow p-4 mb-10">
            @foreach ($order->pizza_bestelling as $Pizza_besteling)
                <x-order_pizza :pizzaorder="$Pizza_besteling" />
            @endforeach
        </article>

        <h1 class="text-xl font-bold ">Drankjes</h1>
        <article class="grid grid-cols-4 gap-4 w-grow p-4 mb-10">
            @foreach ($order->drank_bestelling as $Pizza_besteling)
                <x-drank_wiget :drank="$Drank" />
            @endforeach
        </article>
    </div>

    @endsection

</x-head>