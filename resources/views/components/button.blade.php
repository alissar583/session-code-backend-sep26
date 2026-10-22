@props(['test'])

<button
    {{ $attributes->merge([
        'class' => 'btn btn-primary',
        'style' => 'color:red',
    ]) }}>{{ $test }}</button>
