<pizza-wiget class="rounded-lg shadow-default flex-grow">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src="{{ asset('images/' . $pizza->FotoUri . '.png') }}" alt="">
    <div class="p-4">
        <h2 class="text-xl font-bold">{{$pizza->Naam}}</h2>
        <p class="mb-2">{{$pizza->Omschrijving}}</p>
        <p>{{$pizza->Prijs}}€</p>
        <div class="flex justify-between items-center mt-4">

                <label for="Pizza_Groote">Groote:</label>
                <select wire:model='Pizza_Groote' id="Pizza_Groote" name="Pizza_Groote">
                    @foreach($Pizza_Grooten as $groote)
                    <option value="{{$groote->GrootteID}}">{{$groote->Pizzagrootte}} +{{$groote->Prijs}}€</option>
                    @endforeach
                </select>
                <button wire:click="addToOrder" class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Bestellen</button>
        </div>
    </div>
</pizza-wiget>