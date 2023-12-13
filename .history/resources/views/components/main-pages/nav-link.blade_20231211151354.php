@props(['current', 'href', 'title'])

@php
    $classes = ($active ?? false)
    ? 'current'
    : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}><a href="{{ $href }}">{{ $title }} </a></li>
