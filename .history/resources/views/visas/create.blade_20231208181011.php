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
                                        :id="{{ $textFormInput->name }}"
                                        :icon="{{ $textFormInput->icon }}"
                                        :name="{{ $textFormInput->name }}"
                                        :type="{{ $textFormInput->type }}"
                                        @if($textFormInput->placeholder ==! '')
                                            :placeholder="{{ $textFormInput->placeholder }}"
                                        @endif
                                        :label="{{ $textFormInput->label }}"
                                    />
                                @endforeach



                                {{-- <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="firstname1">First
                                            Name*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/user-2.svg"
                                                alt>
                                            <input type="text"
                                                id="firstname1"
                                                name="firstname"
                                                placeholder="Mrs. Jacoline">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="lastname">Last
                                            Name*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/user-2.svg"
                                                alt>
                                            <input type="text"
                                                id="lastname"
                                                name="lastname"
                                                placeholder="Frankly">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-xxl-2 col-lg-12 position-relative">
                                    <div class="drag-area">
                                        <p>Upload Images</p>
                                        <button type="button"
                                            class="upload-btn"><i
                                                class="bi bi-plus-lg"></i></button>
                                        <input type="file"
                                            hidden>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="jobplace">Current
                                            Job Place*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/company-2.svg"
                                                alt>
                                            <input type="text"
                                                id="jobplace"
                                                name="jobplace"
                                                placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="desigation">Designation*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/designation-2.svg"
                                                alt>
                                            <input type="text"
                                                id="desigation"
                                                name="desigation"
                                                placeholder="UI/UX Engineer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="experiences">Year
                                            of Experiences*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/experiences-2.svg"
                                                alt>
                                            <input type="text"
                                                id="experiences"
                                                name="experiences"
                                                placeholder="3.5 Years">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label>Qualification*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/qualification-2.svg"
                                                alt>
                                            <select
                                                class="select1">
                                                <option
                                                    value="0">Bachelor
                                                    Degree in
                                                    CSE</option>
                                                <option
                                                    value="1">IGCSE</option>
                                                <option
                                                    value="2">AS</option>
                                                <option
                                                    value="4">A
                                                    Level</option>
                                                <option
                                                    value="5">Matriculated</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="email1">Email*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/email-2.svg"
                                                alt>
                                            <input type="text"
                                                id="email1"
                                                name="email"
                                                placeholder="info@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="phonenumber">Phone
                                            Number*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/phone-2.svg"
                                                alt>
                                            <input type="text"
                                                id="phonenumber"
                                                name="phonenumber"
                                                placeholder="+880-17 *** *** **">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="website">Website
                                            Link*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/website-2.svg"
                                                alt>
                                            <input type="text"
                                                id="website"
                                                name="website"
                                                placeholder="https://example.com/">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="form-inner mb-25">
                                        <label for="language">Language*</label>
                                        <div class="input-area">
                                            <img
                                                src="assets/images/icon/language-2.svg"
                                                alt>
                                            <input type="text"
                                                id="language"
                                                name="language"
                                                placeholder="Bangla, English, Hindi">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div
                                        class="form-inner mb-50">
                                        <label for="description">Career
                                            Objective*</label>
                                        <textarea
                                            name="description"
                                            id="description"
                                            placeholder="Something Write Yourself...."></textarea>
                                    </div>
                                </div> --}}
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
