<div class="form-group flex flex-col pb-4 ">
    @isset($error)<p class="bg-red-500 rounded-lg text-white p-1">{{$error[0]}}</p>@endisset
    <label for="{{ $name }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control shadow-inner rounded-lg p-2"
        value="{{ $value ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}"
        @if($required) required @endif
    >
</div>