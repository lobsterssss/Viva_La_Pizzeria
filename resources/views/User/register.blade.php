<x-head>

    @section('content')

        @php
            $formFields = [
                ['type' => 'text', 'name' => 'GB', 'label' => 'Naam', 'required' => true, 'value' => old('name'), 'error' => $errors->get('GB'), 'placeholder' => 'vul hier uw naam in'],
                ['type' => 'email', 'name' => 'Email', 'label' => 'Email', 'required' => true, 'value' => old('Email'), 'error' => $errors->get('Email'), 'placeholder' => 'vul hier uw email in'],
                ['type' => 'password', 'name' => 'HASH', 'label' => 'Password', 'required' => true, 'value' => old('HASH'), 'error' => $errors->get('HASH'), 'placeholder' => 'vul hier uw wachtwoord in'],
                ['type' => 'password', 'name' => 're-password', 'label' => 're-Password', 'required' => true, 'value' => old('re-password'), 'error' => '', 'placeholder' => 'vul hier nog een keer uw wachtwoord in'],
            ];
        @endphp
        <div class="w-grow flex justify-center items-center">
            <form class="p-4 rounded-lg shadow-default" action="{{ route('register_post') }}" method="POST">
                @csrf
                <h2 class="text-lg font-bold">Register</h2>
                @foreach ($formFields as $field)
                <x-form_input :error="$field['error']" :type="$field['type']" :name="$field['name']" :value="$field['value']" :label="$field['label']" :placeholder="$field['placeholder']" :required="$field['required']" />
                @endforeach
                <div class="flex justify-between items-center gap-8">
                    <a class="btn btn-primary " href="{{ route('login') }}">al een acount log dan in</a>
                    <button type="submit" class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Registeer</button>
                </div>
            </form>
        </div>
    @endsection
</x-head>

