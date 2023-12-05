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
                                    <input type="text" name="job_id" value="{{ $jobWithCompany->id }}" hidden>

                                    <div class="col-md-6">


                                            <div class="form-group files mb-25">
                                              <label>Upload Your CV </label>
                                              <input type="file" class="form-control" multiple="" name="cv">
                                            </div>

                                    </div>

                                    <div class="col-md-6">


                                        <div class="form-group files mb-25">
                                          <label>Upload Your Application Letter </label>
                                          <input type="file" class="form-control" name="application_letter">
                                        </div>

                                </div>
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
