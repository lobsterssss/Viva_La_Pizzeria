<x-head>

    @section('content')

        @php
            $formFields = [
                ['type' => 'email', 'name' => 'Email', 'label' => 'Email', 'required' => true, 'value' => old('Email'), 'placeholder' => 'vul hier uw email in'],
                ['type' => 'password', 'name' => 'HASH', 'label' => 'Password', 'required' => true, 'value' => old('HASH'), 'placeholder' => 'vul hier uw wachtwoord in'],
            ];       
        @endphp
        <div class="w-grow flex justify-center items-center">
            <form class="p-4 rounded-lg shadow-default" action="{{ route('login_post') }}" method="POST">
                @csrf
                <h2 class="text-lg font-bold">Login</h2>
                @error('error', 'custom_error_bag')
                    <p class="bg-red-500 rounded-lg text-white p-1">{{$message}}</p>
                @enderror
                @foreach ($formFields as $field)
                <x-form_input  :error=null :type="$field['type']" :name="$field['name']" :value="$field['value']" :label="$field['label']" :placeholder="$field['placeholder']" :required="$field['required']" />
                @endforeach

                <div class="flex justify-between items-center gap-8">
                    <a class="btn btn-primary " href="{{ route('register') }}">nog geen acount registreer dan!</a>
                    <button type="submit" class="btn btn-primary bg-Italy_green p-2 rounded-lg text-white">Login</button>
                </div>
            </form>
        </div>

    @endsection
</x-head>

