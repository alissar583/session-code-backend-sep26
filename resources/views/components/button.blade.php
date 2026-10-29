@props(['text'])

<button {{ $attributes->class([
    ''
])
->merge([
    'class' => 'btn btn-primary',
    'style' => "color:blue"
]) }} type="button">
    {{ $text }}
</button>


<div class="alert alert-success" role="alert">
</div>
