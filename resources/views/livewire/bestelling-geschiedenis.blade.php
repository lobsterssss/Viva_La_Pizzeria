@foreach ($orders as $order)
    <div>
        <h1>Bestelling nummer: {{ $order->BestelID}}</h1>
        <p>Datumn: {{ $order->Datumn}}</p>
        
    </div>
@endforeach