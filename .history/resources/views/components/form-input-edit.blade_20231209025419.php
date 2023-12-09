
@props(['columnData'])


@if(is_array($columnData))

    <div class="col-md-6">
        <div class="form-inner mb-25">
            <label>{{ $columnData[$key] }}*</label>
            <div class="input-area">
                <img
                    src="assets/images/icon/qualification-2.svg"
                    alt
                >
                <select class="select1">
                    @foreach($columnData as $key => $value)

                    <option value="1">{{ $columnData[$value] }}</option>


                    @endforeach
                </select>
            </div>
        </div>
    </div>

@else

<div class="col-md-6">
    <div
        class="form-inner mb-25">
        <label for="firstname1">{{ $columnData }}*</label>
        <div class="input-area">
            <img
                src="assets/images/icon/user-2.svg"
                alt>
            <input type="text"
                id="firstname1"
                name="firstname"
                placeholder="Mrs. Jacoline">
        </div>
    </div>
</div>

@endif
