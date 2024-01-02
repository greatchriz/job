@props(['current', 'href', 'title'])

@php
    $classes = ($current ?? false)
    ? 'current'
    : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }} id='{{ $id }}'><a href="{{ $href }}">{{ $title }} </a></li>
