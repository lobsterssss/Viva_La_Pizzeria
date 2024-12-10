<x-head>
    @section('content')

    @foreach ($products['pizzas'] as $Pizza)
    <x-pizza_wiget :error="$field['error']" :type="$field['type']" :name="$field['name']" :label="$field['label']" :placeholder="$field['placeholder']" :required="$field['required']" />
    @endforeach


    @endsection

</x-head>