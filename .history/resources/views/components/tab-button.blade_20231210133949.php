@props(['active' => '', 'id' => '', 'label' => '', 'selected' => 'false'])

<li
    class="nav-item"
    role="presentation"
>

    <button
    style="margin-bottom: 15px"
        class="nav-link {{ $active }}"
        id="{{ $id }}-tab"
        data-bs-toggle="tab"
        data-bs-target="#{{ $id }}"
        type="button"
        role="tab"
        aria-controls="{{ $id }}"
        {{-- make aria-selected="true" if the tab is active --}}
        aria-selected="{{ $selected }}"
    ><span></span>{{ $label }}</button>

</li>
