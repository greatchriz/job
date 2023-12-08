@props(['id' => ''])

<div class="col-md-6">
    <div class="form-inner mb-25">

        {{-- slot for label --}}
        {{ $label }}

        <div class="input-area">


            {{-- slot for icon --}}
            {{ $icon }}


            {{ $slot }}

        </div>
    </div>
</div>
