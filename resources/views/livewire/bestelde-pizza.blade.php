<div class="flex justify-between align-middle text-center pb-2">
    <p>{{$product->Naam}} </p>
    <p>{{$product_groote->Pizzagrootte}}</p>
    <div class="flex">
        <button wire:click="addIncrement" class="btn btn-primary bg-Italy_green p-1 w-6 text-white">+</button>
        <p class="w-6"> {{$amount}} </p>
        <button wire:click="removeIncrement" class="btn btn-primary bg-Italy_green p-1 w-6 text-white">-</button>
    </div>

</div>
