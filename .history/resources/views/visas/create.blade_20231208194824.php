<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Apply For A Visa" />

        <div class="edit-profile-inner">
            <div class="form-wrapper">
                <ul class="nav nav-tabs" id="myTab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active"
                            id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" type="button"
                            role="tab" aria-controls="home"
                            aria-selected="true"><span></span>Basic
                            Information:</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            id="profile-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#profile"
                            type="button" role="tab"
                            aria-controls="profile"
                            aria-selected="false"><span></span>Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            id="contact-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#contact"
                            type="button" role="tab"
                            aria-controls="contact"
                            aria-selected="false"><span></span>Education</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            id="professional-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#professional"
                            type="button" role="tab"
                            aria-controls="professional"
                            aria-selected="false"><span></span>Professional
                            Info</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active"
                        id="home" role="tabpanel"
                        aria-labelledby="home-tab">
                        <form
                            class="edit-profile-form profile-form  mb-60">
                            <div class="row">

                                {{-- loop through the array of form inputs and call the component --}}
                                @foreach ($textFormInputs as $textFormInput)

                                    <x-form-input.input-wrapper
                                        :id="$textFormInput->name"
                                        :icon="$textFormInput->icon"
                                        :name="$textFormInput->name"
                                        :type="$textFormInput->type"
                                        :placeholder="$textFormInput->placeholder"

                                        :label="$textFormInput->label"
                                    />
                                @endforeach


                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <div class="pagination-area">
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a
                                                            class="page-link" href="#"
                                                            tabindex="-1"></a></li>
                                                    <li class="page-item active"
                                                        aria-current="page"><a
                                                            class="page-link" href="#">01</a></li>
                                                    <li class="page-item"><a
                                                            class="page-link" href="#">02</a></li>
                                                    <li class="page-item"><a
                                                            class="page-link" href="#">03</a></li>
                                                    <li class="page-item"><a
                                                            class="page-link" href="#">04</a></li>
                                                    <li class="page-item"><a
                                                            class="page-link" href="#"></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-25">
                                    <div class="form-inner">
                                        <button
                                            class="primry-btn-2 lg-btn w-unset"
                                            type="submit">Update
                                            Resume</button>
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
