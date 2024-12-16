<pizza-wiget class="rounded-lg shadow-default flex-grow">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src="{{ asset('images/' . $pizza->FotoUri . '.png') }}" alt="">
    <div class="p-4">
        <h2 class="text-xl font-bold">{{$pizza->Naam}}</h2>
        <p>{{$pizza->Omschrijving}}</p>
        <div class="flex justify-between items-center mt-4">
            <p>{{$pizza->Prijs}}€</p>
            <button class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Bestellen</button>
        </div>
    </div>
</pizza-wiget>