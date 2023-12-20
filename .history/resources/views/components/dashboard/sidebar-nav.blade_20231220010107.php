@props(['active', 'href' => '#', 'title' => ''])

@php
    $classes = ($active ?? false)
    ? 'active'
    : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}><a href="{{ $href }}">{{ $title }} </a></li>
