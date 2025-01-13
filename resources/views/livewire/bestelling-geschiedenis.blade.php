<article class="w-grow" wire:poll.5s="getOrders">
    @if(count($orders))
@foreach ($orders as $order)
    <a href="{{route("selected_order", $order->BestelID)}}" class="flex justify-between w-grow rounded-lg shadow-default p-4">
        <div>
            <h1>Bestelling nummer: {{ $order->BestelID}}</h1>
            <p>Datumn: {{ $order->Datum}}</p>
        </div>
        <div class="btn btn-primary p-2 rounded-lg text-white {{"bg-Color_" . str_replace(" ", "_", $order->Status)}}">
            {{$order->Status}}
        </div>

    </a>
@endforeach
@else:
    <div class="flex justify-between w-grow rounded-lg shadow-default p-4">
        <h1>u heeft nog geen bestellingen gemaakt</h1>
    </div>
    @endif
</article>