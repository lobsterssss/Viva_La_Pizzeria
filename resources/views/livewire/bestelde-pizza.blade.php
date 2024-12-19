<div class="flex justify-between align-middle text-center">
    {{$product}}
    <p>{{$product->Pizza->Naam}}</p>
    <p>{{$product->Grootte->Pizzagrootte}}</p>
    <button wire:click="addIncrement" class="btn btn-primary bg-Italy_green p-1 text-white">+</button>
    <p>{{$amount}}</p>
    <button wire:click="removeIncrement" class="btn btn-primary bg-Italy_green p-1 text-white">-</button>

</div>
