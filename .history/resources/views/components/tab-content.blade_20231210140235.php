@props(['id' => '', 'label' => '', 'active' => ''])

<div
    class="tab-pane fade {{ $active }}"
    id="{{ $id }}"
    role="tabpanel"
    aria-labelledby="{{ $id }}-tab"
>
    {{ $slot }}
</div>
