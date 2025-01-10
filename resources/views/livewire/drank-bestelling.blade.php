<order-wiget class="rounded-lg shadow-default flex-grow">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src="@if(str_contains($Drank->FotoUri, "Generic_")) {{asset('images/' . $Drank->FotoUri . '.png')}} @else {{$Drank->FotoUri}} @endif" alt="">
        <div class="p-4">
            <h2 class="text-xl font-bold">{{$Drank->Naam}}</h2>
            <p class="mb-2">{{$Drank->Omschrijving}}</p>
            <p>{{$Drank->Prijs}}€</p>
            <div class="flex justify-between items-center mt-4">
                <div></div>
                <button wire:click="addToOrder" class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Bestellen</button>
            </div>
        </div>
    </order-wiget>