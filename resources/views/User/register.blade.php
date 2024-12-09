<x-head>

    @section('content')

        @php
            $formFields = [
                ['type' => 'text', 'name' => 'name', 'label' => 'Naam', 'required' => true, 'value' => old('name'), 'error' => $errors->get('name'), 'placeholder' => 'vul hier uw naam in'],
                ['type' => 'email', 'name' => 'email', 'label' => 'Email', 'required' => true, 'value' => old('email'), 'error' => $errors->get('email'), 'placeholder' => 'vul hier uw email in'],
                ['type' => 'password', 'name' => 'password', 'label' => 'Password', 'required' => true, 'value' => old('password'), 'error' => $errors->get('password'), 'placeholder' => 'vul hier uw wachtwoord in'],
                ['type' => 'password', 'name' => 're-password', 'label' => 're-Password', 'required' => true, 'value' => old('re-password'), 'error' => '', 'placeholder' => 'vul hier nog een keer uw wachtwoord in'],
            ];
        @endphp

        <form class="p-4 rounded-lg shadow-default" action="{{ route('register') }}" method="POST">
            @csrf
            <h2 class="text-lg font-bold">Register</h2>
            @foreach ($formFields as $field)
            <x-form_input :error="$field['error']" :type="$field['type']" :name="$field['name']" :label="$field['label']" :placeholder="$field['placeholder']" :required="$field['required']" />
            @endforeach
            <div class="flex justify-between items-center gap-8">
                <a class="btn btn-primary " href="{{ route('login') }}">al een acount log dan in</a>
                <button type="submit" class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Registeer</button>
            </div>
        </form>

    @endsection
</x-head>

