<product-wiget class="rounded-lg shadow-default flex-grow">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src=" 
    @if(str_contains($drank->FotoUri, "Generic_")) 
    {{asset('images/' . $drank->FotoUri . '.png')}}
     @else
     {{$drank->FotoUri}} 
      @endif" alt="">
        <div class="p-4">
            <h2 class="text-xl font-bold">{{$drank->Naam}}</h2>
            <p>{{$drank->Omschrijving}}</p>
            <div class="flex justify-between items-center mt-4">
                <p>{{$drank->Prijs}}€</p>
            </div>
        </div>
    </product-wiget>

