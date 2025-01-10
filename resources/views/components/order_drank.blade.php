<order-wiget class="rounded-lg shadow-default flex-grow">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src=" 
    @if(str_contains($drankorder->Drank->FotoUri, "Generic_")) {{asset('images/' . $drankorder->Drank->FotoUri . '.png')}} @else{{$drankorder->Drank->FotoUri}} @endif" alt="">
      <div class="p-4">
        <h2 class="text-xl font-bold">{{$drankorder->Drank->Naam}}</h2>
        <p>Aantal: {{$drankorder->Aantal}}</p>

        <div class="flex justify-between items-center mt-4">
            <p>{{$drankorder->Prijs}}€</p>
        </div>
    </div>
</order-wiget>