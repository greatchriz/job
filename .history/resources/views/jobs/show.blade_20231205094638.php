<x-app-layout>
    <x-dashboard-card>
        <div class="col-lg-9">
            <div class="edit-profile-inner">
                <div class="form-wrapper">

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
                            <form action="{{ route('job-applications.store') }}" method="POST" enctype="multipart/form-data" class="edit-profile-form profile-form  mb-60">
                                <div class="row">

                                    <div class="col-12 mb-25">
                                        <div class="feature-card2">
                                            <div class="company-area">
                                                <span></span>
                                                <div class="logo">
                                                    <img
                                                        src="{{ $jobWithCompany->company->logo }}"
                                                        alt>
                                                </div>
                                                <div class="company-details">
                                                    <div class="name-location">
                                                        <h5><a href="job-details.html">{{ $jobWithCompany->title }}</a> <span>Full
                                                                Time<span></span></span></h5>
                                                        <ul>
                                                            <li><a
                                                                    href="company-details.html">{{ $jobWithCompany->company->name }}</a></li>
                                                            <li class="verified"><img
                                                                    src="/assets/images/icon/verified.svg"
                                                                    alt> Verified
                                                                Company</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bookmark">
                                                        <i class="bi bi-bookmark-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-discription mb-25">
                                                <ul class="one">
                                                    <li>
                                                        <p><span class="title">Location:</span>
                                                            {{ $jobWithCompany->company->location }}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="title">Salary:</span>
                                                            {{ $jobWithCompany->salary }} <span
                                                                class="time">Per Year</span></p>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <p><span class="title">Experience:</span>
                                                            {!! $jobWithCompany->experiences !!}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p><span class="title">Deadline:</span><span
                                                                class="time"> {{ $jobWithCompany->deadline }}</span></p>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">


                                            <div class="form-group files mb-25">
                                              <label>Upload Your CV </label>
                                              <input type="file" class="form-control" multiple="" name="cv">
                                            </div>

                                    </div>

                                    <div class="col-md-6">


                                        <div class="form-group files mb-25">
                                          <label>Upload Your Application Letter </label>
                                          <input type="file" class="form-control" multiple="" name="application_letter">
                                        </div>

                                </div>





                                    {{-- <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="firstname1">First Name*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/user-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="firstname1"
                                                    name="firstname"
                                                    placeholder="Mrs. Jacoline"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="lastname">Last Name*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/user-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="lastname"
                                                    name="lastname"
                                                    placeholder="Frankly"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="jobplace">Current Job Place*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/company-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="jobplace"
                                                    name="jobplace"
                                                    placeholder="Company Name"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="desigation">Designation*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/designation-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="desigation"
                                                    name="desigation"
                                                    placeholder="UI/UX Engineer"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="experiences">Year of Experiences*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/experiences-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="experiences"
                                                    name="experiences"
                                                    placeholder="3.5 Years"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label>Qualification*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/qualification-2.svg"
                                                    alt
                                                >
                                                <select class="select1">
                                                    <option value="0">Bachelor Degree in CSE</option>
                                                    <option value="1">IGCSE</option>
                                                    <option value="2">AS</option>
                                                    <option value="4">A Level</option>
                                                    <option value="5">Matriculated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="email1">Email*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/email-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="email1"
                                                    name="email"
                                                    placeholder="info@example.com"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="phonenumber">Phone Number*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/phone-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="phonenumber"
                                                    name="phonenumber"
                                                    placeholder="+880-17 *** *** **"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="website">Website Link*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/website-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="website"
                                                    name="website"
                                                    placeholder="https://example.com/"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="language">Language*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/language-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="language"
                                                    name="language"
                                                    placeholder="Bangla, English, Hindi"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-inner mb-50">
                                            <label for="description">Career Objective*</label>
                                            <textarea
                                                name="description"
                                                id="description"
                                                placeholder="Something Write Yourself...."
                                            ></textarea>
                                        </div>
                                    </div> --}}
                                    <div class="job-type-apply">
                                        <div class="apply-btn">
                                            <a href="job-details.html"><span><img
                                                        src="/assets/images/icon/apply-ellipse.svg"
                                                        alt></span>Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-dashboard-card>
</x-app-layout>
