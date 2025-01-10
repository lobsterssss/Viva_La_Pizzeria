<x-head>
    @section('content')

    {{var_dump($order->Status)}}
    <div class="{{"color_" . $order->Status}}">
        {{$order->status}}
    </div>

    <div class="flex-col w-grow">
        @if($order->pizza_bestelling)
        <h1 class="text-xl font-bold ">Pizza's</h1>
        <article class="grid grid-cols-4 gap-4 w-grow p-4 mb-10">
            @foreach ($order->pizza_bestelling as $Pizza_besteling)
                <x-order_pizza :pizzaorder="$Pizza_besteling" />
            @endforeach
        </article>
        @endif
        @if($order->drank_bestelling)
        <h1 class="text-xl font-bold ">Drankjes</h1>
        <article class="grid grid-cols-4 gap-4 w-grow p-4 mb-10">
            @foreach ($order->drank_bestelling as $Drank_besteling)
                <x-order_drank :drankorder="$Drank_besteling" />
            @endforeach
        </article>
        @endif

    </div>

    @endsection

</x-head>