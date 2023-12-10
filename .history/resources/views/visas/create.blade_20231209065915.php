<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Apply For A Visa" />

        {{--  html escape blade rendering --}}
        @foreach ($textFormInputs as $textFormInput)
        <div class="row">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-12">
                <div class="form-inner">
                    <button
                        class="primry-btn-2 lg-btn w-unset"
                        type="submit">Update
                        Resume</button>
                </div>
            </div>
        </div>
        @endforeach

        {{--  html escape blade rendering --}}
        @foreach ($selectInpts as $selectInpt)
        <div class="row">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-12">
                <div class="form-inner">
                    <button
                        class="primry-btn-2 lg-btn w-unset"
                        type="submit">Update
                        Resume</button>
                </div>
            </div>
        </div>
        @endforeach




    </x-dashboard-card>
</x-app-layout>
