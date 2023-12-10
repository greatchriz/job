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
        <p>Upload Images</p>
        <button
            type="button"
            class="upload-btn"
        ><i class="bi bi-plus-lg"></i></button>
        <input
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
        <label for="description">Career
            Objective*</label>
        <textarea
            name="description"
            id="description"
            placeholder="Something Write Yourself...."></textarea>
    </div>
</div>

@endif

