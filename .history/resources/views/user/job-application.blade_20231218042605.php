@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <!--this is a job Application Form -->
    <h4> Apply for {{ $job->title }}</h4>
    <div class="text">
        Fill this form to apply for this job.
    </div>
</div>

@endsection


@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="job-overview-two" style="background: #ffffff; border-radius: 8px; box-shadow: 0px 6px 15px rgba(64, 79, 104, 0.05);">
            <h4>Job Details</h4>
            <ul>
              <li>
                <i class="icon icon-calendar"></i>
                <h5>Date Posted:</h5>
                <span>{{ $job->jobDate }}</span>
              </li>
              <li>
                <i class="icon icon-expiry"></i>
                <h5>Expiration date:</h5>
                {{-- add random months from the created_at date column --}}

                @php
                    $randomMonths = rand(1, 9);
                @endphp

                    {{ $job->created_at->addMonth($rabdomMonths) }}

                <span>{{ April 06, 2021 }}</span>
              </li>
              <li>
                <i class="icon icon-location"></i>
                <h5>Location:</h5>
                <span>London, UK</span>
              </li>
              <li>
                <i class="icon icon-user-2"></i>
                <h5>Job Title:</h5>
                <span>Designer</span>
              </li>
              <li>
                <i class="icon icon-clock"></i>
                <h5>Hours:</h5>
                <span>50h / week</span>
              </li>
              <li>
                <i class="icon icon-rate"></i>
                <h5>Rate:</h5>
                <span>$15 - $25 / hour</span>
              </li>
              <li>
                <i class="icon icon-salary"></i>
                <h5>Salary:</h5>
                <span>$35k - $45k</span>
              </li>
            </ul>
          </div>

      <!-- Ls widget -->
      <div class="ls-widget">
        <div class="tabs-box">
          <div class="widget-title">
            <h4>My Profile</h4>
          </div>

          <div class="widget-content">

            <div class="uploading-outer">
              <div class="uploadButton">
                <input class="uploadButton-input" type="file" name="attachments[]" accept="image/*, application/pdf" id="upload" multiple />
                <label class="uploadButton-button ripple-effect" for="upload">Browse Logo</label>
                <span class="uploadButton-file-name"></span>
              </div>
              <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</div>
            </div>

          </div>

        </div>
      </div>
    </div>
</div>

@endsection
