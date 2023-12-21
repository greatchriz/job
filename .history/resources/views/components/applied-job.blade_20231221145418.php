@props(['jobApplication' => ''])

<div class="col-lg-12 mb-30">
    <div class="job-listing-card">
        <div class="job-top">
            <div class="job-list-content">
                <div class="company-area">
                    <div class="logo">
                        <img
                            src="{{ $jobApplication->job->logo }}"
                            alt
                        >
                    </div>
                    <div class="company-details">
                        <div class="name-location">
                            <h5><a href="#">{{ $jobApplication->job->company->name }}</a></h5>
                            <p class=""><a href="#">{{ $jobApplication->job->company->location }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="job-discription">
                    <ul>
                        <li>
                            <p><span class="title">Job Title:</span>
                                {{ $jobApplication->job->title }}</p>
                            </p>
                        </li>
                        <li>
                            <p><span class="title">Salary:</span>
                                {{ $jobApplication->job->salary }}</p>
                            </p>
                        </li>
                    </ul>
                </div>

                {{-- user details --}}

                <div class="job-discription">
                    <ul>
                        <li>
                            <p><span class="title">Applicant Name:</span>
                                {{ $jobApplication->user->name }}
                            </p>
                        </li>
                        <li>
                            <p><span class="title">Applicant Email:</span>
                                {{ $jobApplication->user->email }}</p>
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
                @if($jobApplication->status == 'pending')
                    <span class="bg-warning text-white">Pending</span>
                @elseif($jobApplication->status == 'rejected')
                    <span class="bg-danger text-white">Rejected</span>
                @else
                    <span class="bg-success text-white">Accepted</span>
                @endif

            </div>

            <form
                action="/job-applications/{{ $jobApplication->id }}/update"
                method="POST"
                id="{{ $jobApplication->id }}"
                hidden
            >
                @csrf
                @method('PUT')


            </form>

            <div class="apply-btn">
                <a
                    href="#"
                    onclick="event.preventDefault(); document.getElementById('{{ $jobApplication->id }}').submit();"
                ><span><img
                            src="/assets/images/icon/apply-ellipse.svg"
                            alt
                        ></span>Accept</a>
            </div>

            <div class="apply-btn">
                <a href="job-details.html"><span><img
                            src="/assets/images/icon/apply-ellipse.svg"
                            alt
                        ></span>Reject</a>
            </div>
        </div>
    </div>
</div>
