@props(['key', 'value'])



<div class="col-md-6">
    <div
        class="form-inner mb-25">
        <label for="{{ $value }}-{{ $key }}">{{ $key }}*</label>
        <div class="input-area">
            <img
                src="assets/images/icon/user-2.svg"
                alt>
            <input type="text"
                id="{{ $value }}-{{ $key }}"
                name="{{ $key }}"
                placeholder="{{ $key }}"

                    value="{{ $value }}"
            >
        </div>
    </div>
</div>

