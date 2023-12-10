@props(['label', 'type' => '', 'placehelder' => '', 'name' => '', 'icon' => ''])

{{-- check if the type is text --}}
@if ($type == 'text')

<div class="col-md-6">
    <div class="form-inner mb-25">
        <label for="{{ $name }}">{{ $label }}*</label>
        <div class="input-area">
            <img
                src="{{ $icon }}"
                alt
            >
            <input
                type="text"
                id="{{ $name }}"
                name="{{ $name }}"
                placeholder="{{ $placehelder }}"
            >
        </div>
    </div>
</div>

{{-- check if the type is file --}}
@elseif ($type == 'file')

{{-- file type --}}

<div class="col-md-6">
    <div class="drag-area">
        <p>{{ $label }}</p>
        <button
            type="button"
            class="upload-btn"
        ><i class="bi bi-plus-lg"></i></button>
        <input
            name="{{ $name }}"
            type="file"
            hidden
        >
    </div>
</div>

{{-- check if the type is textarea --}}
@elseif ($type == 'textarea')

{{-- textarea --}}
<div class="col-md-12">
    <div
        class="form-inner mb-50">
        <label for="{{ $name }}">{{ $label }}*</label>
        <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            placeholder="{{ $placehelder }}"></textarea>
    </div>
</div>

{{-- check if the type is date--}}
@elseif ($type == 'date')

<div class="col-md-6">
    <div class="form-inner mb-25">
        <label for="datepicker5">{{ $label }}*</label>
        <div class="input-area">
            <img
                src="assets/images/icon/calender2.svg"
                alt
            >
            <input
                type="text"
                id="datepicker5"
                name="{{ $name }}"
                placeholder="03/08/1986"
            >
        </div>
    </div>
</div>

@endif

