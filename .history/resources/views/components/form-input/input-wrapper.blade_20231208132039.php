@props(['id' => '', 'icon' => ''])

<div class="col-md-6">
    <div class="form-inner mb-25">

        {{-- slot for label --}}
        <x-form-input.input-label id="$id">
            First
            Name*
        </x-form-input.input-label>

        <div class="input-area">

            {{-- slot for icon --}}
            <x-form-input.input-icon icon="$icon" />

            {{-- slot for input --}}
            <x-form-input.input />

        </div>
    </div>
</div>
