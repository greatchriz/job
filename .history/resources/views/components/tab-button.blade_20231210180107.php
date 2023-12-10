@props(['id', 'label'])
@php
$classes = ($active ?? false)
    ? 'nav-link active'
    : 'nav-link';
@endphp

<li class="nav-item" role="presentation">
    <button class="{{ $classes }}"
        id="{{ $id }}-tab" data-bs-toggle="tab"
        data-bs-target="#{{ $id }}" type="button"
        role="tab" aria-controls="{{ $id }}"
        aria-selected="${ $active ? 'true' : 'false' }"><span></span>{{ $label }}:</button>
</li>
