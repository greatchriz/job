@props(['key', 'value'])

{{-- check if the value is an array --}}
@if (is_array($value))
<div class="col-md-6">
    <div
        class="form-inner mb-25">
        <label for="select-{{ $key }}">{{ $key }}*</label>
        <div class="input-area">
            <img
                src="assets/images/icon/qualification-2.svg"
                alt>
            <select
                id="{{ "select-{{ $key }} }}"
                class="select1">
               @foreach ($value as $key => $value)

                <option value="{{ $key }}">{{ $key }}</option>
                @endforeach

            </select>
        </div>
    </div>
</div>



@else


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


@endif
