@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>Hello {{ $user->name }},</h3>
    <div class="text">Ready to jump back in?</div>
</div>

@endsection


@section('content')
<div class="row">
    <div class="col-lg-12">
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
