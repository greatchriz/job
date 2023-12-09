{{--
    name
    type
    label
    placeholder
    options
    rows
    accept
    required
    min
    icon
    tag
--}}

@props(['formInputName' => '', 'formInputType' => '', 'formInputLabel' => '', 'formInputPlaceholder' => '', 'formInputOptions' => '', 'formInputRows' => '', 'formInputAccept' => '', 'formInputRequired' => '', 'formInputMin' => '', 'formInputIcon' => '', 'formInputTag' => ''])

<div class="col-md-6">
    <div class="form-inner mb-25">
        <label for="firstname1">{{ $formInputLabel }}*</label>
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
    </div>
</div>
