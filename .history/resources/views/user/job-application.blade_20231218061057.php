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
                    <i class="icon icon-user-2"></i>
                    <h5>Job Title:</h5>
                    <span>{{ $job->title }}</span>
                  </li>
                  <li>
                    <i class="icon icon-user-2"></i>
                    <h5>Company Name:</h5>
                    <span>{{ $job->companyName }}</span>
                  </li>
              <li>
                <i class="icon icon-calendar"></i>
                <h5>Date Posted:</h5>
                <span>{{ \Carbon\Carbon::parse($job->postedDate)->diffForHumans() }}</span>
              </li>
              <li>
                <i class="icon icon-expiry"></i>
                <h5>Offer Expiration date:</h5>

                <span>{{ \Carbon\Carbon::parse($job->deadline)->diffForHumans() }}</span>
              </li>
              <li>
                <i class="icon icon-location"></i>
                <h5>Location:</h5>
                <span>{{ $job->jobLocation }}</span>
              </li>
              <li>
                <i class="icon icon-salary"></i>
                <h5>Salary:</h5>
                <span>{{ $job->salary }}</span>
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

            <form class="default-form" action="{{ route('job-applications.store') }}"
            method="POST"
            enctype="multipart/form-data">

                @csrf

                <input type="hidden" name="job_id" value="{{ $job->id }}">

                <div class="uploading-outer">
                    <div class="uploadButton">
                        <input class="uploadButton-input" type="file" name="cv" id="upload">
                        <label class="uploadButton-button ripple-effect" for="upload">CV</label>
                        <span class="uploadButton-file-name"></span>
                    </div>
                    <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</div>

                    @error('cv')
                    <div class="message-box error">
                        <p>{{ $message }}</p>
                        <button class="close-btn"><span class="close_icon"></span></button>
                      </div>
                    @enderror
                </div>

                <div class="uploading-outer">
                    <div class="uploadButton">
                        <input class="uploadButton-input" type="file" name="application_letter"  id="application_letter" name="application_letter"/>
                        <label class="uploadButton-button ripple-effect" for="application_letter">Application Letter</label>
                        <span class="uploadButton-file-name"></span>
                    </div>
                    <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</div>

                    @error('application_letter')
                    <div class="message-box error">
                        <p>{{ $message }}</p>
                        <button class="close-btn"><span class="close_icon"></span></button>
                      </div>
                    @enderror
                </div>

                <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                        <button type="submit" class="theme-btn btn-style-one">Submit Application</button>
                      </div>
                </div>

            </form>

          </div>

        </div>
      </div>
    </div>
</div>

@endsection
