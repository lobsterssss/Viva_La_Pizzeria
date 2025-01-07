@php
$formFields = [
    ['type' => 'text', 'name' => 'korting', 'label' => 'korting', 'required' => false, 'value' => old('korting'), 'error' => $errors->get('korting'), 'placeholder' => 'vul hier een korting code in'],
];       
@endphp

<div class="h-max sticky flex flex-col items-center inset-y-1/4 rounded-lg shadow-default p-4">
    <h1 class="text-xl font-bold">bestellingen</h1>
    <div>
        <h1 class="text-xl font-bold">uw bestelling</h1>
        @if($Products)
            @foreach($Products as $index => $Product)
                <livewire:bestelde-pizza :bestelling="$Product" :key="'product-'.$index" />
            @endforeach
        @endif
    </div>        
        @foreach ($formFields as $field)
        <x-form_input :error="$field['error']" :type="$field['type']" :name="$field['name']" :value="$field['value']" :label="$field['label']" :placeholder="$field['placeholder']" :required="$field['required']" />
        @endforeach
        <button wire:click="Order" class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Bestellen</button>
</div>

