<drank-wiget class="rounded-lg shadow-default">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src="{{ asset('images/' . $drank->FotoUri . '.png') }}" alt="">
    <div class="p-4">
        <h2 class="text-xl font-bold">{{$drank->Naam}}</h2>
        <p class="w-grow text-pretty">{{$drank->Omschrijving}}</p>
        <div class="flex justify-between items-center mt-4">
            <p>{{$drank->Prijs}}€</p>
            <button class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Bestellen</button>
        </div>
    </div>
</drank-wiget>