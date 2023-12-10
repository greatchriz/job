@props(['id' => '', 'label' => '', 'active' => '', 'inpts'])

<div
    class="tab-pane fade {{ $active }}"
    id="{{ $id }}"
    role="tabpanel"
    aria-labelledby="{{ $id }}-tab"
>
    <form class="edit-profile-form profile-form  mb-60">
        <div class="row">
            @foreach ($inpts as $inpt)
                <div class="col-md-6">
                    <div
                        class="form-inner mb-25">
                        <label for="{{ $inpt->id }}">{{ $inpt->label }}*</label>
                        <div class="input-area">
                            <img
                                src="{{ $inpt->icon }}"
                                alt>
                            <input type="text"
                                id="{{ $inpt->id }}"
                                name="{{ $inpt->name }}"
                                value="{{ old($inpt->name) }}"
                                placeholder="{{ $inpt->placeholder }}">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </form>
</div>
