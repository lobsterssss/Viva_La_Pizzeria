<order-wiget class="rounded-lg shadow-default flex-grow">
    <img class="w-grow overflow-hidden h-32 rounded-t-lg" src=" 
    @if(str_contains($pizzaorder->Pizza->FotoUri, "Generic_")) {{asset('images/' . $pizzaorder->Pizza->FotoUri . '.png')}} @else{{$pizzaorder->Pizza->FotoUri}} @endif" alt="">
    <div class="p-4">
        <h2 class="text-xl font-bold">{{$pizzaorder->Pizza->Naam}}</h2>
        <p>Formaat: {{$pizzaorder->Grootte->Pizzagrootte}}</p>
        <p>Aantal: {{$pizzaorder->Aantal}}</p>

        <div class="flex justify-between items-center mt-4">
            <p>{{$pizzaorder->Prijs}}€</p>
        </div>
    </div>
</order-wiget>


