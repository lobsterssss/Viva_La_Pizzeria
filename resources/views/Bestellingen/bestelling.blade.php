<x-head>
    @section('content')
    <div class="flex flex-col w-grow">
    <div class="btn btn-primary p-2 rounded-lg text-white {{"bg-Color_" . str_replace(" ", "_", $order->Status)}}">
        {{$order->Status}}
    </div>

    <div class="flex-col w-grow">
        @if($order->pizza_bestelling->count())
        <h1 class="text-xl font-bold ">Pizza's</h1>
        <article class="grid grid-cols-4 gap-4 w-grow p-4 mb-10">
            @foreach ($order->pizza_bestelling as $Pizza_besteling)
                <x-order_pizza :pizzaorder="$Pizza_besteling" />
            @endforeach
        </article>
        @endif
        @if($order->drank_bestelling->count())
        <h1 class="text-xl font-bold ">Drankjes</h1>
        <article class="grid grid-cols-4 gap-4 w-grow p-4 mb-10">
            @foreach ($order->drank_bestelling as $Drank_besteling)
                <x-order_drank :drankorder="$Drank_besteling" />
            @endforeach
        </article>
        @endif

    </div>
</div>
    @endsection

</x-head>