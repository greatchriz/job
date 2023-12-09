<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Edit Form Input" />

        <div class="edit-profile-inner">
            <div class="form-wrapper">
                {{-- <ul
                    class="nav nav-tabs"
                    id="myTab"
                    role="tablist"
                >
                    <li
                        class="nav-item"
                        role="presentation"
                    >
                        <button
                            class="nav-link active"
                            id="home-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#home"
                            type="button"
                            role="tab"
                            aria-controls="home"
                            aria-selected="true"
                        ><span></span>Basic
                            Information:</button>
                    </li>
                    <li
                        class="nav-item"
                        role="presentation"
                    >
                        <button
                            class="nav-link"
                            id="profile-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#profile"
                            type="button"
                            role="tab"
                            aria-controls="profile"
                            aria-selected="false"
                        ><span></span>Profile</button>
                    </li>
                    <li
                        class="nav-item"
                        role="presentation"
                    >
                        <button
                            class="nav-link"
                            id="contact-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#contact"
                            type="button"
                            role="tab"
                            aria-controls="contact"
                            aria-selected="false"
                        ><span></span>Education</button>
                    </li>
                    <li
                        class="nav-item"
                        role="presentation"
                    >
                        <button
                            class="nav-link"
                            id="professional-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#professional"
                            type="button"
                            role="tab"
                            aria-controls="professional"
                            aria-selected="false"
                        ><span></span>Professional
                            Info</button>
                    </li>
                </ul> --}}
                <div
                    class="tab-content"
                    id="myTabContent"
                >
                    <div
                        class="tab-pane fade show active"
                        id="home"
                        role="tabpanel"
                        aria-labelledby="home-tab"
                    >

                    <form
                        method="POST"
                        action="{{ route('admin.form-inputs.update', $id) }}"
                        class="edit-profile-form profile-form  mb-60">

                        @csrf
                        <div class="row">


                            {{-- loop over $data array and get the key and value and pass it to the form input component --}}

                            @foreach ($data as $key => $value)

                            <x-form-input-edit :key="$key" :value="$value" />

                            @endforeach







                            <div class="col-md-12 mt-25">
                                <div class="form-inner">
                                    <button
                                        class="primry-btn-2 lg-btn w-unset"
                                        type="submit"
                                    >
                                        Update Form Input
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>


                    </div>

                </div>
            </div>
        </div>

    </x-dashboard-card>
</x-app-layout>
