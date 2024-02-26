<div class="col-lg-12 mb-30">
    <div class="job-listing-card">
        <div class="job-top">
            <div class="job-list-content">
                <div class="company-area">
                    <div class="logo">
                        <img
                            src="{{ $job->companyLogo }}"
                            alt>
                    </div>
                    <div class="company-details">
                        <div
                            class="name-location">
                            <h5><a
                                    href="/jobs/{{ $job->id }}">{{ $job->title }}</a></h5>
                            <p><a
                                    href="/jobs/{{ $job->id }}">{{ $job->companyName }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="job-discription">
                    <ul>
                        <li>
                            <p><span
                                    class="title">Salary:</span>
                                {{ $job->salary }} /
                                <span
                                    class="time">Per
                                    Year</span></p>
                        </li>
                        <li>
                            <p><span
                                    class="title">Deadline:</span>
                                {{ $job->deadline }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bookmark">
                <i class="bi bi-bookmark-fill"></i>
            </div>
        </div>
        <div class="job-type-apply">
            <div class="job-type">
                <span class="light-green">Full
                    Time</span>
                <span class="light-purple">Part
                    Time</span>
                <span class="light-blue">Remote</span>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
