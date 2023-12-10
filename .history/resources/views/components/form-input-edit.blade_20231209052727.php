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
                {{-- check if the value is an array and loop over it --}}
                @if (is_array($value))
                    @foreach ($value as $val)
                        value="{{ $val }}"
                    @endforeach
                @else
                    value="{{ $value }}"
                @endif
            >
        </div>
    </div>
</div>

