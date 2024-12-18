<x-head>

    @section('content')

        @php
            $formFields = [
                ['type' => 'email', 'name' => 'email', 'label' => 'Email', 'required' => true, 'value' => old('email'), 'error' => $errors->get('email'), 'placeholder' => 'vul hier uw email in'],
                ['type' => 'password', 'name' => 'password', 'label' => 'Password', 'required' => true, 'value' => old('password'), 'error' => $errors->get('password'), 'placeholder' => 'vul hier uw wachtwoord in'],
            ];        @endphp

        <form class="p-4 rounded-lg shadow-default" action="{{ route('login') }}" method="POST">
            @csrf
            <h2 class="text-lg font-bold">Login</h2>
            @foreach ($formFields as $field)
            <x-form_input :error="$field['error']" :type="$field['type']" :name="$field['name']" :label="$field['label']" :placeholder="$field['placeholder']" :required="$field['required']" />
            @endforeach

            <div class="flex justify-between items-center gap-8">
                <a class="btn btn-primary " href="{{ route('register') }}">nog geen acount registreer dan!</a>
                <button type="submit" class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Login</button>
            </div>
        </form>

    @endsection
</x-head>

