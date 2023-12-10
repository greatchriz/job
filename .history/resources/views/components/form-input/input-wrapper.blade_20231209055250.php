@props(['id' => '', 'icon' => '', 'name' => '', 'type' => '', 'placeholder' => '', 'value' => '', 'disabled' => false, 'autocomplete' => '', 'required' => false, 'autofocus' => false, 'label' => ''])

<div class="col-md-6">
    <div class="form-inner mb-25">

        {{-- slot for label --}}
        <x-form-input.input-label />

        <div class="input-area">

            {{-- slot for icon --}}
            <x-form-input.input-icon />


            {{-- slot for input --}}
            {{ $slot }}
        </div>
    </div>
</div>
