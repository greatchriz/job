@props(['active' => '', 'id' => '', 'label' => ''])

<button
    class="nav-link {{ $active }}"
    id="{{ $id }}-tab"
    data-bs-toggle="tab"
    data-bs-target="#{{ $id }}"
    type="button"
    role="tab"
    aria-controls="{{ $id }}"
    aria-selected="true"
><span></span>{{ $label }}</button>
