@props(['formInput' => ''])

<div class="col-lg-12 mb-30">
    <div class="job-listing-card">
        <div class="job-top">
            <div class="job-list-content">
                <div class="company-area">
                    <div class="logo">
                        <img
                            src="{{ $formInput->icon }}"
                            alt
                        >
                    </div>
                    <div class="company-details">
                        <div class="name-location">
                            <h5><a href="/admin/form-inputs/{{ $formInput->id }}/edit">{{ $formInput->label }}</a></h5>
                            <p><a href="/admin/form-inputs/{{ $formInput->id }}/edit">{{ $formInput->type }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="job-discription">
                    <ul>
                        <li>
                            <p><span class="title">Salary:</span> $20K-$50K / <span class="time">Per Month</span></p>
                        </li>
                        <li>
                            <p><span class="title">Deadline:</span> 05 April, 2023</p>
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
                <span class="light-green">Full Time</span>
                <span class="light-purple">Part Time</span>
                <span class="light-blue">Remote</span>
            </div>
            <div class="apply-btn">
                <a href="/admin/form-inputs/{{ $formInput->id }}/edit"><span><img
                            src="/assets/images/icon/apply-ellipse.svg"
                            alt
                        ></span>Edit Input</a>
            </div>
        </div>
    </div>
</div>
