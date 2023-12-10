<form class="edit-profile-form profile-form  mb-60" method="POST" action="{{ route('visa.store') }}">
    @csrf

    <div class="row">
        {{ $slot }}

        <div class="col-md-12">
            <div class="form-inner">
                <button
                    class="primry-btn-2 lg-btn w-unset"
                    type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
