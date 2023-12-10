@props(['label', 'type' => '', 'placehelder' => '', 'name' => '', 'icon' => ''])
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
                name="{{ $firstname }}"
                placeholder="{{ $placehelder }}"
            >
        </div>
    </div>
</div>


