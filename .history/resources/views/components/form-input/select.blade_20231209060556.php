<div class="col-md-6">
    <div
        class="form-inner mb-25">
        <label for="{{ $id }}">{{ $label }}*</label>
        <div class="input-area">
            <img
                src="assets/images/icon/qualification-2.svg"
                alt>
            <select
            name="{{ $name }}"
                id="{{ $id }}"
                class="select1">
                {{-- i have an array of options how van i display its values whwn looping all of them --}}
                @foreach ($options as $key => $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach


            </select>
        </div>
    </div>
</div>
