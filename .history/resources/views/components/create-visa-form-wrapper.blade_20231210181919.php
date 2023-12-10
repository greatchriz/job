<form class="edit-profile-form profile-form  mb-60">
    <div class="row">
        @foreach ($inpts4 as $inpt )
            <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
        @endforeach

    </div>
</form>
