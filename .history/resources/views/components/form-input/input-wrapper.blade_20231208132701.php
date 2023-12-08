@props(['id' => '', 'icon' => '', 'name' => '', 'type' => '', 'placeholder' => ''])

<div class="col-md-6">
    <div class="form-inner mb-25">

        {{-- slot for label --}}
        <x-form-input.input-label>
            First
            Name*
        </x-form-input.input-label>

        <div class="input-area">

            {{-- slot for icon --}}
            <x-form-input.input-icon />

            {{-- slot for input --}}
            <x-form-input.input />

        </div>
    </div>
</div>
