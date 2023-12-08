@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '']) !!}>

<input
    type="text"
    id="firstname1"
    name="firstname"
    placeholder="Mrs. Jacoline"
>
