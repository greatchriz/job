@props(['label', 'type' => '', 'placehelder' => '', 'name' => '', 'icon' => ''])

{{-- check if the type is not text --}}

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

{{-- checkbox --}}

<div class="col-md-12">
    <div
        class="form-agreement employment-check form-inner d-flex justify-content-between flex-wrap p-0">
        <div
            class="form-group two">
            <input
                type="radio"
                name="radio"
                id="html4">
            <label
                for="html5">Continuing
                Working Here</label>
        </div>
    </div>
</div>

{{-- select --}}
<div class="col-md-6">
    <div
        class="form-inner mb-25">
        <label>Qualification*</label>
        <div class="input-area">
            <img
                src="assets/images/icon/qualification-2.svg"
                alt>
            <select
                class="select1">
                <option
                    value="0">Bachelor
                    Degree in
                    CSE</option>
                <option
                    value="1">IGCSE</option>
                <option
                    value="2">AS</option>
                <option
                    value="4">A
                    Level</option>
                <option
                    value="5">Matriculated</option>
            </select>
        </div>
    </div>
</div>

