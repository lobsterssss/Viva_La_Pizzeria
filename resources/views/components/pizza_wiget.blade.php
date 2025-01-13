<product-wiget class="rounded-lg shadow-default flex-grow">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src=" 
    @if(str_contains($pizza->FotoUri, "Generic_")) 
    {{asset('images/' . $pizza->FotoUri . '.png')}}
     @else
     {{$pizza->FotoUri}} 
      @endif
      " alt="">
        <div class="p-4">
            <h2 class="text-xl font-bold">{{$pizza->Naam}}</h2>
            <p>{{$pizza->Omschrijving}}</p>
            <div class="flex justify-between items-center mt-4">
                <p>{{$pizza->Prijs}}€</p>
            </div>
        </div>
    </product-wiget>

