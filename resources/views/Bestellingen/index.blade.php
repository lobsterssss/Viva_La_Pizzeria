@php
$formFields = [
    ['type' => 'text', 'name' => 'korting', 'label' => 'korting', 'required' => false, 'value' => old('korting'), 'error' => $errors->get('korting'), 'placeholder' => 'vul hier een korting code in'],
];       
@endphp

<x-head>
    @section('content')
        <div class="flex-col w-grow">

            <h1 class="text-xl font-bold ">Pizza's</h1>
            <article class="grid grid-cols-3 gap-4 w-grow p-4 mb-10">
                @foreach ($products['pizzas'] as $Pizza)
                    <livewire:pizza-bestelling :pizza="$Pizza"/>
                @endforeach
            </article>

            <h1 class="text-xl font-bold ">Drankjes</h1>
            <article class="grid grid-cols-3 gap-4 w-grow p-4 mb-10">
                @foreach ($products['drinks'] as $Drank)
                    <x-drank_wiget :drank="$Drank" />
                @endforeach
            </article>

            <h1 class="text-xl font-bold ">Drankjes</h1>
            <article class="grid grid-cols-3 gap-4 w-grow p-4 mb-10">
                @foreach ($products['drinks'] as $Drank)
                    <x-drank_wiget :drank="$Drank" />
                @endforeach
            </article>
        </div>


        <div class="h-max sticky flex flex-col items-center inset-y-1/4 rounded-lg shadow-default p-4">
            <h1 class="text-xl font-bold">bestellingen</h1>
            <div>
                <h1 class="text-xl font-bold">uw bestelling</h1>

            </div>
            <form action="" method="post">
                @csrf
                
                @foreach ($formFields as $field)
                <x-form_input :error="$field['error']" :type="$field['type']" :name="$field['name']" :value="$field['value']" :label="$field['label']" :placeholder="$field['placeholder']" :required="$field['required']" />
                @endforeach
                <button class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Bestellen</button>
            </form>
        </div>

    @endsection

</x-head>