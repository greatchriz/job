<x-app-layout>
    <x-dashboard-card>
        <div class="col-lg-9">
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
                            ><span></span>Basic Information:</button>
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
                            ><span></span>Professional Info</button>
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
                            <form class="edit-profile-form profile-form  mb-60">
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
                                                            $90-$140 / <span
                                                                class="time">Per Hour</span></p>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <p><span class="title">Experience:</span>
                                                            2-3 Years</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="title">Deadline:</span><span
                                                                class="time"> 3
                                                                February, 2023</span></p>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">


                                            <div class="form-group files mb-25">
                                              <label>Upload Your CV </label>
                                              <input type="file" class="form-control" multiple="">
                                            </div>

                                    </div>

                                    <div class="col-md-6">


                                        <div class="form-group files mb-25">
                                          <label>Upload Your Application Letter </label>
                                          <input type="file" class="form-control" multiple="">
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
                            {{-- <div class="form-wrapper">
                                <div class="section-title">
                                    <h5>Social Network:</h5>
                                </div>
                                <form class="profile-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="fecebook">Facebook</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/facebook-2.svg"
                                                        alt
                                                    >
                                                    <input
                                                        type="text"
                                                        id="fecebook"
                                                        name="fecebook"
                                                        placeholder="https://example-fecebook.com/"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="twitter">Twitter</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/twiter-2.svg"
                                                        alt
                                                    >
                                                    <input
                                                        type="text"
                                                        id="twitter"
                                                        name="twitter"
                                                        placeholder="https://example-twitter.com/"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="linkedin">LinkedIn</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/linkedin-2.svg"
                                                        alt
                                                    >
                                                    <input
                                                        type="text"
                                                        id="linkedin"
                                                        name="linkedin"
                                                        placeholder="https://example-linkedin.com/"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="pinterest">Pinterest</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/pinterest-2.svg"
                                                        alt
                                                    >
                                                    <input
                                                        type="text"
                                                        id="pinterest"
                                                        name="pinterest"
                                                        placeholder="https://example-pinterest.com/"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="dribble">Dribbble</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/dribble-2.svg"
                                                        alt
                                                    >
                                                    <input
                                                        type="text"
                                                        id="dribble"
                                                        name="dribble"
                                                        placeholder="https://example-dribbble.com/"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-50">
                                                <label for="behance">Behance</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/behance-2.svg"
                                                        alt
                                                    >
                                                    <input
                                                        type="text"
                                                        id="behance"
                                                        name="behance"
                                                        placeholder="https://example-behance.com/"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-inner">
                                                <button
                                                    class="primry-btn-2 lg-btn w-unset"
                                                    type="submit"
                                                >Update Social Link</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab"
                        >
                            <form class="edit-profile-form profile-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="fathername">Father’s Name*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/user-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="fathername"
                                                    name="fathername"
                                                    placeholder="Mr. Norman Frankly"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="mothername">Mother's Name*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/user-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="mothername"
                                                    name="mothername"
                                                    placeholder="Mrs. Marcoline Frankly"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="datepicker5">Date of Birth*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/calender2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="datepicker5"
                                                    name="datepicker5"
                                                    placeholder="03/08/1986"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="nid">National Id*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/nid.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="nid"
                                                    name="nid "
                                                    placeholder="0988 *** *** *** **"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <div class="salary-wrap">
                                                <label
                                                    class="label"
                                                    for="preAddress"
                                                >Present Address*</label>
                                                <div class="checkbox-container">
                                                    <ul>
                                                        <li>
                                                            <label class="containerss">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                                <span class="text">Same as permanent Address</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/home-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="preAddress"
                                                    name="preAddress "
                                                    placeholder="Your Address Here..."
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="perAddress">Permanent Address*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/home-2.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="perAddress"
                                                    name="perAddress"
                                                    placeholder="Your Address Here..."
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label>Marital Status*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/marital-2.svg"
                                                    alt
                                                >
                                                <select class="select1">
                                                    <option value="0">Single</option>
                                                    <option value="1">Married</option>
                                                    <option value="2">Widowed</option>
                                                    <option value="4">Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label>Gender*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/gender.svg"
                                                    alt
                                                >
                                                <select class="select1">
                                                    <option value="0">Female</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Custom</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label>Religion*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/religion.svg"
                                                    alt
                                                >
                                                <select class="select1">
                                                    <option value="0">Christianity</option>
                                                    <option value="1">Islam</option>
                                                    <option value="2">Buddhism</option>
                                                    <option value="3">Sikhism</option>
                                                    <option value="4">Judaism</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label>Blood Group*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/blood.svg"
                                                    alt
                                                >
                                                <select class="select1">
                                                    <option value="0">A+</option>
                                                    <option value="1">A-</option>
                                                    <option value="2">B+</option>
                                                    <option value="3">B-</option>
                                                    <option value="4">AB+</option>
                                                    <option value="5">AB-</option>
                                                    <option value="6">O+</option>
                                                    <option value="7">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="hight">Height*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/hight.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="hight"
                                                    name="hight"
                                                    placeholder="5.6'"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="weight">Weight*</label>
                                            <div class="input-area">
                                                <img
                                                    src="/assets/images/icon/weight.svg"
                                                    alt
                                                >
                                                <input
                                                    type="text"
                                                    id="weight"
                                                    name="weight "
                                                    placeholder="56"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skills-row">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title2 mb-20">
                                                    <h5>Your Skills:</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label>Special Skills*</label>
                                                    <select
                                                        class="js-example-basic-multiple "
                                                        name="states[]"
                                                        multiple="multiple"
                                                    >
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-inner">
                                            <button
                                                class="primry-btn-2 lg-btn w-unset"
                                                type="submit"
                                            >Update Change</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div
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
                                                <h6>Academic Information:</h6>
                                                <div class="dash"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label>Education Level*</label>
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
                                                <label>My Major*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/major.svg"
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
                                                        src="/assets/images/icon/univercity.svg"
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
                                                        src="/assets/images/icon/gpa-2.svg"
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
                                                <label for="datepicker10">Starting Period*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/calender2.svg"
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
                                                <label for="datepicker11">Ending Period*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/calender2.svg"
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
                                        >Add Education+</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <button
                                            class="primry-btn-2 lg-btn w-unset"
                                            type="submit"
                                        >Update Change</button>
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
                                                <h6>Add Your Experiences</h6>
                                                <div class="dash"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="companies">Company Name*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/company-2.svg"
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
                                                        src="/assets/images/icon/designation-2.svg"
                                                        alt
                                                    >
                                                    <select class="select1">
                                                        <option value="0">Back-end developer</option>
                                                        <option value="1">Front-end developer</option>
                                                        <option value="2">Full-stack developer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-20">
                                                <label for="datepicker6">Starting Period*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/calender2.svg"
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
                                                <label for="datepicker7">Ending Period*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="/assets/images/icon/calender2.svg"
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
                                                    <label for="html5">Continuing Working Here</label>
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
                                        >Add New+ </button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <button
                                            class="primry-btn-2 lg-btn w-unset"
                                            type="submit"
                                        >Update Change</button>
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
