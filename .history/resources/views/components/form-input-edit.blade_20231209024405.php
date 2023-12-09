
@props(['columnData'])

<div class="col-md-6">
    <div class="form-inner mb-25">
        {{-- check if column data is an array then display it as array --}}
        @if(is_array($columnData))
            @foreach($columnData as $key => $value)
                <label for="firstname1">{!! $key !!}*</label>
                <div class="input-area">
                    <img
                        src="assets/images/icon/user-2.svg"
                        alt
                    >
                    <input
                        type="text"
                        id="firstname1"
                        name="firstname"
                        placeholder="Mrs. Jacoline"
                    >
                </div>
            @endforeach
        @else
            <label for="firstname1">{!! $columnData !!}*</label>
            <div class="input-area">
                <img
                    src="assets/images/icon/user-2.svg"
                    alt
                >
                <input
                    type="text"
                    id="firstname1"
                    name="firstname"
                    placeholder="Mrs. Jacoline"
                >
            </div>
        @endif
        {{-- <label for="firstname1">{!! $columnData !!}*</label>
        <div class="input-area">
            <img
                src="assets/images/icon/user-2.svg"
                alt
            >
            <input
                type="text"
                id="firstname1"
                name="firstname"
                placeholder="Mrs. Jacoline"
            >
        </div> --}}
    </div>
</div>
