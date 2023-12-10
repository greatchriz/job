<ul
    class="nav nav-tabs"
    id="myTab"
    role="tablist"
>
{{-- Personal information
            // Passport information
            // Travel information
            // Employment information
            // Educational background
            // Financial information
            // Additional information
            // Other --}}
    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link active"
            id="personal-tab"
            data-bs-toggle="tab"
            data-bs-target="#personal"
            type="button"
            role="tab"
            aria-controls="personal"
            aria-selected="true"
        ><span>
        </span>
            Personal information
        </button>
    </li>




    <li class="nav-item" role="presentation">
        <button
            class="nav-link"
            id="travel-tab"
            data-bs-toggle="tab"
            data-bs-target="#travel"
            type="button"
            role="tab"
            aria-controls="travel"
            aria-selected="false"
        ><span>
        </span>
            Travel information
        </button>
    </li>

    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="employment-tab"
            data-bs-toggle="tab"
            data-bs-target="#employment"
            type="button"
            role="tab"
            aria-controls="employment"
            aria-selected="false"
        ><span>
        </span>
            Employment information
        </button>
    </li>


    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="education-tab"
            data-bs-toggle="tab"
            data-bs-target="#education"
            type="button"
            role="tab"
            aria-controls="education"
            aria-selected="false"
        ><span>
        </span>
            Educational background
        </button>
    </li>


    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="financial-tab"
            data-bs-toggle="tab"
            data-bs-target="#financial"
            type="button"
            role="tab"
            aria-controls="financial"
            aria-selected="false"
        ><span>
        </span>
            Financial information
        </button>
    </li>


    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="additional-tab"
            data-bs-toggle="tab"
            data-bs-target="#additional"
            type="button"
            role="tab"
            aria-controls="additional"
            aria-selected="false"
        ><span>
        </span>
            Additional information
        </button>
    </li>
</ul>
<div
    class="tab-content"
    id="myTabContent"
>
    {{-- Personal information --}}
    {{-- Passport information --}}
    {{-- Travel information --}}
    {{-- Employment information --}}
    {{-- Educational background --}}
    {{-- Financial information --}}
    {{-- Additional information --}}

    <div
        class="tab-pane fade show active"
        id="personal"
        role="tabpanel"
        aria-labelledby="personal-tab"
    >
        {{ $personal }}
    </div>

    <div
        class="tab-pane fade"
        id="passport"
        role="tabpanel"
        aria-labelledby="passport-tab"
    >
        {{ $passport }}
    </div>


    <div
        class="tab-pane fade"
        id="travel"
        role="tabpanel"
        aria-labelledby="travel-tab"
    >
        {{ $travel }}

    </div>

    {{-- Employment information --}}

    <div
        class="tab-pane fade"
        id="employment"
        role="tabpanel"
        aria-labelledby="employment-tab"
    >
        {{ $employment }}
    </div>

    {{-- Educational background --}}

    <div
        class="tab-pane fade"
        id="education"
        role="tabpanel"
        aria-labelledby="education-tab"
    >
        {{ $education }}
    </div>

    {{-- Financial information --}}

    <div
        class="tab-pane fade"
        id="financial"
        role="tabpanel"
        aria-labelledby="financial-tab"
    >
        {{ $financial }}
    </div>

    {{-- Additional information --}}

    <div
        class="tab-pane fade"
        id="additional"
        role="tabpanel"
        aria-labelledby="additional-tab"
    >
        {{ $additional }}
    </div>




    {{-- <div
        class="tab-pane fade"
        id="contact"
        role="tabpanel"
        aria-labelledby="contact-tab"
    >
        <form class="edit-profile-form profile-form">
            <div class="section-title2">
                <h5>Educational Qualification:</h5>
            </div>
            <div class="education-row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info-title">
                            <h6>Academic
                                Information:</h6>
                            <div class="dash"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Education
                                Level*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/qualification-2.svg"
                                    alt
                                >
                                <select class="select1">
                                    <option value="0">Bachelor
                                        Degree
                                        in CSE</option>
                                    <option value="1">IGCSE</option>
                                    <option value="2">AS</option>
                                    <option value="4">A
                                        Level</option>
                                    <option value="5">Matriculated</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>My Major*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/major.svg"
                                    alt
                                >
                                <select class="select1">
                                    <option value="0">Science</option>
                                    <option value="1">Arts</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="institute">Institute/University*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/univercity.svg"
                                    alt
                                >
                                <input
                                    type="text"
                                    id="institute"
                                    name="institute"
                                    placeholder="Type Your Institute Name..."
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-30">
                            <label for="gpa">Result/GPA**</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/gpa-2.svg"
                                    alt
                                >
                                <input
                                    type="text"
                                    id="gpa"
                                    name="gpa"
                                    placeholder="4.75/5"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-20">
                            <label for="datepicker10">Starting
                                Period*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/calender2.svg"
                                    alt
                                >
                                <input
                                    type="text"
                                    id="datepicker10"
                                    name="ep"
                                    placeholder="DD/MM/YY"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-20">
                            <label for="datepicker11">Ending
                                Period*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/calender2.svg"
                                    alt
                                >
                                <input
                                    type="text"
                                    id="datepicker11"
                                    name="ep"
                                    placeholder="DD/MM/YY"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-remove-btn d-flex align-items-center justify-content-between mb-50">
                <div class="add-row">
                    <button
                        type="button"
                        class="add-education-row"
                    >Add
                        Education+</button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-inner">
                    <button
                        class="primry-btn-2 lg-btn w-unset"
                        type="submit"
                    >Update
                        Change</button>
                </div>
            </div>
        </form>
    </div>
    <div
        class="tab-pane fade"
        id="professional"
        role="tabpanel"
        aria-labelledby="professional-tab"
    >
        <form class="edit-profile-form profile-form">
            <div class="section-title2">
                <h5>Employment Information:</h5>
            </div>
            <div class="experiences-row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info-title">
                            <h6>Add Your
                                Experiences</h6>
                            <div class="dash"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="companies">Company
                                Name*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/company-2.svg"
                                    alt
                                >
                                <input
                                    type="text"
                                    id="companies"
                                    name="companies"
                                    placeholder="Egenslab"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="desigation">Designation*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/designation-2.svg"
                                    alt
                                >
                                <select class="select1">
                                    <option value="0">Back-end
                                        developer</option>
                                    <option value="1">Front-end
                                        developer</option>
                                    <option value="2">Full-stack
                                        developer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-20">
                            <label for="datepicker6">Starting
                                Period*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/calender2.svg"
                                    alt
                                >
                                <input
                                    type="text"
                                    id="datepicker6"
                                    name="stp"
                                    placeholder="DD/MM/YY"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-20">
                            <label for="datepicker7">Ending
                                Period*</label>
                            <div class="input-area">
                                <img
                                    src="assets/images/icon/calender2.svg"
                                    alt
                                >
                                <input
                                    type="text"
                                    id="datepicker7"
                                    name="ep"
                                    placeholder="DD/MM/YY"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div
                            class="form-agreement employment-check form-inner d-flex justify-content-between flex-wrap p-0">
                            <div class="form-group two">
                                <input
                                    type="checkbox"
                                    id="html5"
                                >
                                <label for="html5">Continuing
                                    Working Here</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-inner mb-20">
                            <label for="description1">Responsibility**</label>
                            <textarea
                                name="description"
                                id="description1"
                                placeholder="Write Your Responsibility..."
                            ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-remove-btn d-flex align-items-center justify-content-between mb-50">
                <div class="add-row">
                    <button
                        type="button"
                        class="add-experiences-row"
                    >Add
                        New+ </button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-inner">
                    <button
                        class="primry-btn-2 lg-btn w-unset"
                        type="submit"
                    >Update
                        Change</button>
                </div>
            </div>
        </form>
    </div> --}}
</div>

<div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
        <div class="pagination-area">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled"><a
                            class="page-link"
                            href="#"
                            tabindex="-1"
                        ></a></li>

                        @foreach ($tabPanes as $tabpane)

                            {{ $tabpane }}
                            {{-- <li class="page-item"><a
                                    class="page-link"
                                    href="#"
                                >{{ $tabpane['number'] }}</a></li> --}}

                                   {{-- <button
                                        class="nav-link active"
                                        id="{{ $tabpane['aria-labelledby'] }}"
                                        data-bs-toggle="tab"
                                        data-bs-target="#{{ $tabpane['id'] }}"
                                        type="button"
                                        role="tab"
                                        aria-controls="{{ $tabpane['id'] }}"
                                        aria-selected="true"
                                    ><span>
                                        </span>
                                        {{ $tabpane['number'] }}
                                    </button> --}}

                        @endforeach


                    <li class="page-item"><a
                            class="page-link"
                            href="#"
                        ></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
